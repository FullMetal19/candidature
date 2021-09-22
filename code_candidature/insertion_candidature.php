<?php
/* template name:insertion candidature */ 
session_start();
$mail = $_SESSION['mail'];
$id= strchr($_SESSION['info_candidat'],' ');
$id_offre =trim($id);

$con = mysqli_connect("localhost","root","","ussein_candidature");

// $req_candidat = mysqli_query($con,"SELECT * FROM ec_offre WHERE id_offre='$id_offre' AND id_candidat='$mail'");
// $num_rows_candidat = mysqli_num_rows($req_candidat);

// if($num_rows_candidat >0){
//     $req = mysqli_query($con,"UPDATE ec_postuler SET id_offre='$id_offre', id_candidat='$mail' WHERE id_candidat='$mail' and id_offre='$id_offre'");
// }
// else{
    $req = mysqli_query($con,"INSERT INTO ec_postuler VALUES('$id_offre','$mail')");
// }

$req_offre = mysqli_query($con,"SELECT * FROM ec_offre WHERE id='$id_offre'");
$tab_offre = mysqli_fetch_array($req_offre);

$_SESSION['notificatiion'] = "Vous venez de postuler pour l'offre ".$tab_offre['titre'];
unset($_SESSION['info_candidat']);
mysqli_close($con);

header('location: http://localhost/candidature/accueil-offre/');
?>