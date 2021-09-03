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
    <link rel="stylesheet" href="style/stylemenu.css">
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
    <div class="men">
<h1>BOOKSHELF</h1>
<ul>
    
    <a href="addnew.php">
    <li>Add new</li>
    </a>
    <a href="all.php">
    <li>All</li>
    </a>
    <a href="top10.php">
    <li>Top 10</li>
    </a>
    <a href="index.php" onclick="logout()" class="logout">
    <li>Log out</li>
    </a>
</ul>
</div>
</body>
</html>