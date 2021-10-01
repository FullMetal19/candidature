<?php
/*
Template name: point modulable
*/
session_start();

 

$con = mysqli_connect("localhost","root","","ussein_candidature");
$req1 = mysqli_query($con,"SELECT note FROM note_age");
$tab1 = mysqli_fetch_all($req1);
$can_note_age_1 = $tab1[0][0];
$can_note_age_2 = $tab1[1][0];
$can_note_age_3 = $tab1[2][0];
$can_note_age_4 = $tab1[3][0];
$can_note_age_5 = $tab1[4][0];
$can_note_age_6 = $tab1[5][0];
$can_note_age_7 = $tab1[6][0];
$can_note_age_8 = $tab1[7][0];
$can_note_age_9 = $tab1[8][0];
$can_note_age_10 = $tab1[9][0];
$can_note_age_11 = $tab1[10][0];
$can_note_age_12 = $tab1[11][0];

$req2 = mysqli_query($con,"SELECT note FROM ec_note_diplome");
$tab2 = mysqli_fetch_all($req2);
$can_note_diplome_1 = $tab2[0][0];
$can_note_diplome_2 = $tab2[6][0]; //diplome de point 30, à faire attetion puisque c'est deernier sur la liste dans la base de données
$can_note_diplome_3 = $tab2[1][0];
$can_note_diplome_4 = $tab2[2][0];
$can_note_diplome_5 = $tab2[3][0];
$can_note_diplome_6 = $tab2[4][0];
$can_note_diplome_7 = $tab2[5][0];

$req3 = mysqli_query($con,"SELECT note FROM ec_note_licence_master");
$tab3 = mysqli_fetch_all($req3);
$can_note_licence_master_1 = $tab3[0][0];
$can_note_licence_master_2 = $tab3[1][0];
$can_note_licence_master_3 = $tab3[2][0];
$can_note_licence_master_4 = $tab3[3][0];
$can_note_licence_master_5 = $tab3[4][0];
$can_note_licence_master_6 = $tab3[5][0];


$req4 = mysqli_query($con,"SELECT note FROM ec_note_doctorat");
$tab4 = mysqli_fetch_all($req4);
$can_note_doctorat_1 = $tab4[0][0];
$can_note_doctorat_2 = $tab4[1][0];
$can_note_doctorat_3 = $tab4[2][0];
$can_note_doctorat_4 = $tab4[3][0];
$can_note_doctorat_5 = $tab4[4][0];
$can_note_doctorat_6 = $tab4[5][0];
$can_note_doctorat_7 = $tab4[6][0];
$can_note_doctorat_8 = $tab4[7][0];
$can_note_doctorat_9 = $tab4[8][0];
$can_note_doctorat_10 = $tab4[9][0];
$can_note_doctorat_11 = $tab4[10][0];

$req5 = mysqli_query($con,"SELECT note FROM ec_note_experience_pedagogique");
$tab5 = mysqli_fetch_all($req5);
$can_note_experience_pedagogique_1 = $tab5[0][0];
$can_note_experience_pedagogique_2 = $tab5[1][0];

$req6 = mysqli_query($con,"SELECT note FROM ec_note_experience_recherche");
$tab6 = mysqli_fetch_all($req6);
$can_note_experience_recherche_1 = $tab6[0][0];
$can_note_experience_recherche_2 = $tab6[1][0];
$can_note_experience_recherche_3 = $tab6[2][0];
$can_note_experience_recherche_4 = $tab6[3][0];

$req7 = mysqli_query($con,"SELECT note FROM ec_note_autre_experience");
$tab7= mysqli_fetch_all($req7);
$can_note_autre_experience_1 = $tab7[0][0];
$can_note_autre_experience_2 = $tab7[1][0];
$can_note_autre_experience_3 = $tab7[2][0];
$can_note_autre_experience_4 = $tab7[3][0];
$can_note_autre_experience_5 = $tab7[4][0];

