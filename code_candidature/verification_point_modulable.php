<?php
$con = mysqli_connect("localhost","root","","ussein_candidature");

$master1=$_POST['master1'];
$master2=$_POST['master2'];
$master3=$_POST['master3'];
$master4=$_POST['master4'];
$master5=$_POST['master5'];
$master6=$_POST['master6'];
$doctorat1=$_POST['doctorat1'];
$doctorat2=$_POST['doctorat2'];
$doctorat3=$_POST['doctorat3'];
$doctorat4=$_POST['doctorat4'];
$doctorat5=$_POST['doctorat5'];
$doctorat6=$_POST['doctorat6'];
$req1 = mysqli_query($con,"UPDATE note_age SET note='$master1' WHERE nom='master1'");
$req2 = mysqli_query($con,"UPDATE note_age SET note='$master2' WHERE nom='master2'");
$req3 = mysqli_query($con,"UPDATE note_age SET note='$master3' WHERE nom='master3'");
$req4 = mysqli_query($con,"UPDATE note_age SET note='$master4' WHERE nom='master4'");
$req5 = mysqli_query($con,"UPDATE note_age SET note='$master5' WHERE nom='master5'");
$req6 = mysqli_query($con,"UPDATE note_age SET note='$master6' WHERE nom='master6'");
$req7 = mysqli_query($con,"UPDATE note_age SET note='$doctorat1' WHERE nom='doctorat1'");
$req8 = mysqli_query($con,"UPDATE note_age SET note='$doctorat2' WHERE nom='doctorat2'");
$req9 = mysqli_query($con,"UPDATE note_age SET note='$doctorat3' WHERE nom='doctorat3'");
$req10 = mysqli_query($con,"UPDATE note_age SET note='$doctorat4' WHERE nom='doctorat4'");
$req11= mysqli_query($con,"UPDATE note_age SET note='$doctorat5' WHERE nom='doctorat5'");
$req12= mysqli_query($con,"UPDATE note_age SET note='$doctorat6' WHERE nom='doctorat6'");

// Vérification Diplôme 
$diplome1 = $_POST['diplome1'];
$diplome2 = $_POST['diplome2'];
$diplome3 = $_POST['diplome3'];
$diplome4 = $_POST['diplome4'];
$diplome5 = $_POST['diplome5'];
$diplome6 = $_POST['diplome6'];
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$diplome1' WHERE nom='diplome1'");
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$diplome2' WHERE nom='diplome2'");
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$diplome3' WHERE nom='diplome3'");
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$diplome4' WHERE nom='diplome4'");
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$diplome5' WHERE nom='diplome5'");
$req_update2 = mysqli_query($con,"UPDATE ec_note_diplome SET note='$diplome6' WHERE nom='diplome6'");

// Vérification Licence Et Master
$licence3ans_oui = $_POST['licence3ans_oui'];
$licence3ans_non = $_POST['licence3ans_non'];
$master2ans_oui = $_POST['master2ans_oui'];
$master2ans_non = $_POST['master2ans_non'];
$autre_oui = $_POST['autre_oui'];
$autre_non = $_POST['autre_non'];
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$licence3ans_oui' WHERE nom='licence3ans_oui'");
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$licence3ans_non' WHERE nom='licence3ans_non'");
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$master2ans_oui' WHERE nom='master3ans_oui'");
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$master2ans_oui' WHERE nom='master3ans_oui'");
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$autre_oui' WHERE nom='autre_oui'");
$req_update3 = mysqli_query($con,"UPDATE ec_note_licence_master SET note='$autre_oui' WHERE nom='autre_oui'");

//Vérification Doctorat
$these_troisieme_cycle1=$_POST['these_troisieme_cycle1'];
$these_troisieme_cycle2=$_POST['these_troisieme_cycle2'];
$these_troisieme_cycle3=$_POST['these_troisieme_cycle3'];
$these_unique_phD1=$_POST['these_unique_phD1'];
$these_unique_phD2=$_POST['these_unique_phD2'];
$these_unique_phD3=$_POST['these_unique_phD3'];
$these_etat1=$_POST['these_etat1'];
$these_etat2=$_POST['these_etat2'];
$these_etat3=$_POST['these_etat3'];
$these_exercice1=$_POST['these_exercice1'];
$these_exercice2=$_POST['these_exercice2'];
$req1=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$these_troisieme_cycle1' WHERE nom='these_troisieme_cycle1'");
$req2=mysqli_query($con,"UPDATE ec_note_doctorat  SET note='$these_troisieme_cycle2' WHERE nom='these_troisieme_cycle2'");
$req3=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$these_troisieme_cycle3' WHERE nom='these_troisieme_cycle3'");
$req4=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$these_unique_phD1' WHERE nom='these_unique_phD1'");
$req5=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$these_unique_phD2' WHERE nom='these_unique_phD2'");
$req6=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$these_unique_phD3' WHERE nom='these_unique_phD3'");
$req7=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$these_etat1' WHERE nom='these_etat1'");
$req8=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$these_etat2' WHERE nom='these_etat2'");
$req9=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$these_etat3' WHERE nom='these_etat3'");
$req10=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$these_exercice1' WHERE nom='these_exercice1'");
$req11=mysqli_query($con,"UPDATE ec_note_doctorat SET note='$these_exercice2' WHERE nom='these_exercice2'");

