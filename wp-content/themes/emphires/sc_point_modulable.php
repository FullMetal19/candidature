<?php
/*
Template name: point modulable
*/
session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublier')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}

$_SESSION['0'] = "";
$_SESSION['1'] = "";
$_SESSION['2'] = "active";
$_SESSION['3'] = "";
$_SESSION['4'] = "";
$_SESSION['5'] = "";

 

$con = mysqli_connect("localhost","root","","ussein_candidature");
$req1 = mysqli_query($con,"SELECT note FROM note_age");
$tab1 = mysqli_fetch_all($req1);
$can_note_age_1 = $tab1[6][0];
$can_note_age_2 = $tab1[7][0];
$can_note_age_3 = $tab1[8][0];
$can_note_age_4 = $tab1[9][0];
$can_note_age_5 = $tab1[10][0];
$can_note_age_6 = $tab1[11][0];
$can_note_age_7 = $tab1[0][0];
$can_note_age_8 = $tab1[1][0];
$can_note_age_9 = $tab1[2][0];
$can_note_age_10 = $tab1[3][0];
$can_note_age_11 = $tab1[4][0];
$can_note_age_12 = $tab1[5][0];

$req2 = mysqli_query($con,"SELECT note FROM ec_note_diplome");
$tab2 = mysqli_fetch_all($req2);
$can_note_diplome_1 = $tab2[0][0];
$can_note_diplome_2 = $tab2[1][0]; //diplome de point 30, à faire attetion puisque c'est deernier sur la liste dans la base de données
$can_note_diplome_3 = $tab2[2][0];
$can_note_diplome_4 = $tab2[3][0];
$can_note_diplome_5 = $tab2[4][0];
$can_note_diplome_6 = $tab2[5][0];
$can_note_diplome_7 = $tab2[6][0];

$req3 = mysqli_query($con,"SELECT note FROM ec_note_licence_master");
$tab3 = mysqli_fetch_all($req3);
$can_note_licence_master_1 = $tab3[3][0];
$can_note_licence_master_2 = $tab3[2][0];
$can_note_licence_master_3 = $tab3[5][0];
$can_note_licence_master_4 = $tab3[4][0];
$can_note_licence_master_5 = $tab3[1][0];
$can_note_licence_master_6 = $tab3[0][0];


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
$can_note_autre_experience_1 = $tab7[2][0];
$can_note_autre_experience_2 = $tab7[4][0];
$can_note_autre_experience_3 = $tab7[3][0];
$can_note_autre_experience_4 = $tab7[1][0];
$can_note_autre_experience_5 = $tab7[0][0];

$req15 = mysqli_query($con,"SELECT note FROM ec_note_grade");
$tab15 = mysqli_fetch_all($req15);
$can_note_grade_1 = $tab15[3][0];
$can_note_grade_2 = $tab15[0][0];
$can_note_grade_3 = $tab15[1][0];
$can_note_grade_4 = $tab15[2][0];
$can_note_grade_5 = $tab15[4][0];

$req16 = mysqli_query($con,"SELECT note FROM ec_note_brevet");
$tab16 = mysqli_fetch_all($req16);
$can_note_brevet_1 = $tab16[1][0];
$can_note_brevet_2 = $tab16[0][0];

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
$can_note_proccedings_1 = $tab13[1][0];
$can_note_proccedings_2 = $tab13[0][0];

$req14 = mysqli_query($con,"SELECT note FROM ec_note_communication_conference");
$tab14 = mysqli_fetch_all($req14);
$can_note_communication_conference_1 = $tab14[1][0];
$can_note_communication_conference_2 = $tab14[5][0];
$can_note_communication_conference_3 = $tab14[2][0];
$can_note_communication_conference_4 = $tab14[0][0];
$can_note_communication_conference_5 = $tab14[3][0];
$can_note_communication_conference_6 = $tab14[4][0];
   
       //requete pour admin simple
$mail=$_SESSION['mail'];
$requete=mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab=mysqli_fetch_array($requete); 
   ?>

