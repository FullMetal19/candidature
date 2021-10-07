<?php
$con = mysqli_connect("localhost","root","","ussein_candidature");

// Note Par défaut âge
$req1 = mysqli_query($con,"SELECT defaut FROM note_age");
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

$reset1=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_1' WHERE nom='master1' ");
$reset2=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_2' WHERE nom='master2' ");
$reset3=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_3' WHERE nom='master3' ");
$reset4=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_4' WHERE nom='master4' ");
$reset5=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_5' WHERE nom='master5' ");
$reset6=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_6' WHERE nom='master6' ");
$reset7=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_7' WHERE nom='doctorat1' ");
$reset8=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_8' WHERE nom='doctorat2' ");
$reset9=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_9' WHERE nom='doctorat3' ");
$reset10=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_10' WHERE nom='doctorat4' ");
$reset11=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_11' WHERE nom='doctorat5' ");
$reset12=mysqli_query($con,"UPDATE note_age SET note='$can_note_age_12' WHERE nom='doctorat6' ");

// Note défaut Diplôme
$req2 = mysqli_query($con,"SELECT defaut FROM ec_note_diplome");
$tab2 = mysqli_fetch_all($req2);
$can_note_diplome_1 = $tab2[0][0];
$can_note_diplome_2 = $tab2[6][0]; //diplome de point 30, à faire attetion puisque c'est deernier sur la liste dans la base de données
$can_note_diplome_3 = $tab2[1][0];
$can_note_diplome_4 = $tab2[2][0];
$can_note_diplome_5 = $tab2[3][0];
$can_note_diplome_6 = $tab2[4][0];
$can_note_diplome_7 = $tab2[5][0];

$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$can_note_diplome_1' WHERE nom='diplome1'");
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$can_note_diplome_2' WHERE nom='diplome2'");
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$can_note_diplome_3' WHERE nom='diplome3'");
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$can_note_diplome_4' WHERE nom='diplome4'");
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$can_note_diplome_5' WHERE nom='diplome5'");
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$can_note_diplome_6' WHERE nom='diplome6'");

// Note défaut LicenceETMaster
$req3 = mysqli_query($con,"SELECT defaut FROM ec_note_licence_master");
$tab3 = mysqli_fetch_all($req3);
$can_note_licence_master_1 = $tab3[0][0];
$can_note_licence_master_2 = $tab3[1][0];
$can_note_licence_master_3 = $tab3[2][0];
$can_note_licence_master_4 = $tab3[3][0];
$can_note_licence_master_5 = $tab3[4][0];
$can_note_licence_master_6 = $tab3[5][0];

$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$can_note_licence_master_1' WHERE nom='licence3ans_oui'");
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$can_note_licence_master_2' WHERE nom='licence3ans_non'");
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$can_note_licence_master_3' WHERE nom='master3ans_oui'");
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$can_note_licence_master_4' WHERE nom='master3ans_oui'");
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$can_note_licence_master_5' WHERE nom='autre_oui'");
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$can_note_licence_master_6' WHERE nom='autre_oui'");

// Note Défaut Doctorat
$requete4 = mysqli_query($con,"SELECT defaut FROM ec_note_doctorat");
$tab4 = mysqli_fetch_all($requete4);
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
$req_1=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$can_note_doctorat_1' WHERE nom='these_troisieme_cycle1'");
$req_2=mysqli_query($con,"UPDATE ec_note_doctorat  SET note='$can_note_doctorat_2' WHERE nom='these_troisieme_cycle2'");
$req_3=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$can_note_doctorat_3' WHERE nom='these_troisieme_cycle3'");
$req_4=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$can_note_doctorat_4' WHERE nom='these_unique_phD1'");
$req_5=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$can_note_doctorat_5' WHERE nom='these_unique_phD2'");
$req_6=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$can_note_doctorat_6' WHERE nom='these_unique_phD3'");
$req_7=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$can_note_doctorat_7' WHERE nom='these_etat1'");
$req_8=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$can_note_doctorat_8' WHERE nom='these_etat2'");
$req_9=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$can_note_doctorat_9' WHERE nom='these_etat3'");
$req_10=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$can_note_doctorat_10' WHERE nom='these_exercice1'");
$req_11=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$can_note_doctorat_11' WHERE nom='these_exercice2'");

// Note défaut expérience pédagogique
$req5 = mysqli_query($con,"SELECT defaut FROM ec_note_experience_pedagogique");
$tab5 = mysqli_fetch_all($req5);
$can_note_experience_pedagogique_1 = $tab5[0][0];
$can_note_experience_pedagogique_2 = $tab5[1][0];

$req_update5 = mysqli_query($con,"UPDATE ec_note_experience_pedagogique SET note='$can_note_experience_pedagogique_1' WHERE nom='secondaire'");
$req_update5 = mysqli_query($con,"UPDATE ec_note_experience_pedagogique SET note='$can_note_experience_pedagogique_2' WHERE nom='superieur'");