//Vérification recherche pedagogique
$secondaire = $_POST['secondaire'];
$superieur = $_POST['superieur'];
$req1 = mysqli_query($con," UPDATE ec_note_experience_pedagogique SET note='$secondaire' WHERE nom ='secondaire'");
$req2 = mysqli_query($con," UPDATE ec_note_experience_pedagogique SET note='$superieur' WHERE nom ='superieur'");

//Vérification experience recherce
$er1 = $_POST['er1'];
$er2 = $_POST['er2'];
$er3 = $_POST['er3'];
$er4 = $_POST['er4'];
$req3 = mysqli_query($con," UPDATE ec_note_experience_recherch SET note='$er1' WHERE nom ='er1' " );
$req4 = mysqli_query($con," UPDATE ec_note_experience_recherch SET note='$er2' WHERE nom ='er2' " );
$req5 = mysqli_query($con," UPDATE ec_note_experience_recherch SET note='$er3' WHERE nom ='er3' " );
$req6 = mysqli_query($con," UPDATE ec_note_experience_recherch SET note='$er4' WHERE nom ='er4' " );

// Vérification Autres Expérience
$gestion=$_POST['gestion'];
$investigateur_projet_oui=$_POST['investigateur_projet_oui'];
$investigateur_projet_non=$_POST['investigateur_projet_non'];
$coordonateur_reseau_oui=$_POST['coordonateur_reseau_oui'];
$coordonateur_reseau_non=$_POST['coordonateur_reseau_non'];
$req1 = mysqli_query($con,"UPDATE ec_note_autre_experience SET note='$gestion' WHERE nom='gestion'");
$req2 = mysqli_query($con,"UPDATE ec_note_autre_experience SET note='$investigateur_projet_oui' WHERE nom='investigateur_projet_oui'");
$req3 = mysqli_query($con,"UPDATE ec_note_autre_experience SET note='$investigateur_projet_non' WHERE nom='investigateur_projet_non'");
$req4 = mysqli_query($con,"UPDATE ec_note_autre_experience SET note='$coordonateur_reseau_oui' WHERE nom='coordonateur_reseau_oui'");
$req5 = mysqli_query($con,"UPDATE ec_note_autre_experience SET note='$coordonateur_reseau_non' WHERE nom='coordonateur_reseau_non'");

// Vérification Grade
$prof_enseignement_secondaire = $_POST['prof_enseignement_secondaire'];
$assistant = $_POST['assistant'];
$maitre_assistant = $_POST['maitre_assistant'];
$maitre_de_conference = $_POST['maitre_de_conference'];
$prof_titulaire = $_POST['prof_titulaire'];
$req_update15 = mysqli_query($con,"UPDATE ec_note_grade SET note='$prof_enseignement_secondaire' WHERE nom='prof_enseignement_secondaire'");
$req_update15 = mysqli_query($con,"UPDATE ec_note_grade SET note='$assistant' WHERE nom='assistant'");
$req_update15 = mysqli_query($con,"UPDATE ec_note_grade SET note='$maitre_assistant' WHERE nom='maitre_assistant'");
$req_update15 = mysqli_query($con,"UPDATE ec_note_grade SET note='$maitre_de_conference' WHERE nom='maitre_de_conference'");
$req_update15 = mysqli_query($con,"UPDATE ec_note_grade SET note='$prof_titulaire' WHERE nom='prof_titulaire'");

//Vérification Brevet
$brevet_oui = $_POST['brevet_oui'];
$brevet_non = $_POST['brevet_non'];
$req_update16 = mysqli_query($con,"UPDATE ec_note_brevet SET note='$brevet_oui' WHERE nom='brevet_oui'");
$req_update16 = mysqli_query($con,"UPDATE ec_note_brevet SET note='$brevet_non' WHERE nom='brevet_non'");

