<?php 
session_start();

    include("back/connect.php");
    include("fan/auto.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }
		

		if(!empty($name) && !empty($password) && !is_numeric($name))
		{

			//save to database
			$query = "insert into users (name,email,password) values ('$name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

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
            <a class="meu" href="#Home">Home</a>
            <a class="meu" href="#About">About</a>
            <a class="meu" href="#Menu">Menu</a>
            <a class="meu" href="#Gallery">Gallery</a>
            <a class="meu" href="#Contact Us">Contact Us</a>
            <a class="meu" href="logout.php">Sign Out</a>
        </nav>
    </header>


    <div class="container">
            <div class="card">
                <div class="inner-box" id="card">
                    <div class="card-front">
                        <h2>REGISTER</h2>
                        <form action="register.php" method="POST">
                            <input type="text" name="name" class="input-box" placeholder="Your Name" required>
                            <input type="email" name="email" class="input-box" placeholder="Your email address" required>
                            <input type="password" name="password" class="input-box" placeholder="password" required>
                            <input type="password" name="cpassword" class="input-box" placeholder="Confirm password" required>
                            <button type="submit" name="register_btn" class="submit-btn">submit</button>
                            <input type="checkbox"><span>Remember Me</span>
                        </form>
                        <a href="login.php" class="btn">I have an account</a>
                
                    </div>
                </div>
            </div>
        </div>





    <script>
        var card = document.getElementById("card");

        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }

        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }
    </script>
</body>
</html>    