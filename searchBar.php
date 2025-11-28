<?php 
@session_start();
if (isset($_SESSION["uname"]) && ($_SESSION["utype"] == "admin" || $_SESSION["utype"] == "user")) {

include("header.php");
include("connectdb.php");
?>

<main>
 <nav class="search-navbar py-3">
  <div class="container-fluid d-flex ">
    <form class="d-flex search-form" onsubmit="return false;">
      <input class="form-control me-2" type="search" id="txtSearch" placeholder="Search" aria-label="Search" onkeyup="loadData();">
      <button class="btn btn-outline-success" type="button" onclick="loadData();">Search</button>
    </form>
  </div>
</nav>


  <div id="parent2">
  </div>
</main>

<script>
function loadData(){
  var x = document.getElementById("txtSearch").value;

  if(x.length >= 1){
    var xml = new XMLHttpRequest();

    xml.onreadystatechange = function(){
      if(xml.readyState == 4 && xml.status == 200){
        document.getElementById("parent2").innerHTML = xml.responseText;
      }
    }

    xml.open("GET", "searching.php?sd=" + x, true);
    xml.send();
  }
  else{
    document.getElementById("searchResult").innerHTML = "No results Found";
  }
}
</script>

<?php
include("footer.php");
}
else{
    include("home.php");
}
?>
