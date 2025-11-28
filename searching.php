<?php
include("connectdb.php");

$search = $_GET["sd"];

$rsMovie = mysqli_query($con, "SELECT * FROM content_info WHERE cname LIKE '%$search%' || cgenre LIKE '%$search%' || cstudio LIKE '%$search%' ");

if(mysqli_num_rows($rsMovie) > 0){
 include("searchingGrid.php");
} else {
  echo "<p style='color:white; text-align:center; width:100%;'>No results found</p>";
}
?>