// Note défaut Expérience de Recherche
$req6 = mysqli_query($con,"SELECT defaut FROM ec_note_experience_recherche");
$tab6 = mysqli_fetch_all($req6);
$can_note_experience_recherche_1 = $tab6[0][0];
$can_note_experience_recherche_2 = $tab6[1][0];
$can_note_experience_recherche_3 = $tab6[2][0];
$can_note_experience_recherche_4 = $tab6[3][0];

$req_update6 = mysqli_query($con,"UPDATE ec_note_experience_recherche SET note='$can_note_experience_recherche_1' WHERE nom='er1'");
$req_update6 = mysqli_query($con,"UPDATE ec_note_experience_recherche SET note='$can_note_experience_recherche_2' WHERE nom='er2'");
$req_update6 = mysqli_query($con,"UPDATE ec_note_experience_recherche SET note='$can_note_experience_recherche_3' WHERE nom='er3'");
$req_update6 = mysqli_query($con,"UPDATE ec_note_experience_recherche SET note='$can_note_experience_recherche_4' WHERE nom='er4'");

// Note défaut Autre Expérience
$req7 = mysqli_query($con,"SELECT defaut FROM ec_note_autre_experience");
$tab7= mysqli_fetch_all($req7);
$can_note_autre_experience_1 = $tab7[0][0];
$can_note_autre_experience_2 = $tab7[1][0];
$can_note_autre_experience_3 = $tab7[2][0];
$can_note_autre_experience_4 = $tab7[3][0];
$can_note_autre_experience_5 = $tab7[4][0];

$req_update7 = mysqli_query($con,"UPDATE ec_note_autre_experience SET note='$can_note_autre_experience_1' WHERE nom='gestion'");
$req_update7 = mysqli_query($con,"UPDATE ec_note_autre_experience SET note='$can_note_autre_experience_2' WHERE nom='investigateur_projet_oui'");
$req_update7 = mysqli_query($con,"UPDATE ec_note_autre_experience SET note='$can_note_autre_experience_3' WHERE nom='investigateur_projet_non'");
$req_update7 = mysqli_query($con,"UPDATE ec_note_autre_experience SET note='$can_note_autre_experience_4' WHERE nom='coordonateur_reseau_oui'");
$req_update7 = mysqli_query($con,"UPDATE ec_note_autre_experience SET note='$can_note_autre_experience_5' WHERE nom='coordonateur_reseau_non'");

// Note Défaut Distinction
$req13 = mysqli_query($con,"SELECT defaut FROM ec_note_distinction");
$tab13= mysqli_fetch_all($req13);

$can_note_par_defaut_distinction_1 = $tab13[0][0];
$can_note_par_defaut_distinction_2 = $tab13[1][0];

$update_distinction_1 = mysqli_query($con,"UPDATE ec_note_distinction SET note='$can_note_par_defaut_distinction_1' WHERE nom='prix_concours'");
$update_distinction_2 = mysqli_query($con,"UPDATE ec_note_distinction SET note='$can_note_par_defaut_distinction_2' WHERE nom='decoration'");

// Note Défaut Grade
$req15 = mysqli_query($con,"SELECT defaut FROM ec_note_grade");
$tab15 = mysqli_fetch_all($req15);
$can_note_grade_1 = $tab15[0][0];
$can_note_grade_2 = $tab15[1][0];
$can_note_grade_3 = $tab15[2][0];
$can_note_grade_4 = $tab15[3][0];
$can_note_grade_5 = $tab15[4][0];

$req_update15 = mysqli_query($con,"UPDATE ec_note_grade SET note='$can_note_grade_1' WHERE nom='prof_enseignement_secondaire'");
$req_update15 = mysqli_query($con,"UPDATE ec_note_grade SET note='$can_note_grade_2' WHERE nom='assistant'");
$req_update15 = mysqli_query($con,"UPDATE ec_note_grade SET note='$can_note_grade_3' WHERE nom='maitre_assistant'");
$req_update15 = mysqli_query($con,"UPDATE ec_note_grade SET note='$can_note_grade_4' WHERE nom='maitre_de_conference'");
$req_update15 = mysqli_query($con,"UPDATE ec_note_grade SET note='$can_note_grade_5' WHERE nom='prof_titulaire'");

// Note Défaut Brevet
$req16 = mysqli_query($con,"SELECT defaut FROM ec_note_brevet");
$tab16 = mysqli_fetch_all($req16);
$can_note_brevet_1 = $tab16[0][0];
$can_note_brevet_2 = $tab16[1][0];

$req_update16 = mysqli_query($con,"UPDATE ec_note_brevet SET note='$can_note_brevet_1' WHERE nom='brevet_oui'");
$req_update16 = mysqli_query($con,"UPDATE ec_note_brevet SET note='$can_note_brevet_2' WHERE nom='brevet_non'");

// Note défaut ldd, lv, aid, aihd
$req11 = mysqli_query($con,"SELECT defaut FROM ec_note_ldd");
$tab11= mysqli_fetch_all($req11);
$can_note_ldd_1 = $tab11[0][0];
$can_note_ldd_2 = $tab11[1][0];
$can_note_ldd_3 = $tab11[2][0];
$can_note_ldd_4 = $tab11[3][0];

