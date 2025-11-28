<?php 
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disney+</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="scrollTop.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

</head>
<body>

<?php include("header.php"); ?>   

<main>

<section id="s2">


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
      <a href="loginForm.php"><img class="d-block w-100" src="images/F4.webp"></a>
    </div>

    <div class="carousel-item">
      <a href="loginForm.php"><img class="d-block w-100" src="images/peacemaker-season-2-5120x2880-23543.jpg"></a>
    </div>

    <div class="carousel-item">
      <a href="loginForm.php"><img class="d-block w-100" src="images/house-of-the-dragon-series-4k-wallpaper-uhdpap.jpg"></a>
    </div>

    <div class="carousel-item">
      <a href="loginForm.php"><img class="d-block w-100" src="images/peakpx.jpg"></a>
    </div>

    <div class="carousel-item">
      <a href="loginForm.php"><img class="d-block w-100" src="images/Superman-2025-poster.jpg"></a>
    </div>

    <div class="carousel-item">
      <a href="loginForm.php"><img class="d-block w-100" src="images/penguin.jpg"></a>
    </div>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

</section>

<h1 id="title1">Recommended for you</h1>

<section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
    <a href="loginForm.php"><img src="images/Game Of Thrones HD Wallpaper.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/Avengers-Endgame-2019-Backgrounds.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/lotr.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/the-wolf-of-wall-street-1920-x-1080-x1y33mgj7nfb472o.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/f1-the-movie-fc-1920x1080.jpg" class="movie-poster"></a>
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>


<h1 id="title2">Because You Watched Dexter</h1>

<section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
    <a href="loginForm.php"><img src="images/shutter-island-dicaprio-mystery-thriller-crime-horror.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/fight-club-5k-oe-1920x1080.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/seven.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/zodiac-movie-poster.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/nightcrwaler.jpg" class="movie-poster"></a>
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>


<h1 id="title3">New to Disney+</h1>

<section class="movie-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="movie-carousel">
    <a href="loginForm.php"><img src="images/sinners.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/thunderbbolts.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/ballerina.jpg" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/mickey17.avif" class="movie-poster"></a>
    <a href="loginForm.php"><img src="images/anora.webp" class="movie-poster"></a>
  </section>

  <button class="scroll-button right">&#10095;</button>
</section>

</main>

<?php include("footer.php"); ?>  

</body>
</html>
