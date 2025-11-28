<?php
include("connectdb.php");

$search = $_GET["sd"];

$rsMovie = mysqli_query($con, "SELECT * FROM content_info WHERE cname LIKE '%$search%' AND ctype='Movie' ");

if(mysqli_num_rows($rsMovie) > 0){
 echo("<table  style='height:150px;width:700px;margin-left:400px;text-align:center;'>");

 
while($row=mysqli_fetch_array($rsMovie))
       {
          $img=$row["cimg"];
          $name=$row["cname"];
            $year=$row["crelease"];
            $id=$row["cid"];
      $lang=$row["clang"];
      $desc=$row["cdesc"];
      $release=$row["crelease"];
      $rating=$row["crating"];

          echo("<tr>");
          echo("<td  style='text-align:left;'>");
          echo("$name");
          echo("</td>");
           echo("<td>");
          echo("<a href='editContentFormMovies.php?cid=$id'>Edit</a>");
          echo("</td>");

            echo("</td>");
           echo("<td>");
          echo("<a href='deleteConfirm.php?content=m&confirm=1&cid=$id'>Delete</a>");
          echo("</td>");

          echo("</tr>");
          echo("<br>");

     


   
       }

 echo("</table>");


} else {
  echo "<p style='color:white; text-align:center; width:100%;'>No results found</p>";
}
?>
