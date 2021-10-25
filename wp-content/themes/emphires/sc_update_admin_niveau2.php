 <?php
 /*Template name: Gestion d'un compte admin simple*/
 session_start();
$con=mysqli_connect('localhost','root','','ussein_candidature');
$mail = $_GET['mail'];
$query_info = mysqli_query($con,"SELECT prenom,nom FROM ec_connexion WHERE mail='$mail'");
$tab_info = mysqli_fetch_array($query_info);
?>
<style>
        #a{
    background-color: rgb(141,54,20);
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
        box-sizing: border-box;
        color: #fff;
    }
    label{
    color:#fff;
}
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
    form{
        width: 50%;
        height: 80%;
        display: flex;
        flex-direction: column;
        margin-left: 25%;
        border: 1px solid #fff;
        border-radius: 1px;
        box-shadow: 5px 5px 5px rgba(132, 181, 39,0.6);
    }
    input[type=email],select,input[type=submit],input[type=text]{
        width: 90%;
        height: 10%;
        margin: 2% 5%;
        outline: none;
        background: rgba(132, 181, 39,0.4);
        color: #fff;

    }
    option{
        background-color: #fff;
        color: black;
    }
    input[type=checkbox]{
        margin: 1% 5%;
    }
    .titre_page{
        text-align: center;
        background-color: rgba(10, 107, 49, 0.6);
        color: white;
        border-radius: 15px;
        margin: 1% 0%;;
    }

</style>
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
                <h1 class="titre_page">Gestion d'un Compte Admin Simple</h1>
<?php
if(isset($_SESSION['notification1'])){
    echo $_SESSION['notification1'];
    unset($_SESSION['notification1']);
}
$query1 = mysqli_query($con,"SELECT adresse FROM ec_connexion WHERE mail='$mail'");
                            $tab_query = mysqli_fetch_array($query1);
                            $tab_adresse = explode(";",$tab_query['adresse']);
?>
<form action="http://localhost/candidature/code_candidature/verification_update_admin_niveau2.php" method="POST">
    <input type="email" name="email" value="<?php echo $mail; ?>" style="display: none;">
    <input type="email" value="<?php echo $mail; ?>" disabled>
    <input type="text" value="<?php echo $tab_info['prenom']; ?>" disabled>
    <input type="text" value="<?php echo $tab_info['nom'];  ?>" disabled>
    <?php 
    if($tab_query['adresse'] == 0){?>
    <style>
        #check{
            display: none;
        }
    </style>
    <select name="choix" id="choix" onchange="check()">
        <option value="0">Désactiver</option>
        <option value="1">Activer</option>
    </select>

    <?php }
    else{?>
    <select name="choix" id="choix" onchange="check()">
        <option value="1">Activer</option>
        <option value="0">Désactiver</option>
    </select>
    <?php }
    ?>
    <div id="check">
        
    <?php               
               $requete2 = mysqli_query($con,"SELECT * FROM ec_offre");
               while($tab = mysqli_fetch_array($requete2)){
                   if(in_array($tab['id'],$tab_adresse)){
                    ?>
               <input type="checkbox" name="tableau[]" checked value="<?php echo $tab['id'] ?>">
                         <?php echo $tab['titre'] ?> <br><br>
                   <?php } else{
                        ?>
                        <input type="checkbox" name="tableau[]" value="<?php echo $tab['id'] ?>">
                                  <?php echo $tab['titre'] ?> <br><br>
                 <?php  } 
                   
                }
               ?>
               </div>
               <input type="submit" value="Enregistrer les changements">
</form>
                </div>
        </div>

<script>
    function check(){
       var choix = document.getElementById("choix").value;
       if(choix == 0){
        document.getElementById("check").style.display="none";
       }
    else if(choix == 1){
        document.getElementById("check").style.display="block";
    }
    }
            setTimeout(function(){
        document.getElementById('a').style.display="none";
    },5000);
</script>

<?php
mysqli_close($con);
?>