<?php
session_start();

// Récuparation des post de lien
if(isset($_POST['lien_Licence'])){
    $url_licence=$_POST['lien_Licence'];
}else{
    $url_licence="";
}
if(isset($_POST['lien_Ingenieur'])){
    $url_ingenieur=$_POST['lien_Ingenieur'];
}else{
    $url_ingenieur="";
}
if(isset($_POST['lien_Master'])){
    $url_master=$_POST['lien_Master'];
}else{
    $url_master="";
}
if(isset($_POST['lien_DED'])){
    $url_diplome_etat_docteur=$_POST['lien_DED'];
}else{
    $url_diplome_etat_docteur="";
}

if(isset($_POST['lien_DoctoratU'])){
    $url_doctorat_unique=$_POST['lien_DoctoratU'];
}else{
    $url_doctorat_unique="";
}

if(isset($_POST['lien_DES'])){
    $url_des=$_POST['lien_DES'];
}else{
    $url_des="";
}




// récupération information de fichier
$auteur= $_SESSION['matricule'];
$con=mysqli_connect("localhost","root","","ussein_candidature");
$identifiant_PER = $_SESSION['matricule'];

// =======================================INSERTION DES FICHIERS DANS LE REPERTOIRE========================================
// insertion -	Licence ou équivalent
if(!empty($_FILES['fileLicence'])){
    $erreur_fichier=$_FILES['fileLicence']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileLicence']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="licence.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileLicence']['tmp_name'];
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
// insertion -	Diplôme d’Ingénieur  ou équivalent
if(!empty($_FILES['fileIngenieur'])){
    $erreur_fichier=$_FILES['fileIngenieur']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileIngenieur']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="ingenieur.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileIngenieur']['tmp_name'];
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

// insertion -	Master ou équivalents
if(!empty($_FILES['fileMaster'])){
    $erreur_fichier=$_FILES['fileMaster']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileMaster']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="master.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileMaster']['tmp_name'];
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
// insertion -	Diplôme d’État de Docteur en MPOV
if(!empty($_FILES['fileDED'])){
        $erreur_fichier=$_FILES['fileDED']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['fileDED']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="diplome_etat_docteur.pdf";                              //Modifier le nom du fichier en fonction du critère
    
          $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
          $verification1=mysqli_num_rows($requete1);
          
          
          $chemin_fichier_origine=$_FILES['fileDED']['tmp_name'];
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

// insertion -	Doctorat unique
if(!empty($_FILES['fileDoctoratU'])){
    $erreur_fichier=$_FILES['fileDoctoratU']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDoctoratU']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="doctorat_unique.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileDoctoratU']['tmp_name'];
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

// insertion -	DES
if(!empty($_FILES['fileDES'])){
    $erreur_fichier=$_FILES['fileDES']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDES']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="des.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileDES']['tmp_name'];
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
    
    
    
    
    
    





// =======================================INSERTION DES LIENS DANS LA BASE DE DONNEES========================================

require_once("ouverture_bd_pdo.php");
// insertion 	Licence ou équivalent
if($url_licence!=""){
    $fichier_licence="licence.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_licence,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_licence,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }
// insertion -	Diplôme d’Ingénieur  ou équivalent
if($url_ingenieur!=""){
    $fichier_licence="ingenieur.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_ingenieur,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_ingenieur,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }
// insertion -	Master ou équivalents
if($url_master!=""){
    $fichier_licence="master.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_master,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_master,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

// insertion -	Diplôme d’État de Docteur en MPOV
if($url_diplome_etat_docteur!=""){
    $fichier_licence="diplome_etat_docteur.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_diplome_etat_docteur,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_diplome_etat_docteur,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

// insertion -	Doctorat unique
if($url_doctorat_unique!=""){
    $fichier_licence="doctorat_unique.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_doctorat_unique,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_doctorat_unique,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

// insertion -	DES
if($url_des!=""){
    $fichier_licence="des.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_des,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_des,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

  header("location :".$_SERVER['HTTP_REFERER']);
?>