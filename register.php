<?php
include "fun/loggedInUser.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf</title>
</head>
<body>
<h1>BOOKSHELF</h1>
    <form action="" method="post">
    <p class="text-login">Username:</p>
    <input type="text" class="input-login" name="username">
    <br>
    <p class="text-login">Password:</p>
    <input type="password" class="input-login" name="password">
    <br>
    <p class="text-login">Repeat password:</p>
    <input type="password" class="input-login" name="passwordRepeat">
    <br>
    <p class="error-login">Error</p>

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