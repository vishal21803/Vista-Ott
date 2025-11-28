<?php @session_start();


$user=$_SESSION["uname"];
include("connectdb.php");

mysqli_query($con,"update subscriber_info set subpayment='canceled' where subname='$user'");

header("location:purchaseHistory.php");



?>