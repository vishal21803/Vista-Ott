<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin"){

include("header.php");


?>



<main>
       <?php
        include("adminmenu.php");
       ?>

       <div id="subscriptions">
    
       <a href="seriesform.php">
        <div class="sub" style="width:200px;height:200px;text-align:center; margin-left:280px;margin-top:80px;">
           Description
        </div>
    </a>

    <a href="episodesform.php">
        <div class="sub"  style="width:200px;height:200px;text-align:center;margin-top:80px;">
            Episodes
        </div>
        </a>
   
    </div>

</main>


<?php
}
else{
    include("home.php");

}

?>







