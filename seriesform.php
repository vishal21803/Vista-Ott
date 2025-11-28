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
             ?>
       
       <section id="content">
    
                            <form id="contentForm" action="insertSeries.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group co" >
                                        <label for="name">
                                          Content  Name
                                        </label>
                                      <input type="text" name="cname"
                                              class="form-control" 
                                              id="name" 
                                              placeholder="Name" required />
                                    </div>
                                    <div class="form-group co">
                                        <label for="desc">
                                        Content  Description

                                        </label>
                                        <textarea name="cdesc" id=""  required  rows="5" cols="15"  class="form-control" 
        >

                                </textarea>
                                
                            </div>

                            <div class="form-group co" >
                                <label for="cthumbnail">
                                   Thumbnail
                                </label>
                                <input type="file"   name="cthumbnail"
                                       class="form-control" 
                                       id="phome" 
                                       placeholder="e.g:1111000010" required />
                            </div>
                            <div class="form-group co">
  <label for="seasonCount">Number of Seasons:</label>
  <input type="number" id="seasonCount" name="seasonCount" min="1" class="form-control" required>
</div>

<!-- Dynamic Section for Seasons and Episodes -->
<div id="seasonsContainer"></div>

                              <div class="form-group co" >
                                  <label for="language">Select Language:</label>
                          <select name="clanguage" id="language" required>
                            <option value="" disabled selected>Select a language</option>
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

                            <label>
                              <input type="radio" name="rating" value="U" required>
                              U (Universal)
                            </label>

                            <label>
                              <input type="radio" name="rating" value="UA">
                              UA (Parental Guidance)
                            </label>

                            <label>
                              <input type="radio" name="rating" value="A">
                              A (Adults Only)
                            </label>

                            <label>
                              <input type="radio" name="rating" value="S">
                              S (Specialized Audience)
                            </label>
                          </fieldset>

                              </div>
                              <label for="">Select Genre:</label>
                          <div class="checkbox-container ">
                            

                              
                            
                              <label><input type="checkbox" name="genre[]" value="action"> Action</label>
                            <label><input type="checkbox" name="genre[]" value="adventure"> Adventure</label>
                              <label><input type="checkbox" name="genre[]" value="comedy"> Comedy</label>
                              <label><input type="checkbox" name="genre[]" value="drama"> Drama</label>
                              <label><input type="checkbox" name="genre[]" value="romance"> Romance</label>
                              <label><input type="checkbox" name="genre[]" value="sci-fi"> Sci-Fi</label>
                              <label><input type="checkbox" name="genre[]" value="thriller"> Thriller</label>
                              <label><input type="checkbox" name="genre[]" value="fantasy"> Fantasy</label>
                              <label><input type="checkbox" name="genre[]" value="horror"> Horror</label>
                              <label><input type="checkbox" name="genre[]" value="documentary"> Documentary</label>
                              <label><input type="checkbox" name="genre[]" value="animation"> Animation</label>
                              <label><input type="checkbox" name="genre[]" value="mystery"> Mystery</label>
                              <label><input type="checkbox" name="genre[]" value="crime"> Crime</label>
                              <label><input type="checkbox" name="genre[]" value="biography"> Biography</label>
                              <label><input type="checkbox" name="genre[]" value="musical"> Musical</label>
                              <label><input type="checkbox" name="genre[]" value="family"> Family</label>
                              <label><input type="checkbox" name="genre[]" value="history"> History</label>
                              <label><input type="checkbox" name="genre[]" value="war"> War</label>
                              <label><input type="checkbox" name="genre[]" value="western"> Western</label>
                              <label><input type="checkbox" name="genre[]" value="sports"> Sports</label>
                              <label><input type="checkbox" name="genre[]" value="superhero"> Superhero</label>
                              <label><input type="checkbox" name="genre[]" value="short"> Short</label>
                              <label><input type="checkbox" name="genre[]" value="noir"> Noir</label>
                              <label><input type="checkbox" name="genre[]" value="teen"> Teen</label>
                              <label><input type="checkbox" name="genre[]" value="psychological"> Psychological</label>
                              <label><input type="checkbox" name="genre[]" value="tragedy"> Tragedy</label>
                              <label><input type="checkbox" name="genre[]" value="parody"> Parody</label>
                              <label><input type="checkbox" name="genre[]" value="epic"> Epic</label>
                              <label><input type="checkbox" name="genre[]" value="political"> Political</label>
                              <label><input type="checkbox" name="genre[]" value="adventure-comedy"> Adventure-Comedy</label>
                              <label><input type="checkbox" name="genre[]" value="romantic-comedy"> Romantic-Comedy</label>
                              <label><input type="checkbox" name="genre[]" value="dark-comedy"> Dark Comedy</label>
                              <label><input type="checkbox" name="genre[]" value="suspense"> Suspense</label>
                              <label><input type="checkbox" name="genre[]" value="disaster"> Disaster</label>
                              <label><input type="checkbox" name="genre[]" value="gangster"> Gangster</label>
                              <label><input type="checkbox" name="genre[]" value="martial-arts"> Martial Arts</label>
                              <label><input type="checkbox" name="genre[]" value="Blood"> Blood</label>
                              <label><input type="checkbox" name="genre[]" value="nudity">Nudity</label>
                              <label><input type="checkbox" name="genre[]" value="anime"> Anime</label>
                              <label><input type="checkbox" name="genre[]" value="supernatural"> Supernatural</label>
                              <label><input type="checkbox" name="genre[]" value="historical-fiction"> Historical Fiction</label>
                              <label><input type="checkbox" name="genre[]" value="space-opera"> Space Opera</label>
                              <label><input type="checkbox" name="genre[]" value="cult"> Cult</label>
                              <label><input type="checkbox" name="genre[]" value="road-movie"> Road Movie</label>
                              <label><input type="checkbox" name="genre[]" value="spy"> Spy</label>
                              <label><input type="checkbox" name="genre[]" value="biopic"> Biopic</label>
                              <label><input type="checkbox" name="genre[]" value="coming-of-age"> Coming-of-Age</label>
                              <label><input type="checkbox" name="genre[]" value="historical-drama"> Historical Drama</label>
                          </div>

     <br>
     <div class="form-group co" >
                                <label for="name">
                                  Release Year
                                </label>
                                <input type="text" name="crelease"
                                       class="form-control" 
                                       id="rdate" 
                                       placeholder="e.g:2024,2021,..." required />
                            </div>





    
    <div class="form-group co">
     <fieldset>
  <label>Content Region:</label>

  
  <label>
    <input type="radio" name="cregion" value="Bollywood">
   Bollywood
  </label>

  <label>
    <input type="radio" name="cregion" value="Hollywood">
   Hollywood
  </label>

    </div>

                             <label for="name">
                                  Studio
                                </label>
                                <input type="text" name="cstudio"
                                       class="form-control" 
                                       id="rdate" 
                                       placeholder="e.g:Marvel,DC..."  />
                            </div>
                            
                              <br>
                            <button class="btn btn-danger">
                                Submit
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







