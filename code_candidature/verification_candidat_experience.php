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
if(!empty($_FILES['secondaire'])){
    $erreur_fichier=$_FILES['secondaire']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['secondaire']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="secondaire.pdf";

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      

      $chemin_fichier_origine=$_FILES['secondaire']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification1 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
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
if(!empty($_FILES['industrie'])){
    $erreur_fichier=$_FILES['industrie']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['industrie']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="industrie.pdf";

      $requete2=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification2=mysqli_num_rows($requete2);
      
      

      $chemin_fichier_origine=$_FILES['industrie']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification2 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
            }
            $_SESSION['message_validation_industrie']="Le fichier pdf est bien enregistré.";
        }
       

    }
    else {
        $_SESSION['message_erreur_industrie']="Le fichier doit être en pdf.";
        }
    }
    }



    // insertion licence
    if(!empty($_FILES['laboratoire'])){
        $erreur_fichier=$_FILES['laboratoire']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['laboratoire']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="laboratoire.pdf";
    
          $requete3=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
          $verification3=mysqli_num_rows($requete3);
          
          
    
          $chemin_fichier_origine=$_FILES['laboratoire']['tmp_name'];
          $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
              
              if($verification3 >0){
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
                }

            }
            $_SESSION['message_validation_laboratoire']="Le fichier pdf est bien enregistré.";
    
        }
        else {
            $_SESSION['message_erreur_laboratoire']="Le fichier doit être en pdf.";
            }
        }
        }


            // insertion licence
    if(!empty($_FILES['institution'])){
        $erreur_fichier=$_FILES['institution']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['institution']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="institution.pdf";
    
          $requete4=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
          $verification4=mysqli_num_rows($requete4);
          
          
    
          $chemin_fichier_origine=$_FILES['institution']['tmp_name'];
          $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
              
              if($verification4 >0){
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
                }
            }
            $_SESSION['message_validation_institution']="Le fichier pdf est bien enregistré.";
    
        }
        else {
            $_SESSION['message_erreur_institution']="Le fichier doit être en pdf.";
        }
    }
    }

    // insertion licence
if(!empty($_FILES['superieur'])){
    $erreur_fichier=$_FILES['superieur']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['superieur']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="superieur.pdf";

      $requete5=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification5=mysqli_num_rows($requete5);
      
      

      $chemin_fichier_origine=$_FILES['superieur']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification5 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
            }
            $_SESSION['message_validation_superieur']="Le fichier pdf est bien enregistré.";
        }
       

    }
    else {
        $_SESSION['message_erreur_superieur']="Le fichier doit être en pdf.";
        }
    }
    }

    // insertion licence
if(!empty($_FILES['gestion'])){
    $erreur_fichier=$_FILES['gestion']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['gestion']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="gestion.pdf";

      $requete6=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification6=mysqli_num_rows($requete6);
      
      

      $chemin_fichier_origine=$_FILES['gestion']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification6 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
            }

            $_SESSION['message_validation_gestion']="Le fichier pdf est bien enregistré.";
        }
       

    }
    else {
        $_SESSION['message_erreur_gestion']="Le fichier doit être en pdf.";
    }
    }
    }

    // insertion licence
if(!empty($_FILES['investigateur'])){
    $erreur_fichier=$_FILES['investigateur']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['investigateur']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="investigateur.pdf";

      $requete7=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification7=mysqli_num_rows($requete7);
      
      

      $chemin_fichier_origine=$_FILES['investigateur']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification7 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
            }
            $_SESSION['message_validation_investigateur']="Le fichier pdf est bien enregister.";
        }
       

    }
    else {
        $_SESSION['message_erreur_investigateur']="Le fichier doit être en pdf.";
        }
    }
    }


    // insertion licence
if(!empty($_FILES['coordonateur'])){
    $erreur_fichier=$_FILES['coordonateur']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['coordonateur']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="coordonateur.pdf";

      $requete8=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification8=mysqli_num_rows($requete8);
      
      

      $chemin_fichier_origine=$_FILES['coordonateur']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification8 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier' WHERE auteur='$auteur'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur')");
            }
        }
       

    }
    else {
        $_SESSION['message_erreur_coordonateur']="Le fichier doit être en pdf.";
        }
    }
    }


    
    
    header('location: http://localhost/candidature/mon-compte/');
    
    
       
    
    
    
    
    
    ?>