
<?php @session_start();
if (isset($_SESSION["uname"]) && ($_SESSION["utype"] == "admin" || $_SESSION["utype"] == "user")) {

include("header.php");


?>



<main>
      <section id="banner">
            <img src="contentimg/peacock.webp"  alt="">
      </section>
      

       <section id="movies">
       <h1>Action Packed</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php
       
       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select * from content_info where cgenre like '%action%' AND cstudio like '%peacock%'");
             include("commonCarousel.php");

       
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>



  <h1>Comedy Movies</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php
       
       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select * from content_info where cgenre like '%comedy%' AND cstudio like '%peacock%' ");
            include("commonCarousel.php");

       
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>


<h1>Popular Drama</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php
       
       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select * from content_info where cgenre like '%drama%' AND cstudio like '%peacock%' ");
             include("commonCarousel.php");

       
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>




  <h1>Sci-Fi & Fantasies</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php
       
       include("connectdb.php");
       $rsMovie = mysqli_query($con, "select * from content_info 
WHERE (cgenre like '%sci-fi%' OR cgenre like '%fantasy%') 
AND cstudio like '%peacock%' ");
            include("commonCarousel.php");

       
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>


 
       </section>
</main>


<?php
include("footer.php");
}
else{
    include("home.php");

}

?>







