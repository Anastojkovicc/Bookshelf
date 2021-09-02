<?php
    if(isset($_POST['register'])){
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordRepeat'])){
            $username= strtolower(trim($_POST['username']));
            $password= trim($_POST['password']);
            $passwordRepeat= trim($_POST['passwordRepeat']);

            //Proveravamo da li je lozinka ista kao ponovljena lozinka
            if($password==$passwordRepeat){
                include "connect.php";
                $sql= "INSERT INTO korisnik(username,password) values ('{$username}','{$password}')";
                if($mysqli -> query($sql)){
                    echo "<script type= 'text/javascript'>alert('Registered');</script>";
                    $_SESSION['loggedIn']=true;
                    header("LOCATION: menu.php");
                }else{
                    echo "<script type= 'text/javascript'>alert('Registration error');</script>";
                }
            }else{
                //Ne poklapaju se lozinke
                echo "<script type= 'text/javascript'>alert('Password and repeated password must be same!');</script>";
            }
            unset($_POST['username']);
            unset($_POST['password']);
            unset($_POST['passwordRepeated']);
        }
        else{
            echo "<script type= 'text/javascript'>alert('Fill both fields!');</script>";
        }
        unset($_POST['register']);
    }


?>