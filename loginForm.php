<?php

include("loginHeader.php");


?>



<main>
      <?php
    //   if(isset($_REQUEST["regmsg"])){
    //     echo("<div id=respond2>");
        
    //     if($_REQUEST["regmsg"]==1){
     
    //        echo("Invalid UserName");
    //     }
          
    //     if($_REQUEST["regmsg"]==2){
     
    //         echo("Invalid Password");
    //     }
    //   echo("</div>");
        
    //   }
     
     ?>
       <div class="container mt-5 loginform">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="registrationForm" action="checkLogin.php" method="post">
                            <div class="form-group">
                                <label for="email">
                                    Username
                                </label>
                                <input type="text" name="uname"
                                       class="form-control" 
                                       id="email" 
                                       placeholder="Email/Username" required />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Password
                                </label>
                                <input type="password" name="upassword"
                                       class="form-control" 
                                       id="password" 
                                       placeholder="Password"
                                    required />
                            </div>
                            <button class="btn btn-danger">
                                Login
                            </button>
                        </form>
                        <p class="mt-3">
                            Not registered?
                            <a href="regis.php" style="text-decoration:none;">Create an
                                account</a>
                        </p>
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

<?php if(isset($_REQUEST["regmsg"])) { ?>

<script>
let status = "<?php echo $_REQUEST['regmsg']; ?>";
let message = "";

switch(status) {
    case "1":
        message = "Invalid Username";
        break;
    
    case "2":
        message = "Invalid Password";
        break;

    default:
        message = "Something went wrong. Please try again.";
}

document.getElementById("modalBody").innerHTML = message;

var myModal = new bootstrap.Modal(document.getElementById('myModal'));
myModal.show();

</script>

<?php } ?>





