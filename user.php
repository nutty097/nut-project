<?php

include 'connect.php';


if(isset($_POST['submit'])){
  $name = $_POST['name']; 
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "insert into `crud` (name,email,mobile,password)
          values('$name','$email','$mobile','$password')";
  $result = mysqli_query($con,$sql);

  if($result){
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <title>Crud operation</title>
</head>

<body>
  <div class="container my-5">
    <form method="POST">
      <div class="form-group">
        <label>name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control" name="mobile" placeholder="Enter your number phone">
      </div>
      <div class="form-group">
        <label>password</label>
        <input type="text" class="form-control" name="password" placeholder="Enter your password">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Add User</button>
    </form>
  </div>

</body>

</html>