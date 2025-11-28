<?php @session_start();
if (isset($_SESSION["uname"]) && ($_SESSION["utype"] == "admin" || $_SESSION["utype"] == "user")) {

include("header.php");


?>



<main>
          <div id="parent">
     
          <?php
       $b= $_SESSION['uname'];

       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select DISTINCT c.* from  watch_info w,content_info c where c.cid=w.wcontent AND wuser='$b' ");
       
       include("commonGrid.php");
       
       
       
       
       ?>
   
 

      </div>

  






 
</main>


<?php
include("footer.php");
}
else{
    include("home.php");

}

?>







