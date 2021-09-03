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
    <link rel="stylesheet" href="style/styleall.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>


</head>

<body>
    <!-- Dugme za povratak -->
    <input type="button" value="&#8592;" class="back-button" onclick="window.location.href='menu.php'">

    <?php
   include "fun/connect.php";
  
   //Uzimamo iz baze 10 knjiga sa najvecom ocenom
   $sql= "select * from books order by rating desc limit 10";
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
            <th>Delete book</th>
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
            <td> <a href="delete.php?id=<?php echo $row->book_id?>"><img src="style/slike/b.png"  width="20px" alt="obrisi"></a></td>
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
