<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YummyBakery</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/js/index.js">
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



    <section class="container single">
        <div class="row">
            <div class="column">
                <img class="image-fluid" src="asset/images/back.jpeg" alt="">
            </div>
            <div class="column" id="content">
                <h4>Chocolate cake</h4>
                <br>
                <h2>Sh 2000</h2>
                <br>
                <input type="number" value="1">
                <br>
                <button class="btn">Add to cart</button>
            </div>
        </div>
    </section>
</body>
</html>