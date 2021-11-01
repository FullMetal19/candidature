<?php
session_start();

// Récuparation des post de lien
if(isset($_POST['lien_ResponNiveau'])){
    $url_responsable_niveau=$_POST['lien_ResponNiveau'];
}else{
    $url_responsable_niveau="";
}


if(isset($_POST['lien_ResponNiveau'])){
    $url_responsable_formation=$_POST['lien_ResponFormation'];
}else{
    $url_responsable_formation="";
}



if(isset($_POST['lien_ChefDept'])){
    $url_chef_departement=$_POST['lien_ChefDept'];
}else{
    $url_chef_departement="";
}



if(isset($_POST['lien_DEIF'])){
    $url_directeur_etudes_if=$_POST['lien_DEIF'];
}else{
    $url_directeur_etudes_if="";
}


if(isset($_POST['lien_DEIU'])){
    $url_directeur_etudes_iu=$_POST['lien_DEIU'];
}else{
    $url_directeur_etudes_iu="";
}


if(isset($_POST['lien_ADAU'])){
    $url_a_directeur_adjoint_u=$_POST['lien_ADAU'];
}else{
    $url_a_directeur_adjoint_u="";
}


if(isset($_POST['lien_DirecteurCentral'])){
    $url_directeur_central=$_POST['lien_DirecteurCentral'];
}else{
    $url_directeur_central="";
}

if(isset($_POST['lien_RFD'])){
    $url_responsable_form_doct=$_POST['lien_RFD'];
}else{
    $url_responsable_form_doct="";
}


if(isset($_POST['lien_DRevue'])){
    $url_directeur_revue=$_POST['lien_DRevue'];
}else{
    $url_directeur_revue="";
}


if(isset($_POST['lien_DLCS'])){
    $url_directeur_lab_chef_service=$_POST['lien_DLCS'];
}else{
    $url_directeur_lab_chef_service="";
}


if(isset($_POST['lien_DED'])){
    $url_directeur_ecole_doct=$_POST['lien_DED'];
}else{
    $url_directeur_ecole_doct="";
}


if(isset($_POST['lien_ChefE1'])){
    $url_chef_etablissement_1=$_POST['lien_ChefE1'];
}else{
    $url_chef_etablissement_1="";
}


if(isset($_POST['lien_ChefE2'])){
    $url_chef_etablissement_2=$_POST['lien_ChefE2'];
}else{
    $url_chef_etablissement_2="";
}







// récupération information de fichier
$auteur= $_SESSION['per_mail'];
$con=mysqli_connect("localhost","root","","ussein_candidature");
$identifiant_PER = $_SESSION['matricule'];


// =======================================INSERTION DES FICHIERS DANS LE REPERTOIRE========================================


// insertion Responsable de niveau
if(!empty($_FILES['fileResponNiveau'])){
    $erreur_fichier=$_FILES['fileResponNiveau']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileResponNiveau']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="responsable_niveau.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileResponNiveau']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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
// insertion Responsable de Formations
if(!empty($_FILES['fileResponFormation'])){
    $erreur_fichier=$_FILES['fileResponFormation']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileResponFormation']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="responsable_formation.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileResponFormation']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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

// insertion Chef département
if(!empty($_FILES['fileChefDept'])){
    $erreur_fichier=$_FILES['fileChefDept']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileChefDept']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="chef_departement.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileChefDept']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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

// insertion -	Directeur des Études (Instituts de faculté)
if(!empty($_FILES['fileDEIF'])){
    $erreur_fichier=$_FILES['fileDEIF']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDEIF']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="directeur_etudes_if.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileDEIF']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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
// insertion -	-	Directeur des Études (Instituts d’Université)
if(!empty($_FILES['fileDEIU'])){
    $erreur_fichier=$_FILES['fileDEIU']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDEIU']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="directeur_etudes_iu.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileDEIU']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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
// insertion -	Assesseur, Directeur d’UFR adjoint
if(!empty($_FILES['fileADAU'])){
    $erreur_fichier=$_FILES['fileADAU']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileADAU']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="a_directeur_adjoint_u.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileADAU']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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






// insertion -Directeur central 
if(!empty($_FILES['fileDirecteurCentral'])){
    $erreur_fichier=$_FILES['fileDirecteurCentral']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDirecteurCentral']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="directeur_central.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileDirecteurCentral']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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

