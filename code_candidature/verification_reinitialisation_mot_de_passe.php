<?php
session_start();
$mail=$_SESSION['mailpw'];
$nouveau_mot_de_passe = $_POST['nouveau_mot_de_passe'];
$confirmer_mot_de_passe = $_POST['confirmer_mot_de_passe'];

require_once("ouverture_bd_pdo.php");

    if($nouveau_mot_de_passe == $confirmer_mot_de_passe){
        $verification=$con->prepare("UPDATE ec_connexion SET  mot_de_passe=:mot_de_passe WHERE mail= :mail");
        $verification->execute(array(
            'mot_de_passe'=>$nouveau_mot_de_passe, 
            'mail'=>$mail                     
        ));
        $_SESSION['message_validation'] = "Votre mot de passe est changer. Vous pouvez procéder à la connexion.";
        unset($_SESSION['mailpw']);
        header('Location: http://localhost/candidature/connexion/');
    }else{
        $_SESSION['message_validation'] = "Attention!! Mot de passe non identique.";
        header("Location:http://localhost/candidature/reinitialisation-mot-de-passe/?mail='.$mail'");
    }
?>