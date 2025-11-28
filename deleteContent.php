<?php

session_start();
include("connectdb.php");


$cid = $_REQUEST["cid"];
$content=$_REQUEST["content"];


$q = "DELETE FROM content_info WHERE cid='$cid' ";
mysqli_query($con, $q);

if($content=='m'){
header("location:manageSearchBarMovies.php?status=0");
}
else{
header("location:manageSearchBarSeries.php?status=0");

}
?>