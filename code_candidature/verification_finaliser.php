
<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','ussein_candidature');
$req = mysqli_query($con,"UPDATE ec_offre SET finaliser='1' WHERE id='$id'");
header('Location: http://localhost/candidature/visualisation-candidats-par-offre?id='.$id);


mysqli_close($con);