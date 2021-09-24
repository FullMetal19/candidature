<?php
session_start();
$mail = $_GET['mail'];
$id_offre = $_GET['id_offre'];
$somme = $_GET['somme'];
$prenom = $_GET['prenom'];
$nom = $_GET['nom'];

$con = mysqli_connect("localhost","root","","ussein_candidature");

if($somme ==0){
    $_SESSION['message_candidat_note']='<div id="a">
                                            <img src="https://img.icons8.com/ios-glyphs/30/000000/macos-close.png" width="20px" height="20px" />
                                            <span>La note de '.$prenom.' '.$nom.' ne peut pas être nul(le). Veuillez revoir vos informations. </span>
                                        </div>';
                                        $query3= "SELECT titre FROM ec_offre WHERE id='$id_offre'";
                                        $result3 = mysqli_query($con, $query3);
                                        $tab3 = mysqli_fetch_all($result3);
                                        $titre_offre = $tab3[0][0];
    header('location: http://localhost/candidature/calcul-note-candidat-par-offre?id='.$mail.'&prenom='.$prenom.'&nom='.$nom.'&id_offre='.$id_offre.'&titre='.$titre_offre);

}
else{
$req = mysqli_query($con,"UPDATE ec_postuler SET note='$somme' WHERE id_candidat='$mail' AND id_offre='$id_offre'");

if($req){
    $_SESSION['message_candidat_note']='<div id="a">
                                            <img src="https://img.icons8.com/fluency/48/000000/verified-account.png" width="20px" height="20px" />
                                            <span>La note de '.$prenom.' '.$nom.' est bien enregistré(e).</span>
                                        </div>';
    // $_SESSION['message_candidat_note'] = "La note de ".$prenom." ".$nom." est enregistré(e).";
    header('location: http://localhost/candidature/visualisation-candidats-par-offre?id='.$id_offre);
}
else{
    $_SESSION['message_candidat_note']='<div id="a">
                                            <img src="https://img.icons8.com/ios-glyphs/30/000000/macos-close.png" width="20px" height="20px" />
                                            <span>Erreur sur l\'envoi de la note de '.$prenom.' '.$nom.' .</span>
                                        </div>';
                                        $query3= "SELECT titre FROM ec_offre WHERE id='$id_offre'";
                                        $result3 = mysqli_query($con, $query3);
                                        $tab3 = mysqli_fetch_all($result3);
                                        $titre_offre = $tab3[0][0];
    header('location: http://localhost/candidature/calcul-note-candidat-par-offre?id='.$mail.'&prenom='.$prenom.'&nom='.$nom.'&id_offre='.$id_offre.'&titre='.$titre_offre);
}
}
?>
