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