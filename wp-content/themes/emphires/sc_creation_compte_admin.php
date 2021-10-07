<?php
    session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublier')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}
/* Template name: creation compte admin*/

$con=mysqli_connect('localhost','root','','ussein_candidature');
$mail=$_SESSION['mail'];
$requete=mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab=mysqli_fetch_array($requete);


?>


    <style>
         *{
        margin: 0;
        padding: 0;
    }
    label{
    color:#fff;
}
    body{
        
        background-image: url('http://localhost/candidature/wp-content/uploads/2021/09/background-scaled.jpg');
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
   
    
    .titre{
        text-align:center;
        padding:0px;
        color:#fff;
        width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
        
    }
.bouton{
    
    width:100%;
    border-radius: 25px;
}
legend{
    text-align:center;
}
.phrase{
    text-align:center;
    background-color: rgba(10, 107, 49,0.6);
    color:#fff;
    padding: 10% 0%;
    margin: 10%;
    border-radius:25px ;
    font-size:100%;
}


.logo{
    
    position: relative;
        border-radius: 50%;
        width: 150px;
        height: 150px;
        border: 5px solid white;
        background-color:rgb(10,107,49);
        top:-5em;

    
}
.inscription{
    position:absolute;
        border-radius: 15px ;
        height: 75em;
        width: 60%;
        justify-content: center;
        text-align: center;     
        background-color: rgba(0, 0, 0, 0.1);
        box-shadow: 10px 5px 10px rgb(10,107,49);
        margin:2% 15%;

   
}
fieldset{margin-top: -15px;}

form {
    display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 1px;
    
}


/* Full-width inputs */
input[type=text], input[type=password], input[type=email],input[type=tel],input[type=date] {
    width: 80%;
    padding:2%;
    margin:2%;
    /* display: #67BE4B; */
    border-radius:5px;
    background-color: transparent;
    border: 2px solid rgb(10,107,49);
    color:#fff;
    outline:none;
    /* border: 1px solid #ccc; */
    /* box-sizing: border-box; */
}
::placeholder{
    color:#fff;
    background-color:transparent;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: rgb(132,181,39);
    border: 2px solid rgb(10,107,49);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    /* border: none; */
    cursor: pointer;
    width: 100%;
    border-radius:20px;
    font-size:large;
}
input[type=submit]:hover {
    background-color: rgb(10,107,49);
    /* color: ; */
    border: 1px solid #53af57;
}
.check_titre{
    color:#fff;
    font-size:large;
}
.check{
    text-align:left;
    margin:1% 3%;
    color:#fff;
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
                <?php
                    if($tab['status']==2){ ?>
                    <p class="phrase">VOUS N'AVEZ PAS ACCES DANS CETTE PAGE !</p>
                    <?php } else{ ?>
            
            
           
            <div class="inscription">  
                <legend> <img src="http://localhost/candidature/code_candidature/logo.png" alt="logo" class="logo"></legend> 

                <h1 class="titre">Creation Compte</h1> 

                <form action="http://localhost/candidature/code_candidature/verification_creation_compte_admin.php" method="POST">
<!-- 
               <div class="titre"><h1>INSCRIPTION</h1></div>  -->
                
               
                <input type="text" placeholder="PRENOM" name="prenom" required>

                
                <input type="text" placeholder="NOM" name="nom" required>
                
                <input type="email" placeholder="Mail" name="mail" required>
                <input type="tel" placeholder="Telephone" name="telephone" required>
                <label >Date de naissance</label>
                <input type="date" placeholder="Date de naissance" name="date_de_naissance" required>
                <label class="check_titre">Liste des offres à administrer</label>
                <div class="check">
               <?php 
               $requete2 = mysqli_query($con,"SELECT * FROM ec_offre");
               while($tab = mysqli_fetch_array($requete2)){ ?>
               <input type="checkbox" name="tableau[]" value="<?php echo $tab['id'] ?>">
                         <?php echo $tab['titre'] ?> <br><br>
               <?php }
               ?>
               </div>

                <input type="password" placeholder="Mot de passe" name="mot_de_passe" required>
                <input type="password" placeholder="Confirmation " name="confirmation_mot_de_passe" required>

                <label > <?php 
                    if(isset($_SESSION['message_validation'])){
                        echo $_SESSION['message_validation'];
                        unset($_SESSION['message_validation']);
                    }?>
                </label> 

                
                <!-- <input type="tel" placeholder="TEL" name="telephone" required> </br> -->
                <div class="bouton">
                <input  type="submit" id='submit' value="Valider" name="Valider" ></div>
                </form>
 
        </div>

                </div>
        </div>
  <?php } ?>




        