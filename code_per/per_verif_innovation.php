<?php
session_start();

$url_Brevet=$_POST['lien_brevet'];
$url_Distinction=$_POST['lien_distinction'];


// $auteur= $_SESSION['mail'];
$con=mysqli_connect("localhost","root","","ussein_candidature");

$identifiant_PER = $_SESSION['matricule'];




// insertion licence
if(!empty($_FILES['fileBrevet'])){
    $erreur_fichier=$_FILES['fileBrevet']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileBrevet']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Brevet.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileBrevet']['tmp_name'];
      $chemin_fichier_arriver='repertoire_per/'.$identifiant_PER.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){

            if($verification1 >0){
                $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
             } 
          else{
            $requete=mysqli_query($con,"INSERT INTO  ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
            }
            $_SESSION['message_validation_secondaire']="Le fichier pdf est bien enregistrer.";
        }
        

    }
    else {
        $_SESSION['message_erreur_secondaire']="Le fichier doit être en pdf.";

        }
    }
    }

    // insertion licence
if(!empty($_FILES['fileDistinction'])){
    $erreur_fichier=$_FILES['fileDistinction']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDistinction']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Distinction.pdf";

      $requete2=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification2=mysqli_num_rows($requete2);
      

      $chemin_fichier_origine=$_FILES['fileDistinction']['tmp_name'];
      $chemin_fichier_arriver='repertoire_per/'.$identifiant_PER.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification2 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
            }
            $_SESSION['message_validation_industrie']="Le fichier pdf est bien enregistré.";
        }
       

    }
    else {
        $_SESSION['message_erreur_industrie']="Le fichier doit être en pdf.";
        }
    }
    }








    require_once("ouverture_bd_pdo.php");
    
    if($url_Brevet!=""){
        $fichier_licence="Brevet.pdf";          //nom fichier à enregistrer  
    
        $verification=$con->prepare( "SELECT * FROM ec_dossier_per WHERE matricule=? AND nom_fichier=?");
        $verification->execute(array($identifiant_PER,$fichier_licence));
        $tab_verification = $verification->fetchALL();
        $nombre = count($tab_verification); 
        // $nombre=$tab_verification['nombre'];
        $verification->closeCursor();

        if($nombre>0){
          $requete_mise_a_jour=$con->prepare("UPDATE ec_dossier_per SET nom_fichier=:fichier_licence, lien=:url_licence WHERE matricule=:auteur AND nom_fichier=:fichier_licence ");
          $requete_mise_a_jour->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_Brevet,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence


          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_Brevet,
                  'auteur'=>$identifiant_PER
              ));
              //Modifier url licence
              
              $requete->closeCursor();
          }
              $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
      }





      if($url_Distinction!=""){
        $fichier_licence="Distinction.pdf";
            
        $verification=$con->prepare( "SELECT * FROM ec_dossier_per WHERE matricule=? AND nom_fichier=?");
        $verification->execute(array($identifiant_PER,$fichier_licence));
        $tab_verification = $verification->fetchALL();
        $nombre = count($tab_verification); 
        // $nombre=$tab_verification['nombre'];
        $verification->closeCursor();

        if($nombre>0){
          $requete_mise_a_jour=$con->prepare("UPDATE ec_dossier_per SET nom_fichier=:fichier_licence, lien=:url_licence WHERE matricule=:auteur AND nom_fichier=:fichier_licence ");
          $requete_mise_a_jour->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_Distinction,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_Distinction,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_coordonnateur']="Le lien est bien enregistré.";
            }        

header("location :".$_SERVER['HTTP_REFERER']);



?>