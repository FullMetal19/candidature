<?php
session_start();
$mail = $_POST['mail'];
// Connexion à la base de données
include('ouverture_bd.php');

// envoie de mail

$sujet = 'Réinitialisation de votre mot de passe.';
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
    Veuillez cliquer sur ce bouton ci-dessous pour la réinitialisation de votre mot de passe.    
    </p>
    <a href="http://localhost/candidature/changer-mot-de-passe/" style="text-decoration: none;
    color: black;width: 100%;"><p style="padding: 2%;
    color:white;
    border: 1px solid green;
    background-color: green;
    margin-right:10%;
    width: 100%;
    text-align: center;
    transition: 2s;font-size:x-large;">Continuer</p></a>
</div>

</div>';

$header = "From:\"nash\"<caambdiop.officiel@gmail.com>\n";
$header .="Reply-To:caambdiop.officiel@gmail.com\n";
$header .="Content-Type:text/html; charset=\"iso-8859-1\"";

mail($destination,$sujet,$message,$header);

if(isset($_POST['envoyer'])){
    $req = mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
    $nb = mysqli_num_rows($req);

    if($nb>0){
            if (mail($mail,$sujet,$message,$header)){
                $_SESSION['message_validation'] = "Veuillez consulter votre mail pour réinitialiser votre mot de passe.";
                header('Location: http://localhost/candidature/connexion/');
            }else{
                $_SESSION['message_validation'] = "Erreur sur la validation, veuillez vérifier votre mail.";
                header('Location: http://localhost/candidature/mot-de-passe-oublier/');
            }
    }else{
        $_SESSION['message_validation'] = "Aucun compte n'est associé à ce mail, veuillez le vérifier.";
        header('Location: http://localhost/candidature/mot-de-passe-oublier/');
    }
    
}




// déconnexion à la base de données
include('fermeture_bd.php');


?>