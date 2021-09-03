<?php
include "connect.php";

$id= $_GET['id'];

if(isset($_POST['update'])){
    $rate= $_POST['rating'];
    $sql= "UPDATE books SET rating='{$rate}' WHERE book_id='{$id}'";
    if(!$q= $mysqli -> query($sql)){
        echo "Book doesn't exist";
    }
    else{
        echo "<script type= 'text/javascript'>alert('Successfully updated');</script>";
        header("LOCATION: all.php");
    }
}
$mysqli->close();

?>