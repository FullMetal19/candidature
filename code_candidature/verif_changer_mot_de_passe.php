<?php

  session_start();
$mot_de_passe = $_POST['mot_de_passe'];
$mot_de_passe1 = $_POST['mot_de_passe_1'];
$mot_de_passe2 = $_POST['mot_de_passe_2'];

$mail = $_SESSION['mail'];

require_once("ouverture_bd_pdo.php");


$verification=$con->prepare( "SELECT * FROM ec_connexion WHERE mail=? AND mot_de_passe=?");
$verification->execute(array($mail,$mot_de_passe));
$tab_verification = $verification->fetchALL();
$val = count($tab_verification); 
// $nombre=$tab_verification['nombre'];
$verification->closeCursor();

if($val >0){ 
    $verifications=$con->query("SELECT * FROM ec_connexion WHERE mail='$mail' AND mot_de_passe='$mot_de_passe'" );
    $tab=$verifications->fetch();
    if($tab['status'] == 0){ 

    if($mot_de_passe1 == $mot_de_passe2){
        $verification=$con->prepare("UPDATE ec_connexion SET  mot_de_passe=:mot_de_passe WHERE mail= :mail");
        $verification->execute(array(
            'mot_de_passe'=>$mot_de_passe1, 
            'mail'=>$mail                     
        ));
        $verification->closeCursor();
    header('location: http://localhost/candidature/accueil-offre/');
}
    else{
    $_SESSION['notif']="Veuiller revoir votre mot de passe de confirmation !";
    header('location: http://localhost/candidature/changer-mot-de-passe/');
}
}

if($tab['status'] == 2){ 
    if($mot_de_passe1 == $mot_de_passe2){
 
        $verification=$con->prepare("UPDATE ec_connexion SET  mot_de_passe=:mot_de_passe WHERE mail= :mail");
        $verification->execute(array(
            'mot_de_passe'=>$mot_de_passe1, 
            'mail'=>$mail                     
        ));
        $verification->closeCursor();
        $_SESSION['notification1']='<div id="a">
                                        <img src="https://img.icons8.com/fluency/48/000000/verified-account.png" width="20px" height="20px" />
                                        <span>Votre mot de passe est bien modifié.</span>
                                    </div>';
        header('location: http://localhost/candidature/parametre/');
    }
    else{
        $_SESSION['notif']="Veuillez revoir votre mot de passe de confirmation !";
        header('location: http://localhost/candidature/changer-mot-de-passe/');
    }

}
if($tab['status'] == 1){
    if($mot_de_passe1 == $mot_de_passe2){
 
        $verification=$con->prepare("UPDATE ec_connexion SET  mot_de_passe=:mot_de_passe WHERE mail= :mail");
        $verification->execute(array(
            'mot_de_passe'=>$mot_de_passe1, 
            'mail'=>$mail                     
        ));
        $verification->closeCursor();
        $_SESSION['notification1']='<div id="a">
                                        <img src="https://img.icons8.com/fluency/48/000000/verified-account.png" width="20px" height="20px" />
                                        <span>Votre mot de passe est bien modifié.</span>
                                    </div>';
        header('location: http://localhost/candidature/parametre/');
    }
    else{
        $_SESSION['notif']="Veuillez revoir votre mot de passe de confirmation !";
        header('location: http://localhost/candidature/changer-mot-de-passe/');
    }
}
}
else{
    $_SESSION['notif']="Veuillez vérifier votre ancien mot de passe  !";   
    header('location: http://localhost/candidature/changer-mot-de-passe/');
}

?>