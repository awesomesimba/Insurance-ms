<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 12/28/18
 * Time: 8:47 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link href="my_style_sheet.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="login-container">
        <form class="#" type="form" enctype="multipart/form-data" action="home.php" method="post">
            <div class="login-head">Please login</div>
            <div class="login-body">
                <div class="input">
                    <label for="username">username:</label><br>
                    <input class="#" type="text" id="username" placeholder="user name" name="username">
                </div>

                <div class="input">
                    <label for="password">password:</label><br>
                    <input class="#" type="password" id="password" placeholder="enter password" name="password">
                </div>

                <div class="input">
                    <a href="#" class="forgot-password">forgot password ?</a>
                </div>
                <a href="home.php">
                    <button class="login-button" type="submit" name="login">login</button>
                </a>

            </div>
        </form>
    </div>
</div>
</body>
</html>
