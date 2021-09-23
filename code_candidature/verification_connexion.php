<?php
    session_start();

    $mail=$_POST['mail'];
    $mot_de_passe=$_POST['mot_de_passe'];

    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
    // include("ouverture_bd.php");
    $con = mysqli_connect("localhost","root","","ussein_candidature");
    $verification=mysqli_query($con, "SELECT * FROM ec_connexion WHERE mail='$mail' AND mot_de_passe='$mot_de_passe'" );
    $nombre=mysqli_num_rows($verification);
    $tab_verification=mysqli_fetch_array($verification);
    
    // declaration des variables de session
    $_SESSION['prenom']=$tab_verification['prenom'];
    $_SESSION['nom']=$tab_verification['nom'];
    $_SESSION['mail']=$tab_verification['mail'];
    $_SESSION['telephone']=$tab_verification['telephone'];
    $_SESSION['date_de_naissance']=$tab_verification['date_de_naissance'];
    $_SESSION['genre']=$tab_verification['genre'];
    $_SESSION['adresse']=$tab_verification['adresse'];
    $_SESSION['image']=$tab_verification['image'];

    if($nombre!=0){
        if($tab_verification['status']==0){
            header('location: http://localhost/candidature/accueil-offre/');
        }
        if($tab_verification['status']==1){
            
            header('Location: http:localhost/');

        }
        if($tab_verification['status']==5){
            $_SESSION['message_erreur']=" Verifier votre compte mail";
            
              header('Location: http://localhost/candidature/connexion');
            }
    }
    else{
        $_SESSION['message_erreur']=" Verifier";
        header('location: http://localhost/candidature/connexion');
        exit();
    }
}
else{
    $_SESSION['message_erreur_Mail']=" Mail invalide";
    header('location: http://localhost/candidature/connexion');
    exit();
}





?>
