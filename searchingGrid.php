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
          
          
          
            echo("<div id='searchplaybutton'>");
           echo("<span >Watch Now&nbsp;</span><i class='bi bi-play '></i>" );
  echo("</div>");
  echo("</a>");
         

 

           echo("<h6 id='hover1'>");
          
          

                   

                      
         



           echo("</div>");

           echo("</div>");


   
       }


?>

<script>



  </script>
  