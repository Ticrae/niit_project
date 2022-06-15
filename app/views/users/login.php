<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/log_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/fontawesome-free-5.15.4-web/css/all.css">
</head>
<body>
<nav id="main">
        <div class="header">
            <a href="<?php echo URLROOT; ?>/index"><h2>The World Equals Magazine</h2></a>
        </div>
    </nav>
    <div class="container">
        <div class="right-side">
            <div class="logo">
                <img src="<?php echo URLROOT ?>/public/img/reg4.png" alt="">
            </div>
            <div class="title">
                <h1>Sign In Now</h1>
                <h6>Please fill the details and sign into your account</h6>
            </div>
            <div class="fill-in">
                <form class="form" method="POST" action="<?php echo URLROOT; ?>/users/login">
                    <input class="inputs" type="text" placeholder="Username" name="username"><i class="fa fa-user"></i>
                    <span class="error"><?php echo $data["username_error"] ?></span>
                    <input class="inputs" type="password" placeholder="Password" name="password"><i class="fa fa-key"></i>
                    <span class="error"><?php echo $data["password_error"] ?></span>
                    <button  id="submit" type="submit" value="submit" class="btn">SIGN IN</button>
                    <p>Don't have an account? <a href="<?php echo URLROOT; ?>/users/register">sign up</a> here</p>
                </form>
            </div>
            <div class="socials">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-google-plus"></i>
                <i class="fab fa-linkedin"></i>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <p>&copy;2022 The World Equals Magazine</p>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">California Notices</a></li>
            </ul>
        </div>
    </footer>


    <script src="login js/main.js"></script>
</body>
</html>