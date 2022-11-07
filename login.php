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
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }
		

		if(!empty($name) && !empty($password) && !is_numeric($name))
		{

			//read from database
			$query = "select * from users where name = '$name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['id'] = $user_data['id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
                        <h2>LOGIN</h2>
                        <form action="login.php" method="POST">
                            <input type="name" name="name" class="input-box" placeholder="Your name" required>
                            <input type="password" name="password" class="input-box" placeholder="password" required>
                            <button type="submit" class="submit-btn">submit</button>
                            <input type="checkbox"><span>Remember Me</span>
                        </form>
                        <a href="register.php" class="btn">I'm new here</a>
                        <a href="">Forgot Password</a>
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