
<?php @session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disney+</title>
    
  <link rel="stylesheet" href="./bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
   <link rel="stylesheet" href="./scrollTop.css">

 <link rel="stylesheet" href="style.css">

</head>
<body> 
<header id="s1">
  
 <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">

    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="images/vista.png" style="width:95px; height:65px;">
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#mynav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mynav">

      <!-- ✅ LEFT SIDE MENU -->
      <ul class="navbar-nav me-auto mt-2">

        <li class="nav-item">
          <a class="nav-link" href="home.php"><i class="bi bi-house"></i> Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="searchBar.php"><i class="bi bi-search"></i> Search</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="displayWatchlist.php"><i class="bi bi-plus"></i> Watchlist</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="displayCategories.php"><i class="bi bi-grid"></i> Categories</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="displayMovies.php"><i class="bi bi-film"></i> Movies</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="displaySeries.php"><i class="bi bi-tv"></i> Series</a>
        </li>

      </ul>

      <!-- ✅ RIGHT SIDE MENU (MYSPACE) -->
      <ul class="navbar-nav ms-auto">

        <?php 
        @session_start();

        if(isset($_SESSION['uname']) && isset($_SESSION['utype'])) {

            if($_SESSION['utype'] == 'admin') {
                echo "<li class='nav-item'>
                        <a class='nav-link' href='adminpage.php'>
                          <i class='bi bi-person'></i> MySpace
                        </a>
                      </li>";
            }
            else if($_SESSION['utype'] == 'user') {
                echo "<li class='nav-item'>
                        <a class='nav-link' href='userpage.php'>
                          <i class='bi bi-person'></i> MySpace
                        </a>
                      </li>";
            }

        } else {
            echo "<li class='nav-item'>
                    <a class='nav-link' href='loginForm.php'>
                      <i class='bi bi-person'></i> Login
                    </a>
                  </li>";
        }
        ?>

      </ul>

    </div>
  </div>
</nav>

</header>
    <script src="./bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="./jquery-3.7.1.min.js"></script>
<script src="myLibrary.js"></script>
<script src="script.js"></script>
<script src="scrollTop.js"></script>

  



   