$req15 = mysqli_query($con,"SELECT note FROM ec_note_grade");
$tab15 = mysqli_fetch_all($req15);
$can_note_grade_1 = $tab15[0][0];
$can_note_grade_2 = $tab15[1][0];
$can_note_grade_3 = $tab15[2][0];
$can_note_grade_4 = $tab15[3][0];
$can_note_grade_5 = $tab15[4][0];

$req16 = mysqli_query($con,"SELECT note FROM ec_note_brevet");
$tab16 = mysqli_fetch_all($req16);
$can_note_brevet_1 = $tab16[0][0];
$can_note_brevet_2 = $tab16[1][0];

$req9 = mysqli_query($con,"SELECT note FROM ec_note_aid");
$tab9= mysqli_fetch_all($req9);
$can_note_aid_1 = $tab9[0][0];
$can_note_aid_2 = $tab9[1][0];
$can_note_aid_3 = $tab9[2][0];
$can_note_aid_4 = $tab9[3][0];

$req10 = mysqli_query($con,"SELECT note FROM ec_note_aihd");
$tab10= mysqli_fetch_all($req10);
$can_note_aihd_1 = $tab10[0][0];
$can_note_aihd_2 = $tab10[1][0];
$can_note_aihd_3 = $tab10[2][0];
$can_note_aihd_4 = $tab10[3][0];

$req11 = mysqli_query($con,"SELECT note FROM ec_note_ldd");
$tab11= mysqli_fetch_all($req11);
$can_note_ldd_1 = $tab11[0][0];
$can_note_ldd_2 = $tab11[1][0];
$can_note_ldd_3 = $tab11[2][0];
$can_note_ldd_4 = $tab11[3][0];

$req12 = mysqli_query($con,"SELECT note FROM ec_note_lv");
$tab12= mysqli_fetch_all($req12);
$can_note_lv_1 = $tab12[0][0];
$can_note_lv_2 = $tab12[1][0];
$can_note_lv_3 = $tab12[2][0];
$can_note_lv_4 = $tab12[3][0];

$req18 = mysqli_query($con,"SELECT note FROM `ec_note_distinction`");
$tab18= mysqli_fetch_all($req18);
$can_note_distinction_1 = $tab18[0][0];
$can_note_distinction_2 = $tab18[1][0];

$req13 = mysqli_query($con,"SELECT note FROM ec_note_proccedings");
$tab13= mysqli_fetch_all($req13);
$can_note_proccedings_1 = $tab13[0][0];
$can_note_proccedings_2 = $tab13[1][0];

$req14 = mysqli_query($con,"SELECT note FROM ec_note_communication_conference");
$tab14 = mysqli_fetch_all($req14);
$can_note_communication_conference_1 = $tab14[0][0];
$can_note_communication_conference_2 = $tab14[1][0];
$can_note_communication_conference_3 = $tab14[2][0];
$can_note_communication_conference_4 = $tab14[3][0];
$can_note_communication_conference_5 = $tab14[4][0];
$can_note_communication_conference_6 = $tab14[5][0];
   
       //requete pour admin simple
