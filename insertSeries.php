<?php

$a=$_REQUEST["cname"];
$b=$_REQUEST["clanguage"];
$c=$_REQUEST["crelease"];
$d = implode(",", $_POST["genre"]);
$e=$_REQUEST["rating"];
$f=$_REQUEST["cdesc"];
$g=$_FILES["cthumbnail"];
$h=$_REQUEST["cstudio"];
$j=$_REQUEST["cregion"];
$k=$_REQUEST["seasonCount"];



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

mysqli_query($con,"insert into content_info(cname,clang,crelease,cgenre,crating,cdesc,cimg,cstudio,ctype,cregion,cseason) values('$a','$b','$c','$d','$e','$f','$img','$h','Series','$j','$k')");



header("location:seriesform.php?status=1");



?>