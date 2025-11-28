<?php @session_start();
include("connectdb.php");
$username=$_SESSION["uname"];
$cid=$_REQUEST["cid"];

$rs1=mysqli_query($con,"select * from subscriber_info where subname='$username' AND status='active'");

$check=mysqli_fetch_array($rs1);
if($check==0){
    header("location:displaySubscriptions.php?status=3");
}

$CURDATE=date('Y-m-d');
$end_date=$check["end_date"];
echo($end_date);

if($CURDATE > $end_date){
     header("location:displaySubscriptions.php?status=4");
}
else{
     header("location:displayFinal.php?cid=$cid&status=1");
}




?>