$req12 = mysqli_query($con,"SELECT defaut FROM ec_note_lv");
$tab12= mysqli_fetch_all($req12);
$can_note_lv_1 = $tab12[0][0];
$can_note_lv_2 = $tab12[1][0];
$can_note_lv_3 = $tab12[2][0];
$can_note_lv_4 = $tab12[3][0];
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

$reset30=mysqli_query($con,"UPDATE ec_note_ldd SET note='$can_note_ldd_1' WHERE nom='ldd_a1' ");
$reset31=mysqli_query($con,"UPDATE ec_note_ldd SET note='$can_note_ldd_2' WHERE nom='ldd_a2' ");
$reset32=mysqli_query($con,"UPDATE ec_note_ldd SET note='$can_note_ldd_3' WHERE nom='ldd_a3' ");
$reset33=mysqli_query($con,"UPDATE ec_note_ldd SET note='$can_note_ldd_4' WHERE nom='ldd_aa' ");
$reset34=mysqli_query($con,"UPDATE ec_note_lv SET note='$can_note_lv_1' WHERE nom='lv_a1' ");
$reset35=mysqli_query($con,"UPDATE ec_note_lv SET note='$can_note_lv_2' WHERE nom='lv_a2' ");
$reset36=mysqli_query($con,"UPDATE ec_note_lv SET note='$can_note_lv_3' WHERE nom='lv_a3' ");
$reset37=mysqli_query($con,"UPDATE ec_note_lv SET note='$can_note_lv_4' WHERE nom='lv_aa' ");
$reset40=mysqli_query($con,"UPDATE ec_note_ldd SET note='$can_note_aid_1' WHERE nom='aid_a1' ");
$reset41=mysqli_query($con,"UPDATE ec_note_ldd SET note='$can_note_aid_2' WHERE nom='aid_a2' ");
$reset42=mysqli_query($con,"UPDATE ec_note_ldd SET note='$can_note_aid_3' WHERE nom='aid_a3' ");
$reset43=mysqli_query($con,"UPDATE ec_note_ldd SET note='$can_note_aid_4' WHERE nom='aid_aa' ");
$reset44=mysqli_query($con,"UPDATE ec_note_lv SET note='$can_note_aihd_1' WHERE nom='aihd_a1' ");
$reset45=mysqli_query($con,"UPDATE ec_note_lv SET note='$can_note_aihd_2' WHERE nom='aihd_a2' ");
$reset46=mysqli_query($con,"UPDATE ec_note_lv SET note='$can_note_aihd_3' WHERE nom='aihd_a3' ");
$reset47=mysqli_query($con,"UPDATE ec_note_lv SET note='$can_note_aihd_4' WHERE nom='aihd_aa' ");

// Note Procceding
$req13 = mysqli_query($con,"SELECT defaut FROM ec_note_proccedings");
$tab13= mysqli_fetch_all($req13);

$can_note_par_defaut_proccedings_1 = $tab13[0][0];
$can_note_par_defaut_proccedings_2 = $tab13[1][0];

$update_proceding_oui = mysqli_query($con,"UPDATE ec_note_proccedings SET note='$can_note_par_defaut_proccedings_1' WHERE nom='proccedings_oui'");
$update_proceding_non = mysqli_query($con,"UPDATE ec_note_proccedings SET note='$can_note_par_defaut_proccedings_2' WHERE nom='proccedings_non'");

// Note Communiction 
$req14 = mysqli_query($con,"SELECT defaut FROM ec_note_communication_conference");
$tab14 = mysqli_fetch_all($req14);

$can_note_par_defaut_communication_conference_1 = $tab14[0][0];
$can_note_par_defaut_communication_conference_2 = $tab14[1][0];
$can_note_par_defaut_communication_conference_3 = $tab14[2][0];
$can_note_par_defaut_communication_conference_4 = $tab14[3][0];
$can_note_par_defaut_communication_conference_5 = $tab14[4][0];
$can_note_par_defaut_communication_conference_6 = $tab14[5][0];


$update_com_conference_1 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$can_note_par_defaut_communication_conference_1' WHERE nom='communication_orale_internationale'");
$update_com_conference_2 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$can_note_par_defaut_communication_conference_2' WHERE nom='poster_discussion_internationale'");
$update_com_conference_3 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$can_note_par_defaut_communication_conference_3' WHERE nom='communication_orale_nationale'");
$update_com_conference_4 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$can_note_par_defaut_communication_conference_4' WHERE nom='communication_nationale_affichee'");
$update_com_conference_5 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$can_note_par_defaut_communication_conference_5' WHERE nom='conferencier_invite_international'");
$update_com_conference_6 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$can_note_par_defaut_communication_conference_6' WHERE nom='conferencier_national'");

mysqli_close($con);

header('Location: http://localhost/candidature/point-modulable/');
?>