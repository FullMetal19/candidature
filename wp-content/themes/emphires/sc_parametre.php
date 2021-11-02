<?php
/* Template name: parametre admin*/
session_start();
$con=mysqli_connect('localhost','root','','ussein_candidature');
$mail=$_SESSION['mail'];
$requete=mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab=mysqli_fetch_array($requete);

$_SESSION['0'] = "";
$_SESSION['1'] = "";
$_SESSION['2'] = "";
$_SESSION['3'] = "active";
$_SESSION['4'] = "";
$_SESSION['5'] = "";

?>

<!-- LES COLOEUR 
rgb(141, 54, 20);
rgb(10, 107, 49);
rgb(192, 206, 0); -->
<!DOCTYPE html>
<html lang="fr">
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
    
    .titre_parametre{
        text-align: center;
        background-color: rgb(10, 107, 49);
        color: white;
        border-radius: 15px;
    }
    h1{
        font-size: xx-large;
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
                    <label for="per_mot_de_passe">Mot de passe</label>
                    <input class="form-control" type="password" name="per_mot_de_passe" id="per_mot_de_passe" required>
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
<!-- Partie Gauche -->
<?php 
        include('sc_admin_partie_gauche.php');
        ?>
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
