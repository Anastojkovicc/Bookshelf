<?php
if(isset($_POST["login"])){

    // Ako su unesena oba polja uzimamo username i password
    if(isset($_POST["username"]) && isset($_POST["password"]))
    $username = strtolower(trim($_POST["username"]));
    $password = trim($_POST["password"]);

}
// Ukoliko nisu popunjena oba polja
else{
    echo "<script type= 'text/javascript'> alert('Morate uneti podatke u oba polja!');</script>";
}

?>