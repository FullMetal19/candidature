<?php
//RECUPERATION ID OFFRE à partir du lien de redirection
$id=$_GET['id']; 

// RECUPERATION QUOTA à partir du name du input
$quota=$_POST['quota'];

echo $id.'<br>'.$quota;

$sujet='Reponse de la candidature a l\'USSEIN';
// Ajoutez le header des mails
$header = "From:\"USSEIN CANDIDATURE\"<dasplateforme@gmail.com>\n";
$header .="Reply-To:dasplateforme@gmail.com\n";
$header .="Content-Type:text/html; charset=\"utf-8\"";




//Connextion à la base de données avec pdo
// require_once("ouverture_bd_pdo.php");

$con = new PDO('mysql:host=localhost;dbname=ussein_candidature;charset=utf8' ,'root', '');
// RECUPERATION DU TITRE DE LA CANDIDATURE
$req = $con->query("SELECT * FROM ec_offre WHERE id='$id'");
$selecteur = $req ->fetch();

// RECUPERATION des candidat admis en fonction de leur note 
$requete=$con->prepare("SELECT * FROM ec_connexion INNER JOIN ec_postuler ON mail=ec_postuler.id_candidat WHERE id_offre=? ORDER BY note DESC");
$requete->execute(array($id));

$i=0;

while($tab=$requete->fetch()){
    if($i<$quota){
        //message pour l'admis et fixation d'entretien
        $nom=$tab['nom'];
        $prenom=$tab['prenom'];
        $mail=$tab['mail'];

        
                     // Ajoutez le contenu des messages pour le candidat admis 
        $message_validation= ' 
        <div class="blog_general" style="
        height:auto;
        gap:1em 0;
        width:450px;
        margin: auto;
        margin-top: 10%;
        border: 1px solid gray;
        box-shadow: 0 0 10px gray;
        background-color: rgb(243, 243, 243);
        border:1em solid green;">

            
            <img src="http://localhost/candidature/wp-content/uploads/2021/10/ussein.ico" alt="Logo USSEIN" style="position: relative;text-align:center; width: 200px; height:200px; top: -7rem; border-radius: 50%; border: 10px white solid;margin-bottom: -15vh;background-color: green;" >
            <h1  style="width:100%;padding:0.5em 0;background-color: green; color:white;
            text-align: center;"> '.$selecteur['titre'].' </h1> 
            <h2 style="width: 100%;
            text-align: center;font-size: x-large;">Bonjour '.$prenom.' '.$nom.'</h2>
            <p style="font-size: large;padding:0 1em;">L\'Universite du Sine Saloum El-Hadji Ibrahima Niasse <span>(USSEIN)</span> vous informe que votre candidature pour l\'offre ci-dessus à ete retenue et que vous etes convies a un entretien a l\'universite dans les jours a venir.</p>
    <p style="width: 100%;
    text-align: center;font-size: x-large;">Merci</p>
           
        </div>

        ';
       
        mail($mail,$sujet,$message_validation,$header);
    }
    else{
        //message le candidat non admis
        $nom=$tab['nom'];
        $prenom=$tab['prenom'];
        $mail=$tab['mail'];

        // $sujet_ajournee='';
                     // Ajoutez le contenu des messages pour le candidat admis 
        $message_ajournee= ' 
        <div class="blog_general" style="
        height:auto;
        gap:1em 0;
        width:450px;
        margin: auto;
        margin-top: 10%;
        border: 1px solid gray;
        box-shadow: 0 0 10px gray;
        background-color: rgb(243, 243, 243);
        border:1em solid green;">

            
            <img src="http://localhost/candidature/wp-content/uploads/2021/10/ussein.ico" alt="Logo USSEIN" style="position: relative;text-align:center; width: 200px; height:200px; top: -7rem; border-radius: 50%; border: 10px white solid;margin-bottom: -15vh;background-color: green;" >
            <h1  style="width:100%;padding:0.5em 0;background-color: green; color:white;
            text-align: center;"> '.$selecteur['titre'].' </h1> 
            <h2 style="width: 100%;
            text-align: center;font-size: x-large;">Bonjour '.$prenom.' '.$nom.'</h2>
            <p style="font-size: large;padding:0 1em;">L\'Universite du Sine Saloum El-Hadji Ibrahima Niasse <span>(USSEIN)</span> vous informe que votre candidature pour l\'offre ci-dessus n\'à pas ete retenue pour les postes vacants.</p>
            <p style="width: 100%;
            text-align: center;font-size: x-large;">Merci</p>
           
        </div>
' 
        
    ;
       
        mail($mail,$sujet,$message_ajournee,$header);

    }
    
    $i++;
}
//fermeture de la requête.
$requete->closeCursor();
header('location: http://localhost/candidature/classement-final/?id='.$id);
