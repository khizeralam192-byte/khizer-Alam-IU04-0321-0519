Home.php

<?php
include 'connection.php';
if(isset($_POST['btn'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $course=$_POST['pos'];
    $sql = "insert into stutbl(firstname,lastname,email,pos) values ('$fname','$lname','$email','$course')";
    $result = mysqli_query($conn,$sql);

    if($result) {
       // echo "Data Inserted Successfully";
       header('location:display.php');
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
        <form>
  <div class="mb-3">
    <label  class="form-label">First Name</label>
    <input type="text" name="fname" class="form-control" placeholder="Enter the Student First Name" autocomplete="off">
  </div>
   <div class="mb-3">
    <label  class="form-label">Last Name</label>
    <input type="text" name="lname" class="form-control" placeholder="Enter the Student Last Name" autocomplete="off">
  </div>
   <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter the Student Email Address" autocomplete="off">
  </div>
    <div class="mb-3">
    <label  class="form-label">Program of Study </label>
    <input type="text" name="pos" class="form-control" placeholder="Enter the Student Program of Study" autocomplete="off">
  </div>
  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>
    </div>
   
  </body>
</html>
