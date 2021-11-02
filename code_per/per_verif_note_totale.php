<?php
session_start();
$matricule = $_GET['matricule'];
$somme = $_GET['somme'];


$con = mysqli_connect("localhost","root","","ussein_candidature");
$req = mysqli_query($con,"UPDATE ec_connexion_per SET note='$somme' WHERE matricule='$matricule' ");

header('location: http://localhost/candidature/liste_des_pers/');