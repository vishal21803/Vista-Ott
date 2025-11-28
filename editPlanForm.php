<?php  @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin"){

include("header.php");


?>



<main>

<?php
include("adminmenu.php");

?>
  
         <?php
             if(isset($_REQUEST["status"])){
               echo("<div id='respondadmin'>");
                      
                    if($_REQUEST["status"]==7){
                        echo("Your Plan details has been Updated.");
                    }
                    
                    echo("</div>");

             }
              
     include("connectdb.php");
     $a=$_REQUEST["sid"];
     $rsSub=mysqli_query($con,"select * from subscription_info where sid='$a'");
     while($row=mysqli_fetch_array($rsSub)){
        $id=$row["sid"];
           $price=$row["sprice"];
           $details=$row["sdetails"];
           $duration=$row["sduration"];
           $devicename=$row["sdevicename"];
           $device=$row["sdevice"];
           $name=$row["sname"];
     }

     
      $selectedDevice = array_map('trim', explode(',', $devicename));
      $allDevice = ["Mobile","Laptop","Tablet","T.V."];
         ?>

 <div class="container mt-5 loginform registrationForm">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="registrationForm" action="updatePlan.php?sid=<?php echo($id);?>" method="POST">
                             <div class="form-group">
                                <label for="name">
                                    Name:
                                </label>
                                <input type="text" name="sname"
                                       class="form-control" 
                                       id="name" 
                                       placeholder="" value="<?php echo($name);?>" required />
                            </div>
                            <div class="form-group">
                                <label for="name">
                                    Amount:
                                </label>
                                <input type="text" name="sprice"
                                       class="form-control" 
                                       id="name" 
                                       placeholder="" value="<?php echo($price);?>" required />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Details
                                </label>
                                <input type="text" name="sdetails"
                                       class="form-control" 
                                       id="email" 
                                       placeholder="" value="<?php echo($details);?>" required />
                            </div>

                            <div class="form-group">
                                <label for="phone">
                                    Duration:
                                </label>
                                <input type="text" name="sduration"
                                       class="form-control" 
                                       id="phome" 
                                       placeholder="" value="<?php echo($duration);?>" required />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Devices:
                                </label>
                                <input type="text" name="sdevice"
                                       class="form-control" 
                                       id="password" 
                                       placeholder=""
                                value="<?php echo($device);?>"    required />
                            </div>
                            <div class="form-group co">

    <label>Select Devices:</label>
    <br>
    <br>
    <?php
  foreach ($allDevice as $g) {
      $checked = in_array($g, $selectedDevice) ? "checked" : "";
      echo "<label><input type='checkbox' name='devices[]' value='$g' $checked> " . $g . "</label> &nbsp;&nbsp;";
  }
  ?>
    
    </div>
                            <button class="btn btn-success">
                                Update
                            </button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
}else{
    include("home.php");
}

?>
