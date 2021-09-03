<?php
    require "fun/notLoggedIn.php";
?>
<!-- NISTA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf</title>
   <script>
    src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
   <script type="text/javascript" scr="js/book.js"> </script>
</head>
<body>
     <!-- Dugme za povratak -->
     <input type="button" value="&#8592;" class="back-button" onclick="goToTable()">
     <form action="" method="post">
    <input type="text" class="search-text" name="bookName" placeholder="Search book name:">
    <input type="submit" value="Search" class="button-new" name="addNew" onclick="searchBook($text.value)">
</form> 
    <?php

    include "fun/connect.php";
    $sql= 'select * from books where name="'.$_COOKIE["bookName"].'"';
    if(!$q=$mysqli->query($sql)){
        echo "Book error";
    }
    if($q->num_rows==0){
        echo "Book not found";
    }else{
        while($row= $q->fetch_object()){
?>         
<h1 class="book-info">Name:</h1>   
<t>
    <h1 class="book-show">
        <?php echo $row->name;
            $_SESSION['bookName'] = $row->name; 
            ?>
    </h1>
    <br>
    <p class="book-info">Author:</p>
    <p class="book-show">
        <?php echo $row->author; ?>
    </p>
    <br>
    <p class="book-info">Genre:</p>
    <p class="book-show">
        <?php echo $row->genre; ?>
    </p>
    <br>
    <p class="book-info">Rating:</p>
    <p class="book-show" id="rate">
        5
    </p>
    <br>
    <input type="range" min="1" max="10" value="5" step="1" class="book-range" id="slider" oninput="sliderChange(this.value)">
    <input type="button" value="GIVE RATE" class="button-rate" onclick="rateBook()">
    <p id="show"></p>
<?php     
    }
}
 $mysqli->close();
?>
    
</body>
</html>