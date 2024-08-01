<?php
require_once("../config2.php");
if (isset($_POST['add'])){
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $date = $_POST['date'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $login = $_POST['login'];
  $password = $_POST['password'];
    
    $sql = "INSERT INTO `users`.`register`(`name`,`surname`,`date`, 
	`email`,`gender`,`login`,`password`)
	VALUES
	('$name',	'$surname', '$date','$email','$gender',
  '$login','$password');";

$result = mysqli_query($conn, $sql);

}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Google Font: Source Sans Pro 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <form action="add.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="surname" class="form-control" placeholder="Surname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-astronaut"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" name="date" class="form-control" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-fa-voicemail"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-append">
            <select name="gender"> 
                <option value="male">Male</option>
                <option value="female">Female</option>
            <select>
            <div class="input-group-text">
              <span class="fas fa-yelp"></span>
            </div>
          </div>
        </div>
        
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="login" class="form-control" placeholder="Login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="add" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <!-- /.social-auth-links -->

      
    <!-- /.login-card-body -->
  </div>
</
</body>
</html>