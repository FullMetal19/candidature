<?php
session_start();
$mail = $_POST['mail'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mot_de_passe = $_POST['mot_de_passe'];
$nouveau_mot_de_passe = $_POST['nouveau_mot_de_passe'];
$status = -1;
// Connexion à la base de données
include('ouverture_bd.php');

// envoie de mail

$sujet = 'Validation de votre compte';
$message = '
<div class="principal_bloc" style="margin: auto;
width: 400px;
box-sizing: border-box;
border: 1px solid rgb(10, 107, 49);
background-color: rgb(241, 241, 241);
box-shadow: 5px -5px 15px gray; 
color: black; 
text-align: center;
padding: 2%;">
<img src="https://img.icons8.com/ios-filled/100/000000/university.png" alt="logo ussein" style="position: relative;
width: 200px;
top: -7rem;
border-radius: 50%;
border: 10px white solid;
background-color: rgb(236, 236, 236);">

<h1>Validation de votre compte</h1>
<div class="secondaire_bloc" style="display: flex;
margin: 0;
gap: 1em;
flex-direction: column;
justify-content: center;
align-items: center;
margin-bottom: 10%;">
    <p style="font-size: x-large;
    text-align: justify;
    color:black;">
        // Bonjour ! Mamadou Yaya Mané,
    </p>
    <p style="font-size: x-large;
    text-align: justify;
    color:black;">
        La plateforme de candidature de l\'<span style="color: rgb(10, 107, 49);
        font-weight: bold;">USSEIN</span> vous invite à finaliser la création de votre compte en cliquant sur ce bouton ci-dessous:
    </p>
    <a href="http://localhost/candidature/ussein_mail.php?mail='.$mail.'" style="text-decoration: none;
    color: black;width: 100%;"><p style="padding: 2%;
    color:white;
    border: 1px solid green;
    background-color: green;
    margin-right:10%;
    width: 100%;
    text-align: center;
    transition: 2s;font-size:x-large;">Valider</p></a>
</div>

</div>';

$header = "From:\"nash\"<caambdiop.officiel@gmail.com>\n";
$header .="Reply-To:caambdiop.officiel@gmail.com\n";
$header .="Content-Type:text/html; charset=\"iso-8859-1\"";

mail($destination,$sujet,$message,$header);

if(isset($_POST['valider'])){
    $req = mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
    $nb = mysqli_num_rows($req);

    if($nb>0){
            $_SESSION['message_validation'] = "Un compte est déja enregitré sur ce mail.";
    }
    else{
            if($mot_de_passe == $nouveau_mot_de_passe){
            if (mail($mail,$sujet,$message,$header)){
                $req = mysqli_query($con,"INSERT INTO ec_connexion VALUES('$prenom','$nom','$mail','$mot_de_passe','$status')");
                $_SESSION['message_validation'] = "Veuillez consulter votre mail pour la validation de votre compte.";
                header('Location: http://localhost/candidature/connexion/');
            }else{
                $_SESSION['message_validation'] = "Erreur sur la validation de votre compte.\n Veuillez revoir vos informations.";
                header('Location: http://localhost/candidature/inscription/');
            }
        }else{
            $_SESSION['message_validation'] = "Attention!! Mot de passe non identique.";
        }
    }
    
}




// déconnexion à la base de données
include('fermeture_bd.php');


?>