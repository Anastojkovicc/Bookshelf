<?php
if(isset($_POST['login'])){

    // Ako su unesena oba polja uzimamo username i password
    if(isset($_POST['username']) && isset($_POST['password'])){
    $username = strtolower(trim($_POST['username']));
    $password = trim($_POST['password']);

    include "connect.php";

    //Za uneseni username selektujemo korisnikov id, ime i sifru
    $sql = "SELECT korisnik_id, username, password FROM korisnik WHERE username='".$username."'";
    //Neuspesno izvrsavanje upita
    if(!$q= $mysqli-> query($sql)){ 
        echo "<script type= 'text/javascript'>alert('Login error.');</script>";
    }
    //Ako ne postoji taj korisnik 
    if($q->num_rows==0){
        echo "<script type= 'text/javascript'>alert('Wrong username!');</script>";
        exit();
    } 
    else {
        //Ako postoji uzimamo njegovu sifru
        while($red = $q->fetch_object()){
            $pass= $red->password;
        }
    }

    //Poredimo da li je sifra unesenog korisnika ista kao u bazi
    //Ako jeste onda prosledjujemo korisnika u sesiju i preusmeravamo ga na meni
    if($password==$pass){
        $_SESSION['loggedIn']=true;
        $_SESSION['username']=$username;
        header("LOCATION: menu.php");
    } else{
        //Ako lozinka nije ispravna
        echo "<script type= 'text/javascript'>alert('Wrong password!');</script>";
    }

    $mysqli->close();

    unset($_POST['username']);
    unset($_POST['password']);

}
// Ukoliko nisu popunjena oba polja
else{
    echo "<script type= 'text/javascript'> alert('Fill both fields!');</script>";
}
    unset($_POST['login']);
}
?>