<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user"){

include("header.php");


?>



<main>
       <?php
        include("usermenu.php");
       ?>

       
      <h1 id="histTitle">Payment Details</h1>
       <?php
       $usr=$_SESSION["uname"];
       include("connectdb.php");
       $rshist=mysqli_query($con,"select * from subscriber_info u,subscription_info s where u.splan=s.sid AND u.subname='$usr'");
          echo "<table id='histable' cellspacing='0' cellpadding='10'>";
echo "<tr>
        <th>Plan Details</th>
        <th>Amount</th>
       
        
        <th class='right'>Status</th>
        <th class='right'>Autopay</th>
        <th class='right'>Action</th>
        
        
      </tr>";
       while($row=mysqli_fetch_array($rshist)){
             $price=$row["sprice"];
             $planname=$row["sname"];
             $start_date=$row["start_date"];
             $end_date=$row["end_date"];
             $status=$row["status"];
             $duration=$row["sduration"];
             $pay=$row["subpayment"];
             $subname=$row["subname"];


             $payment=$row["subpayment"];
            echo("<tr>");

            echo("<td>$planname-$duration Month <br> $start_date to $end_date </td>");
            echo("<td>Rs $price</td>");
            echo("<td class='right'>$status</td>");
            echo("<td class='right'>$payment</td>");

            if($pay=='canceled' && $usr==$subname){
              echo("<td class='right'>✅</td>");
            }

            else{
            echo("<td class='right'><a href='cancelSubscription.php?'>Cancel</a></td>");
            }
            

            echo("</tr>");

       }
       ?>
</main>


<?php
}
else{
    include("home.php");

}

?>







