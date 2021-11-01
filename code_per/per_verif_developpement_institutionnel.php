
<?php
session_start();

// $auteur= $_SESSION['mail'];
$con=mysqli_connect("localhost","root","","ussein_candidature");
$identifiant_PER = $_SESSION['matricule'];

//   INSERTION PROMOTION PEDAGOGIQUE 
if(!empty($_FILES['file_Pedagogique'])){
    $erreur_fichier=$_FILES['file_Pedagogique']['error'];
    if($erreur_fichier==0){
    $nom_fichier_orgine=$_FILES['file_Pedagogique']['name'];
    $extension=strrchr($nom_fichier_orgine,".");
    if($extension== ".pdf" || $extension== ".PDF"){
        $nom_fichier="Promotion-P.pdf";                              //Modifier le nom du fichier en fonction du critère

      $requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
      $verification1=mysqli_num_rows($requete1);
      
    
      $chemin_fichier_origine=$_FILES['file_Pedagogique']['tmp_name'];
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
        

    //   RECHERCHE 

    if(!empty($_FILES['file_Recherche'])){
        $erreur_fichier=$_FILES['file_Recherche']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['file_Recherche']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="Promotion-R.pdf";                              //Modifier le nom du fichier en fonction du critère
    
          $requete=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
          $verification=mysqli_num_rows($requete);
        
          $chemin_fichier_origine=$_FILES['file_Recherche']['tmp_name'];
          $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
    
                if($verification >0){
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


    //   GOUVERNANCES 

    if(!empty($_FILES['file_Gouvernance'])){
        $erreur_fichier=$_FILES['file_Gouvernance']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['file_Gouvernance']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="Promotion-G.pdf";                              //Modifier le nom du fichier en fonction du critère
    
          $requete=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
          $verification=mysqli_num_rows($requete);
        
          $chemin_fichier_origine=$_FILES['file_Gouvernance']['tmp_name'];
          $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
    
                if($verification >0){
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

        // SERVICE 

        if(!empty($_FILES['file_Service'])){
            $erreur_fichier=$_FILES['file_Service']['error'];
            if($erreur_fichier==0){
            $nom_fichier_orgine=$_FILES['file_Service']['name'];
            $extension=strrchr($nom_fichier_orgine,".");
            if($extension== ".pdf" || $extension== ".PDF"){
                $nom_fichier="service-C.pdf";                              //Modifier le nom du fichier en fonction du critère
        
              $requete=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
              $verification=mysqli_num_rows($requete);
            
              $chemin_fichier_origine=$_FILES['file_Service']['tmp_name'];
              $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;
        
              if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
        
                    if($verification >0){
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

            // CAPACITE M R P 
            
                   
    if(!empty($_FILES['file_Capacite'])){
        $erreur_fichier=$_FILES['file_Capacite']['error'];
        if($erreur_fichier==0){
        $nom_fichier_orgine=$_FILES['file_Capacite']['name'];
        $extension=strrchr($nom_fichier_orgine,".");
        if($extension== ".pdf" || $extension== ".PDF"){
            $nom_fichier="Capacite-M-R-P.pdf";                              //Modifier le nom du fichier en fonction du critère
    
          $requete=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$identifiant_PER' AND nom_fichier='$nom_fichier'");
          $verification=mysqli_num_rows($requete);
        
          $chemin_fichier_origine=$_FILES['file_Capacite']['tmp_name'];
          $chemin_fichier_arriver='repertoire_PER/'.$identifiant_PER.'/'.$nom_fichier;
    
          if(move_uploaded_file($chemin_fichier_origine,$chemin_fichier_arriver)){
    
                if($verification >0){
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




 // AJOUT DE LIEN 
    require_once("ouverture_bd_pdo.php");



    if(isset($_POST['lien_Pedagogique'])){
        $promotion_de_la_P=$_POST['lien_Pedagogique'];
   
    if($promotion_de_la_P !=""){
        $fichier_licence="Promotion-P.pdf";          //nom fichier à enregistrer  
    
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
              'url_licence'=>$promotion_de_la_P,
              'auteur'=>$identifiant_PER
          ));
          //Modifier url licence


          $requete_mise_a_jour->closeCursor();
          } 
          else{
              $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
              $requete->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$promotion_de_la_P,
                  'auteur'=>$identifiant_PER
              ));
              //Modifier url licence
              
              $requete->closeCursor();
          }
              $_SESSION['message_validation_secondaire']="Le lien est bien enregistré.";
      }


         }


         if(isset($_POST['lien_Recherche'])){
            $promotion_de_la_R=$_POST['lien_Recherche'];
       
        
        if($promotion_de_la_R!=""){
            $fichier_licence="Promotion-R.pdf";          //nom fichier à enregistrer  
        
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
                  'url_licence'=>$promotion_de_la_R,
                  'auteur'=>$identifiant_PER
              ));
              //Modifier url licence
    
    
              $requete_mise_a_jour->closeCursor();
              } 
              else{
                  $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                  $requete->execute(array(
                      'fichier_licence'=>$fichier_licence,
                      'url_licence'=>$promotion_de_la_R,
                      'auteur'=>$identifiant_PER
                  ));
                  //Modifier url licence
                  
                  $requete->closeCursor();
              }
          }
 }


 if(isset($_POST['lien_Gouvernance'])){
    $promotion_de_la_G=$_POST['lien_Gouvernance'];

          if($promotion_de_la_G!=""){
            $fichier_licence="Promotion-R.pdf";          //nom fichier à enregistrer  
        
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
                  'url_licence'=>$promotion_de_la_G,
                  'auteur'=>$identifiant_PER
              ));
              //Modifier url licence
    
    
              $requete_mise_a_jour->closeCursor();
              } 
              else{
                  $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                  $requete->execute(array(
                      'fichier_licence'=>$fichier_licence,
                      'url_licence'=>$promotion_de_la_G,
                      'auteur'=>$identifiant_PER
                  ));
                  //Modifier url licence
                  
                  $requete->closeCursor();
              }
          }

}



if(isset($_POST['lien_Service'])){
    $service_a_la_C=$_POST['lien_Service'];

          if($service_a_la_C !=""){
            $fichier_licence="Service-C.pdf";          //nom fichier à enregistrer  
        
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
                  'url_licence'=>$service_a_la_C,
                  'auteur'=>$identifiant_PER
              ));
              //Modifier url licence
    
    
              $requete_mise_a_jour->closeCursor();
              } 
              else{
                  $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
                  $requete->execute(array(
                      'fichier_licence'=>$fichier_licence,
                      'url_licence'=>$service_a_la_C,
                      'auteur'=>$identifiant_PER
                  ));
                  //Modifier url licence
                  
                  $requete->closeCursor();
              }
          }
}
if (isset($_POST['lien_Capacite'])) {
    $Capacite=$_POST['lien_Capacite'];
    if ($Capacite !="") {
        $fichier_licence="Capacite-M-R-P.pdf";          //nom fichier à enregistrer
        
        $verification=$con->prepare("SELECT * FROM ec_dossier_per WHERE matricule=? AND nom_fichier=?");
        $verification->execute(array($identifiant_PER,$fichier_licence));
        $tab_verification = $verification->fetchALL();
        $nombre = count($tab_verification);
        // $nombre=$tab_verification['nombre'];
        $verification->closeCursor();
    
        if ($nombre>0) {
            $requete_mise_a_jour=$con->prepare("UPDATE ec_dossier_per SET nom_fichier=:fichier_licence, lien=:url_licence WHERE matricule=:auteur AND nom_fichier=:fichier_licence ");
            $requete_mise_a_jour->execute(array(
                  'fichier_licence'=>$fichier_licence,
                  'url_licence'=>$Capacite,
                  'auteur'=>$identifiant_PER
              ));
            //Modifier url licence
    
    
            $requete_mise_a_jour->closeCursor();
        } else {
            $requete=$con->prepare("INSERT INTO ec_dossier_per VALUES (:fichier_licence,:auteur,:url_licence) ");
            $requete->execute(array(
                      'fichier_licence'=>$fichier_licence,
                      'url_licence'=>$Capacite,
                      'auteur'=>$identifiant_PER
                  ));
            //Modifier url licence
                  
            $requete->closeCursor();
        }
    }
}
header("location :".$_SERVER['HTTP_REFERER']);

?>