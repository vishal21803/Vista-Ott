<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user"){

include("header.php");


?>



<main>
       <?php
        
        include("usermenu.php");
       ?>



    <div id="subscriptions" class="row">


    <?php
    
     include("connectdb.php");
     $rsSub=mysqli_query($con,"select * from subscription_info");
     while($row=mysqli_fetch_array($rsSub)){
        $id=$row["sid"];
           $price=$row["sprice"];
           $details=$row["sdetails"];
           $duration=$row["sduration"];
           $devicename=$row["sdevicename"];
           $device=$row["sdevice"];
           $name=$row["sname"];
echo("<div class='sub col-lg-4'>");
  echo("<span id='sprice'><h1>Price:Rs.$price</h1></span>");

  echo("<span id='sname'>Plan:$name</span>");
  echo("<span id='sduration'>Duartion:$duration Months</span>");
  echo("<span id='sdevice'>Number of devices:$device</span>");
  echo("<span id='sdetails'>Benefits:$details</span>");
  echo("<span id='sdevicename'>Allowed Devices:$devicename</span>");
    echo("<a href='insertRequest.php?sid=$id'>Purchase</a>");
   

echo("</div>");
           
     }
        
      
    ?>
    
    
   
    </div>


<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Subscription Notice</h4>
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
        message = "Your request will be reviewed by the admin soon.";
        break;

    case "2":
        message = "You already have an active subscription.";
        break;

    case "3":
        message = "To access content, please purchase a subscription plan.";
        break;

    case "4":
        message = "You don't have any active plan. Kindly purchase a new one.";
        break;

    case "5":
        message = "You already sent a subscription request.";
        break;

    case "6":
        message = "Your wallet doesn't have enough balance to purchase this plan.";
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







