<?php
$nouveau_mot_de_passe = $_POST['nouveau_mot_de_passe'];
$confirmer_mot_de_passe = $_POST['confirmer_mot_de_passe'];
include('ouverture_bd.php');
if(isset($_POST['changer'])){
    if($nouveau_mot_de_passe == $confirmer_mot_de_passe){
        $req = mysqli_query($con,"UPDATE ec_connexion SET mot_de_passe='$nouveau_mot_de_passe'");
        $_SESSION['message_validation'] = "Votre mot de passe est changer. Vous pouvez procéder à la connexion.";
        header('Location: http://localhost/candidature/connexion/');
    }else{
        $_POST['message_validation'] = "Attention!! Mot de passe non identique.";
        header('Location: http://localhost/candidature/mot-de-passe-oublier');
    }
}
include('fermeture_bd.php');
?>