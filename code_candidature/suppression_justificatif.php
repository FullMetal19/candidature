
<?php
session_start();

$nom_fichier=$_GET['fiche'];
$auteur=$_SESSION['mail'];
$con=mysqli_connect('localhost','root','','ussein_candidature');

$requete1=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
                  $verification1=mysqli_num_rows($requete1);
                      
                      if($verification1 >0){
                        $requete=mysqli_query($con,"DELETE FROM ec_dossier WHERE nom_fichier='$nom_fichier' AND auteur='$auteur' ");
                        $_SESSION['message_validation_l']="Le fichier est bien supprimé.";
                        header('Location:http://localhost/candidature/mon-compte/');
                        exit;
                       } 
                      else{
                        $_SESSION['message_validation_l']="Le fichier n'existe pas.";
                        header('Location:http://localhost/candidature/mon-compte/');
                        exit;
                }






