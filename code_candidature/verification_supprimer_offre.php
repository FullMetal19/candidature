<?php

$offre=$_GET['id'];
$con = mysqli_connect('localhost','root','','ussein_candidature');
$sql=mysqli_query($con,"DELETE FROM ec_offre WHERE id='$offre'");
mysqli_close($con);
header('location: http://localhost/candidature/ajout-offre/');

?>