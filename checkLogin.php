<?php @session_start();
 
 $a=$_REQUEST["uname"];
 $b=$_REQUEST["upassword"];

 include("connectdb.php");

 $rsCust=mysqli_query($con,"select * from user_info where uname='$a'  ");
 if(mysqli_num_rows($rsCust)==0){
    header("location:loginForm.php?regmsg=1");
 }
 else{
      $row=mysqli_fetch_array($rsCust);
      if($row["upassword"]==$b){
        
        $_SESSION['uname']=$a;
        
        if($row["utype"]=='user'){
            
            $_SESSION['utype']='user';
            header("location:home.php");
        }

        elseif($row["utype"]=='admin'){
            
            $_SESSION['utype']='admin';
            header("location:home.php");
        }
      }
      else{
        header("location:loginForm.php?regmsg=2");

      }


 }


?>