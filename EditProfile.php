<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user"){

include("header.php");


?>



<main>
       <?php 
        include("usermenu.php");
       ?>
         <?php
            
              $usr=$_SESSION["uname"];
            include("connectdb.php");
            $rsProfile=mysqli_query($con,"select * from user_info where uname='$usr' ");
            while($row=mysqli_fetch_array($rsProfile)){ 
                 $name=$row["uname"];
                 $phone=$row["uphone"];
                 $email=$row["uemail"];
                 $password=$row["upassword"];
            }
         ?>

 <div class="container mt-5 loginform editprofile">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="registrationForm" action="updateProfile.php" method="get">
                            <div class="form-group">
                                <label for="name">
                                    Name
                                </label>
                                <input type="text" name="uname"
                                       class="form-control" 
                                       id="name" 
                                       placeholder="Name" required value="<?php echo($name); ?>" >
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email
                                </label>
                                <input type="email" name="uemail"
                                       class="form-control" 
                                       id="email" 
                                       placeholder="Email" required value="<?php echo($email); ?>" />
                            </div>

                            <div class="form-group">
                                <label for="phone">
                                    Phone Number
                                </label>
                                <input type="tel" name="uphone"
                                       class="form-control" 
                                       id="phome" 
                                       placeholder="e.g:1111000010" required value="<?php echo($phone); ?>" />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Update Password
                                </label>
                                <input type="text" name="upassword"
                                       class="form-control" 
                                       id="password" 
                                       placeholder="Password"
                                    required value="<?php echo($password); ?>" />
                            </div>
                            <button class="btn btn-danger mt-2">
                               Update
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Profile</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body" id="modalBody"></div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</main>
<?php if(isset($_REQUEST["status"])) { ?>

<script>
let status = "<?php echo $_REQUEST['status']; ?>";
let message = "";

switch(status) {
    case "1":
        message = "Your Profile Details has been Updated.";
        break;

    default:
        message = "Something went wrong. Please try again.";
}

document.getElementById("modalBody").innerHTML = message;

var myModal = new bootstrap.Modal(document.getElementById('myModal'));
myModal.show();

</script>

<?php } ?>

<?php
}
else{
    include("home.php");

}

?>







