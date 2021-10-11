<?php
session_start();

$url_secondaire=$_POST['lien_secondaire'];
$url_industrie=$_POST['lien_industrie'];
$url_superieur=$_POST['lien_superieur'];
$url_laboratoire=$_POST['lien_laboratoire'];
$url_institution=$_POST['lien_institution'];
$url_gestion=$_POST['lien_gestion'];
$url_coordonnateur=$_POST['lien_coordonnateur'];
$url_investigateur=$_POST['lien_investigateur'];

$auteur= $_SESSION['mail'];
$con=mysqli_connect("localhost","root","","ussein_candidature");

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
                $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
             } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
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
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur'AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
            }
            $_SESSION['message_validation_industrie']="Le fichier pdf est bien enregistré.";
        }
       

    }
    else {
        $_SESSION['message_erreur_industrie']="Le fichier doit être en pdf.";
        }
    }
    }

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
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
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
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
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
            $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur'AND nom_fichier='$nom_fichier'");
         } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
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
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier',lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
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
if(!empty($_FILES['coordonnateur'])){
    $erreur_fichier=$_FILES['coordonnateur']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['coordonnateur']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="coordonnateur.pdf";

      $requete8=mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
      $verification8=mysqli_num_rows($requete8);
      
      

      $chemin_fichier_origine=$_FILES['coordonnateur']['tmp_name'];
      $chemin_fichier_arriver='ec_repertoire/'.$auteur.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification8 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND  nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
            }
        }
       

    }
    else {
        $_SESSION['message_erreur_coordonnateur']="Le fichier doit être en pdf.";
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
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier SET nom_fichier='$nom_fichier', lien='' WHERE auteur='$auteur' AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier','$auteur','')");
            }

            $_SESSION['message_validation_gestion']="Le fichier pdf est bien enregistré.";
        }
       

    }
    else {
        $_SESSION['message_erreur_gestion']="Le fichier doit être en pdf.";
    }
    }
    }



//                          ********************Ajout lien *****************************

    require_once("ouverture_bd_pdo.php");
    
    if($url_secondaire!=""){
        $fichier_licence="secondaire.pdf";       
    
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
              'url_licence'=>$url_secondaire,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_secondaire,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
      }





    if($url_industrie!=""){
        $fichier_licence="industrie.pdf";
            
        
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
                        'url_licence'=>$url_industrie,
                        'auteur'=>$auteur,
                        'nom_fichier'=>$fichier_licence
                    ));
                    $requete_mise_a_jour->closeCursor();
                    } 
                    else{
                        $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
                        $requete->execute(array(
                            'fichier_licence'=>$fichier_licence,
                            'url_licence'=>$url_industrie,
                            'auteur'=>$auteur
                        ));
                        $requete->closeCursor();
                    }
              $_SESSION['message_erreur_industrie']="Le lien est bien enregistré.";
    }



    // insertion licence
    

        if($url_laboratoire!=""){
            $fichier_licence="laboratoire.pdf";
                
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
              'url_licence'=>$url_laboratoire,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_laboratoire,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
                  $_SESSION['message_erreur_laboratoire']="Le lien est bien enregistré.";
        }


            

    if($url_institution!=""){
        $fichier_licence="institution.pdf";
            
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
              'url_licence'=>$url_institution,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_institution,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_institution']="Le lien est bien enregistré.";
    }

   

    if($url_superieur!=""){
        $fichier_licence="superieur.pdf";
            
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
              'url_licence'=>$url_superieur,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_superieur,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_superieur']="Le lien est bien enregistré.";
            }


    

    if($url_gestion!=""){
        $fichier_licence="gestion.pdf";
            
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
              'url_licence'=>$url_gestion,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_gestion,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_gestion']="Le lien est bien enregistré.";
            }

  

    if($url_investigateur!=""){
        $fichier_licence="investigateur.pdf";
            
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
              'url_licence'=>$url_investigateur,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_investigateur,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_investigateur']="Le lien est bien enregistré.";
            }


    
    if($url_coordonnateur!=""){
        $fichier_licence="coordonnateur.pdf";
            
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
              'url_licence'=>$url_coordonnateur,
              'auteur'=>$auteur,
              'nom_fichier'=>$fichier_licence
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_coordonnateur,
                  'auteur'=>$auteur
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_coordonnateur']="Le lien est bien enregistré.";
            }


    
    
    header('location: http://localhost/candidature/mon-compte/');
    
    
       
    
    
    
    
    
    ?>