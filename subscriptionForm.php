<?php 

include("header.php");


?>



<main>

<?php
include("adminmenu.php");

?>
  
         <?php
             if(isset($_REQUEST["status"])){
               echo("<div id='respondadmin'>");
                      
                    if($_REQUEST["status"]==1){
                        echo("New Subscription package has been created.");
                    }
                    
                    echo("</div>");

             }
         ?>

 <div class="container mt-5 loginform registrationForm">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="registrationForm" action="insertSubscription.php" method="POST">
                             <div class="form-group">
                                <label for="name">
                                    Name:
                                </label>
                                <input type="text" name="sname"
                                       class="form-control" 
                                       id="name" 
                                       placeholder="" required />
                            </div>
                            <div class="form-group">
                                <label for="name">
                                    Amount:
                                </label>
                                <input type="text" name="sprice"
                                       class="form-control" 
                                       id="name" 
                                       placeholder="" required />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Details
                                </label>
                                <input type="text" name="sdetails"
                                       class="form-control" 
                                       id="email" 
                                       placeholder="" required />
                            </div>

                            <div class="form-group">
                                <label for="phone">
                                    Duration:
                                </label>
                                <input type="text" name="sduration"
                                       class="form-control" 
                                       id="phome" 
                                       placeholder="" required />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Devices:
                                </label>
                                <input type="text" name="sdevice"
                                       class="form-control" 
                                       id="password" 
                                       placeholder=""
                                    required />
                            </div>
                            <div class="form-group co">

    <label>Select Devices:</label>
    <br>
    <br>
    <!-- <label><input type="checkbox" name="devices[]" value="0"> </label> -->
    <label><input type="checkbox" name="devices[]" value="Mobile"> Mobile</label>
    <label><input type="checkbox" name="devices[]" value="Laptop"> Laptop</label>
        <label><input type="checkbox" name="devices[]" value="Tablet"> Tablet</label>

    <label><input type="checkbox" name="devices[]" value="T.V."> T.V</label>
  
    </div>
                            <button class="btn btn-success">
                                Add
                            </button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



