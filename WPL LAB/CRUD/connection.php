<?php
$conn=new mysqli("localhost","root","","studentdb");
if(!$conn){
   // echo "Database Connection is Successfull";
   die(mysqli_error($conn));
}


