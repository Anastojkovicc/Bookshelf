<?php
include "fun/notLoggedIn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf</title>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script type="text/javascript">
    function logout(){
        $.get("fun/logout.php");
    }
    </script>
</head>
<body>
<h1>BOOKSHELF</h1>
<ul>
<a href="all.php">
    <li>All</li>
    </a>
    <a href="addnew.php">
    <li>Add new</li>
    </a>
    <a href="myshelf.php">
    <li>Your books</li>
    </a>
    <a href="index.php" onclick="logout()">
    <li>Log out</li>
    </a>
</ul>
</body>
</html>