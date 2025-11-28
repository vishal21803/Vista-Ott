<?php


while($row=mysqli_fetch_array($rsMovie))
       {
          $img=$row["cimg"];
            $year=$row["crelease"];
            $id=$row["cid"];
      $lang=$row["clang"];
      $desc=$row["cdesc"];
      $release=$row["crelease"];
      $rating=$row["crating"];
if(isset($_SESSION['uname'])){
     $b= $_SESSION['uname'];
}


      echo("<div id='movie-card'>");
          echo("<a href=''><img src='collection/$img' class='movie-poster' ></a>");
        
           echo("<div class='movie-hover'>");
                       $verify=mysqli_query($con,"select * from watch_info where wcontent='$id' AND wuser='$b' ");

            echo("<a href='planVerfication.php?cid=$id'>");  
          
          
          
            echo("<div id='playbutton'>");
           echo("<span >Watch Now&nbsp;</span><i class='bi bi-play '></i>" );
  echo("</div>");
  echo("</a>");
         
    
          echo("<div id='wlistbutton'>");
          
        if (mysqli_fetch_row($verify) > 0) {
            echo("<i class='bi bi-check bookmark-icon active' data-id='$id'></i>");
        } else {
            echo("<i class='bi bi-bookmark bookmark-icon' data-id='$id'></i>");
        }


           
  echo("</div>");
 

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

<script>



  </script>
  