<?php @session_start();

$a=$_REQUEST["uname"];
$b=$_REQUEST["uemail"];
$c=$_REQUEST["uphone"];
$d=$_REQUEST["upassword"];
$usr=$_SESSION["uname"];

include("connectdb.php");

mysqli_query($con,"update user_info set uname='$a',uemail='$b',uphone='$c',upassword='$d' where uname='$usr' ");



header("location:EditProfile.php?status=1");


?>