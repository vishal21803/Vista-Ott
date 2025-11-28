
 
 
 
 
 <div class="list-group">
  <!-- <button type="button" class="list-group-item list-group-item-action " aria-current="true">
    The current button
  </button> -->
  <button type="button" class="list-group-item list-group-item-action"><a href="addContent.php" style="display:block;">Add Content</a></button>
    <button type="button" class="list-group-item list-group-item-action"><a href="manageContent.php" style="display:block;">Manage Content</a></button>

  <button type="button" class="list-group-item list-group-item-action"><a href="subscriptionForm.php" style="display:block;">Add Plans</a></button>
    <button type="button" class="list-group-item list-group-item-action"><a href="managePlans.php" style="display:block;">Manage Plans</a></button>

    <button type="button" class="list-group-item list-group-item-action"><a href="manageSub.php" style="display:block;">Manage Subscriptions



 <?php @session_start();
 include("connectdb.php");

$rs=mysqli_query($con,"select * from request_info where rstatus='requested'  ");
$cnt=0;
while($row=mysqli_fetch_array($rs)){
  $cnt++;
}
    echo("<div id='notification2'>$cnt</div>"); 
 
 ?>
 






    </a></button>

    
  <button type="button" class="list-group-item list-group-item-action"><a style="display:block;" href="logout.php" >LogOut </a></button>

</div>
