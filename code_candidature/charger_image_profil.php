<?php
session_start();
$mail=$_SESSION['mail'];
$con = mysqli_connect("localhost","root","","ussein_candidature");

if(!empty($_FILES)){
       
        $image_profil = $_FILES['image']['name'];

        $format = strrchr($image_profil,'.');
        $format_possible = array('.jpg','.png','.ico');

       if(in_array($format,$format_possible)){
             
            $image_chemin_origine = $_FILES['image']['tmp_name'];
            $image_taille =  $_FILES['image']['size'];
       
        if($image_taille > 600000 ){
             $_SESSION['erreur']="Veillez revoir la taille de votre image \n taille max autorisee est de 600 ko";
         }
        else{

            $image_profil = 'image_candidat'.$format;
            $image_chemin_actuel = 'ec_repertoire/'.$mail.'/'.$image_profil ;
            move_uploaded_file($image_chemin_origine,$image_chemin_actuel);
            $req_mise_a_jour = mysqli_query($con,"UPDATE ec_connexion SET image='$image_profil' WHERE mail='$mail'"); 
        }
    }
    else{
        $_SESSION['erreur']="Seule les formats (.jpg .png .ico) sont autorises \n veiller revoir le format de votre image";
    }
}
mysqli_close($con);
header('location: http://localhost/candidature/mon-compte/');
?>