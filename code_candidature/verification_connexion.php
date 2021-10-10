<?php
    session_start();

    $mail=$_POST['mail'];
    $mot_de_passe=$_POST['mot_de_passe'];

    // $con = new PDO('mysql:host=localhost;dbname=ussein_candidature;charset=utf8', 'root', '');
    require_once("ouverture_bd_pdo.php");
    
    $verification=$con->prepare( "SELECT * FROM ec_connexion WHERE mail=? AND mot_de_passe=?");
    $verification->execute(array($mail,$mot_de_passe));
    $tab_verification = $verification->fetchALL();
    $nombre = count($tab_verification); 
    // $nombre=$tab_verification['nombre'];
    $verification->closeCursor();

    if($nombre!=0){
        $verifications=$con->prepare( "SELECT * FROM ec_connexion WHERE mail=? AND mot_de_passe=?");
        $verifications->execute(array($mail,$mot_de_passe));
            $donnees=$verifications->fetch();
             // declaration des variables de session
             $_SESSION['prenom']=$donnees['prenom'];
             $_SESSION['nom']=$donnees['nom'];
             $_SESSION['mail']=$donnees['mail'];
             $_SESSION['telephone']=$donnees['telephone'];
             $_SESSION['date_de_naissance']=$donnees['date_de_naissance'];
             $_SESSION['genre']=$donnees['genre'];
             $_SESSION['adresse']=$donnees['adresse'];
             $_SESSION['image']=$donnees['image'];  
             
             $verifications->closeCursor();
        
           
        if($donnees['status']==0){
            header('location: http://localhost/candidature/accueil-offre/');
        }
        if($donnees['status']==1){
            
            header('Location: http://localhost/candidature/ajout-offre/');

        }
        if($donnees['status']==5){
            $_SESSION['message_erreur']=" Verifier votre compte mail";
            
              header('Location: http://localhost/candidature/connexion');
            }
            if($donnees['status']==2){
         header('Location: http://localhost/candidature/visualisation/');
                }
                $verifications->closeCursor();
    }
    else{
        $_SESSION['message_erreur']=" Verifier votre mot de passe ou votre mail";
        header('location: http://localhost/candidature/connexion');
        exit();
    }
    $con->closeCursor();



?>
