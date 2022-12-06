<?php 
session_start();

    include("back/connect.php");
    include("fan/auto.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YummyBakery</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="asset/js/index.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
   (function(){
      emailjs.init("eh9gizaDNEL-G0OHR");
   })();
    </script>
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
            <a class="meu" class="cart" href="">Cart</a>
            <a class="meu" href="#Contact Us">Contact Us</a>
            <a class="meu" href="logout.php">Sign Out</a>
        </nav>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
           </div> 
    </header>

    <section class="home" id="Home">
        <div class="slide" style="background-image: url(asset/images/170107-food-bakery-hd-image-free.png);">
            <div class="content">
                <h3 class="head">Welcome to YummyBakery <br>We bake the real you <br>Yummy healthy products</h3>
                <a href="#Menu" class="btn">View Our Menu</a>
            </div>
            
        </div>
    </section>


    <section class="about" id="About">
        <h1 class="heading"><span>About</span>Us</h1>
        <div class="row">
            <div class="image">
                <img src="asset/Images/dessert.jpg" alt="">
            </div>
            <div class="content">
                <h2>The art of bakeing</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic in voluptas iure quo repellendus, repudiandae porro repellat. Commodi ducimus voluptatem, dolor dolorum nulla beatae veniam alias modi rerum quisquam. Obcaecati.</p>
            </div>
        </div>
    </section>

             <section class="menu" id="Menu">
                <h1 class="heading"><span>Our</span>Menu</h1>
                <div class="menu-box">
                    <div class="menu-card">
                        <div class="menu-image">
                            <img src="asset/images/bag.jpg" alt="">
                        </div>
                        <div class="menu-info">
                            <h2>Bugger</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, repellat.</p>
                            <h3>Sh 2000</h3>
                            <button class="menu-btn">Order now</button>
                        </div>
                    </div>
                    <div class="menu-card">
                        <div class="menu-image">
                            <img src="asset/images/corn.jpg" alt="">
                        </div>
                        <div class="menu-info">
                            <h2>Corn</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, repellat.</p>
                            <h3>Sh 2000</h3>
                            <a href="" class="menu-btn">Order now</a>
                        </div>
                    </div>
                    <div class="menu-card">
                        <div class="menu-image">
                            <img src="asset/images/menu3.jpeg" alt="">
                        </div>
                        <div class="menu-info">
                            <h2>Chocolate cake</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, repellat.</p>
                            <h3>Sh 2000</h3>
                            <a href="" class="menu-btn">Order now</a>
                        </div>
                    </div>
                    <div class="menu-card">
                        <div class="menu-image">
                            <img src="asset/images/bag.jpg" alt="">
                        </div>
                        <div class="menu-info">
                            <h2>Bugger</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, repellat.</p>
                            <h3>Sh 2000</h3>
                            <a href="" class="menu-btn">Order now</a>
                        </div>
                    </div>
                    <div class="menu-card">
                        <div class="menu-image">
                            <img src="asset/images/bag.jpg" alt="">
                        </div>
                        <div class="menu-info">
                            <h2>Bugger</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, repellat.</p>
                            <h3>Sh 2000</h3>
                            <a href="" class="menu-btn">Order now</a>
                        </div>
                    </div>
                    <div class="menu-card">
                        <div class="menu-image">
                            <img src="asset/images/bag.jpg" alt="">
                        </div>
                        <div class="menu-info">
                            <h2>Bugger</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, repellat.</p>
                            <h3>Sh 2000</h3>
                            <a href="" class="menu-btn">Order now</a>
                        </div>
                    </div>
                </div>
             </section>

    <section class="contact" id="Contact Us">
        <h1 class="heading">Contact <span>Us</span></h1>
        <div class="signupFrm">
         <form  action=""class="form">

            <div class="inputContainer">
                <input type="text" class="input" id="name" placeholder="name" required>
            </div>

            <div class="inputContainer">
                <input type="email" class="input" id="email" placeholder="email" required>
            </div>

            <div class="inputContainer">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="How can I help you"></textarea>
            </div>

            <button type="send" class="submitBtn" onclick="sendMail()" >Send</button>

         </form>
        </div>  
    </section>

    <section class="foot">
        <div class="footer">
            <div class="row">
                <div class="col">
                    <a href="" class="logo">YummyBakery</a>
                </div>
                <div class="col">
                    <h3>Openning Hours</h3>
                    <p>Mon-Friday:7.00AM to 5.00PM</p>
                    <br>
                    <p>Saturday:9.00AM to 4.00PM</p>
                </div>
                <div class="col">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <hr>
           <p class="copy"> YummyBakery &copy 2022 - All rights reserved</p>
        </div>
    </section>





 

   





 
 
 
 
 
 
 
 
 
 
 
 
 
 
    <script>
        function sendMail() {
    var params = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value,
    };
    const serviceID = "service_07sx749";
    const templateID = "template_5p1k56w";

    emailjs.send(serviceID,templateID,params)
    .then(
        res =>{
            document.getElementById("name").value="";
            document.getElementById("email").value="";
            document.getElementById("message").value="";
            console.log(res);
            alert("Your message sent successfully");
    
        }
    )
    .catch((err) => console.log(err));
    ;
}


    </script>

<script src="main.js"></script>





  
</body>
</html>