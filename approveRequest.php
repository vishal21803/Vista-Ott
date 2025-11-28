<?php @session_start();
$usr=$_SESSION["uname"];
include("connectdb.php");
$a=$_REQUEST["rid"];
$r1=mysqli_fetch_array(mysqli_query($con,"select * from request_info  where rid='$a'"));
$username=$r1["ruser"];
$planid=$r1["rsub"];


mysqli_query($con,"update request_info set rstatus='accepted' where rid='$a'");
$r3=mysqli_fetch_array(mysqli_query($con,"select * from wallet_info where wname='$username' "));
$balance=$r3["wamount"];
$r2=mysqli_fetch_array(mysqli_query($con,"select * from subscription_info  where sid='$planid' "));

$planduration=$r2["sduration"];
$planname=$r2["sname"];
$planprice=$r2["sprice"];
echo($planprice);




$start_date=date('y-m-d');
$end_date=date('y-m-d',strtotime("+$planduration months"));

$newBal=($balance-$planprice);


mysqli_query($con,"update wallet_info set wamount='$newBal' where wname='$username'");
mysqli_query($con,"insert into subscriber_info(subname,splan,start_date,end_date,status,subpayment) values('$username','$planid','$start_date','$end_date','active','ON')");

header("location:manageSub?status=1");






?>