<?php
session_start();
$con=mysqli_connect('localhost','root','','ussein_candidature');


    $email = $_POST['email'];
    $choix = $_POST['choix'];

    if ($choix == 1){
        if (isset($_POST['tableau'])){
            $tab_value = $_POST['tableau'];

        $adresse = "";
        $nb_value = count($tab_value);
        for($i=0;$i<$nb_value;$i++){
                $adresse.=$tab_value[$i];
                $adresse.=";";
        }
        $query2 = mysqli_query($con,"UPDATE ec_connexion SET adresse='$adresse' WHERE mail='$email'"); 
        $_SESSION['notification1']='<div id="a">
                                            <img src="https://img.icons8.com/fluency/48/000000/verified-account.png" width="20px" height="20px" />
                                            <span>Les modifications sont bien prises en compte pour '.$email.' . </span>
                                        </div>';
                                        header('Location: http://localhost/candidature/liste-admin-niveau2/');
        }else{
            $_SESSION['notification1']='<div id="a">
                                            <img src="https://img.icons8.com/ios-glyphs/30/000000/macos-close.png" width="20px" height="20px" />
                                            <span>Les modifications ne sont pas prises en compte. Veuillez selectionner des offres à administrer. </span>
                                        </div>';
                                        header('Location: http://localhost/candidature/gestion-admin-simple?mail='.$email);
        }
        
        
    }
    else if($choix == 0){
        $query2 = mysqli_query($con,"UPDATE ec_connexion SET adresse='0' WHERE mail='$email'");
        $_SESSION['notification1']='<div id="a">
                                            <img src="https://img.icons8.com/fluency/48/000000/verified-account.png" width="20px" height="20px" />
                                            <span>Le compte avec l\'email '.$email.' est désactivé. </span>
                                        </div>';
        header('Location: http://localhost/candidature/liste-admin-niveau2/');         
    }
    else if ($choix == ""){
        // message erreur
    }
