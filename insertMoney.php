<?php @session_start();
$usr=$_SESSION["uname"];

$a=$_REQUEST["uwallet"];


include("connectdb.php");

mysqli_query($con,"insert into wallet_info(wname,wamount) values('$usr','$a') ");


header("location:userBalance.php?status=1");

?>