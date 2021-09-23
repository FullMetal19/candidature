<?php
session_start();

$auteur= $_SESSION['mail'];
$con=mysqli_connect("localhost","root","","ussein_candidature");
// $requete=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur'");
// $verification=mysqli_num_rows($requete);
// if($verification==0){
//     mkdir('repertoire/'.$auteur);
//     }
// insertion licence
if(!empty($_FILES['distinction'])){
    $erreur_fichier=$_FILES['distinction']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['distinction']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="distinction.pdf";

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      

      $chemin_fichier_origine=$_FILES['distinction']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification1 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
            }
            $_SESSION['message_validation_distinction']="Le fichier pdf est bien enregistré.";
        }
       

    }
    else {
        $_SESSION['message_erreur_distinction']="Le fichier doit être en pdf.";
        }
    }
    }


    header('location: http://localhost/candidature/mon-compte/');


   





?>