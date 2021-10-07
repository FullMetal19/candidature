
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
$image='neant.png';

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
                    $_SESSION['notification1']='<div id="a">
                    <img src="https://img.icons8.com/fluency/48/000000/verified-account.png" width="20px" height="20px" />
                    <span>Vous venez de créer un compte administrateur pour '.$prenom.' '.$nom.'.</span>
                </div>';
                header('Location: http://localhost/candidature/parametre/');                
                }else{
                    $_SESSION['message_validation'] = "Attention!! Mot de passe non identique.";
                    header('Location: http://localhost/candidature/creation-compte-admin/');
                } 
            }?>
