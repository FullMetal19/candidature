<?php
session_start();
$url_distinction=$_POST['lien_distinction'];

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
            $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
             } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
            }
            $_SESSION['message_validation_distinction']="Le fichier pdf est bien enregistré.";
        }
       

    }
    else {
        $_SESSION['message_erreur_distinction']="Le fichier doit être en pdf.";
        }
    }
    }

   if($url_distinction!=""){
        $fichier_licence="distinction.pdf";
            
        require_once("ouverture_bd_pdo.php");
    
        $verification=$con->prepare( "SELECT * FROM ec_dossier WHERE auteur=? AND nom_fichier=?");
        $verification->execute(array($auteur,$fichier_licence));
        $tab_verification = $verification->fetchALL();
        $nombre = count($tab_verification); 
        // $nombre=$tab_verification['nombre'];
        $verification->closeCursor();

        if($nombre>0){
          $requete_mise_a_jour=$con->prepare("UPDATE ec_dossier SET nom_fichier=:fichier_licence, lien=:url_licence WHERE auteur=:auteur AND nom_fichier=:fichier_licence ");
          $requete_mise_a_jour->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_distinction,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_distinction,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_distinction']="Le lien est bien enregistré.";
    }


    header('location: http://localhost/candidature/mon-compte/');


   





?>