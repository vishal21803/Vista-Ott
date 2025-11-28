<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disney+</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<script src="./jquery-3.7.1.min.js"></script>
<script src="./myLibrary.js"></script>
  <script src="script.js">
  
  
  
  </script>



</head>
<body>
  <main>

  
    <?php
    include("header.php");
    ?>

    <section id="s2">
     
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a  href="<?php 
      @session_start();
         $usr=$_SESSION["uname"];
        include("connectdb.php");
        $row=mysqli_query($con,"select * from subscriber_info where status='active' AND subname='$usr'");
        if(mysqli_num_rows($row)>0){
          echo("planVerfication.php?cid=49");
        }
        else{
            echo('planVerfication.php?status=4');

        }

      
      
      
      ?>"><img class="d-block w-100" src="images/F4.webp" alt="First slide" ></a>
    </div>
    <div class="carousel-item">
          <a  href="<?php 
      @session_start();
         $usr=$_SESSION["uname"];
        include("connectdb.php");
        $row=mysqli_query($con,"select * from subscriber_info where status='active' AND subname='$usr'");
        if(mysqli_num_rows($row)>0){
          echo("planVerfication.php?cid=48");
        }
        else{
            echo('planVerfication.php?status=4');

        }

      
      
      
      ?>">      <img class="d-block w-100" src="images/peacemaker-season-2-5120x2880-23543.jpg" alt="Second slide" >
</a>

    </div>
    <div class="carousel-item">
      <a href="<?php 
      @session_start();
         $usr=$_SESSION["uname"];
        include("connectdb.php");
        $row=mysqli_query($con,"select * from subscriber_info where status='active' AND subname='$usr'");
        if(mysqli_num_rows($row)>0){
          echo("planVerfication.php?cid=50");
        }
        else{
            echo('planVerfication.php?status=4');

        }

      
      
      
      ?>">      <img class="d-block w-100" src="images/house-of-the-dragon-series-4k-wallpaper-uhdpap.jpg" alt="Third slide" >
</a>
    </div>
     <div class="carousel-item">
      <a href="<?php 
      @session_start();
         $usr=$_SESSION["uname"];
        include("connectdb.php");
        $row=mysqli_query($con,"select * from subscriber_info where status='active' AND subname='$usr'");
        if(mysqli_num_rows($row)>0){
          echo("planVerfication.php?cid=44");
        }
        else{
            echo('planVerfication.php?status=4');

        }

      
      
      
      ?>">      <img class="d-block w-100" src="images/peakpx.jpg" alt="Fourth slide" >
</a>
    </div>

     <div class="carousel-item">
      <a href="<?php 
      @session_start();
         $usr=$_SESSION["uname"];
        include("connectdb.php");
        $row=mysqli_query($con,"select * from subscriber_info where status='active' AND subname='$usr'");
        if(mysqli_num_rows($row)>0){
          echo("displayFinal.php?cid=53");
        }
        else{
            echo('planVerfication.php?status=4');

        }

      
      
      
      ?>">      <img class="d-block w-100" src="images/Superman-2025-poster.jpg" alt="Third slide">
</a>
    </div>
     <div class="carousel-item">
      <a href="<?php 
      @session_start();
         $usr=$_SESSION["uname"];
        include("connectdb.php");
        $row=mysqli_query($con,"select * from subscriber_info where status='active' AND subname='$usr'");
        if(mysqli_num_rows($row)>0){
          echo("planVerfication.php?cid=52");
        }
        else{
            echo('planVerfication.php?status=4');

        }

      
      
      
      ?>">      <img class="d-block w-100" src="images/penguin.jpg" alt="Third slide">
</a>
    </div>

    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </section>

<br><br><br>

    <div class="row container-fluid d-flex justify-content-evenly">
<div class="col-md-3 col-xs-3 homecards mt-5 ms-4 ">
   
    <a href="displayDisney.php" >
       <video autoplay muted loop>
      <source src="images/vecteezy_neon-glow-effect-rainbow-and-a-castle-on-black-background_50543464.mp4" type="video/mp4">
    </video>
        <img src="images/dlogo.png" alt="" style="width: 100%; height: 40%; position: relative;  top:80px;">
    </a>
</div>

<div class="col-md-3 col-xs-3 homecards mt-5 ms-4">
    <a href="displayPixar.php">
         <video autoplay muted loop>
      <source src="images/pintro.mp4" type="video/mp4">
    </video>
        <img src="images/plogo.png" alt="" style="width: 100%; height: 30%; position: relative;  top:90px;">
    </a>
</div>
<div class="col-md-3 col-xs-3 homecards mt-5 ms-4">
    <a href="displayMarvel.php">
        <video autoplay muted loop>
      <source src="images/mintro.mp4" type="video/mp4">
    </video>
        <img src="images/vecteezy_marvel-transparent-png-marvel-free-png_19909604.png" alt="" id="m" style="width: 100%; height: 100%; position: relative; left: 0px; top: 0px;">
    </a>
</div>
<div class="col-md-3 col-xs-3 homecards mt-5 ms-4">
    <a href="displaySwars.php">
       <video autoplay muted loop>
      <source src="images/vecteezy_abstract-blue-light-streaks-radiating-out-from-a-central_54047752.mp4" type="video/mp4">
    </video>
        <img src="images/slogo.png" alt="" id="s" style="width: 100%; height: 95%; position: relative; left: 0px; top: 10px;">
    </a>
</div>

</div>




    
    <section id="movies">


    
<h1>Recently Watched</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php @session_start();
             $usr=$_SESSION["uname"];
       
       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select DISTINCT c.* from recen_info r,content_info c where r.ruser='$usr' AND r.recid=c.cid order by r.reid desc");
       
      include("specializedCarousel.php");
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>

  <h1>Recommended For You</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php
       
       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select * from content_info where (cgenre like '%sci-fi%' AND cstudio like '%Marvel%'   ) ");
      include("commonCarousel.php");
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>


<h1>Epic Mania</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php
       
       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select * from content_info where cgenre like '%sci-fi%' order by crelease ");
      include("commonCarousel.php");
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>

<h1>For Kids</h1>

       <section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
          <?php
       
       include("connectdb.php");
       $rsMovie=mysqli_query($con,"select * from content_info where  cgenre like '%animation%' ");
      include("commonCarousel.php");
       
       
       
       ?>
   
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>


 
       </section>


    
  </main>

  
<?php 
include("footer.php");
?>
 




</body>

  

</html>