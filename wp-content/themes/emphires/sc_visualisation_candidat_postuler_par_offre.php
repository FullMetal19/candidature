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

$_SESSION['0'] = "";
$_SESSION['1'] = "active";
$_SESSION['2'] = "";
$_SESSION['3'] = "";
$_SESSION['4'] = "";
$_SESSION['5'] = "";

?>

<style>
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
    <!-- Partie Gauche -->
    <?php 
        include('sc_admin_partie_gauche.php');
        ?>
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