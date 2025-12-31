<?php
include 'connection.php';

$fname = $_POST['f'];
$email = $_POST['e'];

$sql = "insert into stutbl(firstname, email) values ('$fname', '$email')";
if(mysqli_query($conn, $sql)){
    echo "Student Added Successfully!";
} else {
    echo "Error!";
}
?>