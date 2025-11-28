<?php

$a=$_REQUEST["cname"];
$b=$_REQUEST["clanguage"];
$c=$_REQUEST["crelease"];
$d = implode(",", $_POST["genre"]);
$e=$_REQUEST["rating"];
$f=trim($_REQUEST["cdesc"]);
$g=$_FILES["cthumbnail"];
$h=$_REQUEST["cstudio"];
$j=$_REQUEST["cregion"];

$id=$_REQUEST["cid"];

$folder = "D:\\wamp64\\www\\disney\\collection\\";

if (!file_exists($folder)) {
    mkdir($folder, 0777, true); 
}

$img = time() . "_" . basename($g["name"]);
$uploadPath = $folder . $img;

if (move_uploaded_file($g["tmp_name"], $uploadPath)) {
    echo "✅ File uploaded successfully: $img";
} else {
    echo "❌ Failed to upload file. Check folder permissions or PHP settings.";
}

include("connectdb.php");

mysqli_query($con,"update content_info set cname='$a',cdesc='$f',cimg='$img',clang='$b',crating='$e',cgenre='$d',crelease='$c',cstudio='$h',cregion='$j' where cid='$id'");



header("location:manageSearchBarMovies.php?status=1");



?>