
<?php @session_start();
if (isset($_SESSION["uname"]) && ($_SESSION["utype"] == "admin" || $_SESSION["utype"] == "user")) {

include("header.php");


?>



<main>
    
    <section id="bparent">
      <section id="banner">
            <img src="contentimg/pbanner.jpg" alt="">
      </section>
      </section>
    <section id="outerdplus">

        <div id="parent">

        <?php
        include("connectdb.php");

          $rsMovie=mysqli_query($con,"select * from content_info where cgenre like '%animation%' AND cstudio like '%pixar%'" );
             include("commonGrid.php");

        
        
        
        ?>
       

    </div>
      </section>
</main>


<?php
include("footer.php");
}
else{
    include("home.php");

}

?>







