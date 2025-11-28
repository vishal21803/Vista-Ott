<?php @session_start();

$id=$_REQUEST["cid"];
$usr=$_SESSION["uname"];

include("connectdb.php");

mysqli_query($con,"insert into recen_info(recid,ruser) values('$id','$usr')");

// header("location:displayFinal.php?status=1");
?>