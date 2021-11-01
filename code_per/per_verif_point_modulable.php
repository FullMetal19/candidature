<?php
$con = mysqli_connect("localhost","root","","ussein_candidature");
// Les variables pour communications 

$ps_c_a1 = $_POST['ps_c_a1'];
$ps_c_a2 = $_POST['ps_c_a2'];
$ps_c_a3 = $_POST['ps_c_a3'];

$req_ps_c_a1 = mysqli_query($con,"UPDATE ec_note_per_communications SET note='$ps_c_a1' WHERE nom='ps_c_a1'");
$req_ps_c_a2 = mysqli_query($con,"UPDATE ec_note_per_communications SET note='$ps_c_a2' WHERE nom='ps_c_a2'");
$req_ps_c_a3 = mysqli_query($con,"UPDATE ec_note_per_communications SET note='$ps_c_a3' WHERE nom='ps_c_a3'");

// Les variables pour ec_note_per_developpement_institu

$di_a1 = $_POST['di_a1'];
$di_a2 = $_POST['di_a2'];
$di_a3 = $_POST['di_a3'];
$di_a4 = $_POST['di_a4'];
$di_a5 = $_POST['di_a5'];
$di_a6 = $_POST['di_a6'];

$req_di_a1 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a1' WHERE nom='di_a1'");
$req_di_a2 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a2' WHERE nom='di_a2'");
$req_di_a3 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a3' WHERE nom='di_a3'");
$req_di_a4 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a4' WHERE nom='di_a4'");
$req_di_a5 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a5' WHERE nom='di_a5'");
$req_di_a6 = mysqli_query($con,"UPDATE ec_note_per_developpement_institu SET note='$di_a6' WHERE nom='di_a6'");

// Les variables pour ec_note_per_encadrement

$encadrement_a1 = $_POST['encadrement_a1'];
$encadrement_a2 = $_POST['encadrement_a2'];
$encadrement_a3 = $_POST['encadrement_a3'];
$encadrement_a4 = $_POST['encadrement_a4'];
$encadrement_a5 = $_POST['encadrement_a5'];
$encadrement_a6 = $_POST['encadrement_a6'];

$req_encadrement_a1 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a1' WHERE nom='encadrement_a1'");
$req_encadrement_a2 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a2' WHERE nom='encadrement_a2'");
$req_encadrement_a3 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a3' WHERE nom='encadrement_a3'");
$req_encadrement_a4 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a4' WHERE nom='encadrement_a4'");
$req_encadrement_a5 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a5' WHERE nom='encadrement_a5'");
$req_encadrement_a6 = mysqli_query($con,"UPDATE ec_note_per_encadrement SET note='$encadrement_a6' WHERE nom='encadrement_a6'");

// Les variables pour ec_note_per_innovations_brevets_distinctions

$ibd_a1 = $_POST['ibd_a1'];
$ibd_a2 = $_POST['ibd_a2'];

$req_ibd_a1 = mysqli_query($con,"UPDATE ec_note_per_innovations_brevets_distinctions SET note='$ibd_a1' WHERE nom='ibd_a1'");
$req_ibd_a2 = mysqli_query($con,"UPDATE ec_note_per_innovations_brevets_distinctions SET note='$ibd_a2' WHERE nom='ibd_a2'");

// Les variables pour ec_note_per_membre_jury_d

$mjd_a1 = $_POST['mjd_a1'];
$mjd_a2 = $_POST['mjd_a2'];
$mjd_a3 = $_POST['mjd_a3'];
$mjd_a4 = $_POST['mjd_a4'];
$mjd_a5 = $_POST['mjd_a5'];

$req_mjd_a1 = mysqli_query($con,"UPDATE ec_note_per_membre_jury_d SET note='$mjd_a1' WHERE nom='mjd_a1'");
$req_mjd_a2 = mysqli_query($con,"UPDATE ec_note_per_membre_jury_d SET note='$mjd_a2' WHERE nom='mjd_a2'");
$req_mjd_a3 = mysqli_query($con,"UPDATE ec_note_per_membre_jury_d SET note='$mjd_a3' WHERE nom='mjd_a3'");
$req_mjd_a4 = mysqli_query($con,"UPDATE ec_note_per_membre_jury_d SET note='$mjd_a4' WHERE nom='mjd_a4'");
$req_mjd_a5 = mysqli_query($con,"UPDATE ec_note_per_membre_jury_d SET note='$mjd_a5' WHERE nom='mjd_a5'");

// Les variables pour ec_note_per_president_jury_d

$pjd_a1 = $_POST['pjd_a1'];
$pjd_a2 = $_POST['pjd_a2'];
$pjd_a3 = $_POST['pjd_a3'];
$pjd_a4 = $_POST['pjd_a4'];

$req_pjd_a1 = mysqli_query($con,"UPDATE ec_note_per_president_jury_d SET note='$pjd_a1' WHERE nom='pjd_a1'");
$req_pjd_a2 = mysqli_query($con,"UPDATE ec_note_per_president_jury_d SET note='$pjd_a2' WHERE nom='pjd_a2'");
$req_pjd_a3 = mysqli_query($con,"UPDATE ec_note_per_president_jury_d SET note='$pjd_a3' WHERE nom='pjd_a3'");
$req_pjd_a4 = mysqli_query($con,"UPDATE ec_note_per_president_jury_d SET note='$pjd_a4' WHERE nom='pjd_a4'");

// Les variables pour ec_note_per_publications

