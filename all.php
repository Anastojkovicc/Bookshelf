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
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script type="text/javascript" scr="js/books.js"> </script>

</head>

<body>
    <!-- Dugme za povratak -->
    <input type="button" value="&#8592;" class="back-button" onclick="window.location.href='menu.php'">
    <!-- Polje za pretragu po imenu -->
    <input type="text" id="search" class="search-text" placeholder="Search book name:" onkeyup="searchBook(this.value)">
    <?php
   include "fun/connect.php";
   //Uzimamo iz baze sve knjige
   $sql= "select * from books";
   if(!$q= $mysqli -> query($sql)){
       echo "Query error";
   } 
   if($q -> num_rows==0){
       echo "Empty table";
   }else{
    ?>
    <table id="bookTable">
        <thead>
            <th>Name</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Rating</th>
        </thead>
        <tbody>
        <?php 
            while( $row = $q-> fetch_object()){
        ?>
        <tr>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->author; ?></td>
            <td><?php echo $row->genre; ?></td>
            <td><?php echo $row->rating; ?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
  <?php
   }
   $mysqli -> close();
    ?>
</body>
</html>
