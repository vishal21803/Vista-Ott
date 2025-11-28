 
 
 <!-- <div class="list-group"> -->
  <!-- <button type="button" class="list-group-item list-group-item-action " aria-current="true">
    The current button
  </button> -->
  <!-- <button type="button" class="list-group-item list-group-item-action" ><a href="EditProfile.php" class="linkmenu" style="display:block;">Edit Profile</a></button>
  <button type="button" class="list-group-item list-group-item-action"><a href="displaySubscriptions.php" class="linkmenu" style="display:block;">Subscription </a></button>
      <button type="button" class="list-group-item list-group-item-action"><a href="purchaseHistory.php" class="linkmenu" style="display:block;">Purchase History -->



   <?php @session_start();

//    include("connectdb.php");

   
//    if(isset($_SESSION["uname"])){
// $usr=$_SESSION["uname"];
// $rs2=mysqli_query($con,"select * from subscriber_info where status='active' AND subname='$usr'  ");
// }
// $cnt;

// while($row=mysqli_fetch_array($rs2)){
//    if($row["status"]=="active"){
//      $cnt2="A";
//   }
//   else{
//          $cnt2="E";

//   }
// }
//     echo("<div id='notificationuser2'>$cnt2</div>"); 

   
   
   ?>





<!-- 
      </a></button>
  <button type="button" class="list-group-item list-group-item-action"><a style="display:block;" class="linkmenu" href="userBalance.php" >Your Wallet </a></button>

  <button type="button" class="list-group-item list-group-item-action"><a style="display:block;" class="linkmenu" href="logout.php" >LogOut </a></button>

</div> -->
<div class="container-fluid">
<div class="sidebar">
    <a href="EditProfile.php"><i class="bi bi-house"></i><span>Profile</span></a>
    <a href="displaySubscriptions.php"><i class="bi bi-braces"></i><span>Plans</span></a>
    <a href="purchaseHistory.php"><i class="bi bi-folder"></i><span>History</span></a>
    <a href="userBalance.php"><i class="bi bi-envelope"></i><span>Wallet</span></a>
     <a href="logout.php"><i class="bi bi-leaf"></i><span>LogOut</span></a>

  </div>
</div>