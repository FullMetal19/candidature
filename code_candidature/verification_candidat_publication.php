<?php
session_start();

$auteur= $_SESSION['mail'];
$con=mysqli_connect("localhost","root","","ussein_candidature");

// insertion licence
if(!empty($_FILES['Article_domaine'])){
    $erreur_fichier=$_FILES['Article_domaine']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['Article_domaine']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="article_domaine.pdf";

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      

      $chemin_fichier_origine=$_FILES['Article_domaine']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification1 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
            }
            $_SESSION['message_validation_Article_domaine']="Le fichier pdf est bien enregistré.";
        }

    }
    else {
        $_SESSION['message_erreur_Article_domaine']="Le fichier doit être en pdf.";
        }
    }
    }

    if(!empty($_FILES['article_hors_domaine'])){
        $erreur_fichier=$_FILES['article_hors_domaine']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['article_hors_domaine']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="article_hors_domaine.pdf";
    
          $requete2=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
          $verification2=mysqli_num_rows($requete2);
          
          
    
          $chemin_fichier_origine=$_FILES['article_hors_domaine']['tmp_name'];
          $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
              
              if($verification2 >0){
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
                }
                $_SESSION['message_validation_article_hors_domaine']="Le fichier pdf est bien enregistré.";
            }
    
        }
        else {
            $_SESSION['message_erreur_article_hors_domaine']="Le fichier doit être en pdf.";
            }
        }
    }

    if(!empty($_FILES['livre_domaine'])){
        $erreur_fichier=$_FILES['livre_domaine']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['livre_domaine']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="livre_domaine.pdf";
    
          $requete3=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
          $verification3=mysqli_num_rows($requete3);
          
          
    
          $chemin_fichier_origine=$_FILES['livre_domaine']['tmp_name'];
          $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
              
              if($verification3 >0){
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
                }
                $_SESSION['message_validation_livre_domaine']="Le fichier pdf est bien enregistré.";
            }
    
        }
        else {
            $_SESSION['message_erreur_livre_domaine']="Le fichier doit être en pdf .";
            }
        }
    }


    if(!empty($_FILES['livre_vulgarisation'])){
        $erreur_fichier=$_FILES['livre_vulgarisation']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['livre_vulgarisation']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="livre_vulgarisation.pdf";
    
          $requete4=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
          $verification4=mysqli_num_rows($requete4);
          
          
    
          $chemin_fichier_origine=$_FILES['livre_vulgarisation']['tmp_name'];
          $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
              
              if($verification4 >0){
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
                }
                $_SESSION['message_validation_livre_vulgarisation']="Le fichier pdf est bien enregistré.";
            }
    
        }
        else {
            $_SESSION['message_erreur_livre_vulgarisation']="Le fichier doit être en pdf.";
            }
        }
    }





    header('location: http://localhost/candidature/mon-compte/');


   





?>