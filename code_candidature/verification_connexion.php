<?php
    session_start();

    $mail=$_POST['mail'];
    $mot_de_passe=$_POST['mot_de_passe'];

    // include("ouverture_bd.php");
    $con = mysqli_connect("localhost","root","","ussein_candidature");
    $verification=mysqli_query($con, "SELECT * FROM ec_connexion WHERE mail='$mail' AND mot_de_passe='$mot_de_passe'" );
    $nombre=mysqli_num_rows($verification);
    $tab_verification=mysqli_fetch_array($verification);
    
    if($nombre!=0){
        if($tab_verification['status']==0){
            header('Location: http:localhost/');
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

?>
