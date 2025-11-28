<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin"){

include("header.php");


?>



<main>
       <?php
         if(isset($_REQUEST["status"])){
               echo("<div id='respond'>");
                      
                    if($_REQUEST["status"]==1){
                        echo("Your Request will be soon updated by our admin.");
                    }
                     else if($_REQUEST["status"]==2){
                        echo("You already have an active subscription.");
                    }
                     else if($_REQUEST["status"]==3){
                        echo("To access Content you have to purchase an Subscription Plan.");
                    }
                     else if($_REQUEST["status"]==8){
                        echo("Plan is Deleted.");
                    }
                    else if($_REQUEST["status"]==7){
                        echo("Your Plan Details has been Updated.");
                    }
                    echo("</div>");
             }
        include("adminmenu.php");
       ?>



    <div id="asubscriptions">


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
echo("<div class='asub'>");
  echo("<span id='sprice'><h1>Price:Rs.$price</h1></span>");

  echo("<span id='sname'>Plan:$name</span>");
  echo("<span id='sduration'>Duartion:$duration Months</span>");
  echo("<span id='sdevice'>Number of devices:$device</span>");
  echo("<span id='sdetails'>Benefits:$details</span>");
  echo("<span id='sdevicename'>Allowed Devices:$devicename</span><br>");
    echo("<a href='editPlanForm.php?sid=$id'>Edit</a>");
     echo("<a id='dsub' href='deleteConfirm.php?confirm=2&sid=$id' >Delete</a>");

echo("</div>");
           
     }
   
    ?>
    
    
   
    </div>





</main>


<?php
}
else{
    include("home.php");

}

?>







