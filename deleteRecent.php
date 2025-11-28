<?php
session_start();
include("connectdb.php");


$cid = $_POST["cid"];
$user = $_SESSION['uname'];

$q = "DELETE FROM recen_info WHERE recid='$cid' AND ruser='$user'";
if(mysqli_query($con, $q)){
    echo "deleted";
} else {
    echo "db_error";
}
?>
