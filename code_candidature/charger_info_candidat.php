<?php
session_start();
echo $prenom = $_POST['prenom'];
echo $nom = $_POST['nom'];
echo $date_de_naissance = $_POST['date_de_naissance'];
echo $genre = $_POST['genre'];
echo $adresse = $_POST['adresse'];
echo $tel = $_POST['tel'];
echo $mail = $_POST['mail'];

$mail_session = $_SESSION['mail'];
$_SESSION['choix_genre']=$genre;

$con = mysqli_connect("localhost","root","","ussein_candidature");
$req_info = mysqli_query($con,"UPDATE ec_connexion SET prenom='$prenom',nom='$nom',date_de_naissance='$date_de_naissance',telephone='$tel',adresse='$adresse',genre='$genre' WHERE mail='$mail_session'");
$_SESSION['info']="Enregistrement effectuer.Allez dans *Mon dosssier* pour le voir";
mysqli_close($con);
header('location: http://localhost/candidature/mon-compte/');

?>