<?php
session_start();
 
$auteur= $_SESSION['mail'];
$url_article_domaine=$_POST['lien_article_domaine'];
$url_article_hors_domaine=$_POST['lien_article_hors_domaine'];
$url_livre_domaine=$_POST['lien_livre_domaine'];
$url_livre_vulgarisation=$_POST['lien_livre_vulgarisation'];

$con=mysqli_connect("localhost","root","","ussein_candidature");

// insertion licence
if(!empty($_FILES['article_domaine'])){
    $erreur_fichier=$_FILES['article_domaine']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['article_domaine']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="article_domaine.pdf";

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      

      $chemin_fichier_origine=$_FILES['article_domaine']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification1 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
            }
            $_SESSION['message_validation_article_domaine']="Le fichier pdf est bien enregistré.";
        }

    }
    else {
        $_SESSION['message_erreur_article_domaine']="Le fichier doit être en pdf.";
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
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
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
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
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
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier',lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
                }
                $_SESSION['message_validation_livre_vulgarisation']="Le fichier pdf est bien enregistré.";
            }
    
        }
        else {
            $_SESSION['message_erreur_livre_vulgarisation']="Le fichier doit être en pdf.";
            }
        }
    }

      //                          ********************Ajout lien *****************************

      require_once("ouverture_bd_pdo.php");



    if($url_article_domaine!=""){
        $fichier_licence="article_domaine.pdf";
            
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
              'url_licence'=>$url_article_domaine,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_article_domaine,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_validation_article_domaine']="Le lien est bien enregistré.";
    }

   

    if($url_article_hors_domaine!=""){
        $fichier_licence="article_hors_domaine.pdf";
            
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
              'url_licence'=>$url_article_hors_domaine,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_article_hors_domaine,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_validation_article_hors_domaine']="Le lien est bien enregistré.";
    }



    

    if($url_livre_domaine!=""){
        $fichier_licence="livre_domaine.pdf";
            
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
              'url_licence'=>$url_livre_domaine,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_livre_domaine,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_validation_livre_domaine']="Le lien est bien enregistré.";
    }






   

    if($url_livre_vulgarisation!=""){
        $fichier_licence="livre_vulgarisation.pdf";
            
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
              'url_licence'=>$url_livre_vulgarisation,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_livre_vulgarisation,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_validation_livre_vulgarisation']="Le lien est bien enregistré.";
    }



    header('location: http://localhost/candidature/mon-compte/');


   





?>