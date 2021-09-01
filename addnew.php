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
</head>
<body>
<!-- Dugme za povratak -->
<input type="button" value="&#8592;" class="back-button" onclick="window.location.href='menu.php'">
<form action="" method="post">
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
    
</body>
</html>