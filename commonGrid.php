<?php

  while($row=mysqli_fetch_array($rsMovie))
       {
          $img=$row["cimg"];
            $id=$row["cid"];
      $lang=$row["clang"];
      $desc=$row["cdesc"];
      $release=$row["crelease"];
      $rating=$row["crating"];

     
      echo("<div id='movie-card'>");
        
        echo("<div class='child'><a href=''><img src='collection/$img' class='movie-poster' ></a></div>");

           echo("<div class='movie-hover'>");
           
           $verify=mysqli_query($con,"select * from watch_info where wcontent='$id' ");
            
            echo("<a href='planVerfication.php?cid=$id'>");  
           
           
            echo("<div id='playbutton'>");
           echo("<span >Watch Now&nbsp;</span><i class='bi bi-play '></i>" );
  echo("</div>");
  echo("</a>");

           echo("<div id='wlistbutton'>");
           if (mysqli_fetch_row($verify) > 0) {
                echo("<i class='bi bi-check bookmark-icon active ' data-id='$id'></i>");
            } else {
                echo("<i class='bi bi-bookmark bookmark-icon' data-id='$id'></i>");
            }
  echo("</div>");
  echo("</a>");

           echo("<h6 id='hover1'>");
           
           echo("<span>");
           echo($lang."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$release."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rating);
          echo("</span>");
           echo("<br>");
           echo("<br>");
           echo("<p>");
          echo($desc);
          echo("</p>");
           echo("</h6>");
          

                   

                      
         



           echo("</div>");

           echo("</div>");


   
       }
?>

