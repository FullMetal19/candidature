<?php
session_start();
echo $prenom = $_POST['prenom'];
echo $nom = $_POST['nom'];
echo $date_de_naissance = $_POST['date_de_naissance'];
echo $genre = $_POST['genre'];
echo $adresse = $_POST['adresse'];
echo $tel = $_POST['tel'];



$mail_session = $_SESSION['mail'];
$_SESSION['choix_genre']=$genre;

                // connexion à la base de données 
require_once("ouverture_bd_pdo.php");

$verification=$con->prepare("UPDATE ec_connexion SET prenom= :prenom, nom= :nom, date_de_naissance= :date_de_naissance, telephone= :telephone, adresse= :adresse, genre= :genre WHERE mail= :mail_session");
$verification->execute(array(
    'prenom'=>$prenom,
    'nom'=>$nom,
    'telephone'=>$tel,
    'date_de_naissance'=>$date_de_naissance,
    'genre'=>$genre,
    'adresse'=>$adresse, 
    'mail_session'=>$mail_session                     
));
$verification->closeCursor();

$_SESSION['info']="Enregistrement effectuer.Allez dans *Mon dosssier* pour le voir";

header('location: http://localhost/candidature/mon-compte/');

?>