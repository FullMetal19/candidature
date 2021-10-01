
<?php
session_start();
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$mot_de_passe=$_POST['mot_de_passe'];
$nouveau_mot_de_passe=$_POST['confirmation_mot_de_passe'];
$mail=$_POST['mail'];
$status= 2;
$date_de_naissance=$_POST['date_de_naissance'];
$telephone=$_POST['telephone'];
$genre='neant';
$imange='neant.png';

$tab_value = $_POST['tableau'];

$adresse = "";
$nb_value = count($tab_value);
for($i=0;$i<$nb_value;$i++){
        $adresse.=$tab_value[$i];
        $adresse.=";";
}

  

$con = mysqli_connect('localhost','root','','ussein_candidature');


    $req = mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
    $nb = mysqli_num_rows($req);

    if($nb>0){
            $_SESSION['message_validation'] = "Un compte est déja enregitré sur ce mail.";
           
    }
    else{
            if($mot_de_passe == $nouveau_mot_de_passe){
                
                    $req = mysqli_query($con,"INSERT INTO ec_connexion VALUES('$prenom','$nom','$mail','$mot_de_passe','$telephone','$date_de_naissance','$status','$genre','$adresse','$image')");
                    $_SESSION['message_validation'] = "Vous venez de créer un compte administrateur du nom :'$prenom'.'\t'.'$nom'";
                    header('Location: http://localhost/candidature/creation-compte-admin/');
                }else{
                    $_SESSION['message_validation'] = "Attention!! Mot de passe non identique.";
                } 
            }?>