<?php

$con = mysqli_connect("localhost","root","","ussein_candidature");

// Les variables pour communications 
$req1 = mysqli_query($con,"SELECT note FROM ec_note_per_communications");
$tab1 = mysqli_fetch_all($req1);

$ps_c_a1 = $tab1[0][0];
$ps_c_a2 = $tab1[1][0];
$ps_c_a3 = $tab1[2][0];

// Les variables pour ec_note_per_developpement_institu
$req2 = mysqli_query($con,"SELECT note FROM ec_note_per_developpement_institu");
$tab2 = mysqli_fetch_all($req2);

$di_a1 = $tab2[0][0];
$di_a2 = $tab2[1][0];
$di_a3 = $tab2[2][0];
$di_a4 = $tab2[3][0];
$di_a5 = $tab2[4][0];
$di_a6 = $tab2[5][0];

// Les variables pour ec_note_per_encadrement
$req3 = mysqli_query($con,"SELECT note FROM ec_note_per_encadrement");
$tab3 = mysqli_fetch_all($req3);

$encadrement_a1 = $tab3[0][0];
$encadrement_a2 = $tab3[1][0];
$encadrement_a3 = $tab3[2][0];
$encadrement_a4 = $tab3[3][0];
$encadrement_a5 = $tab3[4][0];
$encadrement_a6 = $tab3[5][0];

// Les variables pour ec_note_per_innovations_brevets_distinctions
$req4 = mysqli_query($con,"SELECT note FROM ec_note_per_innovations_brevets_distinctions");
$tab4 = mysqli_fetch_all($req4);

$ibd_a1 = $tab4[0][0];
$ibd_a2 = $tab4[1][0];

// Les variables pour ec_note_per_membre_jury_d
$req5 = mysqli_query($con,"SELECT note FROM ec_note_per_membre_jury_d");
$tab5 = mysqli_fetch_all($req5);

$mjd_a1 = $tab5[0][0];
$mjd_a2 = $tab5[1][0];
$mjd_a3 = $tab5[2][0];
$mjd_a4 = $tab5[3][0];
$mjd_a5 = $tab5[4][0];

// Les variables pour ec_note_per_president_jury_d
$req6 = mysqli_query($con,"SELECT note FROM ec_note_per_president_jury_d");
$tab6 = mysqli_fetch_all($req6);

$pjd_a1 = $tab6[0][0];
$pjd_a2 = $tab6[1][0];
$pjd_a3 = $tab6[2][0];
$pjd_a4 = $tab6[3][0];

// Les variables pour ec_note_per_publications
$req7 = mysqli_query($con,"SELECT note FROM ec_note_per_publications");
$tab7 = mysqli_fetch_all($req7);

// Les variables Articles scientifiques indexés
$ps_p_a1 = $tab7[0][0];
$ps_p_a2 = $tab7[1][0];
$ps_p_a3 = $tab7[2][0];
$ps_p_a4 = $tab7[3][0];
$ps_p_a5 = $tab7[4][0];

// Les variables Articles scientifiques non indexés
$ps_p_b1 = $tab7[5][0];
$ps_p_b2 = $tab7[6][0];
$ps_p_b3 = $tab7[7][0];
$ps_p_b4 = $tab7[8][0];
$ps_p_b5 = $tab7[9][0];

// Les variables Proceedings de conférence
$ps_p_c1 = $tab7[10][0];
$ps_p_c2 = $tab7[11][0];
$ps_p_c3 = $tab7[12][0];
$ps_p_c4 = $tab7[13][0];
$ps_p_c5 = $tab7[14][0];

// Les variables Chapitres de livre 
$ps_p_d1 = $tab7[15][0];
$ps_p_d2 = $tab7[16][0];
$ps_p_d3 = $tab7[17][0];
$ps_p_d4 = $tab7[18][0];
$ps_p_d5 = $tab7[19][0];

