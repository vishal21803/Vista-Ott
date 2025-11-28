<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin"){

include("header.php");


?>



<main>
       <?php
        include("adminmenu.php");
       ?>
          

       <?php
       
       include("connectdb.php");
            $rsReq = mysqli_query($con, "
            select r.rid, r.ruser, s.sname, s.sprice, s.sduration, s.sdevice, r.rdate,r.rstatus
            from request_info r
            INNER JOIN subscription_info s
            ON r.rsub = s.sid order by r.rid desc
            ");

          
       echo "<table id='histable' cellspacing='0' cellpadding='10'>";
echo "<tr>
        <th>Requested By</th>
        <th>Plan Name</th>
        <th>Amount</th>
       
        <th>Request Date</th>
        <th>Status</th>
        <th>Action</th>
        
      </tr>";

while($row = mysqli_fetch_array($rsReq)) {
  echo "<tr>";
  echo "<td>".$row['ruser']."</td>";
  echo "<td>".$row['sname']."</td>";
  echo "<td>".$row['sprice']."</td>";
  

  echo "<td>".$row['rdate']."</td>";
   echo "<td>".$row['rstatus']."</td>";
  $status=$row['rstatus'];

   if($status=="accepted" || $status=="rejected"){
     echo "<td>
         ✅
        </td>";
   }
   else{
 
  echo "<td>
          <a href='approveRequest.php?rid=".$row['rid']."' id='approve' class='approve-btn'  onclick='press(this);'>Approve</a> |
        </td>";
   }
  echo "</tr>";
}
echo "</table>";

       
       ?>


</main>


<?php
}
else{
    include("home.php");

}

?>







