<?php @session_start();
if (isset($_SESSION["uname"]) && ($_SESSION["utype"] == "admin" || $_SESSION["utype"] == "user")) {

include("header.php");


?>



<main>

       <h1 id="showContent">BioGraphy </h1>

        <div id="parent">

        <?php
        include("connectdb.php");

          $rsMovie=mysqli_query($con,"select * from content_info where cgenre like '%biography%'" );
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







