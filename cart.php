<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YummyBakery</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="" class="logo">YummyBakery</a>
        </div>
        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#About">About</a>
            <a href="#Menu">Menu</a>
            <a href="#Gallery">Gallery</a>
            <a href="#Contact Us">Contact Us</a>
            <a href="login.php">Sign Up</a>
        </nav>
        <img src="asset/Images/cart.png" alt="" width="30px" height="30px">
        <img src="asset/Images/toggle.png" alt="" width="30px" height="30px" class="toggle" onclick="menutoggle()">
    </header>
</body>
</html>

<?php
  session_start();
  
  include("/back/connect.php");
  include("/fan/auto.php");

  if(isset($_POST['register_btn']))
  {
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

    if($password == $cpassword)
    {
        $insert_query = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
        $result = mysqli_query($con,$insert_query);

        if($result)
        {
            $_SESSION['message'] = "Registered successfully";
            header('Location: login.php');
        }
        else
        {
            $_SESSION['message'] = "something when wrong";
            header('Location: register.php');  
        }
    }
    else
    {
        $_SESSION['message'] = "Passwords do not match";
        
    }
  }


?>