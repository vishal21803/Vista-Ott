<?php @session_start();
$usr=$_SESSION["uname"];

$a=$_REQUEST["uwallet"];





include("connectdb.php");

$bal=0;
$wallet=mysqli_query($con,"select wamount from wallet_info where wname='$usr'   ");
 while($row=mysqli_fetch_array($wallet)){
        
          $wal=$row["wamount"];
          $b=$a+$wal;
    }


mysqli_query($con,"update wallet_info set wamount='$b' where wname='$usr' ");


header("location:userBalance.php?status=1");

?>