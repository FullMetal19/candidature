<?php
/* template name:profil PER */
session_start();

    

$mail= $_SESSION['per_mail'];
$lien_suppression="http://localhost/candidature/code_candidature/suppression_justificatif.php/?fiche=";

$con = mysqli_connect("localhost","root","","ussein_candidature");
// $req_image = mysqli_query($con,"SELECT * FROM ec_connexion_per WHERE mail='$mail'"); 
// $tab_image = mysqli_fetch_array($req_image);




$requete_infos_candidat =  mysqli_query($con,"SELECT * FROM ec_connexion_per WHERE email='$mail'");
$tab_candidat = mysqli_fetch_array($requete_infos_candidat);

$tab_genre = array('Masculin','Feminin');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
 
.cspt-title-bar-wrapper{
               display: none;
          }
/* div.feuille{
    margin: 5%;
    padding: 5%;
    box-shadow: 0 0 10px gray;
}           */
div.bloc_info_personnel{
    width:100%;
    display:flex;
    flex-direction: column;
    border: 2px solid rgb(10,107,49);
   
}
span#titre{
    background-color: rgb(10,107,49);
    padding:1% 0;
    width:100%;
    color: white;
    font-size: x-large;
    font-weight: bold;
    text-align: center;
}
div.contenu_info_personnel{
    width:100%;
    display:flex;
    justify-content: center;
    gap:0 1em;
    padding: 3%;
}
div.candidat_image {
    border:2px solid green;
    box-shadow: 0 0 10px gray;
    width:30%;
}
div.candidat_image form{
    
    display: flex;
    flex-direction: column;
    align-items:center;
    gap: 2em 0;
    padding: 1em;
}
img#image_profil{
    width:150px;
    height: 150px;
}
div.bloc_candidat_info{
    width:70%;
    display: flex;
    flex-direction: column;
    gap: 1em 0;
    border:1px solid green;
    box-shadow: 0 0 10px gray;
    padding: 1em;  
}
div.info_personnel {
    display: flex;
    gap:2em 2em;
    justify-content: center;
}
@media(max-width: 1000px){
    div.info_personnel{
            display:flex;
            flex-direction:column;
            align-items:center;
            gap:1em 0 ;
    }
}
div.info{
    width: 100%;
    display: flex;
    flex-direction:column ;
    gap:1em 0;
}
input.champs_de_text ,select.champs_de_text  {
    width:100%;
    height:4em;
    text-indent: 1em;
    border: 2px solid rgb(10,107,49);
    transition: all 1s;
    border-radius: 10px;
    outline:none;
}
input.champs_de_text:hover ,select.champs_de_text:hover{
    background-color:rgb(205, 253, 205);
    transform: scale(1.04);
    transition: all 1s;
}
input[type=submit]{
    padding:2% 8%;
    background-color: rgb(10,107,49);
    color:white;
    font-size: large;
}
div.enregistrer{
    align-self: center;
}
@media(max-width:780px ){
    div.contenu_info_personnel{
    width:100%;
    display:flex;
    flex-direction: column;
    align-items: center;
    padding: 3%;
    gap: 2em 0;
}
div.candidat_image{
    width:100%;
    display: flex;
    flex-direction: column;
    align-items:center;
    gap: 2em 0;
    border:1px solid;
    padding: 1em;
}
div.bloc_candidat_info{
    width:100%;
    display: flex;
    flex-direction: column;
    gap: 1em 0;
    border:1px solid;
    padding: 1em;  
}
div.info_personnel {
    display: flex;
    gap:2em 2em;
    justify-content: center;
    flex-wrap: wrap;
}
}
label#date_de_naissance{
    font-weight:bold;
    color:rgb(10,107,49);
   text-decoration:underline;
}
#erreur_upload_image{
    color:rgb(141,54,20);
    font-size:large;
    border:
}
input#enregistrer{
    margin-top:2%;
}

label#mail{
        font-size:large;
        transition:all 1s;
        color:rgb(10,107,49);
        border:1px solid;
        border-radius:10px;
        background-color:white;
        padding:0.85em;
    }
    label#mail:hover{
        transition:all 1s;
        transform:scale(1.04);
        background-color:rgb(205, 253, 205);
    }
    span#notif{
        color:rgb(141,54,20);
        font-size:large;
    }
    
    div.col{
      padding:0% 5%;
    }

</style>
</head>

<body class='m-0 p-0 '>
<div class="row m-0">
    <!-- menu de navigation verticale -->
    <?php
    include('sc_per_accueil.php');
    ?>
    
    <!-- Contenu dans le centre -->

    <div class="col ">


<!-- <div class="feuille"> -->
 <!-- debut du code pour la case -->
 <div class="bloc_info_personnel">
                    <span id="titre"> Profil du PER</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu_info_personnel"> 
                    
                        <!-- debut du code pour le box-licence du contenu de la case -->
                        
                            <div class="candidat_image">
                                <form action="http://localhost/candidature/code_per/charger_image_per.php" method="POST" enctype="multipart/form-data">
                                <input type="file" name="image" id="image_profil">
                                <img src="http://localhost/candidature/code_per/repertoire_per/<?php echo $mail ?>/<?php echo $tab_image['image']?>" alt="photo profil" id="image_profil">
                                <label id="erreur_upload_image">
                                <?php if(isset($_SESSION['erreur'])){
                                    echo $_SESSION['erreur'];
                                    unset($_SESSION['erreur']);
                                } 
                                ?>
                                </label>
                                <input type="submit" value="Valider">
                                </form>
                            </div>
                        

                            
                            <div class="bloc_candidat_info">
                            <form action="http://localhost/candidature/code_per/charger_info_per.php" method="POST">

                             <div class="info_personnel">

                                <div class="info">
                                <input type="text" class="champs_de_text" name="prenom" placeholder="Prenom" value="<?php echo $tab_candidat['prenom'];?>" required>
                                <input type="text" class="champs_de_text" name="nom" placeholder="Nom" value="<?php echo $tab_candidat['nom'];?>" required>
                                </div>

                                <div class="info">   
                                <label title='votre UFR' id='mail'><?php echo $_SESSION['per_ufr'] ?></label>
                                <label title='votre mail' id='mail'><?php echo $_SESSION['per_mail'] ?></label>
                                <label title='votre matricule' id='mail'><?php echo $_SESSION['matricule'] ?></label>
                                </div>

                            </div>
                            <span id="notif">
                                      <?php if(isset($_SESSION['info'])){ echo $_SESSION['info'];unset($_SESSION['info']) ;} ?>
                            </span>
                            <br> 

                                <input type="submit" value="Enregistrer" id="enregistrer">   
                            </form>
                            </div>    
                       
                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                  

                </div>
                <!-- fin du code pour la case -->
                
<!-- </div> -->

</div> 

    
</body>
</html>
<script type="text/javascript" src="js_per.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
