<?php

$a=$_REQUEST["sprice"];
$b=$_REQUEST["sdetails"];
$c=$_REQUEST["sduration"];
$d=$_REQUEST["sdevice"];
$e= implode(",", $_POST["devices"]);
$f=$_REQUEST["sname"];

$id=$_REQUEST["sid"];



include("connectdb.php");

mysqli_query($con,"update subscription_info set sprice='$a',sdetails='$b',sduration='$c',sdevice='$d',sdevicename='$e',sname='$f' where sid='$id' ");


header("location:managePlans.php?status=7");

?>