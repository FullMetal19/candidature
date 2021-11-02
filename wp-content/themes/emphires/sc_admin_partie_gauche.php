<?php session_start(); ?>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        
        background-image: url('http://localhost/candidature/wp-content/uploads/2021/11/bg_cand.jpg');
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
        background-color: rgba(10, 107, 49,1);
        display: flex;
        flex-direction: column;
        position: fixed;
        top: 0;
        height: 100%;
        width: 21%;
        left: -15%;
        transition: all 1.5s;
        z-index: 100;
    }
    div.gauche:hover{
        left: 0%;
    }
    hr{
        color: #fff;
    }
    div.droite{
        background-image: url('http://localhost/candidature/wp-content/uploads/2021/11/bg_cand.jpg');
        background-position: 0;
        background-repeat: no-repeat;
        background-size: cover;
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
        transition: 1s all;
    }
    div.bloc_menu a:hover{
        color: white;
        transition: 1s all;
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
            font-size: 0.6em;
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

</style>

<div class="container_body">
<div class="gauche">
            <div class="titre">
                <h1>Dashboard</h1>
                <img src="https://img.icons8.com/ios-filled/50/000000/menu--v4.png"/>
            </div>
            <hr>
            <div class="bloc_menu <?php echo $_SESSION['0'];?>">
                <a href="http://localhost/candidature/ajout-offre/">
                    <label>Les Offres</label>
                    <img src="https://img.icons8.com/material-rounded/50/000000/discount-finder.png"/>
                </a>
            </div>
            <div class="bloc_menu <?php echo $_SESSION['1'];?>">
                <a href="http://localhost/candidature/visualisation/">
                    <label>Visualisation</label>
                    <img src="https://img.icons8.com/ios/50/000000/doughnut-chart--v2.png"/>
                </a>
            </div>
            <div class="bloc_menu <?php echo $_SESSION['2'];?>">
            <a href="http://localhost/candidature/point-modulable/">
                    <label>Point Modulable</label>
                    <img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-calculator-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>
                </a>
            </div>
            <div class="bloc_menu <?php echo $_SESSION['3'];?>">
                <a href="http://localhost/candidature/parametre/">
                    <label>Paramètre</label>
                    <img src="https://img.icons8.com/ios/50/000000/settings--v1.png"/>
                </a>
            </div>
            <div class="bloc_menu <?php echo $_SESSION['4'];?>">
                <a href="http://localhost/candidature/liste_des_pers/">
                    <label>Espace PER</label>
                    <img src="https://img.icons8.com/ios/50/000000/myspace.png"/>
                </a>
            </div>
            <div class="bloc_menu <?php echo $_SESSION['5'];?>">
                <a href="http://localhost/candidature/code_candidature/verification_deconnexion.php">
                    <label> Déconnexion</label>
                    <img src="https://img.icons8.com/ios/50/000000/exit.png"/>
                </a>
            </div>

        </div>