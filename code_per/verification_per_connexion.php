<?php
session_start();

// Récupération des valeurs de la POST dans sc_connexion_per

$matricule = $_POST['matricule'];
$mot_de_passe = $_POST['mot_de_passe'];


// Connexion à la base de données PDO
try{
    $con = new PDO('mysql:host=localhost;dbname=ussein_candidature;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



if(!empty($matricule) && !empty($mot_de_passe)){
// Requete préparé de la vérification des données saisies par l'utilisateur
    $verification=$con->prepare( "SELECT * FROM ec_per_connexion WHERE matricule=? AND mot_de_passe=?");
    $verification->execute(array($matricule,$mot_de_passe));
    $tab_verification = $verification->fetchALL();
    $nombre = count($tab_verification); 
    $verification->closeCursor();

    if($nombre!=0){
        
        $verifications=$con->prepare( "SELECT * FROM ec_per_connexion WHERE matricule=? AND mot_de_passe=?");
        $verifications->execute(array($matricule,$mot_de_passe));
        $donnees=$verifications->fetch();

        // Déclaration des variables session (à continuer)
        $_SESSION['per_nom'] = $donnees['nom'];
        $_SESSION['per_prenom'] = $donnees['prenom'];
        $_SESSION['per_matricule'] = $donnees['matricule'];
        $_SESSION['per_mail'] = $donnees['mail'];
        $_SESSION['per_ufr'] = $donnees['ufr'];
        $verifications->closeCursor();

        header("Location http://localhost/candidature/.......");
    }else{
        $_SESSION['per_erreur'] = "Les informations saisies ne sont pas valide.";
        header("location :".$_SERVER['HTTP_REFERER']);
    }

}else{
    $_SESSION['per_erreur'] = "La matricule et/ou le Mot de passe ne peuvent pas être nuls.";
    header("location :".$_SERVER['HTTP_REFERER']);
}


?>