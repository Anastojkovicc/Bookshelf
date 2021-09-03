<?php
require "fun/notLoggedIn.php";
include "fun/connect.php";

$id= $_GET['id'];
$sql= "delete from books where book_id='{$id}'";
if($mysqli -> query($sql)){
    echo "<script type= 'text/javascript'>alert('Successfully deleted');</script>";
    header("LOCATION: all.php");
}else{
    echo "<script type= 'text/javascript'>alert('Error deleting this book');</script>";
}

$mysqli->close();

?>