<?php @session_start();
if (isset($_SESSION["uname"]) && ($_SESSION["utype"] == "admin" || $_SESSION["utype"] == "user")) {

include("header.php");


?>



<main>
    <section id="bparent">
      <section id="banner">
            <img src="contentimg/mbanner.jpg" style="width:100%; height: 120%;" alt="">
      </section>
      </section>

      <div id="peo">

      </div>
</main>


<?php
include("footer.php");
}
else{
    include("home.php");

}

?>