// Vérification Publication
$aid_a1=$_POST['aid_a1'];
$aid_a2=$_POST['aid_a2'];
$aid_a3=$_POST['aid_a3'];
$aid_aa=$_POST['aid_aa'];
$aihd_a1=$_POST['aihd_a1'];
$aihd_a2=$_POST['aihd_a2'];
$aihd_a3=$_POST['aihd_a3'];
$aihd_aa=$_POST['aihd_aa'];
$ldd_a1=$_POST['can_note_ldd_1'];
$ldd_a2=$_POST['can_note_ldd_2'];
$ldd_a3=$_POST['can_note_ldd_3'];
$ldd_aa=$_POST['can_note_ldd_4'];
$lv_a1=$_POST['can_note_lv_1'];
$lv_a2=$_POST['can_note_lv_2'];
$lv_a3=$_POST['can_note_lv_3'];
$lv_aa=$_POST['can_note_lv_4'];
$req1 = mysqli_query($con," UPDATE ec_note_aid SET note='$aid_a1' WHERE nom='aid_a1'");
$req2 = mysqli_query($con," UPDATE ec_note_aid SET note='$aid_a2' WHERE nom='aid_a2'");
$req3 = mysqli_query($con," UPDATE ec_note_aid SET note='$aid_a3' WHERE nom='aid_a3'");
$req4 = mysqli_query($con," UPDATE ec_note_aid SET note='$aid_aa' WHERE nom='aid_aa'");
$req5 = mysqli_query($con," UPDATE ec_note_aihd SET note='$aihd_a1' WHERE nom='aihd_a1'");
$req6 = mysqli_query($con," UPDATE ec_note_aihd SET note='$aihd_a2' WHERE nom='aihd_a2'");
$req7 = mysqli_query($con," UPDATE ec_note_aihd SET note='$aihd_a3' WHERE nom='aihd_a3'");
$req8 = mysqli_query($con," UPDATE ec_note_aihd SET note='$aihd_aa' WHERE nom='aihd_aa'");
$requet1=mysqli_query($con,"UPDATE ec_note_ldd SET note='$ldd_a1' WHERE nom='ldd_a1'");
$requet1=mysqli_query($con,"UPDATE ec_note_ldd SET note='$ldd_a2' WHERE nom='ldd_a2'");
$requet1=mysqli_query($con,"UPDATE ec_note_ldd SET note='$ldd_a3' WHERE nom='ldd_a3'");
$requet1=mysqli_query($con,"UPDATE ec_note_ldd SET note='$ldd_aa' WHERE nom='ldd_aa'");
$requet1=mysqli_query($con,"UPDATE ec_note_lv SET note='$lv_a1' WHERE nom='lv_a1'");
$requet1=mysqli_query($con,"UPDATE ec_note_lv SET note='$lv_a2' WHERE nom='lv_a2'");
$requet1=mysqli_query($con,"UPDATE ec_note_lv SET note='$lv_a3' WHERE nom='lv_a3'");
$requet1=mysqli_query($con,"UPDATE ec_note_lv SET note='$lv_aa' WHERE nom='lv_aa'");

// Vérification Procceding
$val_proceding_1 = $_POST['proceding1'];
$val_proceding_2 = $_POST['proceding2'];
$update_proceding_oui = mysqli_query($con,"UPDATE ec_note_proccedings SET note='$val_proceding_1' WHERE nom='proccedings_oui'");
$update_proceding_non = mysqli_query($con,"UPDATE ec_note_proccedings SET note='$val_proceding_2' WHERE nom='proccedings_non'");

// Vérification Communication
$val_com_conference_1 = $_POST['com_conference1'];
$val_com_conference_2 = $_POST['com_conference2'];
$val_com_conference_3 = $_POST['com_conference3'];
$val_com_conference_4 = $_POST['com_conference4'];
$val_com_conference_5 = $_POST['com_conference5'];
$val_com_conference_6 = $_POST['com_conference6'];
$update_com_conference_1 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$val_com_conference_1' WHERE nom='communication_orale_internationale'");
$update_com_conference_2 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$val_com_conference_2' WHERE nom='poster_discussion_internationale'");
$update_com_conference_3 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$val_com_conference_3' WHERE nom='communication_orale_nationale'");
$update_com_conference_4 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$val_com_conference_4' WHERE nom='communication_nationale_affichee'");
$update_com_conference_5 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$val_com_conference_5' WHERE nom='conferencier_invite_international'");
$update_com_conference_6 = mysqli_query($con,"UPDATE ec_note_communication_conference SET note='$val_com_conference_6' WHERE nom='conferencier_national'");


//Vérification Distinction
$val_distinction_1 = $_POST['distinction1'];
$val_distinction_2 = $_POST['distinction2'];
$update_distinction_1 = mysqli_query($con,"UPDATE ec_note_distinction SET note='$val_distinction_1' WHERE nom='prix_concours'");
$update_distinction_2 = mysqli_query($con,"UPDATE ec_note_distinction SET note='$val_distinction_2' WHERE nom='decoration'");


header('Location: http://localhost/candidature/point-modulable/');
?>