<?php
session_start();
$mail = $_GET['mail'];
include("ouverture_bd.php");

$req = mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab = mysqli_fetch_array($req);
$nb = mysqli_num_rows($req);

if($nb>0){
    if($tab['status'] = 0){
        $_SESSION['message_validation'] = "Votre compte a été déjà activé. Veuillez vous connecter.";
    }else{
        $req = mysqli_query($con,"UPDATE ec_connexion SET status='0' WHERE mail='$mail'");
        $_SESSION['message_validation'] = "Votre compte est activé. Veuillez vous connecter.";
    }
    header('Location: http://localhost/candidature/connexion');
    
}

include("fermeture_bd.php");
?>