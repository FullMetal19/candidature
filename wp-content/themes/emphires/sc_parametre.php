<?php
/* Template name: parametre admin*/
session_start();
$con=mysqli_connect('localhost','root','','ussein_candidature');
$mail=$_SESSION['mail'];
$requete=mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab=mysqli_fetch_array($requete);
?>

<!-- LES COLOEUR 
rgb(141, 54, 20);
rgb(10, 107, 49);
rgb(192, 206, 0); -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajout PERs</title>
</head>


<style>
    #a{
    background-color: rgb(192,206,0);
    color: white;
    width: 400px;
    padding: 2%;
    text-align: justify;
    position: fixed;
    right: 10px;
    border-radius: 10px 100px / 120px;
    z-index: 9999;
    animation: alert 1s ease forwards;
}
@keyframes alert{
    0%{
        transform: translateX(100%);
    }
    40%{
        transform: translateX(-10%);
    }
    80%{
        transform: translateX(0%);
    }
    100%{
        transform: translateX(-10%);
    }
}
    *{
        margin: 0;
        padding: 0;
    }
    /* label{
    color:#fff;
} */
    body{
        
        background-image: url('http://localhost/candidature/wp-content/uploads/2021/10/background.jpg');
        background-position: 0;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    /* div.container{
        display: grid;
        grid-template-columns:300px auto;
        position: absolute;
        box-sizing: border-box;
        height: 100%;
        width: 100%;
    } */

   
    div.gauche{
        background-color: rgba(10, 107, 49,0.6);
        display: flex;
        flex-direction: column;
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        width: 21%;
        left: -15%;
        gap: 2%;
        transition: all 1.5s;
        z-index: 100;
    }
    div.gauche:hover{
        left: 0%;

    }
    div.droite{
        height: 100%;
        box-sizing: border-box;
        position: fixed;
        top: 0;
        left: -15%;
        right: 0;
        width: calc(100%-21%);
        margin-left: 21%;
        transition: all 1.5s;
        overflow-y: scroll;
        overflow-x: hidden;
    }
    div.droite_container{
        margin: 5%;
    }
    
    div.bloc_menu a img{
        width: 30px;
        height: 30px;
    }
    div.bloc_menu a label{
        vertical-align: 0.9em;
        font-size: large;
        margin-right: 15%;
        cursor: pointer;
        color: white;
    }
    div.bloc_menu{
        margin-top:5%;
        background-color: rgba(132, 181, 39,0.6);
        padding: 1em;
        text-align: right;
    }
    div.bloc_menu:hover{
        background-color: rgba(141, 54, 20,0.6);
    }    
    div.bloc_menu a{
        text-decoration: none;
        color: black;
        transition: 1s;
    }
    div.bloc_menu a:hover{
        color: white;
        transition: 1s;
    }
    div.titre{
        display: flex;
        margin: 0% 10%;
        align-items: right;
        color: white;
    }
    div.titre h1{
        margin-top: 5%;
        margin-right: 15%;
    }
    div.titre img{
        width: 30px;
        height: 30px;
        position: relative;
        top: 20%;
    }
    div.active{
        background-color: rgba(141, 54, 20,0.6);
    }  
    
    @media(max-width:900px){
        div.titre h1{
            font-size: 1.2em;
        }
        div.bloc_menu a label{
            font-size: 0.8em;
        }
    }
    @media(max-width:750px){
        div.titre h1{
            font-size: 1em;
        }
        div.bloc_menu a label{
            font-size: 0.6em
        }
        div.gauche,div.droite{
            left: -13%;
        }
    }
    @media(max-width:630px){
        div.bloc_menu a label,div.titre h1{
            display: none;
        }
        div.gauche,div.droite{
            left: -11%;
        }
    }
    @media(max-width:600px){
        div.gauche,div.droite{
            left: -5%;
        }
    }
    .titre_parametre{
        text-align: center;
        background-color: rgba(10, 107, 49, 0.6);
        color: white;
        border-radius: 15px;
    }
    .font{
        background-color: red;
    }
    .les_parametre{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
       
        
    }
    .lien{
        margin: 15px 150px;
        background-color:rgba(10, 107, 49,0.6);
        padding:16px;
        border-inline-start: 1rem solid rgb(192, 206, 0);
        writing-mode: horizontal-tb;
        border-radius: 5px;
        transition: 1s all;
        width: 50%;
    }
    .lien:hover{
           transform:scale(1.1);
           color: white;
           transition: 1s all;
           direction: rtl;
           background-position:  bottom;
           background-color:rgba(141, 54, 20, 0.6);
    }
    .les_parametre a{
        text-decoration: none;
        color: white;
    }

  
</style>

 <!-- Modal -->
 <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Ajouter PER</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <form action="http://localhost/candidature/code_per/per_verif_ajout_per.php" method="post">
                <div class="form-group">
                    <label for="per_nom">Nom</label>
                    <input class="form-control" type="text" name="per_nom" id="per_nom" required>
                </div>
                <div class="form-group">
                    <label for="per_prenom">Prénom</label>
                    <input class="form-control" type="text" name="per_prenom" id="per_prenom" required>
                </div>
                <div class="form-group">
                    <label for="per_matricule">Matricule</label>
                    <input class="form-control" type="text" name="per_matricule" id="per_matricule" required>
                </div>
                <div class="form-group">
                    <label for="per_email">E-mail</label>
                    <input class="form-control" type="email" name="per_email" id="per_email" required>
                </div>
                <div class="form-group">
                    <label for="per_ufr">UFR</label>
                    <input class="form-control" type="text" name="per_ufr" id="per_ufr" required>
                </div>
                <div class="form-group">
                    <label for="per_ot_de_passe">Mot de passe</label>
                    <input class="form-control" type="password" name="per_ot_de_passe" id="per_ot_de_passe" required>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-success">Enregistrer</button>
      </div>
      </form>
    </div>
  </div>
</div>


<body>
<?php
                                    if(isset($_SESSION["notification1"])){
                                        echo $_SESSION["notification1"];
                                        unset($_SESSION["notification1"]);
                                    }
                                    ?>
<div class="gauche">
            <div class="titre">
                <h1>Dashboard</h1>
                <img src="https://img.icons8.com/ios-filled/50/000000/menu--v4.png"/>
            </div>
            
            <hr>
            <div class="bloc_menu">
                <a href="http://localhost/candidature/ajout-offre/">
                    <label>Les Offres</label>
                    <img src="https://img.icons8.com/material-rounded/50/000000/discount-finder.png"/>
                </a>
            </div>
            <div class="bloc_menu">
                <a href="http://localhost/candidature/visualisation/">
                    <label>Visualisation</label>
                    <img src="https://img.icons8.com/ios/50/000000/doughnut-chart--v2.png"/>
                </a>
            </div>
            <div class="bloc_menu">
            <a href="http://localhost/candidature/point-modulable/">
                    <label>Point Modulable</label>
                    <img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-calculator-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>
                </a>
            </div>
            <div class="bloc_menu active">
                <a href="http://localhost/candidature/parametre/">
                    <label>Paramètre</label>
                    <img src="https://img.icons8.com/ios/50/000000/settings--v1.png"/>
                </a>
            </div>
            <div class="bloc_menu">
                <a href="http://localhost/candidature/code_candidature/verification_deconnexion.php">
                    <label> Déconnexion</label>
                    <img src="https://img.icons8.com/ios/50/000000/exit.png"/>
                </a>
            </div>

        </div>
        <div class="droite" id="droite">
                <div class="droite_container">
<div class="titre_parametre">
    <h1>PARAMETRE ADMINISTRATEUR</h1>
</div>

<div class="les_parametre">
   
<?php
                    if($tab['status']==2){ ?>
                    <a href="http://localhost/candidature/changer-mot-de-passe/" class="lien">CHANGER MOT DE PASSE</a>
                    <?php } else{ ?>
<a href="http://localhost/candidature/creation-compte-admin/" class="lien">AJOUT D'UN ADMIN SIMPLE</a>
<a href="http://localhost/candidature/liste-admin-niveau2/" class="lien">GESTION COMPTE ADMIN SIMPLE</a>
<a style="cursor: pointer;" class="lien" data-toggle="modal" data-target="#exampleModalScrollable">CREATION COMPTE PER</a>
<a href="http://localhost/candidature/changer-mot-de-passe/" class="lien">CHANGER MOT DE PASSE</a>
<?php } ?>
</div>

                </div>
        </div> 

</body>
        <script>
            setTimeout(function(){
        document.getElementById('a').style.display="none";
    },5000);
        </script>

<!-- <script type="text/javascript" src="js_per.js"></script> -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
