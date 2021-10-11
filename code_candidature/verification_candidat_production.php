<?php
session_start();

$auteur= $_SESSION['mail'];

$url_brevet=$_POST['lien_brevet'];
$con=mysqli_connect("localhost","root","","ussein_candidature");
// $requete=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur'");
// $verification=mysqli_num_rows($requete);
// if($verification==0){
//     mkdir('repertoire/'.$auteur);
//     }
// insertion licence
if(!empty($_FILES['brevet'])){
    $erreur_fichier=$_FILES['brevet']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['brevet']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="brevet.pdf";

      $requete=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification=mysqli_num_rows($requete);
      
      

      $chemin_fichier_origine=$_FILES['brevet']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
            }
        }
        $_SESSION['message_erreur_brevet']="Le fichier pdf est bien enregistrer.";

    }
    else {
        $_SESSION['message_erreur_brevet']="Le fichier doit être en pdf.";
        }
    }
    }

    //                          ********************Ajout lien *****************************

    require_once("ouverture_bd_pdo.php");

    if($url_brevet!=""){
        $fichier_licence="brevet.pdf";
            
     
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
              'url_licence'=>$url_brevet,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_brevet,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_grade']="Le lien est bien enregistré.";
    }


    header('location: http://localhost/candidature/mon-compte/');
    
?>