<?php
    session_start();

    $mail=$_POST['mail'];
    $mot_de_passe=$_POST['mot_de_passe'];

    $con = mysqli_connect("localhost","root","","");
    $verification=mysqli_query($con, "SELECT * FROM ec_connexion WHERE mail='$mail' AND mot_de_passe='$mot_de_passe'" );
    $nombre=mysqli_num_rows($verification);
    
    if($nombre!=0){
        header('Location://http:localhost/')
    }
    else{
        $_SESSION['message_erreur'];
    }

?>
