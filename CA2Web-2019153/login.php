<?php
/*****************************************
* This query uses the procedural interface
******************************************/

//start session
session_start();
include 'connect.php';

//Check to see if the form (login section) has been submitted
 if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$username= $_POST['username'];
$pass= $_POST['password'];

// create SQL statement
$sql = "SELECT username FROM user WHERE username='$username' and password='$pass'";

// Query database
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

// count the numbe rof records found
$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
  if($count > 0) {
      $_SESSION['login_user'] = $row['username'];
      header('Location: abstract.php');
     } else {
      $error = "Your Login Name or Password is invalid";
    }
  
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Contact Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; 
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; 
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; 
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; 
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  img {
    border-radius: 50%;
    width: 250px;
    height: 250px;
    
  }
  .navbar-nav  li a:hover {
    color: #486ce0 !important;
  }
 
  form {
    max-width: 320px;
    width: 90%;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 4px;
    color: #505e6c;
    box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
  }

  </style>
</head>
<body>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Are you Wondering how can you get to Vitoria Oliveira?</h3>
  <img 
  src= "roboto_animation_dribbble.gif"  alt="robot login"  />

  <h3>This is the Login page. 
      <br> If you would like to access this website please input you User login and password in the form bellow 
  <br><br>  
  

 <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-person"></i></div>
            <div class="form-group"><input class="form-control" type="test" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login_button">Log In</button>
    </div>
    
    </h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
        <h1>To access this webpage you must login!</h1>
        
</div>

</body>
</html>
