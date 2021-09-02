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
</head>
<body>
     <!-- Dugme za povratak -->
     <input type="button" value="&#8592;" class="back-button" onclick="window.location.href='menu.php'">
     <?php
     include "fun/connect.php";
     $sql="select b.name,o.rating from ocena o join korisnik k on k.korisnik_id=k.korisnik_id join books b on o.book_id=b.book_id where k.username='{$_SESSION["username"]}' order by rating desc";
     if(!$q= $mysqli -> query($sql)){
        echo "Query error";
    } 
    if($q -> num_rows==0){
        echo "No rated books";
    }else{
        ?>
        <table id="bookTable">
            <thead>
                <th>Name</th>
                <th>Rating</th>
            </thead>
            <tbody>
            <?php 
                while( $row = $q-> fetch_object()){
            ?>
            <tr>
                <td><?php echo $row->name; ?></td>
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