// Les variables Mélanges
$ps_p_e1 = $tab7[20][0];
$ps_p_e2 = $tab7[21][0];
$ps_p_e3 = $tab7[22][0];
$ps_p_e4 = $tab7[23][0];
$ps_p_e5 = $tab7[24][0];

// variable Ouvrages
$ps_p_f1 = $tab7[24][0];

// variable Directeur de Revue
$ps_p_g1 = $tab7[25][0];

// variable Fiches techniques 
$ps_p_h1 = $tab7[26][0];

// variable Documents de vulgarisation ou de valorisation 
$ps_p_i1 = $tab7[27][0];


// Les variables ec_note_per_reponsabilite_academique
$req8 = mysqli_query($con,"SELECT note FROM ec_note_per_reponsabilite_academique");
$tab8 = mysqli_fetch_all($req8);

$respo_aca_a1 = $tab8[0][0];
$respo_aca_a2 = $tab8[1][0];
$respo_aca_a3 = $tab8[2][0];
$respo_aca_a4 = $tab8[3][0];
$respo_aca_a5 = $tab8[4][0];
$respo_aca_a6 = $tab8[5][0];
$respo_aca_a7 = $tab8[6][0];
$respo_aca_a8 = $tab8[7][0];
$respo_aca_a9 = $tab8[8][0];
$respo_aca_aa1 = $tab8[9][0];
$respo_aca_aa2 = $tab8[10][0];
$respo_aca_aa3 = $tab8[11][0];
$respo_aca_aa4 = $tab8[12][0];


mysqli_close($con);
?>
    



