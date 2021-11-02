<?php
/*Template name: Visualisation*/
session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublier')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}
$con = mysqli_connect("localhost","root","","ussein_candidature");
$mail = $_SESSION['mail'];
$requete3=mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab3=mysqli_fetch_array($requete3);

$_SESSION['0'] = "";
$_SESSION['1'] = "active";
$_SESSION['2'] = "";
$_SESSION['3'] = "";
$_SESSION['4'] = "";
$_SESSION['5'] = "";

?>
<style>
    
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
</style>
<body>
    <!-- Partie Gauche -->
    <?php 
        include('sc_admin_partie_gauche.php');
        ?>
        <div class="droite" id="droite">
                <div class="droite_container">
                <fieldset class="principal"> <legend class="titre_des_offres">Les Offres</legend>
                <?php
                if($tab3['status']==2){
                $query1 = mysqli_query($con,"SELECT adresse FROM ec_connexion WHERE mail='$mail'");
                            $tab_query = mysqli_fetch_array($query1);
                            $tab_adresse = explode(";",$tab_query['adresse']);
                            $nb_tab_adresse = substr_count($tab_query['adresse'],";");
                            for($i=0;$i<$nb_tab_adresse;$i++){
                            $id = $tab_adresse[$i];
                            $query= "SELECT * FROM ec_offre WHERE id='$id'";
                            $rs_result = mysqli_query($con, $query);
                            ?>
                            
                            <?php
                            while ($ligne = mysqli_fetch_array($rs_result)) { ?>

                            <a class="offre" href="http://localhost/candidature/visualisation-candidats-par-offre?id=<?php echo $ligne['id'].'&titre='.$ligne['titre'];?>"><?php echo $ligne['titre'] ?></a>

                            <?php
                            }
                            }
                        ?>
                <?php } else{
                    $query= "SELECT * FROM ec_offre";
                    $rs_result = mysqli_query($con, $query);
                            while ($ligne = mysqli_fetch_array($rs_result)) { ?>

                            <a class="offre" href="http://localhost/candidature/visualisation-candidats-par-offre?id=<?php echo $ligne['id'].'&titre='.$ligne['titre'];?>"><?php echo $ligne['titre'] ?></a>

                            <?php
                            }

                } ?>
                        
                            </fieldset>
                </div>
        </div>

<script>
     // alerte message

     setTimeout(function(){
        document.getElementById('alert').style.display="none";
    },5000);
</script>