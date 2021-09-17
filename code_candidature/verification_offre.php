<?php
session_start();

$_SESSION['verification_id_offre']=$_GET['id'];
header('location: http://localhost/candidature/plus-dinformations/');

?>