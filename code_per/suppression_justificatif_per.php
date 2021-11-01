
<?php
// session_start();

$nom_fichier=$_GET['fiche'];
// $auteur=$_SESSION['mail'];
echo $nom_fichier;
$auteur ='mouhamed.sane@etu.ussein.edu.sn';

$con=mysqli_connect('localhost','root','','ussein_candidature');

$requete1=mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' AND nom_fichier='$nom_fichier'");
                  $verification1=mysqli_num_rows($requete1);
                      
                      if($verification1 >0){
                        $requete=mysqli_query($con,"DELETE FROM ec_dossier_per WHERE nom_fichier='$nom_fichier' AND matricule='$auteur' ");

                        $repertoire = opendir("repertoire_per") ;
                        // copy('ec_repertoire/'.$nom_fichier,'sd_corbeille/'.$nom_doc);
                        unlink('repertoire_per/'.$auteur.'/'.$nom_fichier);
                        closedir($repertoire);

                        echo 'good';


                        $_SESSION['message_validation_l']="Le fichier est bien supprimé.";
                        // header('Location:http://localhost/candidature/mon-compte/');
                        exit;
                       } 
                      else{
                          echo 'bad';
                        $_SESSION['message_validation_l']="Le fichier n'existe pas.";
                        // header('Location:http://localhost/candidature/mon-compte/');
                        exit;
                }






