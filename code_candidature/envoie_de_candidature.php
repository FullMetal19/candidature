<?php
session_start();

$mail = $_SESSION['mail'];
$id= strchr($_SESSION['info_candidat'],' ');
$id_offre =trim($id);


$date = date('Y-m-d');

$con = mysqli_connect("localhost","root","","ussein_candidature");

$req_delais_offre = mysqli_query($con,"SELECT dateLimite FROM ec_offre WHERE id='$id_offre'");
$tab_delais_offre = mysqli_fetch_array($req_delais_offre);
$date_limite = $tab_delais_offre['dateLimite'];

// Comparaison des deux dates

if(strtotime($date) <= strtotime($date_limite)){


if(file_exists('ec_repertoire/'.$mail) && is_dir('ec_repertoire/'.$mail)){
    $rep = 'ec_repertoire/'.$mail;
    $acces = opendir($rep);
    $table = array('.','..');
     
    if(file_exists('ec_offre/'.$id_offre) && is_dir('ec_offre/'.$id_offre)) { 

        if(file_exists('ec_offre/'.$id_offre.'/'.$mail) && is_dir('ec_offre/'.$id_offre.'/'.$mail)){
               exit();
        }
        else{
            mkdir('ec_offre/'.$id_offre.'/'.$mail);
        }
    }
    else{
        $_SESSION['notificatiion'] = "l'offre : ".$tab_nom_offre['titre']."n'existe plus . Veillez postuler pour d'autre offre";
    }
        while($fichier = readdir($acces)){
            if(!in_array($fichier,$table)){
           
                copy('ec_repertoire/'.$mail.'/'.$fichier , 'ec_offre/'.$id_offre.'/'.$mail.'/'.$fichier); 
             
            }
        }
    closedir($acces);
}


 

$req_nom_offre = mysqli_query($con,"SELECT * FROM ec_offre WHERE id='$id_offre'");
$tab_nom_offre = mysqli_fetch_array($req_nom_offre);


$req_candidat = mysqli_query($con,"SELECT * FROM ec_offre WHERE id_offre='$id_offre' AND id_candidat='$mail'");
$num_rows_candidat = mysqli_num_rows($req_candidat);

if($num_rows_candidat >0){
    $req = mysqli_query($con,"UPDATE ec_postuler SET date='$date' WHERE id_candidat='$mail' and id_offre='$id_offre'");
    $_SESSION['notificatiion'] = "Vous venez de repostuler pour l'offre : ".$tab_nom_offre['titre'];
}
else{
    $requete = mysqli_query($con , "INSERT INTO ec_postuler VALUES ('$id_offre','$mail','0','$date')");
    $_SESSION['notificatiion'] = "Vous venez de postuler pour l'offre : ".$tab_nom_offre['titre'];
}

}

else{
    $_SESSION['notificatiion'] = "Votre candidature n'est pas aprouve car la date limite de l'offre a expire. Veillez postuler pour d'autre offre";
}
unset($_SESSION['info_candidat']);


mysqli_close($con);
header('location: http://localhost/candidature/accueil-offre/');
?> 