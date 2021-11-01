<?php
session_start();

$url_A_S_indexe=$_POST['lien_indexe'];
$url_A_S_nonIndexe=$_POST['lien_nonIndexe'];
$url_proceeding=$_POST['lien_proceeding'];
$url_chapitreLivre=$_POST['lien_chapitre'];
$url_melange=$_POST['lien_melange'];
$url_ouvrage=$_POST['lien_ouvrage'];
$url_directeur_revue=$_POST['lien_revue'];
$url_ficheTechnique=$_POST['lien_ficheTechnique'];
$url_Vulgarisation=$_POST['lien_vulgarisation'];
$url_conf_internationales=$_POST['lien_conf_internationales'];
$url_conf_nationales=$_POST['lien_conf_nationales'];
$url_conferencier_inter=$_POST['lien_conferencier_inter'];



// $auteur= $_SESSION['mail'];
$con=mysqli_connect("localhost","root","","ussein_candidature");
$identifiant_PER = $_SESSION['matricule'];

// insertion licence
if(!empty($_FILES['fileIndexe'])){
    $erreur_fichier=$_FILES['fileIndexe']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileIndexe']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="A-S-Indexe.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileIndexe']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;

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
if(!empty($_FILES['fileNonIndexe'])){
    $erreur_fichier=$_FILES['fileNonIndexe']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileNonIndexe']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="A-S-NonIndexe.pdf";

      $requete2=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification2=mysqli_num_rows($requete2);
      

      $chemin_fichier_origine=$_FILES['fileNonIndexe']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;

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

    if(!empty($_FILES['fileProceeding'])){
        $erreur_fichier=$_FILES['fileProceeding']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['fileProceeding']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="Proceeding.pdf";
    
          $requete3=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
          $verification3=mysqli_num_rows($requete3);
          
          
    
          $chemin_fichier_origine=$_FILES['fileProceeding']['tmp_name'];
          $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
              
              if($verification3 >0){
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier VALUES ('$nom_fichier',$identifiant_PER','')");
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
    if(!empty($_FILES['fileChapitre'])){
        $erreur_fichier=$_FILES['fileChapitre']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['fileChapitre']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="Chapitre.pdf";
    
          $requete4=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE  matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
          $verification4=mysqli_num_rows($requete4);
          
          
    
          $chemin_fichier_origine=$_FILES['fileChapitre']['tmp_name'];
          $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
              
              if($verification4 >0){
              $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
               } 
              else{
                $requete=mysqli_query($con,"INSERT INTO ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
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
if(!empty($_FILES['fileMelange'])){
    $erreur_fichier=$_FILES['fileMelange']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileMelange']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Melange.pdf";

      $requete5=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification5=mysqli_num_rows($requete5);
      
      

      $chemin_fichier_origine=$_FILES['fileMelange']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
        if($verification5 >0){
            $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
         } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
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
if(!empty($_FILES['fileOuvrage'])){
    $erreur_fichier=$_FILES['fileOuvrage']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileOuvrage']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Ouvrage.pdf";

      $requete7=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification7=mysqli_num_rows($requete7);
      
      

      $chemin_fichier_origine=$_FILES['fileOuvrage']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification7 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier',lien='' WHERE'matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
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
if(!empty($_FILES['fileRevue'])){
    $erreur_fichier=$_FILES['fileRevue']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileRevue']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Revue.pdf";

      $requete8=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification8=mysqli_num_rows($requete8);
      
      

      $chemin_fichier_origine=$_FILES['fileRevue']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification8 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND  nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
            }
        }
       

    }
    else {
        $_SESSION['message_erreur_coordonnateur']="Le fichier doit être en pdf.";
        }
    }
    }

    // insertion licence
if(!empty($_FILES['fileFicheTechnique'])){
    $erreur_fichier=$_FILES['fileFicheTechnique']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileFicheTechnique']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="FicheTechnique.pdf";

      $requete6=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification6=mysqli_num_rows($requete6);
      
      

      $chemin_fichier_origine=$_FILES['fileFicheTechnique']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification6 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
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
if(!empty($_FILES['fileVulgarisation'])){
    $erreur_fichier=$_FILES['fileVulgarisation']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileVulgarisation']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier= "Vulgarisation.pdf";

      $requete6=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification6=mysqli_num_rows($requete6);
      
      

      $chemin_fichier_origine=$_FILES['fileVulgarisation']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification6 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
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
        if(!empty($_FILES['fileconf_internationales'])){
            $erreur_fichier=$_FILES['fileconf_internationales']['error'];
            if($erreur_fichier==0){
            $nom_fichier_orgine=$_FILES['fileconf_internationales']['name'];
            $extension=strrchr($nom_fichier_orgine,".");
            if($extension== ".pdf" || $extension== ".PDF"){
                $nom_fichier= "conf_internationales.pdf";
        
              $requete6=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
              $verification6=mysqli_num_rows($requete6);
              
              
        
              $chemin_fichier_origine=$_FILES['fileconf_internationales']['tmp_name'];
              $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;
        
              if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
                  
                  if($verification6 >0){
                  $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
                   } 
                  else{
                    $requete=mysqli_query($con,"INSERT INTO ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
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
if(!empty($_FILES['fileconf_nationales'])){
    $erreur_fichier=$_FILES['fileconf_nationales']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileconf_nationales']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier= "conf_nationales.pdf";

      $requete6=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification6=mysqli_num_rows($requete6);
      
      

      $chemin_fichier_origine=$_FILES['fileconf_nationales']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;

      if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
          
          if($verification6 >0){
          $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
           } 
          else{
            $requete=mysqli_query($con,"INSERT INTO ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
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
        if(!empty($_FILES['fileconferencier_inter'])){
            $erreur_fichier=$_FILES['fileconferencier_inter']['error'];
            if($erreur_fichier==0){
            $nom_fichier_orgine=$_FILES['fileconferencier_inter']['name'];
            $extension=strrchr($nom_fichier_orgine,".");
            if($extension== ".pdf" || $extension== ".PDF"){
                $nom_fichier= "conferencier_inter.pdf";
        
              $requete6=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
              $verification6=mysqli_num_rows($requete6);
              
              
        
              $chemin_fichier_origine=$_FILES['fileconferencier_inter']['tmp_name'];
              $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;
        
              if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
                  
                  if($verification6 >0){
                  $requete_mise_a_jour=mysqli_query($con,"UPDATE ec_dossier_per SET nom_fichier='$nom_fichier', lien='' WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
                   } 
                  else{
                    $requete=mysqli_query($con,"INSERT INTO ec_dossier_per VALUES ('$nom_fichier','$identifiant_PER','')");
                    }
        
                    $_SESSION['message_validation_gestion']="Le fichier pdf est bien enregistré.";
                }
               
        
            }
            else {
                $_SESSION['message_erreur_gestion']="Le fichier doit être en pdf.";
            }
            }
        }

    



// //                          ******************** Ajout lien *****************************

    require_once("ouverture_bd_pdo.php");
    
    if($url_A_S_indexe!=""){
        $fichier_licence="A-S-Indexe.pdf";          //nom fichier à enregistrer  
    
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
              'url_licence'=>$url_A_S_indexe,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence


          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_A_S_indexe,
                  'auteur'=>$identifiant_PER
              ));
              //Modifier url licence

              $requete->closeCursor();
          }
              $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
      }





    if($url_A_S_nonIndexe!=""){
        $fichier_licence="A-S-NonIndexe.pdf";      
            
        
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
                        'url_licence'=>$url_A_S_nonIndexe,
                        'auteur'=>$identifiant_PER
                    ));
                    $requete_mise_a_jour->closeCursor();
                    } 
                    else{
                        $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                        $requete->execute(array(
                            'fichier_licence'=>$fichier_licence,
                            'url_licence'=>$url_A_S_nonIndexe,
                            'auteur'=>$identifiant_PER
                        ));
                        $requete->closeCursor();
                    }
              $_SESSION['message_erreur_industrie']="Le lien est bien enregistré.";
    }



    // insertion licence
    

        if($url_proceeding!=""){
            $fichier_licence="Proceeding.pdf";
                
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
              'url_licence'=>$url_proceeding,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_proceeding,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
                  $_SESSION['message_erreur_laboratoire']="Le lien est bien enregistré.";
        }


            

    if($url_chapitreLivre!=""){
        $fichier_licence="Chapitre.pdf";
            
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
              'url_licence'=>$url_chapitreLivre,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_chapitreLivre,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_institution']="Le lien est bien enregistré.";
    }

   

    if($url_melange!=""){
        $fichier_licence="melange.pdf";
            
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
              'url_licence'=>$url_melange,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_melange,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_superieur']="Le lien est bien enregistré.";
            }

            
    

    if($url_ouvrage!=""){
        $fichier_licence="Ouvrage.pdf";
            
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
              'url_licence'=>$url_ouvrage,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_ouvrage,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_gestion']="Le lien est bien enregistré.";
            }

  

    if($url_directeur_revue!=""){
        $fichier_licence="Revue.pdf";
            
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
              'url_licence'=>$url_directeur_revue,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_directeur_revue,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_investigateur']="Le lien est bien enregistré.";
            }


    
    if($url_ficheTechnique!=""){
        $fichier_licence="FicheTechnique.pdf";
            
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
              'url_licence'=>$url_ficheTechnique,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_ficheTechnique,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_coordonnateur']="Le lien est bien enregistré.";
            }

            if($url_Vulgarisation!=""){
                $fichier_licence="Vulgarisation.pdf";
                    
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
                      'url_licence'=>$url_Vulgarisation,
                      'auteur'=>$identifiant_PER
                  ));
                  $requete_mise_a_jour->closeCursor();
                  } 
                  else{
                      $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                      $requete->execute(array(
                          'fichier_licence'=>$fichier_licence,
                          'url_licence'=>$url_Vulgarisation,
                          'auteur'=>$identifiant_PER
                      ));
                      $requete->closeCursor();
                  }
                      $_SESSION['message_erreur_coordonnateur']="Le lien est bien enregistré.";
                    }




            if($url_conf_internationales!=""){
                $fichier_licence="conf_internationales.pdf";
                    
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
                      'url_licence'=>$url_conf_internationales,
                      'auteur'=>$identifiant_PER
                  ));
                  $requete_mise_a_jour->closeCursor();
                  } 
                  else{
                      $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                      $requete->execute(array(
                          'fichier_licence'=>$fichier_licence,
                          'url_licence'=>$url_conf_internationales,
                          'auteur'=>$identifiant_PER
                      ));
                      $requete->closeCursor();
                  }
                      $_SESSION['message_erreur_coordonnateur']="Le lien est bien enregistré.";
                    }

                    
                    
                    if($url_conf_nationales!=""){
                        $fichier_licence="conf_nationales.pdf";
                            
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
                              'url_licence'=>$url_conf_nationales,
                              'auteur'=>$identifiant_PER
                          ));
                          $requete_mise_a_jour->closeCursor();
                          } 
                          else{
                              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                              $requete->execute(array(
                                  'fichier_licence'=>$fichier_licence,
                                  'url_licence'=>$url_conf_nationales,
                                  'auteur'=>$identifiant_PER
                              ));
                              $requete->closeCursor();
                          }
                              $_SESSION['message_erreur_coordonnateur']="Le lien est bien enregistré.";
                            }

                    

                            if($url_conferencier_inter!=""){
                                $fichier_licence="conferencier_inter.pdf";
                                    
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
                                      'url_licence'=>$url_conferencier_inter,
                                      'auteur'=>$identifiant_PER
                                  ));
                                  $requete_mise_a_jour->closeCursor();
                                  } 
                                  else{
                                      $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                                      $requete->execute(array(
                                          'fichier_licence'=>$fichier_licence,
                                          'url_licence'=>$url_conferencier_inter,
                                          'auteur'=>$identifiant_PER
                                      ));
                                      $requete->closeCursor();
                                  }
                                      $_SESSION['message_erreur_coordonnateur']="Le lien est bien enregistré.";
                                    }

 header("location :".$_SERVER['HTTP_REFERER']);       
    
    
    
    
    
    ?>