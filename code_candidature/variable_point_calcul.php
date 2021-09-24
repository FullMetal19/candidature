<?php
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

$req8 = mysqli_query($con,"SELECT note FROM ec_note_distinction");
$tab8= mysqli_fetch_all($req8);
$can_note_distinction_1 = $tab8[0][0];
$can_note_distinction_2 = $tab8[1][0];

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
// mysqli_query($con,"UPDATE `ec_note_aid` SET `defaut`='$can_note_ldd_1' WHERE `nom`='ldd_a1'");

$req12 = mysqli_query($con,"SELECT note FROM ec_note_lv");
$tab12= mysqli_fetch_all($req12);
$can_note_lv_1 = $tab12[0][0];
$can_note_lv_2 = $tab12[1][0];
$can_note_lv_3 = $tab12[2][0];
$can_note_lv_4 = $tab12[3][0];

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

mysqli_close($con)
?>