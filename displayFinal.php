<?php @session_start();
if(isset($_SESSION["uname"]) && ($_SESSION["utype"] == "admin" || $_SESSION["utype"] == "user")){

include("header.php");


?>
<?php

  $id=$_REQUEST["cid"];
  $b= $_SESSION['uname'];

        include("connectdb.php");
         $verify=mysqli_query($con,"select * from watch_info where wcontent='$id' AND wuser='$b' ");
         
        $rs=mysqli_query($con,"select * from content_info where cid='$id'");
        while($row=mysqli_fetch_array($rs)){
             $name=$row["cname"];
             $rating=$row["crating"];
             $date=$row["crelease"];
             $desc=$row["cdesc"];
             $img=$row["cimg"];
             $genre = str_replace(",", " | ", $row["cgenre"]);
             $genre = ucwords($genre);

        }

?>


<main>
      <section class="video-container">
        <?php
@session_start();

$id = $_REQUEST["cid"];
$usr = $_SESSION["uname"];

include("connectdb.php");

mysqli_query($con, "INSERT INTO recen_info (recid, ruser) VALUES ('$id', '$usr')");
?>

  <video id="movie"   poster="<?php echo("collection/$img") ?>" >
    <source src="video/Superman.mp4" type="video/mp4">
  </video>
  <a href="">
  <section class="bi bi-play-circle" id="playBtn" onclick="play(event,this);"></section>
  </a>
</section>

<section id="movieDetails">

  <div class="movie-card">
 <?php
    echo("<div id='finalwatchbutton'>");
          
        if (mysqli_fetch_row($verify) > 0) {
            echo("<i id='checkbtn' class='bi bi-check bookmark-icon active' data-id='$id'></i>");
        } else {
            echo("<i id='bookbtn' class='bi bi-bookmark bookmark-icon' data-id='$id'></i>");
        }


           
  echo("</div>");
  
  ?>
      <div class="movie-card-header">
          <h1><?php echo $name; ?></h1>
          
      </div>

      <div class="movie-meta">
          <span><?php echo $rating; ?></span> •
          <span><?php echo $date; ?></span> •
          <span><?php echo $genre; ?></span>
      </div>

      <p class="movie-desc">
          <?php echo $desc; ?>
      </p>

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







