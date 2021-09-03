<?php
require "fun/loggedInUser.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf</title>
    <link rel="stylesheet" href="style/styleregistration.css">
</head>
<body>

    <form action="" method="post" class="regForm">
    <h1>BOOKSHELF</h1>
    <p class="text-login">Username:</p>
    <input type="text" class="input-login" name="username">
    <br>
    <p class="text-login">Password:</p>
    <input type="password" class="input-login" name="password">
    <br>
    <p class="text-login">Repeat password:</p>
    <input type="password" class="input-login" name="passwordRepeat">
    <br>

    <div class="buttons-div">
        <input type="button" value="LOGIN" class="button-login" onclick="window.location.href='index.php'">
        <br>
        <input type="submit" value="REGISTER" class="button-login" name="register">
    </div>
    </form>

<?php
include "fun/registration.php";
?>
</body>
</html>