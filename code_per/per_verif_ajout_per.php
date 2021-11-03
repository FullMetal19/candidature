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

if($per_nom !=="" && $per_prenom !=="" && $per_matricule !=="" && $per_email !=="" && $per_ufr !=="" && $per_mot_de_passe !==""){
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
}
elseif(isset($_FILES['file']) && $_FILES["file"]["size"] > 0){
    $con = mysqli_connect("localhost","root","","ussein_candidature");

$fileName = $_FILES["file"]["tmp_name"];
$i = 0;

if($_FILES["file"]["size"] > 0){
    $files = fopen($fileName,"r");

    $heading= fgetcsv($files,10000,";");

    if($heading[0] =="matricule" && $heading[1] =="nom" && $heading[2] =="prenom" && $heading[3] =="email" && $heading[4] =="ufr" && $heading[5] =="mot_de_passe"){
        while(($column = fgetcsv($files,10000,";"))!== FALSE){
         if($column[0]!=="matricule"){
            $req1 = mysqli_query($con,"SELECT * FROM ec_connexion_per WHERE email='$column[3]'");
            $nb = mysqli_num_rows($req1);

            if($nb <= 0){
                $sql = "INSERT INTO ec_connexion_per VALUES ('".$column[0]."','".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."','".$column[5]."','0')";
                $req = mysqli_query($con,$sql);
                mkdir('repertoire_per/'.$column[3]);
                $i++;
            }

       
  }
        }
        $_SESSION['notification1']='<div id="a">
        <img src="https://img.icons8.com/office/50/000000/approval.png" width="20px" height="20px"/>
                        <span>Nombre de Compte téléverser :  '.$i.'</span>
                    </div>';
    }else{
        $_SESSION['notification1']='<div id="a" style="background-color:red;">
    <img src="https://img.icons8.com/ios-filled/50/000000/close-window.png" width="20px" height="20px"/>
                    <span>Erreur ! En-tête non conforme. Elle doit ressembler à: <br> matricule;nom;prenom;email;ufr;mot_de_passe</span>
                </div>';
    }
    
}else{
    $_SESSION['per_notification'] = "Erreur ! Ce fichier est vide.";
}
}else{
    $_SESSION['notification1']='<div id="a" style="background-color:red;">
    <img src="https://img.icons8.com/ios-filled/50/000000/close-window.png" width="20px" height="20px"/>
                    <span>Erreur! Les informations ne doivent pas être vide. Veuillez Remplir les informations d\'un PER ou Téléverser un fichier CSV.</span>
                </div>';
}

// }else{
//     $_SESSION['notification1']='<div id="a" style="background-color:red;">
//     <img src="https://img.icons8.com/office/50/000000/approval.png"/>
//     <img src="https://img.icons8.com/ios-filled/50/000000/close-window.png" width="20px" height="20px"/>
//                     <span>Erreur! Tous les champs sont obligatoires.</span>
//                 </div>';
// }





// Précisons le fichier csv doit être créé avec comme séparateur ; et avec comme heading les nom sur la bd






header("location: ".$_SERVER['HTTP_REFERER']);

?>