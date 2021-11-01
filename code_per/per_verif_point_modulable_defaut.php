<?php
$con = mysqli_connect("localhost","root","","ussein_candidature");


// Les variables pour communications 
$req1 = mysqli_query($con,"SELECT defaut FROM ec_note_per_communications");
$tab1 = mysqli_fetch_all($req1);

$ps_c_a1 = $tab1[0][0];
$ps_c_a2 = $tab1[1][0];
$ps_c_a3 = $tab1[2][0];

$req_ps_c_a1 = mysqli_query($con,"UPDATE ec_note_per_communications SET note='$ps_c_a1' WHERE nom='ps_c_a1'");
$req_ps_c_a2 = mysqli_query($con,"UPDATE ec_note_per_communications SET note='$ps_c_a2' WHERE nom='ps_c_a2'");
$req_ps_c_a3 = mysqli_query($con,"UPDATE ec_note_per_communications SET note='$ps_c_a3' WHERE nom='ps_c_a3'");

// Les variables pour ec_note_per_developpement_institu
$req2 = mysqli_query($con,"SELECT defaut FROM ec_note_per_developpement_institu");
$tab2 = mysqli_fetch_all($req2);

$di_a1 = $tab2[0][0];
$di_a2 = $tab2[1][0];
$di_a3 = $tab2[2][0];
$di_a4 = $tab2[3][0];
$di_a5 = $tab2[4][0];
$di_a6 = $tab2[5][0];

$req_di_a1 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a1' WHERE nom='di_a1'");
$req_di_a2 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a2' WHERE nom='di_a2'");
$req_di_a3 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a3' WHERE nom='di_a3'");
$req_di_a4 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a4' WHERE nom='di_a4'");
$req_di_a5 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a5' WHERE nom='di_a5'");
$req_di_a6 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a6' WHERE nom='di_a6'");

// Les variables pour ec_note_per_encadrement
$req3 = mysqli_query($con,"SELECT defaut FROM ec_note_per_encadrement");
$tab3 = mysqli_fetch_all($req3);

$encadrement_a1 = $tab3[0][0];
$encadrement_a2 = $tab3[1][0];
$encadrement_a3 = $tab3[2][0];
$encadrement_a4 = $tab3[3][0];
$encadrement_a5 = $tab3[4][0];
$encadrement_a6 = $tab3[5][0];

$req_encadrement_a1 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a1' WHERE nom='encadrement_a1'");
$req_encadrement_a2 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a2' WHERE nom='encadrement_a2'");
$req_encadrement_a3 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a3' WHERE nom='encadrement_a3'");
$req_encadrement_a4 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a4' WHERE nom='encadrement_a4'");
$req_encadrement_a5 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a5' WHERE nom='encadrement_a5'");
$req_encadrement_a6 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a6' WHERE nom='encadrement_a6'");

// Les variables pour ec_note_per_innovations_brevets_distinctions
$req4 = mysqli_query($con,"SELECT defaut FROM ec_note_per_innovations_brevets_distinctions");
$tab4 = mysqli_fetch_all($req4);

$ibd_a1 = $tab4[0][0];
$ibd_a2 = $tab4[1][0];

$req_ibd_a1 = mysqli_query($con,"UPDATE ec_note_per_innovations_brevets_distinctions SET note='$ibd_a1' WHERE nom='ibd_a1'");
$req_ibd_a2 = mysqli_query($con,"UPDATE ec_note_per_innovations_brevets_distinctions SET note='$ibd_a2' WHERE nom='ibd_a2'");

// Les variables pour ec_note_per_membre_jury_d
$req5 = mysqli_query($con,"SELECT defaut FROM ec_note_per_membre_jury_d");
$tab5 = mysqli_fetch_all($req5);

$mjd_a1 = $tab5[0][0];
$mjd_a2 = $tab5[1][0];
$mjd_a3 = $tab5[2][0];
$mjd_a4 = $tab5[3][0];
$mjd_a5 = $tab5[4][0];

