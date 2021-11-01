<?php
session_start();

$per_nom = $_POST['per_nom'];
$per_prenom = $_POST['per_prenom'];
$per_matricule = $_POST['per_matricule'];
$per_email = $_POST['per_email'];
$per_ufr = $_POST['per_ufr'];
$per_mot_de_passe = $_POST['per_mot_de_passe'];


$con = mysqli_connect('localhost','root','','ussein_candidature');

$req = mysqli_query($con,"SELECT * FROM ec_connexion_per WHERE email='$per_email'");
$nb = mysqli_num_rows($req);

// if(!empty($per_nom) && !empty($per_prenom) && !empty($per_matricule) && !empty($per_email) && !empty($per_ufr) && !empty($per_mot_de_passe)){
    if($nb > 0){
    $_SESSION['notification1']='<div id="a" style="background-color:red;">
    <img src="https://img.icons8.com/ios-filled/50/000000/close-window.png" width="20px" height="20px"/>
                    <span>Erreur! Un compte est déja enregistrer sur ce mail.</span>
                </div>';
}else{
    $req = mysqli_query($con,"INSERT INTO ec_connexion_per VALUES('$per_matricule','$per_nom','$per_prenom','$per_email','$per_ufr','$per_mot_de_passe','0')");

    mkdir('repertoire_per/'.$per_email);


    $_SESSION['notification1']='<div id="a">
    <img src="https://img.icons8.com/office/50/000000/approval.png" width="20px" height="20px"/>
                    <span>Le compte PER, '.$per_prenom.' '.$per_nom.', est bien crée.</span>
                </div>';
}
// }else{
//     $_SESSION['notification1']='<div id="a" style="background-color:red;">
//     <img src="https://img.icons8.com/office/50/000000/approval.png"/>
//     <img src="https://img.icons8.com/ios-filled/50/000000/close-window.png" width="20px" height="20px"/>
//                     <span>Erreur! Tous les champs sont obligatoires.</span>
//                 </div>';
// }


header("location: ".$_SERVER['HTTP_REFERER']);

?>