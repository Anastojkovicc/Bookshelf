<?php
$mysql_server= "localhost:8080";
$mysql_user="root";
$mysql_pass= "newpassword";
$mysql_db= "bookshelf";
$mysqli = new mysqli($mysql_server,$mysql_user,$mysql_pass,$mysql_db);

// Ukoliko konekcija sa bazom nije dobra ispisuje gresku
if($mysqli-> connect_errno){
    printf("Connection error: %s\n", $mysqli->connect_error);
    exit();
}

$mysqli->set_charset("utf8");
?>