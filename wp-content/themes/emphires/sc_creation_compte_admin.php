<?php
    session_start();
/* Template name: creation compte admin*/
?>


    <style>
         *{
        margin: 0;
        padding: 0;
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
        text-align: center;
        margin: 0% 10%;
        justify-content: right;
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
        
    }
.bouton{
    
    width:100%;
    border-radius: 25px;
}
legend{
    text-align:center;
}


.logo{
    
    position: relative;
        border-radius: 50%;
        width: 150px;
        height: 150px;
        border: 5px solid white;
        background-color:rgb(10,107,49);

    
}
.inscription{
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 15px ;
        height: 600px;
        width: 400px;
        justify-content: center;
        margin-left: -215px;
        margin-top: -270px;
        text-align: center;     
        background-color: rgba(0, 0, 0, 0.1);
        box-shadow: 10px 5px 10px rgb(10,107,49);

   
}
fieldset{margin-top: -15px;}

form {
    display: flex;
        flex-direction: column;
        justify-content: center;
        padding-top: 1px;
    
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password], input[type=email],input[type=tel] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    /* display: #67BE4B; */
    border-radius:5px;
    background-color: rgba(10, 107, 49, 0.6);
    border: 2px solid rgb(10,107,49);
    /* border: 1px solid #ccc; */
    /* box-sizing: border-box; */
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
                <a href="">
                    <label>Calcul</label>
                    <img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-calculator-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>
                </a>
            </div>
            <div class="bloc_menu active">
                <a href="http://localhost/candidature/creation-compte-admin/">
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
                <div id="container">
            
            
           
            <fieldset class="inscription">  
                <legend> <img src="http://localhost/candidature/code_candidature/logo.png" alt="logo" class="logo"></legend> 

                <div class="titre">Creation Compte</div> 

                <form action="http://localhost/candidature/code_candidature?verification_creation_compte_admin.php" method="POST">
<!-- 
               <div class="titre"><h1>INSCRIPTION</h1></div>  -->
                
               
                <input type="text" placeholder="PRENOM" name="prenom" required>

                
                <input type="text" placeholder="NOM" name="nom" required>
                
                <input type="email" placeholder="Mail" name="mail" required>
                <input type="tel" placeholder="Telephone" name="telephone" required>
                <label >Date de naissance</label>
                <input type="date" placeholder="Date de naissance" name="date_de_naissance" required>

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
                </fieldset>
 
        </div>

                </div>
        </div>





        