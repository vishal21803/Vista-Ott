<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin"){

include("header.php");


?>



<main>
       <?php
        include("adminmenu.php");
       ?>
</main>


<?php
}
else{
    include("home.php");

}

?>







