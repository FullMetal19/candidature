<?php
/*Template name: liste admin niveau2*/
session_start();
$con=mysqli_connect('localhost','root','','ussein_candidature');
$requete = mysqli_query($con,"SELECT * FROM ec_connexion WHERE status='2'");

?>

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
    table{
    width: 100%;
    border-collapse: collapse;
    color: #fff;
  }
  th,td{
    padding: 10px;
    text-align: left;
    border: solid 1px green;
   
  }
  tr:nth-child(odd){
    background-color: rgba(192, 206, 0,0.6);
  }
  th{
    color: white;
  }
  th{
    background-color: rgb(10, 107, 49);
  }
  .titre_page{
        text-align: center;
        background-color: rgba(10, 107, 49, 0.6);
        color: white;
        border-radius: 15px;
        margin: 1% 0%;;
    }

    a.lien{
        text-decoration: none;
        color: #fff;
    }

</style>
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
                <h1 class="titre_page">Liste des Admins Simples</h1>
                <table>
                <tr>
                    <th>Nº</th>
                    <th>PRENOM</th>
                    <th>NOM</th>
                    <th>E-MAIL</th>
                    <th>TEL</th>
                    <th class="note">GESTION</th>
                    <!-- <th></th> -->
                </tr>
                <?php 
                $i=1;
                while($result=mysqli_fetch_array($requete)){?>
                <div class="candidat"> 
                   <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $result['prenom']; ?></td>
                     <td><?php echo $result['nom'] ;?> </td>
                     <td><?php echo $result['mail'] ;?></td>
                     <td><?php echo $result['telephone'] ;?></td>
                     <td class="le_lien"><a href='http://localhost/candidature/gestion-admin-simple?mail=<?php echo $result['mail'] ;?>' class="lien"> Modifier</a> </td>
                   </tr>

                 </div>
                 <?php $i+=1;  }  ?>
                
                </table>
                </div>
        </div>

        <script>
            setTimeout(function(){
        document.getElementById('a').style.display="none";
    },6000);
        </script>