<style>
         
    div.droite_container h1{
        color: white;
        background-color: rgb(10, 107, 49);
        padding: 1%;
        text-align: center;
        box-shadow: 5px 5px 5px rgba(132, 181, 39,0.6);
    }
    details{
        color: white;
        margin: 1%;
        margin-top: 0;
    }
    summary{
        background-color: rgb(10, 107, 49);
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
<!-- Partie Gauche -->
<?php 
        include('sc_admin_partie_gauche.php');
        ?>
        <div class="droite" id="droite">
                <div class="droite_container">

                    <?php
                    if($tab['status']==2){ ?>
                    <p class="phrase">VOUS N'AVEZ PAS ACCES DANS CETTE PAGE !</p>
                    <?php } else{ ?>
<details>
                    <summary>Pondérations Espace candidature</summary>
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
<tr>  <th rowspan="4">Article indéxé du domaine :</th> <td>auteur1</td>   <td><input type="text" name="aid_a1" value="<?php echo $can_note_aid_1 ?>"> </td></tr>
<tr>  <td>auteur2</td> <td><input type="text" name="aid_a2" value="<?php echo $can_note_aid_2 ?>"> </td></tr>
<tr>  <td>auteur3</td> <td><input type="text" name="aid_a3" value="<?php echo $can_note_aid_3 ?>"> </td></tr>
<tr>  <td>autre auteur</td> <td><input type="text" name="aid_aa" value="<?php echo $can_note_aid_4 ?>"> </td></tr>

<tr>  <th rowspan="4">Article indexé hors domaine, article non indexé du domaine et article de vulgarisation :</th> <td>auteur1</td>   <td><input type="text" name="aihd_a1" value="<?php echo $can_note_aihd_1 ?>"> </td></tr>
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
      
</details>
<details>
                <summary>Pondérations Espace PER</summary>
<form class="body"    action="http://localhost/candidature/code_per/per_verif_point_modulable.php" method="POST">
 <details> <summary>PRODUCTION SCIENTIFIQUE</summary>

<details class="publication">
    <summary>Publications</summary>
<table>
<tr>
<th>            </th>
<th>Description</th>
<th>Pondération</th>

</tr>

<tr><td rowspan="6">Articles scientifiques indexés</td></tr> 
    <tr><td>Auteur1</td>   <td><input type="text" name="ps_p_a1" value="<?php echo $ps_p_a1 ?>"></td></tr>
    <tr><td>Auteur2</td>  <td><input type="text" name="ps_p_a2" value="<?php echo $ps_p_a2 ?>" ></td></tr>
    <tr><td>Auteur3</td> <td><input type="text" name="ps_p_a3" value="<?php echo $ps_p_a3 ?>" ></td></tr>
    <tr><td>Autre auteur</td> <td><input type="text" name="ps_p_a4" value="<?php echo $ps_p_a4 ?>" ></td> </tr>  
    <tr><td>Le responsable du laboratoire ou du projet</td> <td><input type="text" name="ps_p_a5" value="<?php echo $ps_p_a5 ?>" ></td> </tr>
     <!--finide la liaison--> 

    

<tr><td rowspan="6">Articles scientifiques non indexés</td></tr>
    <tr><td>Auteur1</td>   <td><input type="text" name="ps_p_b1" value="<?php echo $ps_p_b1 ?>"         ></td></tr>
    <tr><td>Auteur2</td>  <td><input type="text" name="ps_p_b2" value="<?php echo $ps_p_b2 ?>"      ></td></tr>
    <tr><td>Auteur3</td> <td><input type="text" name="ps_p_b3" value="<?php echo $ps_p_b3 ?>"       ></td></tr>
    <tr><td>Autre auteur</td> <td><input type="text" name="ps_p_b4" value="<?php echo $ps_p_b4 ?>"   ></td> </tr> 
    <tr><td>Le responsable du laboratoire ou du projet</td> <td><input type="text" name="ps_p_b5" value="<?php echo $ps_p_b5 ?>" ></td></tr>
 <!--finide la liaison-->
 


<tr><td rowspan="6">Proceedings de conférence</td></tr>
   <tr><td>Auteur1</td>   <td> <input type="text" name="ps_p_c1" value="<?php echo $ps_p_c1 ?>"    ></td></tr>
    <tr><td>Auteur2</td>  <td><input type="text" name="ps_p_c2" value="<?php echo $ps_p_c2 ?>"    ></td></tr>
    <tr><td>Auteur3</td> <td><input type="text" name="ps_p_c3" value="<?php echo $ps_p_c3 ?>"    ></td></tr>
    <tr><td>Autre auteur</td> <td><input type="text" name="ps_p_c4" value="<?php echo $ps_p_c4 ?>"    ></td> </tr>   
    <tr><td>Le responsable du laboratoire ou du projet</td> <td><input type="text" name="ps_p_c5" value="<?php echo $ps_p_c5 ?>" ></td> </tr>
 <!--finide la liaison-->
    
<tr><td rowspan="6">Chapitres de livre </td></tr>
    <tr><td>Auteur1</td>   <td><input type="text" name="ps_p_d1" value="<?php echo $ps_p_d1 ?>"   ></td></tr>
    <tr><td>Auteur2</td>  <td><input type="text" name="ps_p_d2" value="<?php echo $ps_p_d2 ?>"   ></td></tr>
    <tr><td>Auteur3</td> <td><input type="text" name="ps_p_d3" value="<?php echo $ps_p_d3 ?>"    ></td></tr>
    <tr><td>Autre auteur</td> <td><input type="text" name="ps_p_d4" value="<?php echo $ps_p_d4 ?>"   ></td> </tr> 
    <tr><td>Le responsable du laboratoire ou du projet</td> <td><input type="text" name="ps_p_d5" value="<?php echo $ps_p_d5 ?>" ></td> </tr>
 <!--finide la liaison--> 


<tr><td  rowspan="6">Mélanges</td></tr>
    <tr><td>Auteur1</td>   <td><input type="text" name="ps_p_e1" value="<?php echo $ps_p_e1 ?>"   ></td></tr>
    <tr><td>Auteur2</td>  <td><input type="text" name="ps_p_e2" value="<?php echo $ps_p_e2 ?>"   ></td></tr>
    <tr><td>Auteur3</td>  <td><input type="text" name="ps_p_e3" value="<?php echo $ps_p_e3 ?>"   ></td></tr>
    <tr><td>Autre auteur</td><td><input type="text" name="ps_p_e4" value="<?php echo $ps_p_e4 ?>"   ></td> </tr>  
    <tr><td>Le responsable du laboratoire ou du projet</td> <td><input type="text" name="ps_p_e5" value="<?php echo $ps_p_e5 ?>" ></td> </tr>
   <!--finide la liaison--> 


<tr>
<td rowspan="2">Ouvrages</td></tr>
<tr><td></td> <td><input type="text" name="ps_p_f1" value="<?php echo $ps_p_f1 ?>"   ></td></tr>

   


<tr>
    <td rowspan="2">Directeur de Revue</td></tr>
    <tr><td></td><td><input type="text" name="ps_p_g1" value="<?php echo $ps_p_g1 ?>"   ></td></tr>
    
   


<tr>
    <td rowspan="2">Fiches techniques </td></tr>
   <tr><td></td><td><input type="text" name="ps_p_h1" value="<?php echo $ps_p_h1 ?>"   ></td></tr> 
  
    

<tr>
    <td rowspan="2">Documents de vulgarisation ou de valorisation</td></tr>
   <tr><td></td> <td><input type="text" name="ps_p_i1" value="<?php echo $ps_p_i1 ?>"   ></td> </tr> 
   
    
</table>
</details>


<!-- debut communication -->
<details><summary>Communications</summary>
<table class="a">
<tr>
<th>            </th>
<th>Pondération</th>
</tr>

 
    <tr><td>Participation et communication dans des conférences internationales  </td><td><input type="text" name="ps_c_a1" value="<?php echo $ps_c_a1 ?>"></td></tr>
    <tr><td>Participation à des conférences nationales  </td><td><input type="text" name="ps_c_a2" value="<?php echo $ps_c_a2 ?>"></td></tr>
    <tr><td>Conférencier ou animateur de séminaire dans le domaine au niveau international</td><td><input type="text" name="ps_c_a3" value="<?php echo $ps_c_a3 ?>"></td></tr>
   

     <!--finide la liaison--> 
</table>
</details>
</details>

<!-- debut encadrement -->
<details>
    <summary> ENCADREMENT</summary>
<table class="a">
<tr>
<th>            </th>
<th>Pondération</th>
</tr>
<tr><td>Licence ou équivalent</td><td><input type="text" name="encadrement_a1" value="<?php echo $encadrement_a1 ?>"></td></tr>
    <tr><td>Diplôme d’Ingénieur  ou équivalent</td><td><input type="text" name="encadrement_a2" value="<?php echo $encadrement_a2 ?>"></td></tr>
    <tr><td>Master ou équivalents</td><td><input type="text" name="encadrement_a3" value="<?php echo $encadrement_a3 ?>"></td></tr>
    <tr><td>Diplôme d’État de Docteur en MPOV</td><td><input type="text" name="encadrement_a4" value="<?php echo $encadrement_a4 ?>"></td></tr>
    <tr><td>Doctorat unique</td><td><input type="text" name="encadrement_a5" value="<?php echo $encadrement_a5 ?>"></td></tr>
    <tr><td>DES</td><td><input type="text" name="encadrement_a6" value="<?php echo $encadrement_a6 ?>"></td></tr>

     <!--finide la liaison--> 
</table>
</details>


<!-- debut  encadrement 
<details>
    <summary> ENCADREMENT</summary>
<table>
<tr>
<th>            </th>
<th>Description</th>
<th>Pondération</th>
</tr>
<tr><td>Licence ou équivalent</td>  <td>mémoire</td>  <td><input type="text" name=" " value=" "></td></tr>
    <tr><td>Diplôme d’Ingénieur  ou équivalent</td>  <td>mémoire</td>  <td><input type="text" name=" " value=" "></td></tr>
    <tr><td>Master ou équivalents</td>  <td>mémoire</td>  <td><input type="text" name=" " value=" "></td></tr>
    <tr><td>Diplôme d’État de Docteur en MPOV</td>  <td>thése</td>  <td><input type="text" name=" " value=" "></td></tr>
    <tr><td>Doctorat unique</td>  <td>thése</td>  <td><input type="text" name=" " value=" "></td></tr>
    <tr><td>DES</td>  <td>mémoire</td>  <td><input type="text" name=" " value=" "></td></tr>

     
</table>
</details> -->

<!-- debut participation jurys -->
<details>
<summary>PARTICIPATION AUX JURYS</summary>
<details>
    <summary>Membre jury délibération  </summary>
  <table class="a"> <th>            </th>
<th>Pondération</th>
</tr> 
    <tr><td>Diplôme Ingénieur ou équivalents</td><td><input type="text" name="mjd_a1" value="<?php echo $mjd_a1 ?>"></td></tr>
    <tr><td>Master ou équivalents</td><td><input type="text" name="mjd_a2" value="<?php echo $mjd_a2 ?>"></td></tr>
    <tr><td>Diplôme d’État de Docteur en MPOV</td><td><input type="text" name="mjd_a3" value="<?php echo $mjd_a3 ?>"></td></tr>
    <tr><td>DES</td><td><input type="text" name="mjd_a4" value="<?php echo $mjd_a4 ?>"></td></tr>
    <tr><td>Évaluateur thèse Doctorat unique </td><td><input type="text" name="mjd_a5" value="<?php echo $mjd_a5 ?>"></td></tr>
    
</table>
</details>

<details>
    <summary>Président jury délibération  </summary>
    <table class="a">
<tr>
<th>            </th>
<th>Pondération</th>
</tr>
<tr><td>Diplôme Ingénieur ou équivalent</td><td><input type="text" name="pjd_a1" value="<?php echo $pjd_a1 ?>"></td></tr>
    <tr><td>Master ou équivalents</td><td><input type="text" name="pjd_a2" value="<?php echo $pjd_a2 ?>"></td></tr>
    <tr><td>Diplôme d’État de Docteur en MPOV</td><td><input type="text" name="pjd_a3" value="<?php echo $pjd_a3 ?>"></td></tr>
    <tr><td>Thèse Doctorat unique</td><td><input type="text" name="pjd_a4" value="<?php echo $pjd_a4 ?>"></td></tr>
    </table>
</details>

</details>
<details>
    <summary>RESPONSABILITES ACADÉMIQUES</summary>
 
 <table class="a">   <tr>
<th>            </th>
<th>Pondération</th>
</tr>
<tr><td>Responsable de niveau </td><td><input type="text" name="respo_aca_a1" value="<?php echo $respo_aca_a1 ?>"></td></tr>
<tr><td>Responsable de formation </td><td><input type="text" name="respo_aca_a2" value="<?php echo $respo_aca_a2 ?>"></td></tr>
<tr><td>Chef de département  </td><td><input type="text" name="respo_aca_a3" value="<?php echo $respo_aca_a3 ?>"></td></tr>
<tr><td>Directeur des Études (Instituts de faculté)</td>  <td><input type="text" name="respo_aca_a4" value="<?php echo $respo_aca_a4 ?>"></td></tr>
<tr><td>Directeur des Études (Instituts d’Université) </td>  <td><input type="text" name="respo_aca_a5" value="<?php echo $respo_aca_a5 ?>"></td></tr>
<tr><td>Assesseur, Directeur d’UFR adjoint  </td>    <td><input type="text" name="respo_aca_a6" value="<?php echo $respo_aca_a6 ?>"></td></tr>
<tr><td>Directeur central  </td>   <td><input type="text" name="respo_aca_a7" value="<?php echo $respo_aca_a7 ?>"></td></tr>
<tr><td>Responsable de formation doctorale </td>  <td><input type="text" name="respo_aca_a8" value="<?php echo $respo_aca_a8 ?>"></td></tr>
<tr><td>Directeur de revue </td>    <td><input type="text" name="respo_aca_a9" value="<?php echo $respo_aca_a9 ?>"></td></tr>
<tr><td>Directeur de laboratoire/Chef de service  </td>   <td><input type="text" name="respo_aca_aa1" value="<?php echo $respo_aca_aa1 ?>"></td></tr>
<tr><td>Directeur d’École doctorale </td>    <td><input type="text" name="respo_aca_aa2" value="<?php echo $respo_aca_aa2 ?>"></td></tr>
<tr><td>Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté) </td>   <td><input type="text" name="respo_aca_aa3" value="<?php echo $respo_aca_aa3 ?>"></td></tr>
<tr><td>Chef d’Établissement (Directeurs d’Institut d’Université) </td>  <td><input type="text" name="respo_aca_aa4" value="<?php echo $respo_aca_aa4 ?>"></td></tr>
</table>
</details>

<details>
    <summary>DEVELOPPEMENT INSTITUTIONNEL</summary>
    <table class="a">   <tr>
<th>            </th>
<th>Pondération</th>
</tr>
<tr><td>Promotion de la pédagogie  </td><td><input type="text" name="di_a1" value="<?php echo $di_a1 ?>"></td></tr>
<tr><td>Promotion de la recherche  </td><td><input type="text" name="di_a2" value="<?php echo $di_a2 ?>"></td></tr>
<tr><td>Promotion de la gouvernance  </td><td><input type="text" name="di_a3" value="<?php echo $di_a3 ?>"></td></tr>
<tr><td>Services à la communauté  </td> <td><input type="text" name="di_a4" value="<?php echo $di_a4 ?>"></td></tr>
<tr><td>Capacité à mobiliser des ressources et des partenaires(Pour le chercheur principal)</td><td><input type="text" name="di_a5" value="<?php echo $di_a5 ?>"></td></tr>
<tr><td>Capacité à mobiliser des ressources et des partenaires(Pour le chercheur associé)</td><td><input type="text" name="di_a6" value="<?php echo $di_a6 ?>"></td></tr>

    </table>
</details>

<details>
    <summary>INNOVATIONS, BREVETS, DISTINCTIONS</summary>
    <table class="a">   <tr>
<th>            </th>
<th>Pondération</th>
</tr>
<tr><td>Brevets  </td><td><input type="text" name="ibd_a1" value="<?php echo $ibd_a1 ?>"></td></tr>
<tr><td>Distinctions </td></td>  <td><input type="text" name="ibd_a2" value="<?php echo $ibd_a2 ?>"></td></tr>
</table>
</details>

<input type="submit" value="Enregistrer les modifications">
                </form>
                
                <!-- <a class="reinitialiser" href="http://localhost/candidature/code_candidature/verification_point_modulable_defaut.php"><div class="div_reinitialiser">Revenir à la configuration d'origine</div></a> -->
                <a class="reinitialiser" href="http://localhost/candidature/code_per/per_verif_point_modulable_defaut.php"><div class="div_reinitialiser">Revenir à la configuration d'origine</div></a>





</details>



















<style>
    .body{
        display: flex;
        flex-direction: column;
    }
input[type=text]{
        width: 100%;
        height: 100%;
        text-align: center;
        font-size: 1em;
        outline: none;
        border: none;
        background-color: rgba(10,107,49,0.5);
        color: #fff;}

*,* ::before,*::after{
    box-sizing: border-box;
  }
  *{
      margin: 0;
      padding: 0;
  }

  table{
    width: 90%;
    border-collapse: collapse;
    margin-left: 55px;
  }
  th,td{
    padding: 3px;
    text-align: left;
    border: solid 1px green;
   
  }
  tr:nth-child(odd){
    background-color: rgba(10,107,49,0.1);
  }
  th{
    color: white;
  }
  th{
    background-color: rgb(10, 107, 49);
  }
  .a td:last-child{
        width: 10%;
    }
    summary{
        background-color: rgb(10, 107, 49);
        padding: 1%;
        cursor: pointer;
        margin: 0% 2%;
        color: #fff;
    }
    table{
        margin: 0% 5%;
    }
    details details summary{
        margin: 1% 5%;
        padding: 1%;
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
                
                </div>
        </div>
        <?php }  ?>
        