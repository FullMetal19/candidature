<?php
session_start();
$UFR=$_POST['ufr'];
$TITRE=$_POST['titre'];
$DESCRIPTION=$_POST['description'];
$dateLimite=$_POST['date_limite'];

 

$nom=$_FILES['fichier']['name'];
$file_name=$nom;
$file_path = $_FILES['fichier']['tmp_name'];
mkdir($TITRE);

$gate = $TITRE.'/'.$file_name;
        if(empty($UFR) || empty($TITRE) || empty($DESCRIPTION) || empty($dateLimite)){

                $_SESSION['obligatoire']="toutes les champs sont obligatoires ";
            header('location: http://localhost/candidature/ajout-offre/') ;  
                 
        }
        else{

       
        if(move_uploaded_file($file_path,$gate)){

$con = mysqli_connect('localhost','root','','ussein_candidature');
$req = mysqli_query($con,"INSERT INTO ec_offre VALUES (NULL,'$UFR','$TITRE','$DESCRIPTION','$file_name','$dateLimite')");
mysqli_close($con);
        }
header('location: http://localhost/candidature/ajout-offre/');

}
?>