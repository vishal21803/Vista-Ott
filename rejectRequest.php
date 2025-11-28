<?php

include("connectdb.php");
$a=$_REQUEST["rid"];
mysqli_query($con,"update request_info set rstatus='rejected' where rid='$a'");


header("location:manageSub?status=1");






?>