<?php @session_start();
if (isset($_SESSION["uname"]) && ($_SESSION["utype"] == "admin" || $_SESSION["utype"] == "user")) {

include("header.php");


?>



<main>   
        
         <h1 id="showContent">Studios</h1>

     
    <div class="row container-fluid d-flex justify-content-evenly">
  

<div class="col-md-3 col-xs-3 homecards mt-5 ms-4 ">
   
         <a href="displaydplus.php">
          <div id="" class="" style="height:100%">
            
       <img src="images/PikPng.com_the-walt-disney-company_4820066.png" alt="" style="width: 100%; height: 50%; position: relative ;   top:60px;">
         </div>
         </a>
</div>

<div class="col-md-3 col-xs-3 homecards mt-5 ms-4">
     
         <a href="displayhbo.php">
          <div id="" class="" style="height:100%"> 
            
      <img src="images/hbo.png" alt="" id="m" style="width: 85%; height: 35%; position: relative ;  left: 20px; top: 90px;">
         </div>
         </a>
</div>
<div class="col-md-3 col-xs-3 homecards mt-5 ms-4">
     <a href="displayparamount.php">
          <div id="" class="" style="height:100%">
           
      <img src="images/paramount.png" alt="" id="s" style="width: 100%; height: 65%; position: relative ;   top: 40px;">
         </div>
         </a>
         
</div>
<div class="col-md-3 col-xs-3 homecards mt-5 ms-4">
    <a href="displaydpeacock.php">
          <div id="" class="" style="height:100%">
           
<img src="images/peacock.png" alt="" style="width: 100%; height: 35%; position: relative ;   top: 90px;">
         </div>
         </a>
</div>
</div>

        



<h1 id="title1">Languages</h1>

  <section class="language-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="language-carousel">

  <a href="displayEnglish.php">  <div class="language-card" style="background-image: url('images/english.jpg'); ">
      <div class="overlay"></div>
      <div class="lang-info">
        <h3>English</h3>
        <p>Global Language</p>
      </div>
    </div></a>
  

    <a href="displayHindi.php"><div class="language-card" style="background-image: url('images/');">
      <div class="overlay"></div>
      <div class="lang-info">
        <h3>हिन्दी</h3>
        <p>Hindi</p>
      </div>
    </div></a>
    

    <a href="displayTamil.php"><div class="language-card" style="background-image: url('images/tamil.jpg');">
      <div class="overlay"></div>
      <div class="lang-info">
        <h3>தமிழ்</h3>
        <p>Tamil</p>
      </div>
    </div></a>
    
    
    <a href="displayTelugu.php"><div class="language-card" style="background-image: url('images/telugu.jpg');">
  <div class="overlay"></div>
  <div class="lang-info">
    <h3>తెలుగు</h3>
    <p>Telugu</p>
  </div>
</div></a>
  

   
<a href="displayKorean.php"> <div class="language-card" style="background-image: url('images/korea.jpg');">
      <div class="overlay"></div>
      <div class="lang-info">
        <h3>한국어</h3>
        <p>Korean</p>
      </div>
    </div></a>
   
<a href="displayJapanese.php"><div class="language-card" style="background-image: url('images/japanese.jpg');">
      <div class="overlay"></div>
      <div class="lang-info">
        <h3>日本語</h3>
        <p>Japanese</p>
      </div>
    </div></a>
    

  </section>

  <button class="scroll-button right">&#10095;</button>
</section>
 <h1 id="title5">Genre</h1>

<section class="genre-section">
  <button class="scroll-button left">&#10094;</button>

  <section class="genre-carousel">
    
  <a href="displayAction.php"> <div class="genre-card" style="background-image: url('images/action.jpg');">
      <div class="overlay"></div>
      <div class="genre-info"><h3>Action</h3></div>
    </div></a>
   

   <a href="displayAdventure.php">
      <div class="genre-card" style="background-image: url('images/adventure.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Adventure</h3></div>
      </div>
    </a>

    <a href="displayComedy.php">
      <div class="genre-card" style="background-image: url('images/comedy.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Comedy</h3></div>
      </div>
    </a>

    <a href="displayDrama.php">
      <div class="genre-card" style="background-image: url('images/drama.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Drama</h3></div>
      </div>
    </a>

    <a href="displayRomance.php">
      <div class="genre-card" style="background-image: url('images/romance.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Romance</h3></div>
      </div>
    </a>

    <a href="displayScifi.php">
      <div class="genre-card" style="background-image: url('images/sci-fi.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Sci-Fi</h3></div>
      </div>
    </a>

    <a href="displayThriller.php">
      <div class="genre-card" style="background-image: url('images/thriller.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Thriller</h3></div>
      </div>
    </a>

    <a href="displayFantasy.php">
      <div class="genre-card" style="background-image: url('images/fantasy.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Fantasy</h3></div>
      </div>
    </a>

    <a href="displayHorror.php">
      <div class="genre-card" style="background-image: url('images/horror.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Horror</h3></div>
      </div>
    </a>

    <a href="displayAnimation.php">
      <div class="genre-card" style="background-image: url('images/animation.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Animation</h3></div>
      </div>
    </a>

    <a href="displayCrime.php">
      <div class="genre-card" style="background-image: url('images/crime.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Crime</h3></div>
      </div>
    </a>

    <a href="displayMystery.php">
      <div class="genre-card" style="background-image: url('images/mystery.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Mystery</h3></div>
      </div>
    </a>

    <a href="displayBiography.php">
      <div class="genre-card" style="background-image: url('images/biography.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Biography</h3></div>
      </div>
    </a>

    <a href="displayMusical.php">
      <div class="genre-card" style="background-image: url('images/musical.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>Musical</h3></div>
      </div>
    </a>

    <a href="displaySuperHero.php">
      <div class="genre-card" style="background-image: url('images/sports.jpg');">
        <div class="overlay"></div>
        <div class="genre-info"><h3>SuperHero</h3></div>
      </div>
    </a>

  </section>

  <button class="scroll-button right">&#10095;</button>
</section>

    
</main>


<?php
include("footer.php");
}
else{
    include("home.php");

}

?>







