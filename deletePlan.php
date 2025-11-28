<?php

session_start();
include("connectdb.php");


$sid = $_REQUEST["sid"];


$q = "DELETE FROM subscription_info WHERE sid='$sid' ";
mysqli_query($con, $q);

header("location:managePlans.php?status=8")

?>