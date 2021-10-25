<?php
session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublier')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}
/* Template name: classement_final */
$id=$_GET['id'];

?>
<style>
  *{
        margin: 0;
        padding: 0;
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
    fieldset{
        text-align: center;
        width: 90%;
        margin-left: 2.2%;
        padding: 2em;
    }
    
    .principal{
        display: flex;
        flex-direction: column;
        gap: 2em 0;
    }
    a.offre{
        border-inline-start: 1rem solid white;
        writing-mode: horizontal-tb;
        direction: rtl;
        padding: 0.5em;
        background-color: rgb(10, 107, 49);
        text-decoration: none;
        text-align: center;
        color: white;
        font-weight:bolder;
        margin: 0 100px;
        border-radius: 5px;
        transition: 0.5s all;
      }
       .offre:hover {
           background: rgb(141,54, 20);
           transform:scale(1.02);
           color: white;
           transition: 0.5s all;
       }
       .titre_des_offres{
        
           text-align: center;
           color: white;
           background: rgb(10, 107, 49);
           border-radius: 50px;
           width: 50%;
           font-size: xx-large;
       }
       @media(max-width:700px){
    a.offre{
     display: flex;
     gap:1em 0;
     flex-direction:column;
     padding:3%;
     align-items:center;
 }
}
  .case_note{
    color: rgb(141, 54, 20);
    font-size: 20px;
    background-color:rgba(255,255,255,0.6);
    
  }
 .note{
   width: 100px;
   background: rgb(141, 54, 20);
 }
  .titre_page{
    text-align: center;
    background: rgb(10, 107, 49);
    margin:2% 0%;
    border-radius: 50px;
    color: white;
  }
.le_lien{
  text-align: center;
  background: rgb(192, 206, 0);
  width: 25px;
  border-radius: 50px;
 
 
}
.le_lien:hover {
           background: rgb(10, 107, 49);
           transform:scale(1.02);
            color: white;}
.le_lien a{
  text-decoration: none;
  width: 100%;
  color: white;
}
  *,* ::before,*::after{
    box-sizing: border-box;
  }

  table{
    width: 100%;
    border-collapse: collapse;
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
  .bouton_valider{
      color: white;
      transition: 1s;
	 background:rgb(141, 54, 20);
     padding : 0.4em 1em;
      
  }
  .bouton_valider:hover{
           background: rgb(10, 107, 49);
           transform:scale(1.04);
            color: white;
            transition: 1s;
			background:rgb(141, 54, 20);
  }
  div.zone_saisir_candidat{
      text-align:center;
      margin-bottom:5px;
     
  }
  .text_pour_saisir{
      margin-right:25px;
      font-size:large;
      font-weight:bold; 
  }
  .saisir{
    margin-right:30px; 
    color:black;
    padding : 0.4em 2em;

  }
  
</style>
    <!-- <div class="container"> -->
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
            <div class="bloc_menu active">
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
            <div class="bloc_menu">
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



<h1 class="titre_page">Classement final</h1>


<div class="zone_saisir_candidat">
       <form action="http://localhost/candidature/code_candidature/notification_finale_mail.php?id=<?php echo $id ?>" method="POST">

        <label class="text_pour_saisir">Veuillez saisir le nombre de candidat retenu</label> 
        <input type="number" name="quota" class="saisir" >
        <input type="submit" value="Valider" class="bouton_valider"> 
     
       </form>
    </div>


<table>
  <tr>
    <th>Nº</th>
    <th>PRENOM</th>
    <th>NOM</th>
    <th>E-MAIL</th>
    <th>TEL</th>
    <th class="note">NOTE</th>
    <!-- <th></th> -->
  </tr>
<?php 
  
  $con=mysqli_connect('localhost','root','','ussein_candidature');
  //  $query=mysqli_query($con,"SELECT *FROM ec_postuler WHERE id_offre=' mettre ici le id'");
  //  while($tab=mysqli_fetch_array($query)){


    
//----------------requte de jointure entre deux table -----
  $requete=mysqli_query($con,"SELECT * FROM ec_connexion INNER JOIN ec_postuler ON mail=ec_postuler.id_candidat WHERE id_offre='$id' ORDER BY note DESC");
  $i=1;
  while($result=mysqli_fetch_array($requete)){?>
  <div class="candidat"> 
     
     <tr>
       <td><?php echo $i ?></td>
       <td><?php echo $result['prenom']; ?></td>
       <td><?php echo $result['nom'] ;?> </td>
       <td><?php echo $result['mail'] ;?></td>
       <td><?php echo $result['telephone'] ;?></td>
       <td class="case_note"><?php echo $result['note'];?></td>
       <!-- <td class="le_lien"><a href=' ' class="lien"> Consulter</a> </td> -->
     </tr>
   
   <?php $i+=1;  }  ?>  
 </div>
     <!-- <?php //} ?> -->

</table>

  </div>
  </div>

