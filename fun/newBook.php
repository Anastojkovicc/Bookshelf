<?php
if(isset($_POST["addNew"])){
    if(trim($_POST['bookName'])!="" && trim($_POST['author'])!="" && trim($_POST['rating'])!="" && $_POST['genre']!="" ){
        $bookName= trim($_POST['bookName']);
        $author= trim($_POST['author']);
        $rating= trim($_POST['rating']);
        $genre= $_POST['genre'];

        include "fun/connect.php";

        $sql="insert into books (name,author,rating,genre) values ('{$bookName}','{$author}','{$rating}','{$genre}')";

        if($mysqli -> query($sql)){
            echo "<script type= 'text/javascript'>alert('Successfully added new book!');</script>";
        }else{
            echo "<script type= 'text/javascript'>alert('Book is already on shelf!');</script>";
        }

        $mysqli->close();

        unset($_POST['bookName']);
        unset($_POST['author']);
        unset($_POST['rating']);
        unset($_POST['genre']);
    }else{
        echo "<script type= 'text/javascript'>alert('Fill all fields!');</script>";
    }
    unset($_POST['addNew']);

}

?>