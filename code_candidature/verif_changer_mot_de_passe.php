<?php

  session_start();
$mot_de_passe = $_POST['mot_de_passe'];
$mot_de_passe1 = $_POST['mot_de_passe_1'];
$mot_de_passe2 = $_POST['mot_de_passe_2'];

$mail = $_SESSION['mail'];

$con = mysqli_connect("localhost","root","","ussein_candidature");
$requete = mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail' AND mot_de_passe='$mot_de_passe'");
$val = mysqli_num_rows($requete);
$tab = mysqli_fetch_array($requete);

if($val >0){ 

    if($tab['status'] == 0){ 

    if($mot_de_passe1 == $mot_de_passe2){
 
    $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_connexion SET mot_de_passe='$mot_de_passe1' WHERE mail='$mail'");
    $_SESSION['notification1']="Votre mot de passe est modifié.";
    header('location: http://localhost/candidature/accueil-offre/');
}
    else{
    $_SESSION['notif']="Veuiller revoir votre mot de passe de confirmation !";
    header('location: http://localhost/candidature/changer-mot-de-passe/');
}
}

if($tab['status'] == 2){ 
    if($mot_de_passe1 == $mot_de_passe2){
 
        $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_connexion SET mot_de_passe='$mot_de_passe1' WHERE mail='$mail'");
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
 
        $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_connexion SET mot_de_passe='$mot_de_passe1' WHERE mail='$mail'");
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