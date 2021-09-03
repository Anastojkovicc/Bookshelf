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
    <link rel="stylesheet" href="style/stylechange.css">

</head>
<body>

<?php
include "fun/connect.php";
    $id= $_GET['id'];
    $sql = "select * from books where book_id='{$id}'";
    if(!$q= $mysqli -> query($sql)){
        echo "Book doesn't exist";
    } else{
        while($red = $q->fetch_object()){
            $name= $red->name;
            $author= $red -> author;
        }
    }
?>
<!-- Dugme za povratak -->
<input type="button" value="&#8592;" class="back-button" onclick="window.location.href='all.php'">
<form action="" method="post">
    <h1><?php echo $name;?></h1>
    <h2><?php echo $author;?></h2>
    <p> NEW RATING:</p>
    <input type="text" class="input-new" name="rating">
    <br>
    <br>
    <input type="submit" value="UPDATE" class="button-new" name="update">
</form>

<?php
include "fun/update.php";
?>    

</body>
</html>