$mail=$_SESSION['mail'];
$requete=mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab=mysqli_fetch_array($requete); 
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
    div.droite_container h1{
        color: white;
        background-color: rgba(10, 107, 49,0.6);
        padding: 1%;
        text-align: center;
        box-shadow: 5px 5px 5px rgba(132, 181, 39,0.6);
    }
    details{
        color: white;
        margin: 3%;
    }
    summary{
        background-color: rgba(10, 107, 49,0.6);
        padding: 1%;
        cursor: pointer;
    }
    table{
        width: 100%;
        border:1px solid white;
        border-top: 0px;
    }
    th,td{
        border:1px solid white;
        padding:2px;
        text-align:center;
        background-color: rgba(10, 107, 49,0.5);
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
    td{
        color: #fff;
    }
tr{
        border-right:3px solid white;
        border-left: 3px solid;
    }
tr:hover{
        background-color:rgb(192,206,0);
    }
    th{
        background-color:rgb(10,107,49);
        color:white;
        width: 150px;
    }
    tr td:last-child{
        width: 10%;
    }
    input[type=text]{
        width: 100%;
        height: 100%;
        text-align: center;
        font-size: 1em;
        outline: none;
        border: none;
        background-color: rgba(141, 54, 20,0.6);
        color: #fff;
    }
    input[type=submit]{
        padding: 1%;
        width:80%;
        cursor: pointer;
        background-color: rgba(132, 181, 39,0.6);
        color: #fff;
        font-size: large;
        margin: 0% 10%;
        border: none;
        transition: 1s all;
    }
    input[type=submit]:hover{
        background-color: rgba(10, 107, 49,0.6);
        transition: 1s all;
        transform: translateX(5%);
    }
    a.reinitialiser{
        text-decoration: none;
        color: #fff;
        width: 100%;
}
div.div_reinitialiser{
    background-color: rgba(141, 54, 20,0.6);
    text-align: center;
    padding: 1%;
    margin: 2% 10%;
    font-size: large;
    transition: 1s all;
}
div.div_reinitialiser:hover{
    background-color: rgba(10, 107, 49,0.6);
        transition: 1s all;
        transform: translateX(5%);
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
            <div class="bloc_menu active">
                <a href="http://localhost/candidature/point-modulable/">
                    <label>Point Modulable</label>
                    <img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-calculator-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>
                </a>
            </div>
            <div class="bloc_menu">
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

                    <?php
                    if($tab['status']==2){ ?>
                    <p class="phrase">VOUS N'AVEZ PAS ACCES DANS CETTE PAGE !</p>
                    <?php } else{ ?>

                    <h1>Paramétrer Les Points</h1>
                <form action="http://localhost/candidature/code_candidature/verification_point_modulable.php" method="post">
                        <!-- Partie Formulaire âge -->
                        <details>
        <summary> NOTES ÂGE </summary>

        <table>
            <tr><th rowspan=6> MASTER </th> <td>Moins de 25 ans</td> <td><input type="text" name="master1" value="<?php echo $can_note_age_1 ?>" ></td></tr>
            <tr> <td>Entre de 25 et 30ans</td> <td><input type="text" name="master2" value="<?php echo $can_note_age_2 ?>" ></td></tr>
            <tr><td>Entre 30 et 35ans</td> <td><input type="text" name="master3" value="<?php echo $can_note_age_3 ?>" ></td></tr>
            <tr><td>Entre 35 et 40ans</td> <td><input type="text" name="master4" value="<?php echo $can_note_age_4 ?>" ></td></tr>
            <tr><td>Entre 40 et 45ans</td> <td><input type="text" name="master5" value="<?php echo $can_note_age_5 ?>" ></td></tr>
            <tr><td>Plus de 45ans</td> <td><input type="text" name="master6" value="<?php echo $can_note_age_6 ?>" ></td></tr>

            <tr><th rowspan=6> DOCTEUR </th> <td>Moins de 25 ans</td> <td><input type="text" name="doctorat1" value="<?php echo $can_note_age_7 ?>" ></td></tr>
            <tr> <td>Entre de 25 et 30ans</td> <td><input type="text" name="doctorat2" value="<?php echo $can_note_age_8 ?>" ></td></tr>
            <tr><td>Entre 30 et 35ans</td> <td><input type="text" name="doctorat3" value="<?php echo $can_note_age_9 ?>" ></td></tr>
            <tr><td>Entre 35 et 40ans</td> <td><input type="text" name="doctorat4" value="<?php echo $can_note_age_10 ?>" ></td></tr>
            <tr><td>Entre 40 et 45ans</td> <td><input type="text" name="doctorat5" value="<?php echo $can_note_age_11 ?>" ></td></tr>
            <tr><td>Plus de 45ans</td> <td><input type="text" name="doctorat6" value="<?php echo $can_note_age_12 ?>" ></td></tr>
        </table>
    </details>

                <!-- Partie Formulaire Diplôme -->
                <details>
        <summary>
            NOTES DIPLÔME
        </summary>
        <table>
            <tr>
                <th rowspan="6">Diplôme</th>
                    <td>
                    Doctorat d'état + (PhD ou Doctorat unique)
                    </td>
                    <td>
                        <input type="text" name="diplome1" value="<?php echo $can_note_diplome_1; ?>">
                    </td>
            </tr>
            <tr>
                <td>
                Doctorat d'état + Doctorat troisième cycle
                </td>
                <td>
                    <input type="text" name="diplome2" value="<?php echo $can_note_diplome_2; ?>">
                </td>
            </tr>
            <tr>
                <td>
                (PhD ou Doctorat unique)+ Doctorat troisième cycle
                </td>
                <td>
                    <input type="text" name="diplome3" value="<?php echo $can_note_diplome_3; ?>">
                </td>
            </tr>
            <tr>
                <td>
                PhD ou Doctorat unique
                </td>
                <td>
                    <input type="text" name="diplome4" value="<?php echo $can_note_diplome_4; ?>">
                </td>
            </tr>
            <tr>
                <td>
                Doctorat troisième cycle ou Doctorat d'exercice
                </td>
                <td>
                    <input type="text" name="diplome5" value="<?php echo $can_note_diplome_5; ?>">
                </td>
            </tr>
            <tr>
                <td>
                Master, DEA ou équivalent
                </td>
                <td>
                    <input type="text" name="diplome6" value="<?php echo $can_note_diplome_6; ?>">
                </td>
            </tr>
        </table>
    </details>
                <!-- Note Licence Et Master -->
                <details>
        <summary>
            NOTES LICENCE ET MASTER
        </summary>
        <table>
            <tr>
                <th rowspan="6">Licence Et Master</th>
                <th rowspan="2">
                    Licence complète en 3ans
                </th>
                <td>
                    OUI
                </td>
                <td>
                    <input type="text" name="licence3ans_oui" value="<?php echo $can_note_licence_master_1 ?>">
                </td>
                <tr>
                <td>
                    NON
                </td>
                <td>
                    <input type="text" name="licence3ans_non" value="<?php echo $can_note_licence_master_2 ?>">
                </td>
                </tr>
                <th rowspan="2">
                    Master complète en 2ans
                </th>
                <td>
                    OUI
                </td>
                <td>
                    <input type="text" name="master2ans_oui" value="<?php echo $can_note_licence_master_3 ?>">
                </td>
                <tr>
                <td>
                    NON
                </td>
                <td>
                    <input type="text" name="master2ans_non" value="<?php echo $can_note_licence_master_4 ?>">
                </td>
                </tr>
                <th rowspan="2">
                   Autres
                </th>
                <td>
                    OUI
                </td>
                <td>
                    <input type="text" name="autre_oui" value="<?php echo $can_note_licence_master_5 ?>">
                </td>
                <tr>
                <td>
                    NON
                </td>
                <td>
                    <input type="text" name="autre_non" value="<?php echo $can_note_licence_master_6 ?>">
                </td>
                </tr>
            </tr>
        </table>
    </details>
                        <!-- Note Doctorat -->
                        <details>
    <summary>NOTES DOCTORAT</summary>
<table>
    <tr><th rowspan="3">These Troisieme Cycle</th><td>moins de 3ans</td><td><input type="text" name="these_troisieme_cycle1"  value="<?php  echo $can_note_doctorat_1 ?>"  ></td> </tr>
                                               <tr> <td>entre de 3 et 5ans</td><td><input type="text" name="these_troisieme_cycle2" value="<?php echo  $can_note_doctorat_2 ?>"></td> </tr>
                                               <tr> <td>plus de 5ans</td><td><input type="text" name="these_troisieme_cycle3" value="<?php echo  $can_note_doctorat_3 ?>"></td>     </tr>
      <tr>  <th rowspan="3">These unique ou PhD</th><td>moins de 3ans</td><td><input type="text" name="these_unique_phD1" value="<?php echo  $can_note_doctorat_4 ?>"></td> 
                                                 <tr><td>entre de 3 et 5ans</td><td><input type="text" name="these_unique_phD2" value="<?php echo  $can_note_doctorat_5 ?>"></td></tr> 
                                                 <tr> <td>plus de 5ans</td><td><input type="text" name="these_unique_phD3" value="<?php echo  $can_note_doctorat_6 ?>"></td> </tr>
      <tr>  <th rowspan="3">These d'etat</th><td>moins de 3ans</td><td><input type="text" name="these_etat1" value="<?php  echo $can_note_doctorat_7 ?>"></td> </tr>
                                           <tr>  <td>entre de 3 et 5ans</td><td><input type="text" name="these_etat2" value="<?php echo  $can_note_doctorat_8 ?>"></td></tr>
                                          <tr>  <td>plus de 5ans</td><td><input type="text" name="these_etat3" value="<?php echo  $can_note_doctorat_9 ?>"></td>  </tr> 
      <tr>  <th rowspan="2">These d'etat</th><td>inférieur ou égal à 1</td><td><input type="text" name="these_exercice1" value="<?php echo  $can_note_doctorat_10?>"></td> </tr>
                                            <tr>  <td>supérieur à 1</td><td><input type="text" name="these_exercice2" value="<?php  echo $can_note_doctorat_11 ?>"></td></tr>

     
</table>

</details>
                        <!-- Note Expérience Pédagogique -->
                        <details>
<summary>NOTES EXPERIENCES PEDAGOGIQUE</summary>

<table>
<tr><th rowspan=4>experience pédagogique</th><td>Secondaire</td><td><input type="text" name="secondaire" value="<?php echo $can_note_experience_pedagogique_1 ?> "></td></tr>
<tr><td>Supérieur</td><td><input type="text" name="superieur" value="<?php echo $can_note_experience_pedagogique_2 ?>"></td></tr>
</table>
</details>

                <!-- Note Expérience de recherche -->
                <details>
<summary>NOTES EXPERIENCES RECHERCHE</summary>

<table>
<tr><th rowspan=4>Experience Recherche</th><td>laboratoire Academique</td><td><input type="text" name="er1" value="<?php echo $can_note_experience_recherche_1 ?> "></td></tr>
<tr><td>Institution de Recherche</td><td><input type="text" name="er2" value="<?php echo $can_note_experience_recherche_2 ?>"></td></tr>
<tr><td>Industrie ou Structure de Developpement</td><td><input type="text" name="er3" value="<?php echo $can_note_experience_recherche_3 ?>"></td></tr>
<tr><td>Post Doc</td><td><input type="text" name="er4" value="<?php echo $can_note_experience_recherche_4 ?>"></td></tr>

</table>

</details>

            <!--Notes Autres Expériences -->
            <details>
        <summary>NOTES AUTRES EXPERIENCES</summary>

        <table>
            <tr><th rowspan=5>Autres expériences</th> <td>Gestion de programme dans les ONG, associations, collectivités et structures étatiques</td> <td><input type="text" name="gestion" value="<?php echo $can_note_autre_experience_2 ?>" ></td></tr>
            <tr> <td> Investigateur principal de projet /oui</td> <td><input type="text" name="investigateur_projet_oui" value="<?php echo $can_note_autre_experience_2 ?>" ></td></tr>
            <tr> <td> Investigateur principal de projet /non</td> <td><input type="text" name="investigateur_projet_non" value="<?php echo $can_note_autre_experience_3 ?>" ></td></tr>
            <tr><td>Coordonnateur de réseau /oui</td> <td><input type="text" name="coordonateur_reseau_oui" value="<?php echo $can_note_autre_experience_4 ?>" ></td></tr>
            <tr><td>Coordonnateur de réseau /non</td> <td><input type="text" name="coordonateur_reseau_non" value="<?php echo $can_note_autre_experience_5 ?>" ></td></tr>

        </table>
        

    </details>
    <!-- Notes Décoration -->
    <details>
        <summary>NOTES DISTINCTION</summary>
        <table>
        <tr> <th rowspan="2">Distinction</th>  <td>Prix Concours </td>  <td> <input type="text" name="distinction1" value="<?php echo $can_note_distinction_1 ; ?>"> </td> </tr>
        <tr> <td>Décoration </td>  <td> <input type="text" name="distinction2" value="<?php echo $can_note_distinction_2 ; ?>"> </td></tr>
    </table>
    </details>

        <!-- Notes Grade -->
        <details>
        <summary>
            NOTES GRADE
        </summary>
        <table>
            <tr>
                <th rowspan="5">Grade</th>
                <td>
                    Prof. Enseignement secondaire
                </td>
                <td>
                    <input type="text" name="prof_enseignement_secondaire" value="<?php echo $can_note_grade_1 ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Assistant
                </td>
                <td>
                    <input type="text" name="assistant" value="<?php echo $can_note_grade_2 ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Maître assistant
                </td>
                <td>
                    <input type="text" name="maitre_assistant" value="<?php echo $can_note_grade_3 ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Maître de conférence
                </td>
                <td>
                    <input type="text" name="maitre_de_conference" value="<?php echo $can_note_grade_4 ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Prof. Titulaire
                </td>
                <td>
                    <input type="text" name="prof_titulaire" value="<?php echo $can_note_grade_5 ?>">
                </td>
            </tr>
        </table>
    </details>

    <!-- Notes Brevet -->
    <details>
        <summary>
            NOTES BREVET
        </summary>
        <table>
            <tr>
                <th rowspan="2">Brevet</th>
                <td>
                    OUI
                </td>
                <td>
                    <input type="text" name="brevet_oui" value="<?php echo $can_note_brevet_1; ?>">
                </td>
                <tr>
                <td>
                    NON
                </td>
                <td>
                    <input type="text" name="brevet_non" value="<?php echo $can_note_brevet_2; ?>">
                </td>
                </tr>
            </tr>
        </table>
    </details>
                    <!-- Aid Aihd -->
                    <details>

<summary> PUBLICATION</summary>
<table>
<tr>  <th rowspan="4">Article indéxé du domaine :</th> <td>auteur1</td>   <td><input type="text" name="aid_a1" value="<?php echo $can_note_aihd_2 ?>"> </td></tr>
<tr>  <td>auteur2</td> <td><input type="text" name="aid_a2" value="<?php echo $can_note_aid_2 ?>"> </td></tr>
<tr>  <td>auteur3</td> <td><input type="text" name="aid_a3" value="<?php echo $can_note_aid_3 ?>"> </td></tr>
<tr>  <td>autre auteur</td> <td><input type="text" name="aid_aa" value="<?php echo $can_note_aid_4 ?>"> </td></tr>

<tr>  <th rowspan="4">Article indexé hors domaine, article non indexé du domaine et article de vulgarisation :</th> <td>auteur1</td>   <td><input type="text" name="aihd_a1" value="<?php echo $can_note_aihd_2 ?>"> </td></tr>
<tr>  <td>auteur2</td> <td><input type="text" name="aihd_a2" value="<?php echo $can_note_aihd_2 ?>"> </td> </tr>
<tr>  <td>auteur3</td> <td><input type="text" name="aihd_a3" value="<?php echo $can_note_aihd_3 ?>"> </td> </tr>
<tr>  <td>autre auteur</td> <td><input type="text" name="aihd_aa" value="<?php echo $can_note_aihd_4 ?>"> </td></tr>
<tr><th rowspan=4>Livre du domaine</th> <td>Auteur1</td> <td><input type="text" name="can_note_ldd_1" value="<?php echo $can_note_ldd_1?>"></td></tr>
        <tr><td>Auteur2</td> <td><input type="text" name="can_note_ldd_2" value="<?php echo $can_note_ldd_2?>"></td></tr>
        <tr><td>Auteur3</td> <td><input type="text" name="can_note_ldd_3" value="<?php echo $can_note_ldd_3?>"></td></tr>
        <tr><td>Autre auteur</td> <td><input type="text" name="can_note_ldd_4" value="<?php echo $can_note_ldd_4?>"></td></tr>


        <tr><th rowspan=4>Livre de vulgarisation et fiche technique du domaine</th> <td>Auteur1</td> <td><input type="text" name="can_note_lv_1" value="<?php echo $can_note_lv_1?>"></td></tr>
        <tr><td>Auteur2</td> <td><input type="text" name="can_note_lv_2" value="<?php echo $can_note_lv_2?>"></td></tr>
        <tr><td>Auteur3</td> <td><input type="text" name="can_note_lv_3" value="<?php echo $can_note_lv_3?>"></td></tr>
        <tr><td>Autre auteur</td> <td><input type="text" name="can_note_lv_4" value="<?php echo $can_note_lv_4?>"></td></tr>

</table>

</details>

                <!--NOTES Proceccing ou chapitre d'un livre du domaine -->
                <details>
                    <summary>
                        NOTES PROCCEDING OU CHAPITRE D'UN LIVRE DU DOMAINE
                    </summary>
                    <table>
        <tr> <th rowspan="2"> Proccedings ou chapitre d'un livre du domaine </th>  <td> OUI </td>  <td> <input type="text" name="proceding1" value="<?php echo $can_note_proccedings_1 ; ?>"> </td> </tr>
        <tr> <td> NON </td>  <td> <input type="text" name="proceding2" value="<?php echo $can_note_proccedings_2 ; ?>"> </td></tr>
    </table>
                </details>

                <!-- NOTES Communication conférence -->
                <details>
                    <summary>
                        NOTES COMMUNICATION CONFERENCE
                    </summary>
                    <table>
        <tr> <th rowspan="6"> Communication conférence </th>  <td> Communication orale internationale </td>  <td> <input type="text" name="com_conference1" value="<?php echo $can_note_communication_conference_1; ?>"> </td> </tr>
        <tr> <td> Poster discussion internationale </td>  <td> <input type="text" name="com_conference2" value="<?php echo $can_note_communication_conference_2; ?>"> </td></tr>
        <tr> <td> Communication orale nationale </td>  <td> <input type="text" name="com_conference3" value="<?php echo $can_note_communication_conference_3 ?>"> </td></tr>
        <tr> <td> Communication nationale affichée</td>  <td> <input type="text" name="com_conference4" value="<?php echo $can_note_communication_conference_4 ; ?>"> </td></tr>
        <tr> <td> Conférencier(e) invité(e) international </td>  <td> <input type="text" name="com_conference5" value="<?php echo $can_note_communication_conference_5 ;?>"> </td></tr>
        <tr> <td> Conférencier(e) national </td>  <td> <input type="text" name="com_conference6" value="<?php echo $can_note_communication_conference_6 ;?>"> </td></tr>
    </table>
                </details>
                <input type="submit" value="Enregistrer les modifications">
                </form>
                
                <a class="reinitialiser" href="http://localhost/candidature/code_candidature/verification_point_modulable_defaut.php"><div class="div_reinitialiser">Revenir à la configuration d'origine</div></a>
                
                </div>
        </div>
        <?php }  ?>
        