<?php
require "fun/notLoggedIn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf</title>
    <link rel="stylesheet" href="style/styleadd.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style/navbar.css">

</head>
<body>
    <div id="navbar"></div>
<!-- Dugme za povratak -->
<input type="button" value="&#8592;" class="back-button" onclick="window.location.href='menu.php'">
<form action="" method="post" class="forma">
    <p>Name:</p>
    <input type="text" class="input-new" name="bookName">
    <p>Author:</p>
    <input type="text" class="input-new" name="author">
    <p>Rating:</p>
    <input type="text" class="input-new" name="rating">
    <p>Genre:</p>
    <select name="genre">
        <option>Fantasy</option>
        <option>Thriller</option>
        <option>Romance</option>
        <option>Religious</option>
        <option>Poetry</option>
        <option>Biography</option>
        <option>Classic</option>
        <option>Philosophy</option>
    </select>
    <br>
    <br>
    <input type="submit" value="ADD NEW BOOK" class="button-new" name="addNew">
</form>

<?php
    include "fun/newBook.php";
?>
    <script>
       function navbar(){
           $.ajax({
               url:"navbar.php",
               success: function(html){
                   $("#navbar").html(html);
               }
           })
       }
    </script>
        <script>
        navbar();
        </script>
</body>
</html>