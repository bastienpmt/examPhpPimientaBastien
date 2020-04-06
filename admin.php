<?php
session_start();
if ( $_SESSION['utilisateur']){
       
    header('Location: connectSucess.php');
   
}
else{
    header('Location: login.php');
    }
   

?>

