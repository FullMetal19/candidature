<?php
session_start();



$url_Diplome_Ingenieur_Ou_Equivalent=$_POST['lien_D_I_Ou_E'];
$url_M_ou_E=$_POST['lien_M_ou_E'];
$url_doctorat_en_mpov=$_POST['lien_d_en_mpov'];
$url_DES=$_POST['lien_DES'];
$url_Evaluation_These_Doctorat_Unique=$_POST['lien_E_T_D_U'];

$url_Ingeieur=$_POST['lien_ingeieur'];
$url_Master=$_POST['lien_master'];
$url_DocteurMPOV=$_POST['lien_docteurMPOV'];
$url_Docteur=$_POST['lien_docteur'];


$con=mysqli_connect("localhost","root","","ussein_candidature");
$identifiant_PER = $_SESSION['matricule'];



// insertion licence
if(!empty($_FILES['file_D_I_Ou_E'])){
    $erreur_fichier=$_FILES['file_D_I_Ou_E']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['file_D_I_Ou_E']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Diplome_Ingenieur_Ou_Equivalent.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['file_D_I_Ou_E']['tmp_name'];
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
if(!empty($_FILES['file_M_ou_E'])){
    $erreur_fichier=$_FILES['file_M_ou_E']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['file_M_ou_E']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Master_ou_Equivalent.pdf";

      $requete2=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification2=mysqli_num_rows($requete2);
      

      $chemin_fichier_origine=$_FILES['file_M_ou_E']['tmp_name'];
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

    if(!empty($_FILES['file_d_en_mpov'])){
        $erreur_fichier=$_FILES['file_d_en_mpov']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['file_d_en_mpov']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="doctorat_en_mpov.pdf";
    
          $requete3=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
          $verification3=mysqli_num_rows($requete3);
          
          
    
          $chemin_fichier_origine=$_FILES['file_d_en_mpov']['tmp_name'];
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
    if(!empty($_FILES['file_DES'])){
        $erreur_fichier=$_FILES['file_DES']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['file_DES']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="DES.pdf";
    
          $requete4=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE  matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
          $verification4=mysqli_num_rows($requete4);
          
          
    
          $chemin_fichier_origine=$_FILES['file_DES']['tmp_name'];
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
if(!empty($_FILES['file_E_T_D_U'])){
    $erreur_fichier=$_FILES['file_E_T_D_U']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['file_E_T_D_U']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="E_T_D_U.pdf";

      $requete5=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification5=mysqli_num_rows($requete5);
      
      

      $chemin_fichier_origine=$_FILES['file_E_T_D_U']['tmp_name'];
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


if(!empty($_FILES['fileIngenieur'])){
    $erreur_fichier=$_FILES['fileIngenieur']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileIngenieur']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Ingenieur.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileIngenieur']['tmp_name'];
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
if(!empty($_FILES['fileMaster'])){
    $erreur_fichier=$_FILES['fileMaster']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileMaster']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Master.pdf";

      $requete2=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification2=mysqli_num_rows($requete2);
      

      $chemin_fichier_origine=$_FILES['fileMaster']['tmp_name'];
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



// insertion licence
if(!empty($_FILES['fileDocteurMPOV'])){
    $erreur_fichier=$_FILES['fileDocteurMPOV']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDocteurMPOV']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Docteur_MPOV.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileDocteurMPOV']['tmp_name'];
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
if(!empty($_FILES['fileDocteur'])){
    $erreur_fichier=$_FILES['fileDocteur']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDocteur']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Docteur.pdf";

      $requete2=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification2=mysqli_num_rows($requete2);
      

      $chemin_fichier_origine=$_FILES['fileDocteur']['tmp_name'];
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

    if($url_Diplome_Ingenieur_Ou_Equivalent!=""){
        $fichier_licence="Diplome_Ingenieur_Ou_Equivalent.pdf";          //nom fichier à enregistrer  
    
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
              'url_licence'=>$url_D_I_Ou_E,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence


          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_D_I_Ou_E,
                  'auteur'=>$identifiant_PER
              ));
              //Modifier url licence
              
              $requete->closeCursor();
          }
              $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
      }





    if($url_M_ou_E!=""){
        $fichier_licence="M_ou_E_mjd.pdf";      
            
        
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
                        'url_licence'=>$url_A_S__M_ou_E,
                        'auteur'=>$identifiant_PER
                    ));
                    $requete_mise_a_jour->closeCursor();
                    } 
                    else{
                        $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                        $requete->execute(array(
                            'fichier_licence'=>$fichier_licence,
                            'url_licence'=>$url_A_S__M_ou_E,
                            'auteur'=>$identifiant_PER
                        ));
                        $requete->closeCursor();
                    }
              $_SESSION['message_erreur_industrie']="Le lien est bien enregistré.";
    }



    // insertion licence
    

        if($url_doctorat_en_mpov!=""){
            $fichier_licence="doctorat_en_mpov.pdf";
                
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
              'url_licence'=>$url_doctorat_en_mpov,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_doctorat_en_mpov,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
                  $_SESSION['message_erreur_laboratoire']="Le lien est bien enregistré.";
        }


            

    if($url_DES!=""){
        $fichier_licence="DES.pdf";
            
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
              'url_licence'=>$url_DES,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_DES,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_institution']="Le lien est bien enregistré.";
    }

   

    if($url_Evaluation_These_Doctorat_Unique!=""){
        $fichier_licence="Evaluation_These_Doctorat_Unique.pdf";
            
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
              'url_licence'=>$url_Evaluation_These_Doctorat_Unique,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_Evaluation_These_Doctorat_Unique,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_superieur']="Le lien est bien enregistré.";
            }
    
    if($url_Ingenieur!=""){
        $fichier_licence="Ingenieur.pdf";          //nom fichier à enregistrer  
    
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
              'url_licence'=>$url_Ingenieur,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence


          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_Ingenieur,
                  'auteur'=>$identifiant_PER
              ));
              //Modifier url licence
              
              $requete->closeCursor();
          }
              $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
      }





      if($url_Master!=""){
        $fichier_licence="Master.pdf";
            
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
              'url_licence'=>$url_Master,
              'auteur'=>$identifiant_PER
          ));
          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$url_Master,
                  'auteur'=>$identifiant_PER
              ));
              $requete->closeCursor();
          }
              $_SESSION['message_erreur_coordonnateur']="Le lien est bien enregistré.";
            }        


            if($url_DocteurMPOV!=""){
                $fichier_licence="Docteur_MPOV.pdf";          //nom fichier à enregistrer  
            
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
                      'url_licence'=>$url_DocteurMPOV,
                      'auteur'=>$identifiant_PER
                  ));
                  //Modifier url licence
        
        
                  $requete_mise_a_jour->closeCursor();
                  } 
                  else{
                      $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                      $requete->execute(array(
                          'fichier_licence'=>$fichier_licence,
                          'url_licence'=>$url_DocteurMPOV,
                          'auteur'=>$identifiant_PER
                      ));
                      //Modifier url licence
                      
                      $requete->closeCursor();
                  }
                      $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
              }
        
        
        
        
        
              if($url_Docteur!=""){
                $fichier_licence="Docteur.pdf";
                    
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
                      'url_licence'=>$url_Docteur,
                      'auteur'=>$identifiant_PER
                  ));
                  $requete_mise_a_jour->closeCursor();
                  } 
                  else{
                      $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                      $requete->execute(array(
                          'fichier_licence'=>$fichier_licence,
                          'url_licence'=>$url_Docteur,
                          'auteur'=>$identifiant_PER
                      ));
                      $requete->closeCursor();
                  }
                      $_SESSION['message_erreur_coordonnateur']="Le lien est bien enregistré.";
                    }        

 header("location :".$_SERVER['HTTP_REFERER']);;

?>