$req_mjd_a1 = mysqli_query($con,"UPDATE ec_note_per_membre_jury_d SET note='$mjd_a1' WHERE nom='mjd_a1'");
$req_mjd_a2 = mysqli_query($con,"UPDATE ec_note_per_membre_jury_d SET note='$mjd_a2' WHERE nom='mjd_a2'");
$req_mjd_a3 = mysqli_query($con,"UPDATE ec_note_per_membre_jury_d SET note='$mjd_a3' WHERE nom='mjd_a3'");
$req_mjd_a4 = mysqli_query($con,"UPDATE ec_note_per_membre_jury_d SET note='$mjd_a4' WHERE nom='mjd_a4'");
$req_mjd_a5 = mysqli_query($con,"UPDATE ec_note_per_membre_jury_d SET note='$mjd_a5' WHERE nom='mjd_a5'");

// Les variables pour ec_note_per_president_jury_d
$req6 = mysqli_query($con,"SELECT defaut FROM ec_note_per_president_jury_d");
$tab6 = mysqli_fetch_all($req6);

$pjd_a1 = $tab6[0][0];
$pjd_a2 = $tab6[1][0];
$pjd_a3 = $tab6[2][0];
$pjd_a4 = $tab6[3][0];

$req_pjd_a1 = mysqli_query($con,"UPDATE ec_note_per_president_jury_d SET note='$pjd_a1' WHERE nom='pjd_a1'");
$req_pjd_a2 = mysqli_query($con,"UPDATE ec_note_per_president_jury_d SET note='$pjd_a2' WHERE nom='pjd_a2'");
$req_pjd_a3 = mysqli_query($con,"UPDATE ec_note_per_president_jury_d SET note='$pjd_a3' WHERE nom='pjd_a3'");
$req_pjd_a4 = mysqli_query($con,"UPDATE ec_note_per_president_jury_d SET note='$pjd_a4' WHERE nom='pjd_a4'");

// Les variables pour ec_note_per_publications
$req7 = mysqli_query($con,"SELECT defaut FROM ec_note_per_publications");
$tab7 = mysqli_fetch_all($req7);

// Les variables Articles scientifiques indexés
$ps_p_a1 = $tab7[0][0];
$ps_p_a2 = $tab7[1][0];
$ps_p_a3 = $tab7[2][0];
$ps_p_a4 = $tab7[3][0];
$ps_p_a5 = $tab7[4][0];

$req_ps_p_a1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_a1' WHERE nom='ps_p_a1'");
$req_ps_p_a2 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_a2' WHERE nom='ps_p_a2'");
$req_ps_p_a3 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_a3' WHERE nom='ps_p_a3'");
$req_ps_p_a4 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_a4' WHERE nom='ps_p_a4'");
$req_ps_p_a5 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_a5' WHERE nom='ps_p_a5'");

// Les variables Articles scientifiques non indexés
$ps_p_b1 = $tab7[5][0];
$ps_p_b2 = $tab7[6][0];
$ps_p_b3 = $tab7[7][0];
$ps_p_b4 = $tab7[8][0];
$ps_p_b5 = $tab7[9][0];

$req_ps_p_b1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_b1' WHERE nom='ps_p_b1'");
$req_ps_p_b2 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_b2' WHERE nom='ps_p_b2'");
$req_ps_p_b3 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_b3' WHERE nom='ps_p_b3'");
$req_ps_p_b4 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_b4' WHERE nom='ps_p_b4'");
$req_ps_p_b5 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_b5' WHERE nom='ps_p_b5'");

// Les variables Proceedings de conférence
$ps_p_c1 = $tab7[10][0];
$ps_p_c2 = $tab7[11][0];
$ps_p_c3 = $tab7[12][0];
$ps_p_c4 = $tab7[13][0];
$ps_p_c5 = $tab7[14][0];

