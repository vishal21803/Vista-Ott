<?php
session_start();
include("connectdb.php");



$cid = $_GET['cid']; 
$user = $_SESSION['uname'];

$q = "delete from watch_info WHERE wcontent='$cid' AND wuser='$user'";
mysqli_query($con, $q);
echo "deleted"; 

?>
