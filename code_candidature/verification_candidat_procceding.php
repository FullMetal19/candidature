<?php
session_start();

$auteur= $_SESSION['mail'];
$url_procceding=$_POST['lien_procceding'];

$con=mysqli_connect("localhost","root","","ussein_candidature");
// $requete=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur'");
// $verification=mysqli_num_rows($requete);
// if($verification==0){
//     mkdir('repertoire/'.$auteur);
//     }
// insertion licence
if(!empty($_FILES['procceding'])){
    $erreur_fichier=$_FILES['procceding']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['procceding']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="procceding.pdf";

      $requete=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification=mysqli_num_rows($requete);
      
      

      $chemin_fichier_origine=$_FILES['procceding']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
            }
            $_SESSION['message_erreur_procceding']="Le fichier pdf est bien enregister.";
        }

    }
    else {
        $_SESSION['message_erreur_procceding']="Le fichier doit être en pdf.";
        }
    }
    }

    if($url_procceding!=""){
        $fichier_licence="procceding.pdf";
            
        $requete1=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$fichier_licence'");
        $verification1=mysqli_num_rows($requete1);
            
            if($verification1 >0){
            $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$fichier_licence', lien='$url_procceding' WHERE auteur='$auteur' AND nom_fichier='$fichier_licence' ");
             } 
            else{
              $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$fichier_licence','$auteur','$url_procceding')");
              }
              $_SESSION['message_erreur_procceding']="Le lien est bien enregistré.";
    }


    header('location: http://localhost/candidature/mon-compte/');


?>