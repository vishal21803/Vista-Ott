<?php

include("loginHeader.php");


?>



<main>
  
         <?php
            //  if(isset($_REQUEST["status"])){
            //    echo("<div id='respond'>");
                      
            //         if($_REQUEST["status"]==1){
            //             echo("You can Login Now.");
            //         }
                    
            //         echo("</div>");
            //  }
         ?>

 <div class="container mt-5 loginform">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="registrationForm" action="insertUser.php" method="get">
                            <div class="form-group">
                                <label for="name">
                                    Name
                                </label>
                                <input type="text" name="uname"
                                       class="form-control" 
                                       id="name" 
                                       placeholder="Name" required />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email
                                </label>
                                <input type="email" name="uemail"
                                       class="form-control" 
                                       id="email" 
                                       placeholder="Email" required />
                            </div>

                            <div class="form-group">
                                <label for="phone">
                                    Phone Number
                                </label>
                                <input type="tel" name="uphone"
                                       class="form-control" 
                                       id="phome" 
                                       placeholder="e.g:1111000010" required />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Create Password
                                </label>
                                <input type="password" name="upassword"
                                       class="form-control" 
                                       id="password" 
                                       placeholder="Password"
                                    required />
                            </div>
                            <button class="btn btn-danger">
                                Register
                            </button>
                        </form>
                        <p class="mt-3">
                            Already a User?
                            <a href="loginForm.php">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>







