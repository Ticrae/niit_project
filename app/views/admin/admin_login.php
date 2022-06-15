<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/admin-log.css">
</head>
<body>
    <div class="container">
        <h1>Sign In</h1>
        <form class="form" method="POST" action="<?php echo URLROOT; ?>/admins/admin_login">
            <input class="inputs" type="text" placeholder="Username" name="username"><i class="fa fa-user"></i>
            <span><?php echo $data["username_error"] ?></span>
            <input class="inputs" type="password" placeholder="Password" name="password"><i class="fa fa-key"></i>
            <span><?php echo $data["password_error"] ?></span>
            <button  id="submit" type="submit" value="submit" class="btn">SIGN IN</button>
        </form>
    </div>
</body>
</html>