<?php 
@session_start();

$con = mysqli_connect("127.0.0.1","root","") or die("connection error");
mysqli_select_db($con,"disney") or die("database error");

$CURDATE = date('Y-m-d');

if(isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];

$w = mysqli_query($con, "SELECT wamount FROM wallet_info WHERE wname='$user'");
       while($row1 = mysqli_fetch_array($w)){
        $balance = $row1["wamount"];

       


    $rs = mysqli_query($con,"SELECT * FROM subscriber_info u, subscription_info s WHERE u.splan=s.sid AND u.subname='$user'");
    while($row = mysqli_fetch_array($rs)) {

        $end_date = $row["end_date"];
        $planduration = $row["sduration"];
        $pamount = $row["sprice"];
        $status = $row["status"];
        $pay = $row["subpayment"];

        

        $updated_end_date = date('Y-m-d', strtotime("+$planduration months", strtotime($end_date)));

        // ✅ 1. If subscription inactive but balance is now enough → reactivate
        if ($status == 'inactive' && $balance >= $pamount && $pay == "OFF") {
            $newB = $balance - $pamount;
            mysqli_query($con, "UPDATE wallet_info SET wamount='$newB', wreq=0 WHERE wname='$user'");
            mysqli_query($con, "UPDATE subscriber_info SET status='active', end_date='$updated_end_date', subpayment='ON' WHERE subname='$user' AND status='inactive'");
        }

        // ✅ 2. Autopay ON, period ended, balance enough → auto-renew
        else if ($CURDATE > $end_date && $pay == "ON" && $balance >= $pamount) {
            $newB = $balance - $pamount;
            mysqli_query($con,"UPDATE wallet_info SET wamount='$newB', wreq=0 WHERE wname='$user'");
            mysqli_query($con,"UPDATE subscriber_info SET end_date='$updated_end_date' WHERE subname='$user' AND status='active'");
        }

        // ✅ 3. Autopay ON but low balance → pause (set OFF)
        else if ($balance < $pamount && $pay == "ON" && $CURDATE < $end_date) {
            mysqli_query($con,"UPDATE wallet_info SET wreq=1 WHERE wname='$user'");
            mysqli_query($con,"UPDATE subscriber_info SET subpayment='OFF' WHERE subname='$user' AND status='active'");
        }

        // ✅ 4. Autopay OFF but balance now enough before expiry → resume autopay
        else if ($balance >= $pamount && $pay == "OFF" && $status == 'active' && $CURDATE < $end_date) {
            mysqli_query($con,"UPDATE wallet_info SET wreq=0 WHERE wname='$user'");
            mysqli_query($con,"UPDATE subscriber_info SET subpayment='ON' WHERE subname='$user' AND status='active'");
        }

        // ✅ 5. Autopay OFF and expired → mark inactive
        else if ($pay == "OFF" && $CURDATE > $end_date && $status == 'active') {
            mysqli_query($con,"UPDATE subscriber_info SET status='inactive' WHERE subname='$user' AND status='active'");
        }

        // ✅ 6. Canceled plan → expire
        else if ($CURDATE > $end_date && $pay == "canceled") {
            mysqli_query($con,"UPDATE subscriber_info SET status='expired' WHERE subname='$user' AND status='active'");
        }
    }
  }
}
?>
