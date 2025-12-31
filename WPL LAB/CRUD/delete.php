<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $studid= $_GET['deleteid'];
    $sql= "Delete from stutbl where id=$studid";
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:display.php');

    }
}

?>
