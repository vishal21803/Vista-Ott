<?php
@session_start();
$a=$_REQUEST["sid"];
$b=$_SESSION['uname'];
include("connectdb.php");

$rs=mysqli_query($con,"select * from subscriber_info where subname='$b' AND status='active'");
$rs2=mysqli_query($con,"select * from request_info where ruser='$b' AND rstatus='requested'");
$rs3=mysqli_query($con,"select wamount from wallet_info where wname='$b'");
$rs4=mysqli_query($con,"select sprice from subscription_info where sid='$a'");

 $row1=mysqli_fetch_array($rs3);
  $row2=mysqli_fetch_array($rs4);

 
$wprice=$row1["wamount"];
$sprice=$row2["sprice"];
if($sprice>$wprice){
header(header: "location:displaySubscriptions?status=6");

}

else if(mysqli_fetch_array($rs)>0){
header(header: "location:displaySubscriptions?status=2");

}

else if(mysqli_fetch_array($rs2)>1){
   header(header: "location:displaySubscriptions?status=5");

}
else{
mysqli_query($con,"insert into request_info(rsub,ruser,rdate,rstatus,rusertype) values('$a','$b',NOW(),'requested','user')");
header(header: "location:displaySubscriptions?status=1");

}









?>