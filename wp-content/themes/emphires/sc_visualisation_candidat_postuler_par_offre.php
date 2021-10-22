<?php
/*Template name: Visualisation candidat par offre*/
session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublier')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","ussein_candidature");
$query3= "SELECT titre FROM ec_offre WHERE id='$id'";
$result3 = mysqli_query($con, $query3);
$tab3 = mysqli_fetch_all($result3);
$titre = $tab3[0][0];
mysqli_close($con);
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
    }
    div.titre h1{
        margin-top: 5%;
        margin-right: 15%;
        color:white;
    }
    div.titre img{
        width: 30px;
        height: 30px;
        position: relative;
        top: 20%;
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
    .titre_page{
    text-align: center;
    background: rgb(10, 107, 49);
    border-radius: 50px;
    margin-bottom: 2%;
    color: white;
  }
.le_lien{
  text-align: center;
  background: rgb(192, 206, 0);
  width: 25px;
  border-radius: 50px;
  transition: 1s all;
 
}
.le_lien:hover {
           background: rgb(10, 107, 49);
           transform:scale(1.02);
            color: white;
            transition: 1s all;
        }
.le_lien a{
  text-decoration: none;
  color: white;
  width: 100%;
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
    background-color: rgba(10,107,49,0.4);
    color: white;
    border: solid 1px green;
   
  }
  th{
    color: white;
  }
  th{
    background-color: rgb(10, 107, 49);
  }
  div.active{
    background-color: rgba(141, 54, 20,0.6);
    } 
    .bouton_finalisation{
        float:right;
        margin-right:5%;
        height: 40px;
        width: 150px;
        background-color:rgb(141, 54, 20);
        font-size:x-large;
        color:white;

    }
    .bouton_finalisation:hover{
        background-color:rgb(10, 107, 49);
    }
   .classement_Fin{
    float:right;
        margin-right:38%;
        margin-bottom:2%;
        height: 40px;
        width: 270px;
        background-color:rgb(192, 206, 0);
        font-size:x-large;
        color:white;
   }
   .classement_Fin:hover{
        background-color:rgb(10, 107, 49);
   }

  

</style>
<body>
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
                <?php
                                    if(isset($_SESSION["message_candidat_note"])){
                                        echo $_SESSION["message_candidat_note"];
                                        unset($_SESSION["message_candidat_note"]);
                                    }
                                    ?> 
                <h1 class="titre_page">Listes des Candidats</h1>
                <div class="classement_final" >
            </div>
                            <table>
                            <tr>
                                <th>Nº</th>
                                <th>PRENOM</th>
                                <th>NOM</th>
                                <th class="consulter"></th>
                            </tr>
                            <?php 
                            $con = mysqli_connect("localhost","root","","ussein_candidature");
                            $query= "SELECT * FROM ec_postuler WHERE id_offre='$id'";
                            $result = mysqli_query($con, $query); 
                            $i=1;
                            while ($ligne1 =  mysqli_fetch_array ($result)) {?>

                            <div class="contenu">
                            <?php $id_candidat= $ligne1['id_candidat'];
                            $requete=mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$id_candidat'");
                            
                            while( $result2=mysqli_fetch_array($requete)){?>
                            <div class="candidat"> 
                                
                                <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $result2['prenom'] ; ?></td>
                                <td><?php echo $result2['nom'];?> </td>
                                <td class="le_lien"><a href='http://localhost/candidature/calcul-note-candidat-par-offre?id=<?php echo $id_candidat.'&prenom='.$result2['prenom'].'&nom='.$result2['nom'].'&id_offre='.$id.'&titre='.$titre ;?>' class="lien"> Consulter</a> </td>
                                </tr>
                            
                            <?php }?> 
                            </div>
                            <?php $i+=1; }?>

                            </table>
                </div>
                <?php
                $query4 =mysqli_query($con,"SELECT finaliser FROM ec_offre WHERE id='$id'");
                $tab_query4 = mysqli_fetch_array($query4);
                if($tab_query4['finaliser'] == 1){?>               
                <style>
                    a.lien{
                        display: none;
                    }
                </style>
                <a href="http://localhost/candidature/classement-final/?id=<?php echo $id ?>"> <input type="button"  value="Voir le classement final" class="classement_Fin"></a>
          <?php  }
          if($tab_query4['finaliser'] == 0){?>               
                
                <a onclick="return confirm('Si vous finalisez vous pourrez plus changer les notes')" href="http://localhost/candidature/code_candidature/verification_finaliser.php?id=<?php echo $id ?>">  <input type="button" name="finaliser" value="Finaliser" class="bouton_finalisation" ></a>
          <?php  } ?>
        </div>

        <script>
     // alerte message

     setTimeout(function(){
        document.getElementById('a').style.display="none";
    },5000);


</script>

<?php
mysqli_close($con);

?>