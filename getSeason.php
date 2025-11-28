<?php
include("connectdb.php");

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $query = mysqli_query($con, "SELECT cseason FROM content_info WHERE cid='$id'");
    if($row = mysqli_fetch_assoc($query)){
        echo $row['cseason'];
    } else {
        echo "Not Found";
    }
}
?>
