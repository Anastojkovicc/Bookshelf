<?php
session_start();
if(!isset($_SESSION['loggedIn'])){
    $_SESSION['loggedIn']= false;
}
// Ako je ulogovani korisnik dobar prebacujemo ga u meni
if($_SESSION['loggedIn']){
    header("LOCATION: menu.php");
}
?>