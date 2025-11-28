
<?php @session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disney+</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link rel="stylesheet" href="./bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="./bootstrap.bundle.min.js"></script>

<script src="jquery-3.7.1.min.js"></script>
  <script src="script.js">
  
  
  
  </script>



</head>
<body>
<header id="s1">
  
   
   <nav class="navbar navbar-expand-lg navbar-custom" id="menu">
  <a class="navbar-brand" href="">
    <img src="images/PikPng.com_the-walt-disney-company_4820066.png" style="width:95px; height:55px;">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <!-- ✅ LEFT SIDE MENU -->
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active"><a class="nav-link" href="index.php"><i class="bi bi-house"></i> Home</a></li>
      <li class="nav-item"><a class="nav-link" href="loginForm.php"><i class="bi bi-search"></i> Search</a></li>
      <li class="nav-item"><a class="nav-link" href="loginForm.php"><i class="bi bi-plus"></i> Watchlist</a></li>
      <li class="nav-item"><a class="nav-link" href="loginForm.php"><i class="bi bi-grid"></i> Categories</a></li>
      <li class="nav-item"><a class="nav-link" href="loginForm.php"><i class="bi bi-film"></i> Movies</a></li>
      <li class="nav-item"><a class="nav-link" href="loginForm.php"><i class="bi bi-tv"></i> Series</a></li>

    </ul>
    <!-- ✅ END LEFT MENU -->


    <!-- ✅ RIGHT SIDE MENU -->
    <ul class="navbar-nav ml-auto">

      <?php 
      @session_start();
      include("connectdb.php");

      if(isset($_SESSION['uname']) && isset($_SESSION['utype'])) {

          if($_SESSION['utype'] == 'admin') {
              echo "
              <li class='nav-item'>
                <a class='nav-link' href='adminpage.php'>
                  <i class='bi bi-person'></i> MySpace
                </a>
              </li>";
          }

          else if($_SESSION['utype'] == 'user') {
              echo "
              <li class='nav-item'>
                <a class='nav-link' href='userpage.php'>
                  <i class='bi bi-person'></i> MySpace
                </a>
              </li>";
          }

      } else {
          echo "
          <li class='nav-item'>
            <a class='nav-link' href='loginForm.php'>
              <i class='bi bi-person'></i> Login
            </a>
          </li>";
      }
      ?>

    </ul>
    <!-- ✅ END RIGHT MENU -->

  </div>
</nav>

   
    </header>