<?php

$a=$_REQUEST["uname"];
$b=$_REQUEST["uemail"];
$c=$_REQUEST["uphone"];

$d=$_REQUEST["upassword"];

include("connectdb.php");

mysqli_query($con,"insert into user_info(uname,uemail,uphone,upassword,utype) values('$a','$b','$c','$d','user')");


header("location:successpage.php");

?>