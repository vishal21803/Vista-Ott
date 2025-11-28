<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user"){

include("header.php");


?>



<main>
       <?php 
 
       
       
       
       @session_start();
        include("usermenu.php");
        
        $usr=$_SESSION["uname"];

        include("connectdb.php");
        $wallet=mysqli_query($con,"select wamount from wallet_info where wname='$usr'  ");
      
        
            if(mysqli_num_rows($wallet) > 0){
                $row=mysqli_fetch_array($wallet);
                 $a=$row["wamount"];

 echo("<div id='walletinfo'><h1 >Your Account Balance is :₹$a</h1>
          
        <br>
        
        <form method='get' action='updateMoney.php'>
        Add Balance : <input type='number' name='uwallet' placeholder='Add Money' required> &nbsp; <button type='submit'>Add</button>
        </form>
        
        </div>");
            }
            else{

                mysqli_query($con,"insert into wallet_info(wname,wamount) values('$usr',0)");
        // echo("<div id='walletinfo'><h1 >Your Account Balance is : 0</h1>
          
        // <br>
        
        // <form method='get' action='insertMoney.php'>
        // Add Balance : <input type='number' name='uwallet' placeholder='Add Money' required> &nbsp; <button type='submit'>Add</button>
        // </form>
        
        // </div>");
            }
        
       ?>
 <div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Wallet</h4>
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
        message = "The amount has been credited to your account ";
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







