<?php
session_start();
$con = mysqli_connect('localhost','root','','ussein_candidature');
// $UFR=$_POST['ufr'];
$titre = $_POST['titre'];
$titres = str_replace("'","''",$titre);


// $description=$_POST['description'];
$dateLimite=$_POST['date_limite'];



$nom=$_FILES['fichier']['name'];
$file_name=$nom;
$file_path = $_FILES['fichier']['tmp_name'];



        if( empty($titres) || empty($dateLimite)){

                $_SESSION['obligatoire']="toutes les champs sont obligatoires ";
            header('location: http://localhost/candidature/ajout-offre/') ;  
                 
        }
        else{


        $req = mysqli_query($con,"INSERT INTO ec_offre VALUES(null,'$titres','$file_name','$dateLimite',0)");

        var_dump($req);

       


$selection = mysqli_query($con,"SELECT id FROM  ec_offre WHERE titre='$titres'");
$tab_affich = mysqli_fetch_array($selection);



$nom_repertoire_offre = $tab_affich['id'];
$repertoire_offre ='ec_offre/'.$nom_repertoire_offre;
mkdir($repertoire_offre);

$gate = $repertoire_offre.'/'.$file_name;
move_uploaded_file($file_path,$gate);


mysqli_close($con);
        
header('location: http://localhost/candidature/ajout-offre/');

}
?>