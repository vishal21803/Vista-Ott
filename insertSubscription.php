<?php

$a=$_REQUEST["sprice"];
$b=$_REQUEST["sdetails"];
$c=$_REQUEST["sduration"];
$d=$_REQUEST["sdevice"];
$e= implode(",", $_POST["devices"]);
$f=$_REQUEST["sname"];



include("connectdb.php");

mysqli_query($con,"insert into subscription_info(sprice,sdevice,sdetails,sduration,sdevicename,sname) values('$a','$d','$b','$c','$e','$f')");


header("location:subscriptionForm.php?status=1");

?>