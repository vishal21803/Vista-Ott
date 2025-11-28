<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin"){

include("header.php");


?>



<main>
       <?php
        include("adminmenu.php");
       ?>
       <div id="delConfirm">
       <h1>Are you sure Want to Delete</h1><br>
       <?php 
              $c1=$_REQUEST["confirm"];
              
     
       if(isset($_REQUEST["cid"] )&& isset($_REQUEST["content"])){
              $a=$_REQUEST["cid"];
              $content=$_REQUEST["content"];
              if( $c1==1 && $content=='m'){
      
     
        echo("<a href='deleteContent.php?content=$content&cid=$a'>Yes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='manageSearchBarMovies.php'>No</a>");
              }
       else if( $c1==1 && $content=='s'){
                      echo("<a href='deleteContent.php?content=$content&cid=$a'>Yes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='manageSearchBarSeries.php'>No</a>");

       }
}
       else if(isset($_REQUEST["sid"] )&& $c1==2){
               $b=$_REQUEST["sid"];

         echo("<a href='deletePlan.php?sid=$b'>Yes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='managePlans.php'>No</a>");

       }
       
      
       ?>
       </div>
       
</main>


<?php
}
else{
    include("home.php");

}

?>







