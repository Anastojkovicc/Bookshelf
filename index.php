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
    <form action="" method="post" id="login-form">
    <p class="text-login">Username:</p> 
        <input type="text" class="input-login" name="username">
    <br>
    <p class="text-login">Password:</p> 
        <input type="password" class="input-login" name="password">
    <br>
    <!-- Ako nisu tacni podaci -->
    <p class="error-login">Username/Password not correct.</p> 
    
    <div class="buttons-div">
        <input type="submit" value="LOGIN" class="button-login" name="login">
    <br>
        <input type= "button" value="REGISTER" class="button-login" onclick="window.location.href='register.php'";>
        <!-- Klikom na dugme za registraciju prelazimo na stranicu za registrovanje -->
    </div>

    </form>
<?php 
    include "fun/login.php";
?> 
</body>
</html>