// insertion Responsable de formation doctorale
if(!empty($_FILES['fileRFD'])){
    $erreur_fichier=$_FILES['fileRFD']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileRFD']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="responsable_form_doct.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileRFD']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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
// insertion Directeur de revue
if(!empty($_FILES['fileDRevue'])){
    $erreur_fichier=$_FILES['fileDRevue']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDRevue']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="directeur_revue.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileDRevue']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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
// insertion Directeur de laboratoire/Chef de service 
if(!empty($_FILES['fileDLCS'])){
    $erreur_fichier=$_FILES['fileDLCS']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDLCS']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="directeur_lab_chef_service.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileDLCS']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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

// insertion Directeur d’École doctorale
if(!empty($_FILES['fileDED'])){
    $erreur_fichier=$_FILES['fileDED']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileDED']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="directeur_ecole_doct.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileDED']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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
// insertion Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)
if(!empty($_FILES['fileChefE1'])){
    $erreur_fichier=$_FILES['fileChefE1']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileChefE1']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="chef_etablissement_1.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileChefE1']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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
// insertion Chef d’Établissement (Directeurs d’Institut d’Université) 
if(!empty($_FILES['fileChefE2'])){
    $erreur_fichier=$_FILES['fileChefE2']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['fileChefE2']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="chef_etablissement_2.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
      
      $chemin_fichier_origine=$_FILES['fileChefE2']['tmp_name'];
      $chemin_fichier_arriver='repertoire_PER/'.$auteur.'/'.$nom_fichier;

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


// insertion Responsable de niveau
if($url_responsable_niveau!=""){
    $fichier_licence="responsable_niveau.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_responsable_niveau,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_responsable_niveau,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }
// insertion Responsable de Formations
if($url_responsable_formation!=""){
    $fichier_licence="responsable_formation.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_responsable_formation,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_responsable_formation,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }
// insertion Chef département
if($url_chef_departement!=""){
    $fichier_licence="chef_departement.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_chef_departement,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_chef_departement,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }
// insertion -	Directeur des Études (Instituts de faculté)
if($url_directeur_etudes_if!=""){
    $fichier_licence="directeur_etudes_if.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_directeur_etudes_if,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_directeur_etudes_if,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }
// insertion Directeur des Études (Instituts d’Université)
if($url_directeur_etudes_iu!=""){
    $fichier_licence="directeur_etudes_iu.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_directeur_etudes_iu,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_directeur_etudes_iu,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

// insertion Assesseur, Directeur d’UFR adjoint
if($url_a_directeur_adjoint_u!=""){
    $fichier_licence="a_directeur_adjoint_u.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_a_directeur_adjoint_u,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_a_directeur_adjoint_u,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }
// insertion Directeur central 
if($url_directeur_central!=""){
    $fichier_licence="directeur_central.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_directeur_central,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_directeur_central,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

// insertion Responsable de formation doctorale
if($url_responsable_form_doct!=""){
    $fichier_licence="responsable_form_doct.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_responsable_form_doct,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_responsable_form_doct,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

// insertion Directeur de revue
if($url_directeur_revue!=""){
    $fichier_licence="directeur_revue.pdf";          //nom fichier à enregistrer  

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
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_directeur_revue,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }
// Directeur de laboratoire/Chef de service 
if($url_directeur_lab_chef_service!=""){
    $fichier_licence="directeur_lab_chef_service.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_directeur_lab_chef_service,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_directeur_lab_chef_service,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

// Directeur Directeur d’École doctorale 
if($url_directeur_ecole_doct!=""){
    $fichier_licence="directeur_ecole_doct.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_directeur_ecole_doct,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_directeur_ecole_doct,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

// Directeur Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)
if($url_chef_etablissement_1!=""){
    $fichier_licence="chef_etablissement_1.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_chef_etablissement_1,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_chef_etablissement_1,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

// Directeur Chef d’Établissement (Directeurs d’Institut d’Université) 
if($url_chef_etablissement_2!=""){
    $fichier_licence="chef_etablissement_2.pdf";          //nom fichier à enregistrer  

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
          'url_licence'=>$url_chef_etablissement_2,
          'auteur'=>$identifiant_PER
      ));
      //Modifier url licence


      $requete_mise_a_jour->closeCursor();
      } 
      else{
          $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
          $requete->execute(array(
              'fichier_licence'=>$fichier_licence,
              'url_licence'=>$url_chef_etablissement_2,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence
          
          $requete->closeCursor();
      }
          $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
  }

  header("location: ".$_SERVER['HTTP_REFERER']);      


?>