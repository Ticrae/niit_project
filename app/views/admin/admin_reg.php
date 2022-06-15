<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/admin-reg.css">
</head>
<body>
    <div class="container">
        <form class="form" method="POST" action="<?php echo URLROOT; ?>/admins/admin_reg">
            <input class="inputs" type="text" placeholder="Username" name="username"><i class="fa fa-user"></i>
            <span><?php echo $data["usernameError"] ?></span>

            <input class="inputs" type="email" placeholder="Email" name="email"><i class="fa fa-envelope"></i>
            <span><?php echo $data["emailError"] ?></span>


            <input class="inputs" type="password" placeholder="Password" name="password"><i class="fa fa-key"></i>
            <span><?php echo $data["passwordError"] ?></span>

            <input class="inputs" type="password" placeholder="Confirm Password" name="confirm_password"><br>
            <button  id="submit" type="submit" value="submit" class="btn">SIGN UP</button>
        </form>
    </div>
</body>
</html>