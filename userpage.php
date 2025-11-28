<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user"){

include("header.php");


?>



<main>
       <?php
        include("usermenu.php");
       ?>
</main>


<?php

}
else{
    include("home.php");

}

?>







