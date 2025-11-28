<?php @session_start();
if (isset($_SESSION["uname"]) && ($_SESSION["utype"] == "admin" || $_SESSION["utype"] == "user")) {

include("header.php");


?>



<main>
      <section id="banner">
            <img src="contentimg/dbanner.png" alt="">
      </section>

     

    
   <div class="row container-fluid d-flex justify-content-evenly">
    <div class="col-md-3 col-6 videocards mt-4">
    <a href="displayDisney.php">
        <div class="studio-card">
            <video autoplay muted loop class="studio-video">
                <source src="images/vecteezy_neon-glow-effect-rainbow-and-a-castle-on-black-background_50543464.mp4" type="video/mp4">
            </video>

            <img src="images/dlogo.png" class="studio-logo">
        </div>
    </a>
</div>

 <div class="col-md-3 col-6 videocards mt-4">
    <a href="displayPixar.php">
        <div class="studio-card">
            <video autoplay muted loop class="studio-video">
      <source src="images/pintro.mp4" type="video/mp4">
    </video>

            <img src="images/plogo.png" class="studio-logo">
        </div>
    </a>
</div>

 <div class="col-md-3 col-6 videocards mt-4">
    <a href="displayMarvel.php">
        <div class="studio-card">
          <video autoplay muted loop class="studio-video">
      <source src="images/mintro.mp4" type="video/mp4">
    </video>

        <img src="images/vecteezy_marvel-transparent-png-marvel-free-png_19909604.png" alt="" style="width: 100%; height: 100%; position: relative; left: 0px; top: 0px;  z-index: 2;">
        </div>
    </a>
</div>

 <div class="col-md-3 col-6 videocards mt-4">
    <a href="displaySwars.php">
        <div class="studio-card">
             <video autoplay muted loop class="studio-video">
      <source src="images/vecteezy_abstract-blue-light-streaks-radiating-out-from-a-central_54047752.mp4" type="video/mp4">
    </video>
            <img src="images/slogo.png" class="studio-logo">
        </div>
    </a>
</div>
</div>

    

    
    <section id="lowerdplus">

    <section id="movies">
       <h1>Exploring Our World</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php
       
       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select * from content_info where ctype='Movie' AND cgenre like ''");
            include("commonCarousel.php");

       
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>



  <h1>Disney's Animation Mania</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php
       
       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select * from content_info where  cstudio='pixar' ");
            include("commonCarousel.php");

       
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>


 

  <h1>Disney's Live Action</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php
       
       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select * from content_info where cstudio like '%Marvel%' OR cstudio like '%star%' ");
            include("commonCarousel.php");

       
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>


 
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







