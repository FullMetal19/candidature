<?php
session_start();
$url_licence=$_POST['lien_licence'];
$url_master=$_POST['lien_master'];
$url_doctorat=$_POST['lien_doctorat'];

$auteur= $_SESSION['mail'];
$con=mysqli_connect("localhost","root","","ussein_candidature");
// $requete=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur'");
// $verification=mysqli_num_rows($requete);
// if($verification==0){
//     mkdir('repertoire/'.$auteur);
//     }
// insertion licence
if(!empty($_FILES['fichier_licence'])){
    $erreur_fichier=$_FILES['fichier_licence']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fichier_licence']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
      $fichier_licence="licence.pdf";

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$fichier_licence'");
      $verification1=mysqli_num_rows($requete1);
      

      $chemin_fichier_origine=$_FILES['fichier_licence']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$fichier_licence;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification1 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$fichier_licence', lien='' WHERE auteur='$auteur' AND nom_fichier='$fichier_licence'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$fichier_licence','$auteur','')");
            }
            $_SESSION['message_validation_l']="Le fichier pdf est bien enregistré.";
        }
    }
    else {
        $_SESSION['message_erreur_l']="Le fichier doit être en pdf.";
        }
    }
    }

            // lien licence
        if($url_licence!=""){
                  $fichier_licence="licence.pdf";
            
                  $requete1=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$fichier_licence'");
                  $verification1=mysqli_num_rows($requete1);
                      
                      if($verification1 >0){
                      $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$fichier_licence', lien='$url_licence' WHERE auteur='$auteur' AND nom_fichier='$fichier_licence' ");
                       } 
                      else{
                        $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$fichier_licence','$auteur','$url_licence')");
                        }
                        $_SESSION['message_validation_l']="Le fichier pdf est bien enregistré.";
                }



// insertion master

if(!empty($_FILES['fichier_master'])){
    $erreur_fichier=$_FILES['fichier_master']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fichier_master']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
      $fichier_master="master.pdf";

      $requete2=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$fichier_master'");
      $verification2=mysqli_num_rows($requete2);
      
      

      $chemin_fichier_origine=$_FILES['fichier_master']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$fichier_master;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification2 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$fichier_master', lien='' WHERE auteur='$auteur' AND nom_fichier='$fichier_master' ");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$fichier_master','$auteur','')");
            }
            $_SESSION['message_validation_m']="Le fichier pdf est bien enregistré.";
        }
    }
    else {
        $_SESSION['message_erreur_m']="Le fichier doit être en pdf.";
        }
    }
    }

     // lien master
    if($url_master!=""){
        $fichier_master="master.pdf";
  
        $requete2=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$fichier_master'");
        $verification2=mysqli_num_rows($requete2);
            
            if($verification2 >0){
            $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$fichier_master', lien='$url_master' WHERE auteur='$auteur' AND nom_fichier='$fichier_master' ");
             } 
            else{
              $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$fichier_master','$auteur','$url_master')");
              }
              $_SESSION['message_validation_l']="Le fichier pdf est bien enregistré.";
      }


    // insertion doctorat
    if(!empty($_FILES['fichier_doctorat'])){
        $erreur_fichier=$_FILES['fichier_doctorat']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['fichier_doctorat']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
          $fichier_doctorat="doctorat.pdf";
    
          $requete3=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$fichier_doctorat'");
          $verification3=mysqli_num_rows($requete3);
          
          
    
          $chemin_fichier_origine=$_FILES['fichier_doctorat']['tmp_name'];
          $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$fichier_doctorat;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
              
              if($verification3 >0){
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$fichier_doctorat',lien='' WHERE auteur='$auteur' AND nom_fichier='$fichier_doctorat'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$fichier_doctorat','$auteur','')");
                }
                $_SESSION['message_validation_d']="Le fichier pdf est bien enregistré.";
            }
        }
        else {
            $_SESSION['message_erreur_d']="Le fichier doit être en pdf.";
            }
        }
        }


         // lien doctorat
         if($url_doctorat!=""){
            $fichier_doctorat="doctorat.pdf";
      
            $requete3=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$fichier_doctorat'");
            $verification3=mysqli_num_rows($requete3);
                
                if($verification3 >0){
                $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$fichier_doctorat', lien='$url_doctorat' WHERE auteur='$auteur' AND nom_fichier='$fichier_doctorat' ");
                 } 
                else{
                  $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$fichier_doctorat','$auteur','$url_doctorat')");
                  }
                  $_SESSION['message_validation_l']="Le fichier pdf est bien enregistré.";
          }


        header('location: http://localhost/candidature/mon-compte/');


   





?>