<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin"){

include("header.php");


?>



<main>
       <?php
        include("adminmenu.php");
       ?>
        <?php
             if(isset($_REQUEST["status"])){
               echo("<div id='respondContent'>");
                      
                    if($_REQUEST["status"]==1){
                        echo("Content is Saved.");
                    }
                    
                    echo("</div>");
             }

             include("connectdb.php");
             $cid=$_REQUEST["cid"];
             $rsMovie=mysqli_query($con,"select * from content_info where cid='$cid'");
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
      $cregion=$row["cregion"];
      $studio=$row["cstudio"];
      $genre = $row["cgenre"];

      $selectedGenres = array_map('trim', explode(',', strtolower($genre)));
      $allGenres = [
  "action","adventure","comedy","drama","romance","sci-fi","thriller","fantasy","horror","documentary","animation",
  "mystery","crime","biography","musical","family","history","war","western","sports","superhero","short","noir",
  "teen","psychological","tragedy","parody","epic","political","adventure-comedy","romantic-comedy","dark-comedy",
  "suspense","disaster","gangster","martial-arts","blood","nudity","anime","supernatural","historical-fiction",
  "space-opera","cult","road-movie","spy","biopic","coming-of-age","historical-drama"
];

       }
             ?>
       
       <section id="content">
    
                            <form id="contentForm" action="updateContent.php?cid=<?php echo($id);?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group co" >
                                        <label for="name">
                                          Content  Name
                                        </label>
                                      <input type="text" name="cname"
                                              class="form-control" 
                                              id="name" 
                                              placeholder="Name" value="<?php echo($name);?>" required />
                                    </div>
                                    <div class="form-group co">
                                        <label for="desc">
                                        Content  Description

                                        </label>
                                        <textarea name="cdesc" id=""  required  rows="5" cols="15"  class="form-control"  >
                                     <?php echo(trim($desc));?>
                                </textarea>
                                
                            </div>

                            <div class="form-group co" >
                                <label for="cthumbnail">
                                   Thumbnail
                                </label>
                                <input type="file"   name="cthumbnail"
                                       class="form-control" 
                                       id="phome" 
                                       placeholder="e.g:1111000010" value="mm.jpg" required />
                            </div>
                           

                              <div class="form-group co" >
                                  <label for="language">Select Language:</label>
                          <select name="clanguage" id="language" required>
                            <option value="<?php echo($lang);?>" selected><?php echo($lang);?></option>
                            <option value="hindi">Hindi</option>
                            <option value="english">English</option>
                            <option value="tamil">Tamil</option>
                            <option value="telugu">Telugu</option>
                            <option value="malayalam">Malayalam</option>
                            <option value="bengali">Bengali</option>
                            <option value="marathi">Marathi</option>
                            <option value="kannada">Kannada</option>
                            <option value="odia">Odia</option>
                            <option value="japanese">Japanese</option>
                            <option value="korean">Korean</option>
                          </select>

                              </div>

                              <div class="form-group co">
                              <fieldset>
                            <label>Content Rating:</label><br>

                          
                            <label><input type="radio" name="rating" value="U" <?php if($rating=="U") echo "checked";?>> U (Universal)</label>
                            <label><input type="radio" name="rating" value="UA" <?php if($rating=="UA") echo "checked";?>> UA (Parental Guidance)</label>
                            <label><input type="radio" name="rating" value="A" <?php if($rating=="A") echo "checked";?>> A (Adults Only)</label>
                            <label><input type="radio" name="rating" value="S" <?php if($rating=="S") echo "checked";?>> S (Specialized Audience)</label>

                          </fieldset>

                              </div>
                              <label for="">Select Genre:</label>
                         
                            
                            <div class="checkbox-container">
  <?php
  foreach ($allGenres as $g) {
      $checked = in_array(strtolower($g), $selectedGenres) ? "checked" : "";
      echo "<label><input type='checkbox' name='genre[]' value='$g' $checked> " . ucfirst($g) . "</label>";
  }
  ?>
</div>

                              
                            
                                                  

     <div class="form-group co" >
                                <label for="name">
                                  Release Year
                                </label>
                                <input type="text" name="crelease"
                                       class="form-control" 
                                       id="rdate" 
                                       placeholder="e.g:2024,2021,..." value="<?php echo($release);?>" required />
                            </div>



  

    
    <div class="form-group co">
     <fieldset>
  <label>Content Region:</label> &nbsp;&nbsp;

  
  <label>
    <label><input type="radio" name="cregion" value="Bollywood" <?php if($cregion=="Bollywood") echo "checked";?>> Bollywood</label>
<label><input type="radio" name="cregion" value="Hollywood" <?php if($cregion=="Hollywood") echo "checked";?>> Hollywood</label>


    </div>

                             <label for="name">
                                  Studio
                                </label>
                                <input type="text" name="cstudio"
                                       class="form-control" 
                                       id="rdate" 
                                       placeholder="e.g:Marvel,DC..." value="<?php echo($studio);?>"  />
                            </div>
                            
                              <br>
                            <button class="btn btn-danger">
                                Update
                            </button>
                        </form>
                       
                    
              
           
    </div>
       </section>
       
</main>


<?php
}
else{
    include("home.php");

}

?>







