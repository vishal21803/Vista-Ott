<?php
session_start();
include("connectdb.php");



$cid = $_GET['cid']; 
$user = $_SESSION['uname'];

$q = "insert into watch_info (wcontent, wuser) values ('$cid', '$user')";
mysqli_query($con, $q) ;
echo "inserted"; 
  
?>