$req_ps_p_c1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_c1' WHERE nom='ps_p_c1'");
$req_ps_p_c2 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_c2' WHERE nom='ps_p_c2'");
$req_ps_p_c3 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_c3' WHERE nom='ps_p_c3'");
$req_ps_p_c4 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_c4' WHERE nom='ps_p_c4'");
$req_ps_p_c5 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_c5' WHERE nom='ps_p_c5'");

// Les variables Chapitres de livre 
$ps_p_d1 = $tab7[15][0];
$ps_p_d2 = $tab7[16][0];
$ps_p_d3 = $tab7[17][0];
$ps_p_d4 = $tab7[18][0];
$ps_p_d5 = $tab7[19][0];

$req_ps_p_d1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_d1' WHERE nom='ps_p_d1'");
$req_ps_p_d2 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_d2' WHERE nom='ps_p_d2'");
$req_ps_p_d3 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_d3' WHERE nom='ps_p_d3'");
$req_ps_p_d4 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_d4' WHERE nom='ps_p_d4'");
$req_ps_p_d5 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_d5' WHERE nom='ps_p_d5'");

// Les variables Mélanges
$ps_p_e1 = $tab7[20][0];
$ps_p_e2 = $tab7[21][0];
$ps_p_e3 = $tab7[22][0];
$ps_p_e4 = $tab7[23][0];
$ps_p_e5 = $tab7[24][0];

$req_ps_p_e1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_e1' WHERE nom='ps_p_e1'");
$req_ps_p_e2 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_e2' WHERE nom='ps_p_e2'");
$req_ps_p_e3 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_e3' WHERE nom='ps_p_e3'");
$req_ps_p_e4 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_e4' WHERE nom='ps_p_e4'");
$req_ps_p_e5 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_e5' WHERE nom='ps_p_e5'");

// variable Ouvrages
$ps_p_f1 = $tab7[24][0];

$req_ps_p_f1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_f1' WHERE nom='ps_p_f1'");

// variable Directeur de Revue
$ps_p_g1 = $tab7[25][0];

$req_ps_p_g1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_g1' WHERE nom='ps_p_g1'");

// variable Fiches techniques 
$ps_p_h1 = $tab7[26][0];

$req_ps_p_h1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_h1' WHERE nom='ps_p_h1'");

// variable Documents de vulgarisation ou de valorisation 
$ps_p_i1 = $tab7[27][0];

$req_ps_p_i1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_i1' WHERE nom='ps_p_i1'");


// Les variables ec_note_per_reponsabilite_academique ec_note_per_reponsabilite_academique
$req8 = mysqli_query($con,"SELECT defaut FROM ec_note_per_reponsabilite_academique");
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

$req_respo_aca_a1 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_a1' WHERE nom='respo_aca_a1'");
$req_respo_aca_a2 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_a2' WHERE nom='respo_aca_a2'");
$req_respo_aca_a3 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_a3' WHERE nom='respo_aca_a3'");
$req_respo_aca_a4 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_a4' WHERE nom='respo_aca_a4'");
$req_respo_aca_a5 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_a5' WHERE nom='respo_aca_a5'");
$req_respo_aca_a6 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_a6' WHERE nom='respo_aca_a6'");
$req_respo_aca_a7 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_a7' WHERE nom='respo_aca_a7'");
$req_respo_aca_a8 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_a8' WHERE nom='respo_aca_a8'");
$req_respo_aca_a9 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_a9' WHERE nom='respo_aca_a9'");
$req_respo_aca_aa1 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_aa1' WHERE nom='respo_aca_aa1'");
$req_respo_aca_aa2 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_aa2' WHERE nom='respo_aca_aa2'");
$req_respo_aca_aa3 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_aa3' WHERE nom='respo_aca_aa3'");
$req_respo_aca_aa4 = mysqli_query($con,"UPDATE ec_note_per_reponsabilite_academique SET note='$respo_aca_aa4' WHERE nom='respo_aca_aa4'");


mysqli_close($con);

                                    header("Location: http://localhost/candidature/document_per_prod/");      

?>