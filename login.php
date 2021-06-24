<?php 
    require("php/login1.php");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="backdrop"></div>
    <br>
    <br>
    <br>
    <br>
    <div class="purchase">
        <h2>ADMIN LOGIN</h2>
        <form action="login.php" method="post">
            <h2><?php if(isset($echo)){
                    echo $echo;
                } ?></h2>
            <h4>Username</h4>
            <br>
            <input type="text" name="username" id="username" placeholder="Full Name" />
            <h4>Password</h4>
            <br>
            <input type="password" name="password" id="password" placeholder="Password" />
            <input type="submit" name="login" value="login" />
        </form>
    </div>
</body>
</html>