// Les variables Articles scientifiques indexés
$ps_p_a1 = $_POST['ps_p_a1'];
$ps_p_a2 = $_POST['ps_p_a2'];
$ps_p_a3 = $_POST['ps_p_a3'];
$ps_p_a4 = $_POST['ps_p_a4'];
$ps_p_a5 = $_POST['ps_p_a5'];

$req_ps_p_a1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_a1' WHERE nom='ps_p_a1'");
$req_ps_p_a2 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_a2' WHERE nom='ps_p_a2'");
$req_ps_p_a3 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_a3' WHERE nom='ps_p_a3'");
$req_ps_p_a4 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_a4' WHERE nom='ps_p_a4'");
$req_ps_p_a5 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_a5' WHERE nom='ps_p_a5'");

// Les variables Articles scientifiques non indexés
$ps_p_b1 = $_POST['ps_p_b1'];
$ps_p_b2 = $_POST['ps_p_b2'];
$ps_p_b3 = $_POST['ps_p_b3'];
$ps_p_b4 = $_POST['ps_p_b4'];
$ps_p_b5 = $_POST['ps_p_b5'];

$req_ps_p_b1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_b1' WHERE nom='ps_p_b1'");
$req_ps_p_b2 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_b2' WHERE nom='ps_p_b2'");
$req_ps_p_b3 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_b3' WHERE nom='ps_p_b3'");
$req_ps_p_b4 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_b4' WHERE nom='ps_p_b4'");
$req_ps_p_b5 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_b5' WHERE nom='ps_p_b5'");

// Les variables Proceedings de conférence
$ps_p_c1 = $_POST['ps_p_c1'];
$ps_p_c2 = $_POST['ps_p_c2'];
$ps_p_c3 = $_POST['ps_p_c3'];
$ps_p_c4 = $_POST['ps_p_c4'];
$ps_p_c5 = $_POST['ps_p_c5'];

$req_ps_p_c1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_c1' WHERE nom='ps_p_c1'");
$req_ps_p_c2 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_c2' WHERE nom='ps_p_c2'");
$req_ps_p_c3 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_c3' WHERE nom='ps_p_c3'");
$req_ps_p_c4 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_c4' WHERE nom='ps_p_c4'");
$req_ps_p_c5 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_c5' WHERE nom='ps_p_c5'");

// Les variables Chapitres de livre 
$ps_p_d1 = $_POST['ps_p_d1'];
$ps_p_d2 = $_POST['ps_p_d2'];
$ps_p_d3 = $_POST['ps_p_d3'];
$ps_p_d4 = $_POST['ps_p_d4'];
$ps_p_d5 = $_POST['ps_p_d5'];

$req_ps_p_d1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_d1' WHERE nom='ps_p_d1'");
$req_ps_p_d2 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_d2' WHERE nom='ps_p_d2'");
$req_ps_p_d3 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_d3' WHERE nom='ps_p_d3'");
$req_ps_p_d4 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_d4' WHERE nom='ps_p_d4'");
$req_ps_p_d5 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_d5' WHERE nom='ps_p_d5'");

// Les variables Mélanges
$ps_p_e1 = $_POST['ps_p_e1'];
$ps_p_e2 = $_POST['ps_p_e2'];
$ps_p_e3 = $_POST['ps_p_e3'];
$ps_p_e4 = $_POST['ps_p_e4'];
$ps_p_e5 = $_POST['ps_p_e5'];

$req_ps_p_e1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_e1' WHERE nom='ps_p_e1'");
$req_ps_p_e2 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_e2' WHERE nom='ps_p_e2'");
$req_ps_p_e3 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_e3' WHERE nom='ps_p_e3'");
$req_ps_p_e4 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_e4' WHERE nom='ps_p_e4'");
$req_ps_p_e5 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_e5' WHERE nom='ps_p_e5'");

// variable Ouvrages
$ps_p_f1 = $_POST['ps_p_f1'];
$req_ps_p_f1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_f1' WHERE nom='ps_p_f1'");

// variable Directeur de Revue
$ps_p_g1 = $_POST['ps_p_g1'];
$req_ps_p_g1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_g1' WHERE nom='ps_p_g1'");

// variable Fiches techniques 
$ps_p_h1 = $_POST['ps_p_h1'];
$req_ps_p_h1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_h1' WHERE nom='ps_p_h1'");

// variable Documents de vulgarisation ou de valorisation 
$ps_p_i1 = $_POST['ps_p_i1'];
$req_ps_p_i1 = mysqli_query($con,"UPDATE ec_note_per_publications SET note='$ps_p_i1' WHERE nom='ps_p_i1'");

// Les variables ec_note_per_reponsabilite_academique

$respo_aca_a1 = $_POST['respo_aca_a1'];
$respo_aca_a2 = $_POST['respo_aca_a2'];
$respo_aca_a3 = $_POST['respo_aca_a3'];
$respo_aca_a4 = $_POST['respo_aca_a4'];
$respo_aca_a5 = $_POST['respo_aca_a5'];
$respo_aca_a6 = $_POST['respo_aca_a6'];
$respo_aca_a7 = $_POST['respo_aca_a7'];
$respo_aca_a8 = $_POST['respo_aca_a8'];
$respo_aca_a9 = $_POST['respo_aca_a9'];
$respo_aca_aa1 = $_POST['respo_aca_aa1'];
$respo_aca_aa2 = $_POST['respo_aca_aa2'];
$respo_aca_aa3 = $_POST['respo_aca_aa3'];
$respo_aca_aa4 = $_POST['respo_aca_aa4'];

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

header("location :".$_SERVER['HTTP_REFERER']);
?>