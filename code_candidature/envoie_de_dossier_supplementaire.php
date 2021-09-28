<?php
session_start();
$_SESSION['info_candidat'];
$auteur= $_SESSION['mail'];
$id_offre=trim(strchr($_SESSION['info_candidat'],' ')) ;
$con=mysqli_connect("localhost","root","","ussein_candidature");
// $requete=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur'");
// $verification=mysqli_num_rows($requete);
// if($verification==0){
//     mkdir('repertoire/'.$auteur);
//     }
// insertion cv
if(!empty($_FILES['cv'])){
    $erreur_fichier=$_FILES['cv']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['cv']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
      $fichier_cv="cv.pdf";

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$fichier_cv'");
      $verification1=mysqli_num_rows($requete1);
      

      $chemin_fichier_origine=$_FILES['cv']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$fichier_cv;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification1 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$fichier_cv' WHERE auteur='$auteur'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$fichier_cv','$auteur')");
            }
            $_SESSION['notif_cv']="Le fichier pdf est bien enregistré.";
        }
    }
    else {
        $_SESSION['notif_cv']="Le fichier doit être en pdf.";
        }
    }
    }



// insertion master

if(!empty($_FILES['lettre_de_motivation'])){
    $erreur_fichier=$_FILES['lettre_de_motivation']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['lettre_de_motivation']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
      $lettre_de_motivation="lettre_de_motivation.pdf";

      $requete2=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$lettre_de_motivation'");
      $verification2=mysqli_num_rows($requete2);
      
      

      $chemin_fichier_origine=$_FILES['lettre_de_motivation']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$lettre_de_motivation;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification2 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$lettre_de_motivation' WHERE auteur='$auteur'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$lettre_de_motivation','$auteur')");
            }
            $_SESSION['notif_lm']="Le fichier pdf est bien enregistré.";
        }
    }
    else {
        $_SESSION['notif_lm']="Le fichier doit être en pdf.";
        }
    }
    }

    // insertion doctorat
    if(!empty($_FILES['autre_fichier'])){
        $erreur_fichier=$_FILES['autre_fichier']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['autre_fichier']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
          $autre_fichier="autre_fichier.pdf";
    
          $requete3=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$autre_fichier'");
          $verification3=mysqli_num_rows($requete3);
          
          
    
          $chemin_fichier_origine=$_FILES['autre_fichier']['tmp_name'];
          $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$autre_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
              
              if($verification3 >0){
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$autre_fichier' WHERE auteur='$auteur'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$autre_fichier','$auteur')");
                }
                $_SESSION['notif_af']="Le fichier pdf est bien enregistré.";
            }
        }
        else {
            $_SESSION['notif_af']="Le fichier doit être en pdf.";
            }
        }
        }


        header('location: http://localhost/candidature/fiche-a-postuler/?info='.$auteur.'%20'.$id_offre);
    


    //   http://localhost/candidature/fiche-a-postuler/?info=manemamadouyaya@gmail.com%201




?>