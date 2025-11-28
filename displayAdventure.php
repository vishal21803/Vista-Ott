<?php @session_start();
if (isset($_SESSION["uname"]) && ($_SESSION["utype"] == "admin" || $_SESSION["utype"] == "user")) {

include("header.php");


?>



<main>

       <h1 id="showContent">Adventure </h1>

        <div id="parent">

        <?php
        include("connectdb.php");

          $rsMovie=mysqli_query($con,"select * from content_info where cgenre like '%adventure%'" );
              include("commonGrid.php");

        
        
        ?>
        <!-- <div class="child" id="c1">1</div>
        <div class="child">2</div>
        <div class="child">3</div>
        <div class="child">4</div>
        <div class="child">5</div>
    <div class="child">6</div>
    <div class="child">7</div>
    <div class="child">8</div>
    <div class="child">9</div>
    <div class="child">10</div>
    <div class="child">11</div> -->

    </div>
</main>


<?php
include("footer.php");
}
else{
    include("home.php");

}

?>







