<?php
/* template name:sc_per_notation */
session_start();
// Recupération des variables


$auteur =$_GET['matricule'];
$mail=$_GET['mail'];
$lien = 'http://localhost/candidature/code_per/repertoire_per/'.$mail.'/';
$con = mysqli_connect("localhost","root","","ussein_candidature");


// $ligne = 0; // compteur de ligne
// $fic = fopen("test.csv", "r+"); 
// $valeur=array();
// while($tab=fgetcsv($fic,1024,','))
// {
// $champs = count($tab);//nombre de champ dans la ligne en question
// // echo " Les " . $champs . " champs de la ligne " . $ligne . " sont :";
// for($colonne=0; $colonne<$champs; $colonne ++)
// {
// // echo $tab[$i] . "";
// $valeur[$ligne][$colonne]=$tab[$colonne];
// $$valeur[$ligne][$colonne]=intval($valeur[$ligne][$colonne]);
// var_dump($valeur[$ligne][$colonne]);
// ?><br><?php
// }
// $ligne ++;
// }


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

//Requetes recupération des fichiers pdf s'il existe 
// A-S-Indexe.pdf
$requete_article_indexe = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='A-S-Indexe.pdf'");
$selecteur_article_indexe = mysqli_fetch_array($requete_article_indexe);

$article_indexe="";
if(($selecteur_article_indexe['lien']!="")){
    $article_indexe=$selecteur_article_indexe['lien'] ;                         
}
else  if(isset($selecteur_article_indexe['nom_fichier'])){

    $article_indexe= $lien.$selecteur_article_indexe['nom_fichier'];
}

// A-S-NonIndexe.pdf
$requete_article_non_indexe = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='A-S-NonIndexe.pdf'");
$selecteur_article_non_indexe = mysqli_fetch_array($requete_article_non_indexe);

$article_non_indexe="";
if(($selecteur_article_non_indexe['lien']!="")){
    $article_non_indexe=$selecteur_article_non_indexe['lien'] ;                         
}
else  if(isset($selecteur_article_non_indexe['nom_fichier'])){

    $article_non_indexe= $lien.$selecteur_article_non_indexe['nom_fichier'];
}


// proceeding.pdf
$requete_proceeding = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='proceeding.pdf'");
$selecteur_proceeding = mysqli_fetch_array($requete_proceeding);

$proceeding="";
if(($selecteur_proceeding['lien']!="")){
    $proceeding=$selecteur_proceeding['lien'] ;                         
}
else  if(isset($selecteur_proceeding['nom_fichier'])){

    $proceeding= $lien.$selecteur_proceeding['nom_fichier'];
}

        //****** */ Chapitre
$requete_chapitre = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='chapitre.pdf'");
$selecteur_chapitre = mysqli_fetch_array($requete_chapitre);

$chapitre="";
if(($selecteur_chapitre['lien']!="")){
    $chapitre=$selecteur_chapitre['lien'] ;                         
}
else  if(isset($selecteur_chapitre['nom_fichier'])){

    $chapitre= $lien.$selecteur_chapitre['nom_fichier'];
}

// melange.pdf
$requete_melange = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='melange.pdf'");
$selecteur_melange = mysqli_fetch_array($requete_melange);

$melange="";
if(($selecteur_melange['lien']!="")){
    $melange=$selecteur_melange['lien'] ;                         
}
else  if(isset($selecteur_melange['nom_fichier'])){

    $melange= $lien.$selecteur_melange['nom_fichier'];
}

// ouvrage.pdf
$requete_ouvrage = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='ouvrage.pdf'");
$selecteur_ouvrage = mysqli_fetch_array($requete_ouvrage);

$ouvrage="";
if(($selecteur_ouvrage['lien']!="")){
    $ouvrage=$selecteur_ouvrage['lien'] ;                         
}
else  if(isset($selecteur_ouvrage['nom_fichier'])){

    $ouvrage= $lien.$selecteur_ouvrage['nom_fichier'];
}

// Revue.pdf
$requete_revue = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Revue.pdf'");
$selecteur_revue = mysqli_fetch_array($requete_revue);

$revue="";
if(($selecteur_revue['lien']!="")){
    $revue=$selecteur_revue['lien'] ;                         
}
else  if(isset($selecteur_revue['nom_fichier'])){

    $revue= $lien.$selecteur_revue['nom_fichier'];
}

// ficheTechnique.pdf
$requete_ficheTechnique = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='FicheTechnique.pdf'");
$selecteur_ficheTechnique = mysqli_fetch_array($requete_ficheTechnique);

$ficheTechnique="";
if(($selecteur_ficheTechnique['lien']!="")){
    $ficheTechnique=$selecteur_ficheTechnique['lien'] ;                         
}
else  if(isset($selecteur_ficheTechnique['nom_fichier'])){

    $ficheTechnique= $lien.$selecteur_ficheTechnique['nom_fichier'];
}

// vulgarisation.pdf
$requete_vulgarisation = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Vulgarisation.pdf'");
$selecteur_vulgarisation = mysqli_fetch_array($requete_vulgarisation);

$vulgarisation="";
if(($selecteur_vulgarisation['lien']!="")){
    $vulgarisation=$selecteur_vulgarisation['lien'] ;                         
}
else  if(isset($selecteur_vulgarisation['nom_fichier'])){

    $vulgarisation= $lien.$selecteur_vulgarisation['nom_fichier'];
}

// conf_internationales.pdf
$requete_conf_internationales = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='conf_internationales.pdf'");
$selecteur_conf_internationales = mysqli_fetch_array($requete_conf_internationales);

$conf_internationales="";
if(($selecteur_conf_internationales['lien']!="")){
    $conf_internationales=$selecteur_conf_internationales['lien'] ;                         
}
else  if(isset($selecteur_conf_internationales['nom_fichier'])){

    $conf_internationales= $lien.$selecteur_conf_internationales['nom_fichier'];
}

// conf_nationales.pdf
$requete_conf_nationales = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='conf_nationales.pdf'");
$selecteur_conf_nationales = mysqli_fetch_array($requete_conf_nationales);

$conf_nationales="";
if(($selecteur_conf_nationales['lien']!="")){
    $conf_nationales=$selecteur_conf_nationales['lien'] ;                         
}
else  if(isset($selecteur_conf_nationales['nom_fichier'])){

    $conf_nationales= $lien.$selecteur_conf_nationales['nom_fichier'];
}

// conferencier_inter.pdf
$requete_conferencier_inter = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='conferencier_inter.pdf'");
$selecteur_conferencier_inter = mysqli_fetch_array($requete_conferencier_inter);

$conferencier_inter="";
if(($selecteur_conferencier_inter['lien']!="")){
    $conferencier_inter=$selecteur_conferencier_inter['lien'] ;                         
}
else  if(isset($selecteur_conferencier_inter['nom_fichier'])){

    $conferencier_inter= $lien.$selecteur_conferencier_inter['nom_fichier'];
}

//   Verification et recuperation d'un fichier -	Licence ou équivalent
$requete_licence = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='licence.pdf'");
$selecteur_licence = mysqli_fetch_array($requete_licence);

$licence="";
if($selecteur_licence!=null){
    if(($selecteur_licence['lien']!="")){
    $licence=$selecteur_licence['lien'] ;                         
}
else  if(isset($selecteur_licence['nom_fichier'])){

    $licence= $lien.$selecteur_licence['nom_fichier'];
}
}



//   Verification et recuperation d'un fichier -	Diplôme d’Ingénieur  ou équivalent
$requete_ingenieur = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='ingenieur.pdf'");
$selecteur_ingenieur = mysqli_fetch_array($requete_ingenieur);

$ingenieur="";
if($selecteur_ingenieur!=null){
    if(($selecteur_ingenieur['lien']!="")){
    $ingenieur=$selecteur_ingenieur['lien'] ;                         
}
else  if(isset($selecteur_ingenieur['nom_fichier'])){

    $ingenieur= $lien.$selecteur_ingenieur['nom_fichier'];
}
}


//   Verification et recuperation d'un fichier -	Master ou équivalents
$requete_master = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='master.pdf'");
$selecteur_master = mysqli_fetch_array($requete_master);

$master="";
if($selecteur_master!=null){
    if(($selecteur_master['lien']!="")){
    $master=$selecteur_master['lien'] ;                         
}
else  if(isset($selecteur_master['nom_fichier'])){

    $master= $lien.$selecteur_master['nom_fichier'];
}
}


//   Verification et recuperation d'un fichier -	Diplôme d’État de Docteur en MPOV
$requete_diplome_etat_docteur = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='diplome_etat_docteur.pdf'");
$selecteur_diplome_etat_docteur = mysqli_fetch_array($requete_diplome_etat_docteur);

$diplome_etat_docteur="";
if($selecteur_diplome_etat_docteur!=null){
    if(($selecteur_diplome_etat_docteur['lien']!="")){
    $diplome_etat_docteur=$selecteur_diplome_etat_docteur['lien'] ;                         
}
else  if(isset($selecteur_diplome_etat_docteur['nom_fichier'])){

    $diplome_etat_docteur= $lien.$selecteur_diplome_etat_docteur['nom_fichier'];
}
}


//   Verification et recuperation d'un fichier -	Doctorat unique
$requete_doctorat_unique = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='doctorat_unique.pdf'");
$selecteur_doctorat_unique = mysqli_fetch_array($requete_doctorat_unique);

$doctorat_unique="";
if($selecteur_doctorat_unique!=null){
    if(($selecteur_doctorat_unique['lien']!="")){
    $doctorat_unique=$selecteur_doctorat_unique['lien'] ;                         
}
else  if(isset($selecteur_doctorat_unique['nom_fichier'])){

    $doctorat_unique= $lien.$selecteur_doctorat_unique['nom_fichier'];
}
}



//   Verification et recuperation d'un fichier -	DES
$requete_desa = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='desa.pdf'");
$selecteur_desa = mysqli_fetch_array($requete_desa);

$desa="";
if($selecteur_desa!=null){
    if(($selecteur_desa['lien']!="")){
    $desa=$selecteur_desa['lien'] ;                         
}
else  if(isset($selecteur_desa['nom_fichier'])){

    $desa= $lien.$selecteur_desa['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier
$requete_ingenieur = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Ingenieur.pdf'");
$selecteur_ingenieur = mysqli_fetch_array($requete_ingenieur);

$ingenieur="";
if(($selecteur_ingenieur['lien']!="")){
    $ingenieur=$selecteur_ingenieur['lien'] ;                         
}
else if(isset($selecteur_ingenieur['nom_fichier'])){

    $ingenieur= $lien.$selecteur_ingenieur['nom_fichier'];
}

//   Verification et recuperation d'un fichier
$requete_Diplome_Ingenieur_Ou_Equivalent = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Diplome_Ingenieur_Ou_Equivalent.pdf'");
$selecteur_Diplome_Ingenieur_Ou_Equivalent = mysqli_fetch_array($requete_Diplome_Ingenieur_Ou_Equivalent);

$Diplome_Ingenieur_Ou_Equivalent="";
if(($selecteur_Diplome_Ingenieur_Ou_Equivalent['lien']!="")){
    $Diplome_Ingenieur_Ou_Equivalent=$selecteur_Diplome_Ingenieur_Ou_Equivalent['lien'] ;                         
}
else  if(isset($selecteur_Diplome_Ingenieur_Ou_Equivalent['nom_fichier'])){

    $Diplome_Ingenieur_Ou_Equivalent= $lien.$selecteur_Diplome_Ingenieur_Ou_Equivalent['nom_fichier'];
}
//   Verification et recuperation d'un fichier
$requete_Master_ou_Equivalent_mjd = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Master_ou_Equivalent.pdf'");
$selecteur_Master_ou_Equivalent_mjd = mysqli_fetch_array($requete_Master_ou_Equivalent_mjd);

$Master_ou_Equivalent_mjd="";
if(($selecteur_Master_ou_Equivalent_mjd['lien']!="")){
    $Master_ou_Equivalent_mjd=$selecteur_Master_ou_Equivalent_mjd['lien'] ;                         
}
else  if(isset($selecteur_Master_ou_Equivalent_mjd['nom_fichier'])){

    $Master_ou_Equivalent_mjd= $lien.$selecteur_Master_ou_Equivalent_mjd['nom_fichier'];
}




//   Verification et recuperation d'un fichier
$requete_doctorat_en_mpov_mjd = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='doctorat_en_mpov.pdf'");
$selecteur_doctorat_en_mpov_mjd = mysqli_fetch_array($requete_doctorat_en_mpov_mjd);

$doctorat_en_mpov_mjd="";
if(($selecteur_doctorat_en_mpov_mjd['lien']!="")){
    $doctorat_en_mpov_mjd=$selecteur_doctorat_en_mpov_mjd['lien'] ;                         
}
else  if(isset($selecteur_doctorat_en_mpov_mjd['nom_fichier'])){

    $doctorat_en_mpov_mjd= $lien.$selecteur_doctorat_en_mpov_mjd['nom_fichier'];
}

//   Verification et recuperation d'un fichier
$requete_DES = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='DES.pdf'");
$selecteur_DES = mysqli_fetch_array($requete_DES);

$DES="";
if(($selecteur_DES['lien']!="")){
    $DES=$selecteur_DES['lien'] ;                         
}
else  if(isset($selecteur_DES['nom_fichier'])){

    $DES= $lien.$selecteur_DES['nom_fichier'];
}

//   Verification et recuperation d'un fichier
$requete_Evaluation_These_Doctorat_Unique = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='E_T_D_U.pdf'");
$selecteur_Evaluation_These_Doctorat_Unique = mysqli_fetch_array($requete_Evaluation_These_Doctorat_Unique);

$Evaluation_These_Doctorat_Unique="";
if(($selecteur_Evaluation_These_Doctorat_Unique['lien']!="")){
    $Evaluation_These_Doctorat_Unique=$selecteur_Evaluation_These_Doctorat_Unique['lien'] ;                         
}
else  if(isset($selecteur_Evaluation_These_Doctorat_Unique['nom_fichier'])){

    $Evaluation_These_Doctorat_Unique= $lien.$selecteur_Evaluation_These_Doctorat_Unique['nom_fichier'];
}


//   Verification et recuperation d'un fichier Responsable de niveau
$requete_responsabilite_niveau = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='responsable_niveau.pdf'");
$selecteur_responsabilite_niveau = mysqli_fetch_array($requete_responsabilite_niveau);
$responsabilite_niveau="";
if($selecteur_responsabilite_niveau!=null){
    if(($selecteur_responsabilite_niveau['lien']!="")){
    $responsabilite_niveau=$selecteur_responsabilite_niveau['lien'] ;                         
}
else  if(isset($selecteur_responsabilite_niveau['nom_fichier'])){

    $responsabilite_niveau= $lien.$selecteur_responsabilite_niveau['nom_fichier'];
}
}


//   Verification et recuperation d'un fichier Responsable de formation
$requete_responsabilite_formation = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='responsable_formation.pdf'");
$selecteur_responsabilite_formation = mysqli_fetch_array($requete_responsabilite_formation);

$responsabilite_formation="";

if($selecteur_responsabilite_formation!=null){
    if(($selecteur_responsabilite_formation['lien']!="")){
    $responsabilite_formation=$selecteur_responsabilite_formation['lien'] ;                         
}
else  if(isset($selecteur_responsabilite_formation['nom_fichier'])){

    $responsabilite_formation= $lien.$selecteur_responsabilite_formation['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Chef département
$requete_chef_departement = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='chef_departement.pdf'");
$selecteur_chef_departement = mysqli_fetch_array($requete_chef_departement);

$chef_departement="";

if($selecteur_chef_departement!=null){
    if(($selecteur_chef_departement['lien']!="")){
    $chef_departement=$selecteur_chef_departement['lien'] ;                         
}
else  if(isset($selecteur_chef_departement['nom_fichier'])){

    $chef_departement= $lien.$selecteur_chef_departement['nom_fichier'];
}
}


//   Verification et recuperation d'un fichier Directeur des Études (Instituts de faculté)
$requete_directeur_etudes_if = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_etudes_if.pdf'");
$selecteur_directeur_etudes_if = mysqli_fetch_array($requete_directeur_etudes_if);

$directeur_etudes_if="";

if($selecteur_directeur_etudes_if!=null){
    if(($selecteur_directeur_etudes_if['lien']!="")){
    $directeur_etudes_if=$selecteur_directeur_etudes_if['lien'] ;                         
}
else  if(isset($selecteur_directeur_etudes_if['nom_fichier'])){

    $directeur_etudes_if= $lien.$selecteur_directeur_etudes_if['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Directeur des Études (Instituts de faculté)
$requete_directeur_etudes_iu = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_etudes_iu.pdf'");
$selecteur_directeur_etudes_iu = mysqli_fetch_array($requete_directeur_etudes_iu);

$directeur_etudes_iu="";

if($selecteur_directeur_etudes_iu!=null){
    if(($selecteur_directeur_etudes_iu['lien']!="")){
    $directeur_etudes_iu=$selecteur_directeur_etudes_iu['lien'] ;                         
}
else  if(isset($selecteur_directeur_etudes_iu['nom_fichier'])){

    $directeur_etudes_iu= $lien.$selecteur_directeur_etudes_iu['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Assesseur, Directeur d’UFR adjoint
$requete_a_directeur_adjoint_u = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='a_directeur_adjoint_u.pdf'");
$selecteur_a_directeur_adjoint_u = mysqli_fetch_array($requete_a_directeur_adjoint_u);

$a_directeur_adjoint_u="";

if($selecteur_a_directeur_adjoint_u!=null){
    if(($selecteur_a_directeur_adjoint_u['lien']!="")){
    $a_directeur_adjoint_u=$selecteur_a_directeur_adjoint_u['lien'] ;                         
}
else  if(isset($selecteur_a_directeur_adjoint_u['nom_fichier'])){

    $a_directeur_adjoint_u= $lien.$selecteur_a_directeur_adjoint_u['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier  Directeur central 
$requete_directeur_central = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_central.pdf'");
$selecteur_directeur_central = mysqli_fetch_array($requete_directeur_central);

$directeur_central="";

if($selecteur_directeur_central!=null){
    if(($selecteur_directeur_central['lien']!="")){
    $directeur_central=$selecteur_directeur_central['lien'] ;                         
}
else  if(isset($selecteur_directeur_central['nom_fichier'])){

    $directeur_central= $lien.$selecteur_directeur_central['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Responsable de formation doctorale
$requete_responsable_form_doct = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='responsable_form_doct.pdf'");
$selecteur_responsable_form_doct = mysqli_fetch_array($requete_responsable_form_doct);

$responsable_form_doct="";

if($selecteur_responsable_form_doct!=null){
    if(($selecteur_responsable_form_doct['lien']!="")){
    $responsable_form_doct=$selecteur_responsable_form_doct['lien'] ;                         
}
else  if(isset($selecteur_responsable_form_doct['nom_fichier'])){

    $responsable_form_doct= $lien.$selecteur_responsable_form_doct['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Directeur de revue
$requete_directeur_revue = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_revue.pdf'");
$selecteur_directeur_revue = mysqli_fetch_array($requete_directeur_revue);

$directeur_revue="";

if($selecteur_directeur_revue!=null){
    if(($selecteur_directeur_revue['lien']!="")){
    $directeur_revue=$selecteur_directeur_revue['lien'] ;                         
}
else  if(isset($selecteur_directeur_revue['nom_fichier'])){

    $directeur_revue= $lien.$selecteur_directeur_revue['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Directeur de laboratoire/Chef de service 
$requete_directeur_lab_chef_service = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_lab_chef_service.pdf'");
$selecteur_directeur_lab_chef_service = mysqli_fetch_array($requete_directeur_lab_chef_service);

$directeur_lab_chef_service="";

if($selecteur_directeur_lab_chef_service!=null){
    if(($selecteur_directeur_lab_chef_service['lien']!="")){
    $directeur_lab_chef_service=$selecteur_directeur_lab_chef_service['lien'] ;                         
}
else  if(isset($selecteur_directeur_lab_chef_service['nom_fichier'])){

    $directeur_lab_chef_service= $lien.$selecteur_directeur_lab_chef_service['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Directeur d’École doctorale 
$requete_directeur_ecole_doct = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_ecole_doct.pdf'");
$selecteur_directeur_ecole_doct = mysqli_fetch_array($requete_directeur_ecole_doct);

$directeur_ecole_doct="";

if($selecteur_directeur_ecole_doct!=null){
    if(($selecteur_directeur_ecole_doct['lien']!="")){
    $directeur_ecole_doct=$selecteur_directeur_ecole_doct['lien'] ;                         
}
else  if(isset($selecteur_directeur_ecole_doct['nom_fichier'])){

    $directeur_ecole_doct= $lien.$selecteur_directeur_ecole_doct['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)
$requete_chef_etablissement_1 = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='chef_etablissement_1.pdf'");
$selecteur_chef_etablissement_1 = mysqli_fetch_array($requete_chef_etablissement_1);

$chef_etablissement_1="";

if($selecteur_chef_etablissement_1!=null){
    if(($selecteur_chef_etablissement_1['lien']!="")){
    $chef_etablissement_1=$selecteur_chef_etablissement_1['lien'] ;                         
}
else  if(isset($selecteur_chef_etablissement_1['nom_fichier'])){

    $chef_etablissement_1= $lien.$selecteur_chef_etablissement_1['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)
$requete_chef_etablissement_1 = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='chef_etablissement_1.pdf'");
$selecteur_chef_etablissement_1 = mysqli_fetch_array($requete_chef_etablissement_1);

$chef_etablissement_1="";

if($selecteur_chef_etablissement_1!=null){
    if(($selecteur_chef_etablissement_1['lien']!="")){
    $chef_etablissement_1=$selecteur_chef_etablissement_1['lien'] ;                         
}
else  if(isset($selecteur_chef_etablissement_1['nom_fichier'])){

    $chef_etablissement_1= $lien.$selecteur_chef_etablissement_1['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)
$requete_chef_etablissement_2 = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='chef_etablissement_2.pdf'");
$selecteur_chef_etablissement_2 = mysqli_fetch_array($requete_chef_etablissement_2);

$chef_etablissement_2="";

if($selecteur_chef_etablissement_2!=null){
    if(($selecteur_chef_etablissement_2['lien']!="")){
    $chef_etablissement_2=$selecteur_chef_etablissement_2['lien'] ;                         
}
else  if(isset($selecteur_chef_etablissement_2['nom_fichier'])){

    $chef_etablissement_2= $lien.$selecteur_chef_etablissement_2['nom_fichier'];
}
}

//////////////////////////////////
//   Verification et recuperation d'un fichier Responsable de niveau
$requete_responsabilite_niveau = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='responsable_niveau.pdf'");
$selecteur_responsabilite_niveau = mysqli_fetch_array($requete_responsabilite_niveau);
$responsabilite_niveau="";
if($selecteur_responsabilite_niveau!=null){
    if(($selecteur_responsabilite_niveau['lien']!="")){
    $responsabilite_niveau=$selecteur_responsabilite_niveau['lien'] ;                         
}
else  if(isset($selecteur_responsabilite_niveau['nom_fichier'])){

    $responsabilite_niveau= $lien.$selecteur_responsabilite_niveau['nom_fichier'];
}
}


//   Verification et recuperation d'un fichier Responsable de formation
$requete_responsabilite_formation = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='responsable_formation.pdf'");
$selecteur_responsabilite_formation = mysqli_fetch_array($requete_responsabilite_formation);

$responsabilite_formation="";

if($selecteur_responsabilite_formation!=null){
    if(($selecteur_responsabilite_formation['lien']!="")){
    $responsabilite_formation=$selecteur_responsabilite_formation['lien'] ;                         
}
else  if(isset($selecteur_responsabilite_formation['nom_fichier'])){

    $responsabilite_formation= $lien.$selecteur_responsabilite_formation['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Chef département
$requete_chef_departement = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='chef_departement.pdf'");
$selecteur_chef_departement = mysqli_fetch_array($requete_chef_departement);

$chef_departement="";

if($selecteur_chef_departement!=null){
    if(($selecteur_chef_departement['lien']!="")){
    $chef_departement=$selecteur_chef_departement['lien'] ;                         
}
else  if(isset($selecteur_chef_departement['nom_fichier'])){

    $chef_departement= $lien.$selecteur_chef_departement['nom_fichier'];
}
}


//   Verification et recuperation d'un fichier Directeur des Études (Instituts de faculté)
$requete_directeur_etudes_if = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_etudes_if.pdf'");
$selecteur_directeur_etudes_if = mysqli_fetch_array($requete_directeur_etudes_if);

$directeur_etudes_if="";

if($selecteur_directeur_etudes_if!=null){
    if(($selecteur_directeur_etudes_if['lien']!="")){
    $directeur_etudes_if=$selecteur_directeur_etudes_if['lien'] ;                         
}
else  if(isset($selecteur_directeur_etudes_if['nom_fichier'])){

    $directeur_etudes_if= $lien.$selecteur_directeur_etudes_if['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Directeur des Études (Instituts de faculté)
$requete_directeur_etudes_iu = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_etudes_iu.pdf'");
$selecteur_directeur_etudes_iu = mysqli_fetch_array($requete_directeur_etudes_iu);

$directeur_etudes_iu="";

if($selecteur_directeur_etudes_iu!=null){
    if(($selecteur_directeur_etudes_iu['lien']!="")){
    $directeur_etudes_iu=$selecteur_directeur_etudes_iu['lien'] ;                         
}
else  if(isset($selecteur_directeur_etudes_iu['nom_fichier'])){

    $directeur_etudes_iu= $lien.$selecteur_directeur_etudes_iu['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Assesseur, Directeur d’UFR adjoint
$requete_a_directeur_adjoint_u = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='a_directeur_adjoint_u.pdf'");
$selecteur_a_directeur_adjoint_u = mysqli_fetch_array($requete_a_directeur_adjoint_u);

$a_directeur_adjoint_u="";

if($selecteur_a_directeur_adjoint_u!=null){
    if(($selecteur_a_directeur_adjoint_u['lien']!="")){
    $a_directeur_adjoint_u=$selecteur_a_directeur_adjoint_u['lien'] ;                         
}
else  if(isset($selecteur_a_directeur_adjoint_u['nom_fichier'])){

    $a_directeur_adjoint_u= $lien.$selecteur_a_directeur_adjoint_u['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier  Directeur central 
$requete_directeur_central = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_central.pdf'");
$selecteur_directeur_central = mysqli_fetch_array($requete_directeur_central);

$directeur_central="";

if($selecteur_directeur_central!=null){
    if(($selecteur_directeur_central['lien']!="")){
    $directeur_central=$selecteur_directeur_central['lien'] ;                         
}
else  if(isset($selecteur_directeur_central['nom_fichier'])){

    $directeur_central= $lien.$selecteur_directeur_central['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Responsable de formation doctorale
$requete_responsable_form_doct = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='responsable_form_doct.pdf'");
$selecteur_responsable_form_doct = mysqli_fetch_array($requete_responsable_form_doct);

$responsable_form_doct="";

if($selecteur_responsable_form_doct!=null){
    if(($selecteur_responsable_form_doct['lien']!="")){
    $responsable_form_doct=$selecteur_responsable_form_doct['lien'] ;                         
}
else  if(isset($selecteur_responsable_form_doct['nom_fichier'])){

    $responsable_form_doct= $lien.$selecteur_responsable_form_doct['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Directeur de revue
$requete_directeur_revue = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_revue.pdf'");
$selecteur_directeur_revue = mysqli_fetch_array($requete_directeur_revue);

$directeur_revue="";

if($selecteur_directeur_revue!=null){
    if(($selecteur_directeur_revue['lien']!="")){
    $directeur_revue=$selecteur_directeur_revue['lien'] ;                         
}
else  if(isset($selecteur_directeur_revue['nom_fichier'])){

    $directeur_revue= $lien.$selecteur_directeur_revue['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Directeur de laboratoire/Chef de service 
$requete_directeur_lab_chef_service = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_lab_chef_service.pdf'");
$selecteur_directeur_lab_chef_service = mysqli_fetch_array($requete_directeur_lab_chef_service);

$directeur_lab_chef_service="";

if($selecteur_directeur_lab_chef_service!=null){
    if(($selecteur_directeur_lab_chef_service['lien']!="")){
    $directeur_lab_chef_service=$selecteur_directeur_lab_chef_service['lien'] ;                         
}
else  if(isset($selecteur_directeur_lab_chef_service['nom_fichier'])){

    $directeur_lab_chef_service= $lien.$selecteur_directeur_lab_chef_service['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Directeur d’École doctorale 
$requete_directeur_ecole_doct = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='directeur_ecole_doct.pdf'");
$selecteur_directeur_ecole_doct = mysqli_fetch_array($requete_directeur_ecole_doct);

$directeur_ecole_doct="";

if($selecteur_directeur_ecole_doct!=null){
    if(($selecteur_directeur_ecole_doct['lien']!="")){
    $directeur_ecole_doct=$selecteur_directeur_ecole_doct['lien'] ;                         
}
else  if(isset($selecteur_directeur_ecole_doct['nom_fichier'])){

    $directeur_ecole_doct= $lien.$selecteur_directeur_ecole_doct['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)
$requete_chef_etablissement_1 = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='chef_etablissement_1.pdf'");
$selecteur_chef_etablissement_1 = mysqli_fetch_array($requete_chef_etablissement_1);

$chef_etablissement_1="";

if($selecteur_chef_etablissement_1!=null){
    if(($selecteur_chef_etablissement_1['lien']!="")){
    $chef_etablissement_1=$selecteur_chef_etablissement_1['lien'] ;                         
}
else  if(isset($selecteur_chef_etablissement_1['nom_fichier'])){

    $chef_etablissement_1= $lien.$selecteur_chef_etablissement_1['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)
$requete_chef_etablissement_1 = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='chef_etablissement_1.pdf'");
$selecteur_chef_etablissement_1 = mysqli_fetch_array($requete_chef_etablissement_1);

$chef_etablissement_1="";

if($selecteur_chef_etablissement_1!=null){
    if(($selecteur_chef_etablissement_1['lien']!="")){
    $chef_etablissement_1=$selecteur_chef_etablissement_1['lien'] ;                         
}
else  if(isset($selecteur_chef_etablissement_1['nom_fichier'])){

    $chef_etablissement_1= $lien.$selecteur_chef_etablissement_1['nom_fichier'];
}
}

//   Verification et recuperation d'un fichier Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)
$requete_chef_etablissement_2 = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='chef_etablissement_2.pdf'");
$selecteur_chef_etablissement_2 = mysqli_fetch_array($requete_chef_etablissement_2);

$chef_etablissement_2="";

if($selecteur_chef_etablissement_2!=null){
    if(($selecteur_chef_etablissement_2['lien']!="")){
    $chef_etablissement_2=$selecteur_chef_etablissement_2['lien'] ;                         
}
else  if(isset($selecteur_chef_etablissement_2['nom_fichier'])){

    $chef_etablissement_2= $lien.$selecteur_chef_etablissement_2['nom_fichier'];
}
}



if(($selecteur_promotion_de_la_P['lien']!="")){
    $promotion_de_la_P=$selecteur_promotion_de_la_P['lien'] ;                         
}
else  if(isset($selecteur_promotion_de_la_P['nom_fichier'])){

    $promotion_de_la_P= $lien.$selecteur_promotion_de_la_P['nom_fichier'];
}
//    PROMOTION DE LA RECHERCHE 
$requete_promotion_de_la_R = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Promotion-R.pdf'");
$selecteur_promotion_de_la_R = mysqli_fetch_array($requete_promotion_de_la_R);
$promotion_de_la_R="";

if(($selecteur_promotion_de_la_R['lien']!="")){
    $promotion_de_la_R=$selecteur_promotion_de_la_R['lien'] ;                         
}
else  if(isset($selecteur_promotion_de_la_R['nom_fichier'])){

    $promotion_de_la_R= $lien.$selecteur_promotion_de_la_R['nom_fichier'];}

    //  PROMTION DE LA GOUVERNANCES 
$requete_promotion_de_la_G = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Promotion-G.pdf'");
$selecteur_promotion_de_la_G = mysqli_fetch_array($requete_promotion_de_la_G);
$promotion_de_la_G="";
    if(($selecteur_promotion_de_la_G['lien']!="")){
        $promotion_de_la_G=$selecteur_promotion_de_la_G['lien'] ;                         
    }
    else  if(isset($selecteur_promotion_de_la_G['nom_fichier'])){
    
        $promotion_de_la_G= $lien.$selecteur_promotion_de_la_G['nom_fichier'];
    }  
// SERVICES DE CAUMINAUTE 
$requete_service_a_la_C = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Service-C.pdf'");
$selecteur_service_a_la_C = mysqli_fetch_array($requete_service_a_la_C);
$service_a_la_C="";
    if(($selecteur_service_a_la_C['lien']!="")){
        $service_a_la_C=$selecteur_service_a_la_C['lien'] ;                         
    }
    else  if(isset($selecteur_service_a_la_C['nom_fichier'])){
    
        $service_a_la_C= $lien.$selecteur_service_a_la_C['nom_fichier'];}
        
        // CAPACITÉ MOBILITE R P 
 $requete_capacite_M_R_P = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Capacite-M-R-P.pdf'");
 $selecteur_capacite_M_R_P = mysqli_fetch_array($requete_capacite_M_R_P);
$capacite_M_R_P="";
if(($selecteur_capacite_M_R_P['lien']!="")){
     $service_a_la_C=$selecteur_capacite_M_R_P['lien'] ;                         
            }
    else  if(isset($selecteur_capacite_M_R_P['nom_fichier'])){
            
    $capacite_M_R_P= $lien.$selecteur_capacite_M_R_P['nom_fichier'];      } 



//   Verification et recuperation d'un fichier
$requete_brevet = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Brevet.pdf'");
$selecteur_brevet = mysqli_fetch_array($requete_brevet);

$brevet="";
if(($selecteur_brevet['lien']!="")){
    $brevet=$selecteur_brevet['lien'] ;                         
}
else if(isset($selecteur_brevet['nom_fichier'])){

    $brevet= $lien.$selecteur_brevet['nom_fichier'];
}

$requete_distinction = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Distinction.pdf'");
                $selecteur_distinction = mysqli_fetch_array($requete_distinction);
                
                $distinction="";
                if(($selecteur_distinction['lien']!="")){
                    $distinction=$selecteur_distinction['lien'] ;                         
                }
                else if(isset($selecteur_distinction['nom_fichier'])){
                
                    $distinction= $lien.$selecteur_distinction['nom_fichier'];
                }
                
                $requete_docteurMPOV = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Docteur_MPOV.pdf'");
                $selecteur_docteurMPOV = mysqli_fetch_array($requete_docteurMPOV);
                
                $docteurMPOV="";
                if(($selecteur_docteurMPOV['lien']!="")){
                    $docteurMPOV=$selecteur_docteurMPOV['lien'] ;                         
                }
                else if(isset($selecteur_docteurMPOV['nom_fichier'])){
                
                    $docteurMPOV= $lien.$selecteur_docteurMPOV['nom_fichier'];
                }
                $requete_docteur = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Docteur.pdf'");
                $selecteur_docteur = mysqli_fetch_array($requete_docteur);
                
                $docteur="";
                if(($selecteur_docteur['lien']!="")){
                    $docteur=$selecteur_docteur['lien'] ;                         
                }
                else if(isset($selecteur_docteur['nom_fichier'])){
                
                    $docteur= $lien.$selecteur_docteur['nom_fichier'];
                }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Notation</title>
<style>
    html{
        font-size:20px;
    }
    td{
        width: auto;  
    }

    td input{
        width: auto;
    }
    .validation_note{
        /* height: 10px; */
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row info_profil">
            
        </div>
        <div class="row affichage_justificatif">

                <!-- Debut d'un grand point I -->
            <div class="col-12">

                <p class=col-12>
                    <button class="col-12 btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#production_publication" aria-expanded="false" aria-controls="production_publication">PRODUCTION SCIENTIFIQUE(Publications) 
                        <!-- <span class="dropdown-menu"></span> -->
                    </button>
                </p>
                <div class="w-100 border mt-0 mb-1 col-12 collapse multi-collapse" id="production_publication">

                        <!-- Debut de la table -->
                    <table class="w-100 col-12 table table-primary table-striped table-bordered border-success text-center display-7 p-auto ">
                        <tr class="col-12" ><th class='w-50' text-center rowspan=2>Documents</th> <th class='w-20' rowspan=2 >Justificatifs</th><th  colspan=3 class='' > Notation</th></tr>
                        <tr>
                            <th class=''>Auteur</th>
                            <th class=''>nombre</th>
                            <th class=''>note</th>
                        </tr>
                        <?php
                            if($article_indexe==""){
                        ?>
                                <tr class='d-none'><th >Articles scientifiques indexés</th> <td colspan=4 >Aucun </td></tr>
                                <tr class='d-none' ><th  rowspan=5>Articles scientifiques indexés</th> <td rowspan=5 > <a class="nav-link " target="_blank"  href="<?php echo $article_indexe ?>">Voir </a></td><td>auteur 1</td> <td><input class='text-center form-control' name="ps_p_a1" id="ps_p_a1" onchange="calc_indexe()" value="0" ></td> <td disabled><input id='n_ps_p_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 2</td><td class='text-center '><input class='form-control text-center ' name="ps_p_a2" id="ps_p_a2" onchange="calc_indexe()" value="0" ></td> <td disabled><input id='n_ps_p_a2' class='text-center form-control ' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 3</td><td class='text-center '><input class='form-control text-center ' name="ps_p_a3" id="ps_p_a3" onchange="calc_indexe()" value="0" ></td> <td disabled><input id='n_ps_p_a3' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 4</td><td class='text-center '><input class='form-control text-center ' name="ps_p_a4" id="ps_p_a4" onchange="calc_indexe()" value="0" ></td> <td disabled><input id='n_ps_p_a4' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>Resposable labo ou projet</td><td><input class='form-control text-center' name="ps_p_a5" id="ps_p_a5" onchange="calc_indexe()" value="0" ></td> <td disabled><input id='n_ps_p_a5' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th  rowspan=5>Articles scientifiques indexés</th> <td rowspan=5 > <a class="nav-link " target="_blank"  href="<?php echo $article_indexe ?>">Voir </a></td><td>auteur 1</td> <td><input class='text-center form-control' name="ps_p_a1" id="ps_p_a1" onchange="calc_indexe()" value="0" ></td> <td disabled><input id='n_ps_p_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 2</td><td class='text-center '><input class='form-control text-center ' name="ps_p_a2" id="ps_p_a2" onchange="calc_indexe()" value="0" ></td> <td disabled><input id='n_ps_p_a2' class='text-center form-control ' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 3</td><td class='text-center '><input class='form-control text-center ' name="ps_p_a3" id="ps_p_a3" onchange="calc_indexe()" value="0" ></td> <td disabled><input id='n_ps_p_a3' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 4</td><td class='text-center '><input class='form-control text-center ' name="ps_p_a4" id="ps_p_a4" onchange="calc_indexe()" value="0" ></td> <td disabled><input id='n_ps_p_a4' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr><td>Resposable labo ou projet</td><td><input class='form-control text-center' name="ps_p_a5" id="ps_p_a5" onchange="calc_indexe()" value="0" ></td> <td disabled><input id='n_ps_p_a5' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                            <?php
                            }
                        ?>
                        <?php
                            if($article_non_indexe==""){
                        ?>
                                <tr><th >Articles scientifiques non indexés</th> <td colspan=4 >Aucun </td></tr>
                                
                                <tr class='d-none' ><th  rowspan=5>Articles scientifiques non indexés</th> <td rowspan=5 > <a class="nav-link "  target="_blank" href="<?php echo $article_non_indexe ?>">Voir </a></td>
                                    <td>auteur 1</td><td class='text-center '><input class='text-center form-control' name="ps_p_b1" id="ps_p_b1" onchange="calc_Nonindexe ()" value="0" ></td> <td disabled><input id='n_ps_p_b1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 2</td><td class='text-center '><input class='form-control text-center ' name="ps_p_b2" id="ps_p_b2" onchange="calc_Nonindexe ()" value="0" ></td> <td disabled><input id='n_ps_p_b2' class='text-center form-control ' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 3</td><td class='text-center '><input class='form-control text-center ' name="ps_p_b3" id="ps_p_b3" onchange="calc_Nonindexe ()" value="0" ></td> <td disabled><input id='n_ps_p_b3' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 4</td><td class='text-center '><input class='form-control text-center ' name="ps_p_b4" id="ps_p_b4" onchange="calc_Nonindexe ()" value="0" ></td> <td disabled><input id='n_ps_p_b4' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>Resposable labo ou projet</td><td><input class='form-control text-center' name="ps_p_b5" id="ps_p_b5" onchange="calccalc_Nonindexe ()" value="0" ></td> <td disabled><input id='n_ps_p_b5' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                    

                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th  rowspan=5>Articles scientifiques non indexés</th> <td rowspan=5 > <a class="nav-link " target="_blank"  href="<?php echo $article_non_indexe ?>">Voir </a></td>
                                    <td>auteur 1</td><td class='text-center '><input class='text-center form-control' name="ps_p_b1" id="ps_p_b1" onchange="calc_Nonindexe ()" value="0" ></td> <td disabled><input id='n_ps_p_b1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 2</td><td class='text-center '><input class='form-control text-center ' name="ps_p_b2" id="ps_p_b2" onchange="calc_Nonindexe ()" value="0" ></td> <td disabled><input id='n_ps_p_b2' class='text-center form-control ' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 3</td><td class='text-center '><input class='form-control text-center ' name="ps_p_b3" id="ps_p_b3" onchange="calc_Nonindexe ()" value="0" ></td> <td disabled><input id='n_ps_p_b3' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 4</td><td class='text-center '><input class='form-control text-center ' name="ps_p_b4" id="ps_p_b4" onchange="calc_Nonindexe ()" value="0" ></td> <td disabled><input id='n_ps_p_b4' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr><td>Resposable labo ou projet</td><td><input class='form-control text-center' name="ps_p_b5" id="ps_p_b5" onchange="calc_Nonindexe ()" value="0" ></td> <td disabled><input id='n_ps_p_b5' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                            <?php
                            }
                        ?>
                        <?php
                            if($proceeding==""){
                        ?>
                                <tr><th>Proceedings de conférence</th> <td colspan=4 >Aucun </td></tr>
                                <tr class='d-none'><th  rowspan=5>Proceedings de conférence</th> <td rowspan=5 > <a class="nav-link "  target="_blank" href="<?php echo $proceeding ?>">Voir </a></td>
                                    <td>auteur 1</td><td class='text-center '><input class='text-center form-control' name="ps_p_c1" id="ps_p_c1" onchange="calc_Proceeding ()" value="0" ></td> <td disabled><input id='n_ps_p_c1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 2</td><td class='text-center '><input class='form-control text-center ' name="ps_p_c2" id="ps_p_c2" onchange="calc_Proceeding ()" value="0" ></td> <td disabled><input id='n_ps_p_c2' class='text-center form-control ' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 3</td><td class='text-center '><input class='form-control text-center ' name="ps_p_c3" id="ps_p_c3" onchange="calc_Proceeding ()" value="0" ></td> <td disabled><input id='n_ps_p_c3' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 4</td><td class='text-center '><input class='form-control text-center ' name="ps_p_c4" id="ps_p_c4" onchange="calc_Proceeding ()" value="0" ></td> <td disabled><input id='n_ps_p_c4' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>Resposable labo ou projet</td><td><input class='form-control text-center' name="ps_p_c5" id="ps_p_c5" onchange="calc_Proceeding ()" value="0" ></td> <td disabled><input id='n_ps_p_c5' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th  rowspan=5>Proceedings de conférence</th> <td rowspan=5 > <a class="nav-link "  target="_blank" href="<?php echo $proceeding ?>">Voir </a></td>
                                    <td>auteur 1</td><td class='text-center '><input class='text-center form-control' name="ps_p_c1" id="ps_p_c1" onchange="calc_Proceeding ()" value="0" ></td> <td disabled><input id='n_ps_p_c1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 2</td><td class='text-center '><input class='form-control text-center ' name="ps_p_c2" id="ps_p_c2" onchange="calc_Proceeding ()" value="0" ></td> <td disabled><input id='n_ps_p_c2' class='text-center form-control ' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 3</td><td class='text-center '><input class='form-control text-center ' name="ps_p_c3" id="ps_p_c3" onchange="calc_Proceeding ()" value="0" ></td> <td disabled><input id='n_ps_p_c3' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 4</td><td class='text-center '><input class='form-control text-center ' name="ps_p_c4" id="ps_p_c4" onchange="calc_Proceeding ()" value="0" ></td> <td disabled><input id='n_ps_p_c4' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr><td>Resposable labo ou projet</td><td><input class='form-control text-center' name="ps_p_c5" id="ps_p_c5" onchange="calc_Proceeding ()" value="0" ></td> <td disabled><input id='n_ps_p_c5' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                            <?php
                            }
                        ?>
                        <?php
                            if($chapitre==""){
                        ?>
                                <tr><th >	Chapitres de livre </th> <td colspan=4   >Aucun </td></tr>
                                <tr class='d-none' ><th  rowspan=5>	Chapitres de livre </th> <td rowspan=5 > <a class="nav-link " target="_blank"  href="<?php echo $chapitre ?>">Voir </a></td>
                                    <td>auteur 1</td><td class='text-center '><input class='text-center form-control' name="ps_p_d1" id="ps_p_d1" onchange="calc_Chapitre ()" value="0" ></td> <td disabled><input id='n_ps_p_d1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 2</td><td class='text-center '><input class='form-control text-center ' name="ps_p_d2" id="ps_p_d2" onchange="calc_Chapitre ()" value="0" ></td> <td disabled><input id='n_ps_p_d2' class='text-center form-control ' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 3</td><td class='text-center '><input class='form-control text-center ' name="ps_p_d3" id="ps_p_d3" onchange="calc_Chapitre ()" value="0" ></td> <td disabled><input id='n_ps_p_d3' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 4</td><td class='text-center '><input class='form-control text-center ' name="ps_p_d4" id="ps_p_d4" onchange="calc_Chapitre ()" value="0" ></td> <td disabled><input id='n_ps_p_d4' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>Resposable labo ou projet</td><td><input class='form-control text-center' name="ps_p_d5" id="ps_p_d5" onchange="calc_Chapitre ()" value="0" ></td> <td disabled><input id='n_ps_p_d5' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th  rowspan=5>	Chapitres de livre </th> <td rowspan=5 > <a class="nav-link "  target="_blank" href="<?php echo $chapitre ?>">Voir </a></td>
                                    <td>auteur 1</td><td class='text-center '><input class='text-center form-control' name="ps_p_d1" id="ps_p_d1" onchange="calc_Chapitre ()" value="0" ></td> <td disabled><input id='n_ps_p_d1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 2</td><td class='text-center '><input class='form-control text-center ' name="ps_p_d2" id="ps_p_d2" onchange="calc_Chapitre ()" value="0" ></td> <td disabled><input id='n_ps_p_d2' class='text-center form-control ' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 3</td><td class='text-center '><input class='form-control text-center ' name="ps_p_d3" id="ps_p_d3" onchange="calc_Chapitre ()" value="0" ></td> <td disabled><input id='n_ps_p_d3' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 4</td><td class='text-center '><input class='form-control text-center ' name="ps_p_d4" id="ps_p_d4" onchange="calc_Chapitre ()" value="0" ></td> <td disabled><input id='n_ps_p_d4' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr><td>Resposable labo ou projet</td><td><input class='form-control text-center' name="ps_p_d5" id="ps_p_d5" onchange="calc_Chapitre ()" value="0" ></td> <td disabled><input id='n_ps_p_d5' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                            <?php
                            }
                        ?>
                        <?php
                            if($melange==""){
                        ?>
                                <tr><th>Mélanges</th> <td colspan=4 >Aucun </td></tr>
                                <tr class='d-none' ><th  rowspan=5>Mélanges</th> <td rowspan=5 > <a class="nav-link " target="_blank"  href="<?php echo $melange ?>">Voir </a></td>
                                    <td>auteur 1</td><td class='text-center '><input class='text-center form-control' name="ps_p_e1" id="ps_p_e1" onchange="calc_Melange ()" value="0" ></td> <td disabled><input id='n_ps_p_e1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 2</td><td class='text-center '><input class='form-control text-center ' name="ps_p_e2" id="ps_p_e2" onchange="calc_Melange ()" value="0" ></td> <td disabled><input id='n_ps_p_e2' class='text-center form-control ' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 3</td><td class='text-center '><input class='form-control text-center ' name="ps_p_e3" id="ps_p_e3" onchange="calc_Melange ()" value="0" ></td> <td disabled><input id='n_ps_p_e3' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>auteur 4</td><td class='text-center '><input class='form-control text-center ' name="ps_p_e4" id="ps_p_e4" onchange="calc_Melange ()" value="0" ></td> <td disabled><input id='n_ps_p_e4' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr class='d-none'><td>Resposable labo ou projet</td><td><input class='form-control text-center' name="ps_p_e5" id="ps_p_e5" onchange="calc_Melange ()" value="0" ></td> <td disabled><input id='n_ps_p_e5' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th  rowspan=5>Mélanges</th> <td rowspan=5 > <a class="nav-link "  target="_blank" href="<?php echo $melange ?>">Voir </a></td>
                                    <td>auteur 1</td><td class='text-center '><input class='text-center form-control' name="ps_p_e1" id="ps_p_e1" onchange="calc_Melange ()" value="0" ></td> <td disabled><input id='n_ps_p_e1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 2</td><td class='text-center '><input class='form-control text-center ' name="ps_p_e2" id="ps_p_e2" onchange="calc_Melange ()" value="0" ></td> <td disabled><input id='n_ps_p_e2' class='text-center form-control ' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 3</td><td class='text-center '><input class='form-control text-center ' name="ps_p_e3" id="ps_p_e3" onchange="calc_Melange ()" value="0" ></td> <td disabled><input id='n_ps_p_e3' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr><td>auteur 4</td><td class='text-center '><input class='form-control text-center ' name="ps_p_e4" id="ps_p_e4" onchange="calc_Melange ()" value="0" ></td> <td disabled><input id='n_ps_p_e4' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                                <tr><td>Resposable labo ou projet</td><td><input class='form-control text-center' name="ps_p_e5" id="ps_p_e5" onchange="calc_Melange ()" value="0" ></td> <td disabled><input id='n_ps_p_e5' class='text-center form-control' disabled  value="0" type="text"></td></tr>
                            <?php
                            }
                        ?>
                        <?php
                            if($ouvrage==""){
                        ?>
                                <tr><th>Ouvrages</th> <td colspan=4 >Aucun </td></tr>
                                <tr class='d-none' ><th>Ouvrages</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $ouvrage ?>">Voir </a></td>
                                    <td>auteur</td><td class='text-center '><input class='text-center form-control' name="ps_p_f1" id="ps_p_f1" onchange="calc_Ouvrage ()" value="0" ></td> <td disabled><input id='n_ps_p_f1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Ouvrages</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $ouvrage ?>">Voir </a></td>
                                    <td>auteur</td><td class='text-center '><input class='text-center form-control' name="ps_p_f1" id="ps_p_f1" onchange="calc_Ouvrage ()" value="0" ></td> <td disabled><input id='n_ps_p_f1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        
                        <?php
                            if($revue==""){
                        ?>
                                <tr><th>Directeur de Revue</th> <td colspan=4 >Aucun </td></tr>
                                <tr class='d-none' ><th>Directeur de Revue</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $revue ?>">Voir </a></td>
                                    <td>auteur</td><td class='text-center '><input class='text-center form-control' name="ps_p_g1" id="ps_p_g1" onchange="calc_Revue ()" value="0" ></td> <td disabled><input id='n_ps_p_g1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Directeur de Revue</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $revue ?>">Voir </a></td>
                                    <td>auteur</td><td class='text-center '><input class='text-center form-control' name="ps_p_g1" id="ps_p_g1" onchange="calc_Revue ()" value="0" ></td> <td disabled><input id='n_ps_p_g1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($ficheTechnique==""){
                        ?>
                                <tr><th>Fiches techniques </th> <td colspan=4 >Aucun</td></tr>
                                <tr class='d-none' ><th>Fiches techniques </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $ficheTechnique ?>">Voir </a></td>
                                    <td>auteur</td><td class='text-center '><input class='text-center form-control' name="ps_p_h1" id="ps_p_h1" onchange="calc_Fiche_tech ())" value="0" ></td> <td disabled><input id='n_ps_p_h1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Fiches techniques </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $ficheTechnique ?>">Voir </a></td>
                                    <td>auteur</td><td class='text-center '><input class='text-center form-control' name="ps_p_h1" id="ps_p_h1" onchange="calc_Fiche_tech ())" value="0" ></td> <td disabled><input id='n_ps_p_h1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($vulgarisation==""){
                        ?>
                                <tr><th >Documents de vulgarisation ou de valorisation </th> <td colspan=4 >Aucun</td></tr>
                                <tr class='d-none' ><th>Documents de vulgarisation ou de valorisation</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $vulgarisation ?>">Voir </a></td>
                                    <td>auteur</td><td class='text-center '><input class='text-center form-control' name="ps_p_i1" id="ps_p_i1" onchange="calc_Doc_valorisation ()" value="0" ></td> <td disabled><input id='n_ps_p_i1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Documents de vulgarisation ou de valorisation</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $vulgarisation ?>">Voir </a></td>
                                    <td>auteur</td><td class='text-center '><input class='text-center form-control' name="ps_p_i1" id="ps_p_i1" onchange="calc_Doc_valorisation ()" value="0" ></td> <td disabled><input id='n_ps_p_i1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>            
                        


                        
                        

                    </table>
                </div>

            </div>
                <!-- Debut d'un grand point -->

                <!-- Debut d'un grand point I -->
            <div class="col-12">

                <p class=col-12>
                    <button class="col-12 btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#production_communication" aria-expanded="false" aria-controls="production_communicationication">PRODUCTION SCIENTIFIQUE(Communications) 
                        <!-- <span class="dropdown-menu"></span> -->
                    </button>
                </p>
                <div class="w-100 border mt-0 mb-1 col-12 collapse multi-collapse" id="production_communication">

                        <!-- Debut de la table -->
                    <table class="w-100 col-12 table table-primary table-striped table-bordered border-success text-center display-7 p-auto ">
                        <tr class="col-12" ><th class='w-50' text-center rowspan=2>Documents</th> <th class='w-20' rowspan=2 >Justificatifs</th><th  colspan=2 class='' > Notation</th></tr>
                        <tr>
                            <!-- <th class=''>Auteur</th> -->
                            <th class=''>nombre</th>
                            <th class=''>note</th>
                        </tr>
                        <?php
                            if($conf_internationales==""){
                        ?>
                                <tr><th >	Participation et communication dans des conférences internationales  </th> <td colspan=4 >Aucun</td></tr>
                                <tr class='d-none' ><th>	Participation et communication dans des conférences internationales </th> <td > <a class="nav-link "  target="_blank" href="<?php echo $conf_internationales?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="ps_c_a1" id="ps_c_a1" onchange="calc_Conf_internationale()" value="0" ></td> <td disabled><input id='n_ps_c_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                    <tr class='d-none' ><th>	Participation à des conférences nationales </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $conf_nationales?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="ps_c_a2" id="ps_c_a2" onchange="calc_Conf_internationale()" value="0" ></td> <td disabled><input id='n_ps_c_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php

                            }
                            else{
                            ?> 
                                <tr ><th>	Participation et communication dans des conférences internationales </th> <td > <a class="nav-link "  target="_blank" href="<?php echo $conf_internationales?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="ps_c_a1" id="ps_c_a1" onchange="calc_Conf_internationale()" value="0" ></td> <td disabled><input id='n_ps_c_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                    <tr class='d-none' ><th>	Participation à des conférences nationales </th> <td > <a class="nav-link "  target="_blank" href="<?php echo $conf_nationales?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="ps_c_a1" id="ps_c_a1" onchange="calc_Conf_internationale()" value="0" ></td> <td disabled><input id='n_ps_c_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($conf_nationales==""){
                        ?>
                                <tr><th >	Participation à des conférences nationales  </th> <td colspan=4 >Aucun</td></tr>
                                <tr class='d-none' ><th>	Participation à des conférences nationales </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $conf_nationales?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="ps_c_a2" id="ps_c_a2" onchange="calc_Conf_nationale()" value="0" ></td> <td disabled><input id='n_ps_c_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Participation à des conférences nationales </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $conf_nationales?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="ps_c_a2" id="ps_c_a2" onchange="calc_Conf_nationale()" value="0" ></td> <td disabled><input id='n_ps_c_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($conferencier_inter==""){
                        ?>
                                <tr><th >	Conférencier ou animateur de séminaire dans le domaine au niveau international  </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Conférencier ou animateur de séminaire dans le domaine au niveau international </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $conferencier_inter?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="ps_c_a3" id="ps_c_a3" onchange="calc_Conf_internationale_domaine ()" value="0" ></td> <td disabled><input id='n_ps_c_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Conférencier ou animateur de séminaire dans le domaine au niveau international </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $conferencier_inter?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="ps_c_a3" id="ps_c_a3" onchange="calc_Conf_internationale_domaine ()" value="0" ></td> <td disabled><input id='n_ps_c_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>                  
                        

                    </table>
                </div>

            </div>
                <!-- Fin d'un grand point -->
            
                            <!-- Debut d'un grand point I ENCADREMENT -->
            <div class="col-12">

                <p class=col-12>
                    <button class="col-12 btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#encadrement" aria-expanded="false" aria-controls="encadrement">
                        ENCADREMENT
                        <!-- <span class="dropdown-menu"></span> -->
                    </button>
                </p>
                <div class="w-100 border mt-0 mb-1 col-12 collapse multi-collapse" id="encadrement">

                        <!-- Debut de la table -->
                    <table class="w-100 col-12 table table-primary table-striped table-bordered border-success text-center display-7 p-auto ">
                        <tr class="col-12" ><th class='w-50' text-center rowspan=2>Documents</th> <th class='w-20' rowspan=2 >Justificatifs</th><th  colspan=2 class='' > Notation</th></tr>
                        <tr>
                            <!-- <th class=''>Auteur</th> -->
                            <th class=''>nombre</th>
                            <th class=''>note</th>
                        </tr>
                        <?php
                            if($licence==""){
                        ?>
                                <tr><th >	Licence ou équivalent  </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Licence ou équivalent</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $licence?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a1" id="encadrement_a1" onchange="calc_Licence()" value="0" ></td> <td disabled><input id='n_encadrement_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Licence ou équivalent</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $licence?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a1" id="encadrement_a1" onchange="calc_Licence()" value="0" ></td> <td disabled><input id='n_encadrement_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>  
                        <?php
                            if($ingenieur==""){
                        ?>
                                <tr><th >	Diplôme d’Ingénieur  ou équivalent </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Diplôme d’Ingénieur  ou équivalent</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $ingenieur?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a2" id="encadrement_a2" onchange="calc_Ingenieur()" value="0" ></td> <td disabled><input id='n_encadrement_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Diplôme d’Ingénieur  ou équivalent</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $ingenieur?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a2" id="encadrement_a2" onchange="calc_Ingenieur()" value="0" ></td> <td disabled><input id='n_encadrement_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($master==""){
                        ?>
                                <tr><th >	Master ou équivalents</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Master ou équivalents</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $master?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a3" id="encadrement_a3" onchange="calc_Master()" value="0" ></td> <td disabled><input id='n_encadrement_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Master ou équivalents</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $master?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a3" id="encadrement_a3" onchange="calc_Master()" value="0" ></td> <td disabled><input id='n_encadrement_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($diplome_etat_docteur==""){
                        ?>
                                <tr><th >	Diplôme d’État de Docteur en MPOV</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Diplôme d’État de Docteur en MPOV</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $diplome_etat_docteur?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a4" id="encadrement_a4" onchange="calc_DocteurMPOV()" value="0" ></td> <td disabled><input id='n_encadrement_a4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Diplôme d’État de Docteur en MPOV</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $diplome_etat_docteur?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a4" id="encadrement_a4" onchange="calc_DocteurMPOV()" value="0" ></td> <td disabled><input id='n_encadrement_a4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($doctorat_unique==""){
                        ?>
                                <tr><th >	Doctorat unique</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Doctorat unique</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $doctorat_unique?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a5" id="encadrement_a5" onchange="calc_DocteurUnique()" value="0" ></td> <td disabled><input id='n_encadrement_a5' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Doctorat unique</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $doctorat_unique?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a5" id="encadrement_a5" onchange="calc_DocteurUnique()" value="0" ></td> <td disabled><input id='n_encadrement_a5' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?> 
                        <?php
                            if($desa==""){
                        ?>
                                <tr><th >DES</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>DES</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $desa?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a6" id="encadrement_a6" onchange="calc_DES()" value="0" ></td> <td disabled><input id='n_encadrement_a6' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>DES</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $desa?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="encadrement_a6" id="encadrement_a6" onchange="calc_DES()" value="0" ></td> <td disabled><input id='n_encadrement_a6' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>             
                        

                    </table>
                </div>

            </div>
                <!-- Fin d'un grand point -->
            
                                                                                                       <!-- Debut d'un grand point I  PARTICIPATION AUX JURYS(Membre jury délibération  ) -->
            <div class="col-12">

                <p class=col-12>
                    <button class="col-12 btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#participe_mem_jury" aria-expanded="false" aria-controls="participe_mem_jury">
                        PARTICIPATION AUX JURYS(Membre jury délibération  )
                        <!-- <span class="dropdown-menu"></span> -->
                    </button>
                </p>
                <div class="w-100 border mt-0 mb-1 col-12 collapse multi-collapse" id="participe_mem_jury">

                        <!-- Debut de la table -->
                    <table class="w-100 col-12 table table-primary table-striped table-bordered border-success text-center display-7 p-auto ">
                        <tr class="col-12" ><th class='w-50' text-center rowspan=2>Documents</th> <th class='w-20' rowspan=2 >Justificatifs</th><th  colspan=2 class='' > Notation</th></tr>
                        <tr>
                            <!-- <th class=''>Auteur</th> -->
                            <th class=''>nombre</th>
                            <th class=''>note</th>
                        </tr>
                         
                        <?php
                            if($Diplome_Ingenieur_Ou_Equivalent==""){
                        ?>
                                <tr><th >	Diplôme d’Ingénieur  ou équivalent </th> <td colspan=4 >Aucun</td></tr>

                                <tr class='d-none' ><th>	Diplôme d’Ingénieur  ou équivalent</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $Diplome_Ingenieur_Ou_Equivalent?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="mjd_a1" id="mjd_a1" onchange="calc_Ingenieur_mjd()" value="0" ></td> <td disabled><input id='n_mjd_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Diplôme d’Ingénieur  ou équivalent</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $Diplome_Ingenieur_Ou_Equivalent?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="mjd_a1" id="mjd_a1" onchange="calc_Ingenieur_mjd()" value="0" ></td> <td disabled><input id='n_mjd_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($Master_ou_Equivalent_mjd==""){
                        ?>
                                <tr><th >	Master ou équivalents</th> <td colspan=4 >Aucun</td></tr>

                                <tr class='d-none' ><th>	Master ou équivalents</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $Master_ou_Equivalent_mjd?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="mjd_a2" id="mjd_a2" onchange="calc_Master_mjd()" value="0" ></td> <td disabled><input id='n_mjd_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Master ou équivalents</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $Master_ou_Equivalent_mjd?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="mjd_a2" id="mjd_a2" onchange="calc_Master_mjd()" value="0" ></td> <td disabled><input id='n_mjd_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($doctorat_en_mpov_mjd==""){
                        ?>
                                <tr><th >	Diplôme d’État de Docteur en MPOV</th> <td colspan=4 >Aucun</td></tr>

                                <tr class='d-none'><th>	Diplôme d’État de Docteur en MPOV</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $doctorat_en_mpov_mjd?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="mjd_a3" id="mjd_a3" onchange="calc_DocteurMPOV_mjd()" value="0" ></td> <td disabled><input id='n_mjd_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Diplôme d’État de Docteur en MPOV</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $doctorat_en_mpov_mjd?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="mjd_a3" id="mjd_a3" onchange="calc_DocteurMPOV_mjd()" value="0" ></td> <td disabled><input id='n_mjd_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        
                        <?php
                            if($DES==""){
                        ?>
                                <tr><th >DES</th> <td colspan=4 >Aucun</td></tr>

                                <tr class='d-none'><th>DES</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $DES?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="mjd_a4" id="mjd_a4" onchange="calc_DES_mjd()" value="0" ></td> <td disabled><input id='n_mjd_a4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>DES</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $DES?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="mjd_a4" id="mjd_a4" onchange="calc_DES_mjd()" value="0" ></td> <td disabled><input id='n_mjd_a4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?> 
                        <?php
                            if($Evaluation_These_Doctorat_Unique==""){
                        ?>
                                <tr><th >Évaluateur thèse Doctorat unique</th> <td colspan=4 >Aucun</td></tr>

                                <tr class='d-none'><th>Évaluateur thèse Doctorat unique</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $Evaluation_These_Doctorat_Unique?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="mjd_a5" id="mjd_a5" onchange="calc_evaluateur_mjd()" value="0" ></td> <td disabled><input id='n_mjd_a5' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Évaluateur thèse Doctorat unique</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $Evaluation_These_Doctorat_Unique?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="mjd_a5" id="mjd_a5" onchange="calc_evaluateur_mjd()" value="0" ></td> <td disabled><input id='n_mjd_a5' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>            
                        

                    </table>
                </div>

            </div>
                <!-- Fin d'un grand point -->

                    <!-- Debut d'un grand point I PARTICIPATION AUX JURYS(Président jury délibération  ) -->
            <div class="col-12">

                <p class=col-12>
                    <button class="col-12 btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#participe_presi_jury" aria-expanded="false" aria-controls="participe_presi_jury">
                        PARTICIPATION AUX JURYS(Président jury délibération  )
                        <!-- <span class="dropdown-menu"></span> -->
                    </button>
                </p>
                <div class="w-100 border mt-0 mb-1 col-12 collapse multi-collapse" id="participe_presi_jury">

                        <!-- Debut de la table -->
                    <table class="w-100 col-12 table table-primary table-striped table-bordered border-success text-center display-7 p-auto ">
                        <tr class="col-12" ><th class='w-50' text-center rowspan=2>Documents</th> <th class='w-20' rowspan=2 >Justificatifs</th><th  colspan=2 class='' > Notation</th></tr>
                        <tr>
                            <!-- <th class=''>Auteur</th> -->
                            <th class=''>nombre</th>
                            <th class=''>note</th>
                        </tr>
                         
                        <?php
                            if($ingenieur==""){
                        ?>
                                <tr><th >	Diplôme d’Ingénieur  ou équivalent </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Diplôme d’Ingénieur  ou équivalent</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $ingenieur ?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="pjd_a1" id="pjd_a1" onchange="calc_Ingenieur_pjd()" value="0" ></td> <td disabled><input id='n_pjd_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Diplôme d’Ingénieur  ou équivalent</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $ingenieur ?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="pjd_a1" id="pjd_a1" onchange="calc_Ingenieur_pjd()" value="0" ></td> <td disabled><input id='n_pjd_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($master==""){
                        ?>
                                <tr><th >	Master ou équivalents</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Master ou équivalents</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $master ?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="pjd_a2" id="pjd_a2" onchange="calc_Master_pjd()" value="0" ></td> <td disabled><input id='n_pjd_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Master ou équivalents</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $master ?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="pjd_a2" id="pjd_a2" onchange="calc_Master_pjd()" value="0" ></td> <td disabled><input id='n_pjd_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($docteurMPOV==""){
                        ?>
                                <tr><th >	Diplôme d’État de Docteur en MPOV</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Diplôme d’État de Docteur en MPOV</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $docteurMPOV ?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="pjd_a3" id="pjd_a3" onchange="calc_DocteurMPOV_pjd()" value="0" ></td> <td disabled><input id='n_pjd_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Diplôme d’État de Docteur en MPOV</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $docteurMPOV ?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="pjd_a3" id="pjd_a3" onchange="calc_DocteurMPOV_pjd()" value="0" ></td> <td disabled><input id='n_pjd_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        
                         
                        <?php
                            if($docteur==""){
                        ?>
                                <tr><th >Évaluateur thèse Doctorat unique</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>Évaluateur thèse Doctorat unique</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $docteur ?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="pjd_a4" id="pjd_a4" onchange="calc_Docteur_unique_pjd()" value="0" ></td> <td disabled><input id='n_pjd_a4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Évaluateur thèse Doctorat unique</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $docteur ?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="pjd_a4" id="pjd_a4" onchange="calc_Docteur_unique_pjd()" value="0" ></td> <td disabled><input id='n_pjd_a4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>            
                        

                    </table>
                </div>

            </div>
                <!-- Fin d'un grand point -->

                    <!-- Debut d'un grand point I  RESPONSABILITES ACADÉMIQUES -->
            <div class="col-12">

                <p class=col-12>
                    <button class="col-12 btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#responsabilites_academiques" aria-expanded="false" aria-controls="responsabilites_academiques">
                        RESPONSABILITES ACADÉMIQUES
                        <!-- <span class="dropdown-menu"></span> -->
                    </button>
                </p>
                <div class="w-100 border mt-0 mb-1 col-12 collapse multi-collapse" id="responsabilites_academiques">

                        <!-- Debut de la table -->
                    <table class="w-100 col-12 table table-primary table-striped table-bordered border-success text-center display-7 p-auto ">
                        <tr class="col-12" ><th class='w-50' text-center rowspan=2>Documents</th> <th class='w-20' rowspan=2 >Justificatifs</th><th  colspan=2 class='' > Notation</th></tr>
                        <tr>
                            <!-- <th class=''>Auteur</th> -->
                            <th class=''>nombre</th>
                            <th class=''>note</th>
                        </tr>
                         
                        <?php
                            if($responsabilite_niveau==""){
                        ?>
                                <tr><th >Responsable de niveau</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Responsable de niveau</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $responsabilite_niveau?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="respo_aca_a1" id="respo_aca_a1" onchange="calc_Resp_niveau()" value="0" ></td> <td disabled><input id='n_respo_aca_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Responsable de niveau</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $responsabilite_niveau?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="respo_aca_a1" id="respo_aca_a1" onchange="calc_Resp_niveau()" value="0" ></td> <td disabled><input id='n_respo_aca_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($responsabilite_formation==""){
                        ?>
                                <tr><th >	Responsable de formation</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Responsable de formation</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $responsabilite_formation?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="respo_aca_a2" id="respo_aca_a2" onchange="calc_Resp_formation()" value="0" ></td> <td disabled><input id='n_respo_aca_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Responsable de formation</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $responsabilite_formation?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="respo_aca_a2" id="respo_aca_a2" onchange="calc_Resp_formation()" value="0" ></td> <td disabled><input id='n_respo_aca_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($chef_departement==""){
                        ?>
                                <tr><th >	Chef de département </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Chef de département </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $chef_departement?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="respo_aca_a3" id="respo_aca_a3" onchange="calc_Chef_departement()" value="0" ></td> <td disabled><input id='n_respo_aca_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Chef de département </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $chef_departement?>">Voir </a></td>
                                    <td class='text-center '><input class='text-center form-control' name="respo_aca_a3" id="respo_aca_a3" onchange="calc_Chef_departement()" value="0" ></td> <td disabled><input id='n_respo_aca_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($directeur_etudes_if==""){
                        ?>
                                <tr><th >	Directeur des Études (Instituts de faculté)	</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Directeur des Études (Instituts de faculté)		 </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $directeur_etudes_if?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a4" id="respo_aca_a4" onchange="calc_Dr_Inst_Faculte()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Directeur des Études (Instituts de faculté)		 </th> <td > <a class="nav-link "  target="_blank" href="<?php echo $directeur_etudes_if?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a4" id="respo_aca_a4" onchange="calc_Dr_Inst_Faculte()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                                    


                            <?php
                            }
                        ?>
                        <?php
                            if($directeur_etudes_iu==""){
                        ?>
                                <tr><th >	Directeur des Études (Instituts d’Université) </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Directeur des Études (Instituts d’Université) </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $directeur_etudes_iu?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a5" id="respo_aca_a5" onchange="calc_Dr_Inst_Universite()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a5' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Directeur des Études (Instituts d’Université) </th> <td > <a class="nav-link "  target="_blank" href="<?php echo $directeur_etudes_iu?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a5" id="respo_aca_a5" onchange="calc_Dr_Inst_Universite()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a5' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($a_directeur_adjoint_u==""){
                        ?>
                                <tr><th >	Assesseur, Directeur d’UFR adjoint </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>-	Assesseur, Directeur d’UFR adjoint</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $a_directeur_adjoint_u?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a6" id="respo_aca_a6" onchange="calc_Dr_Ufr_adjoint()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a6' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>-	Assesseur, Directeur d’UFR adjoint</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $a_directeur_adjoint_u?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a6" id="respo_aca_a6" onchange="calc_Dr_Ufr_adjoint()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a6' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($directeur_central==""){
                        ?>
                                <tr><th >Directeur central</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>Directeur central</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $directeur_central?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a7" id="respo_aca_a7" onchange="calc_Dr_central()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a7' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Directeur central</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $directeur_central?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a7" id="respo_aca_a7" onchange="calc_Dr_central()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a7' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($responsable_form_doct==""){
                        ?>
                                <tr><th >	Responsable de formation doctorale</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Responsable de formation doctorale</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $responsable_form_doct?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a8" id="respo_aca_a8" onchange="calc_Resp_formation_doctorale()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a8' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Responsable de formation doctorale</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $responsable_form_doct?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a8" id="respo_aca_a8" onchange="calc_Resp_formation_doctorale()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a8' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($directeur_revue==""){
                        ?>
                                <tr><th >	Directeur de revue</th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>	Directeur de revue</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $directeur_revue?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a9" id="respo_aca_a9" onchange="calc_Dr_revue()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a9' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>	Directeur de revue</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $directeur_revue?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_a9" id="respo_aca_a9" onchange="calc_Dr_revue()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_a9' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($directeur_lab_chef_service==""){
                        ?>
                                <tr><th >Directeur de laboratoire/Chef de service </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>Directeur de laboratoire/Chef de service</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $directeur_lab_chef_service?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_aa1" id="respo_aca_aa1" onchange="calc_Dr_laboratoire()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_aa1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Directeur de laboratoire/Chef de service</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $directeur_lab_chef_service?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_aa1" id="respo_aca_aa1" onchange="calc_Dr_laboratoire()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_aa1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($directeur_ecole_doct==""){
                        ?>
                                <tr><th >Directeur d’École doctorale	 </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>Directeur d’École doctorale</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $directeur_ecole_doct?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_aa2" id="respo_aca_aa2" onchange="calc_Dr_ecole_doctorale()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_aa2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Directeur d’École doctorale</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $directeur_ecole_doct?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_aa2" id="respo_aca_aa2" onchange="calc_Dr_ecole_doctorale()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_aa2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($chef_etablissement_1==""){
                        ?>
                                <tr><th >Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté) </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $chef_etablissement_1?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_aa3" id="respo_aca_aa3" onchange="calc_Dr_Ufr()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_aa3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $chef_etablissement_1?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_aa3" id="respo_aca_aa3" onchange="calc_Dr_Ufr()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_aa3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>
                        <?php
                            if($chef_etablissement_2==""){
                        ?>
                                <tr><th >Chef d’Établissement (Directeurs d’Institut d’Université)  </th> <td colspan=4 >Aucun</td></tr>
                                <tr class="d-none"><th>Chef d’Établissement (Directeurs d’Institut d’Université) </th> <td > <a class="nav-link "  target="_blank" href="<?php echo $chef_etablissement_2?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_aa4" id="respo_aca_aa4" onchange="calc_Dr_institut_universite()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_aa4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                        <?php
                            }
                            else{
                            ?> 
                                <tr ><th>Chef d’Établissement (Directeurs d’Institut d’Université) </th> <td > <a class="nav-link "  target="_blank" href="<?php echo $chef_etablissement_2?>">Voir </a></td>
                                    <td class='text-center '><select name="respo_aca_aa4" id="respo_aca_aa4" onchange="calc_Dr_institut_universite()">
                                        <?php for($i=0; $i<=1; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select></td> <td disabled><input id='n_respo_aca_aa4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                
                            <?php
                            }
                        ?>          
                        

                    </table>
                </div>

            </div>
                <!-- Fin d'un grand point -->

                       <!-- Debut d'un grand point I DEVELOPPEMENT INSTITUTIONNEL -->
                        <div class="col-12">

            <p class=col-12>
                <button class="col-12 btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#developpement_institution" aria-expanded="false" aria-controls="developpement_institution">
                DEVELOPPEMENT INSTITUTIONNEL
                    <!-- <span class="dropdown-menu"></span> -->
                </button>
            </p>
            <div class="w-100 border mt-0 mb-1 col-12 collapse multi-collapse" id="developpement_institution">

                    <!-- Debut de la table -->
                <table class="w-100 col-12 table table-primary table-striped table-bordered border-success text-center display-7 p-auto ">
                    <tr class="col-12" ><th class='w-50' text-center rowspan=2>Documents</th> <th class='w-20' rowspan=2 >Justificatifs</th><th  colspan=2 class='' > Notation</th></tr>
                    <tr>
                        <!-- <th class=''>Auteur</th> -->
                        <th class=''>nombre</th>
                        <th class=''>note</th>
                    </tr>
                    <?php
                        if($promotion_de_la_P==""){
                    ?>
                            <tr><th >Promotion de la pédagogie</th> <td colspan=4 >Aucun</td></tr>
                            <tr class="d-none"><th>Promotion de la pédagogie</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $promotion_de_la_P?>">Voir </a></td>
                                <td class='text-center'><input class='text-center form-control' name="di_a1" id="di_a1" onchange="calc_Promotion_pedagogie ()" value="0" ></td> <td disabled><input id='n_di_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>

                    <?php
                        }
                        else{
                        ?> 
                            <tr ><th>Promotion de la pédagogie</th> <td > <a class="nav-link "  target="_blank" href="<?php echo $promotion_de_la_P?>">Voir </a></td>
                                <td class='text-center'><input class='text-center form-control' name="di_a1" id="di_a1" onchange="calc_Promotion_pedagogie ()" value="0" ></td> <td disabled><input id='n_di_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                            
                        <?php
                        }
                    ?>
                    <?php
                        if($promotion_de_la_R==""){
                    ?>
                            <tr><th >Promotion de la recherche </th> <td colspan=4 >Aucun</td></tr>
                            
                            <tr class="d-none" ><th>Promotion de la recherche</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $promotion_de_la_R?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="di_a2" id="di_a2" onchange="calc_Promotion_recherche ()" value="0" ></td> <td disabled><input id='n_di_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                    <?php
                        }
                        else{
                        ?> 
                            <tr ><th>Promotion de la recherche</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $promotion_de_la_R?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="di_a2" id="di_a2" onchange="calc_Promotion_recherche ()" value="0" ></td> <td disabled><input id='n_di_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                            
                        <?php
                        }
                    ?> 
                    <?php
                        if($promotion_de_la_G==""){
                    ?>
                            <tr><th >Promotion de la gouvernance</th> <td colspan=4 >Aucun</td></tr>

                            <tr class="d-none" ><th>Promotion de la gouvernance</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $promotion_de_la_G?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="di_a3" id="di_a3" onchange="calc_Promotion_gouvernance ()" value="0" ></td> <td disabled><input id='n_di_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                    <?php
                        }
                        else{
                        ?> 
                            <tr ><th>Promotion de la gouvernance</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $promotion_de_la_G?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="di_a3" id="di_a3" onchange="calc_Promotion_gouvernance ()" value="0" ></td> <td disabled><input id='n_di_a3' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                            
                        <?php
                        }
                    ?>
                    <?php
                        if($service_a_la_C==""){
                    ?>
                            <tr><th >Services à la communauté </th> <td colspan=4 >Aucun</td></tr>
                            <tr class="d-none" ><th>Services à la communauté</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $service_a_la_C?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="di_a4" id="di_a4" onchange="calc_Service_a_la_communaute ()" value="0" ></td> <td disabled><input id='n_di_a4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                            
                    <?php
                        }
                        else{
                        ?> 
                            <tr ><th>Services à la communauté</th> <td > <a class="nav-link " target="_blank"  href="<?php echo $service_a_la_C?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="di_a4" id="di_a4" onchange="calc_Service_a_la_communaute ()" value="0" ></td> <td disabled><input id='n_di_a4' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                            
                        <?php
                        }
                    ?>
                    <?php
                        if($capacite_M_R_P==""){
                    ?>
                            <tr><th >Capacité à mobiliser des ressources et des partenaires </th> <td colspan=4 >Aucun</td></tr>
                            <tr class="d-none"><th rowspan=2 >Capacité à mobiliser des ressources et des partenaires</th> <td rowspan=2 > <a class="nav-link " target="_blank"  href="<?php echo $capacite_M_R_P?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="di_a5" id="di_a5" onchange="calc_Chercheur_principal  ()" value="0" ></td> <td disabled><input id='n_di_a5' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr><td class='text-center '><input class='text-center form-control' name="di_a6" id="di_a6" onchange="calc_chercheur_associe()" value="0" ></td> <td disabled><input id='n_di_a6' class='form-control text-center' disabled  value="0" type="text"></td></tr>  
                            
                    <?php
                        }
                        else{
                        ?> 
                            <tr ><th rowspan=2 >Capacité à mobiliser des ressources et des partenaires</th> <td rowspan=2 > <a class="nav-link " target="_blank"  href="<?php echo $capacite_M_R_P?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="di_a5" id="di_a5" onchange="calc_Chercheur_principal  ()" value="0" ></td> <td disabled><input id='n_di_a5' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                                <tr><td class='text-center '><input class='text-center form-control' name="di_a6" id="di_a6" onchange="calc_chercheur_associe ()" value="0" ></td> <td disabled><input id='n_di_a6' class='form-control text-center' disabled  value="0" type="text"></td></tr>  
                            
                        <?php
                        }
                    ?>       
                    

                </table>
            </div>

            </div>
            <!-- Fin d'un grand point -->

            <!-- Debut d'un grand point I INNOVATIONS, BREVETS, DISTINCTIONS-->
             <div class="col-12">

            <p class=col-12>
                <button class="col-12 btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#innovations_brevets_distinctions" aria-expanded="false" aria-controls="innovations_brevets_distinctions">
                INNOVATIONS, BREVETS, DISTINCTIONS
                    <!-- <span class="dropdown-menu"></span> -->
                </button>
            </p>
            <div class="w-100 border mt-0 mb-1 col-12 collapse multi-collapse" id="innovations_brevets_distinctions">

                    <!-- Debut de la table -->
                <table class="w-100 col-12 table table-primary table-striped table-bordered border-success text-center display-7 p-auto ">
                    <tr class="col-12" ><th class='w-50' text-center rowspan=2>Documents</th> <th class='w-20' rowspan=2 >Justificatifs</th><th  colspan=2 class='' > Notation</th></tr>
                    <tr>
                        <!-- <th class=''>Auteur</th> -->
                        <th class=''>nombre</th>
                        <th class=''>note</th>
                    </tr>
                    <?php
                        if($brevet==""){
                    ?>
                            <tr><th >Brevets </th> <td colspan=4 >Aucun</td></tr>
                            <tr class="d-none" ><th>Brevets </th> <td > <a class="nav-link " target="_blank"  href="<?php echo $brevet ?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="ibd_a1" id="ibd_a1" onchange="calc_Brevets()" value="0" ></td> <td disabled><input id='n_ibd_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>

                    <?php
                        }
                        else{
                        ?> 
                            <tr ><th>Brevets </th> <td > <a class="nav-link "  target="_blank" href="<?php echo $brevet ?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="ibd_a1" id="ibd_a1" onchange="calc_Brevets()" value="0" ></td> <td disabled><input id='n_ibd_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                            
                        <?php
                        }
                    ?>
                    <?php
                        if($distinction==""){
                    ?>
                            <tr><th >Distinctions</th> <td colspan=4 >Aucun</td></tr>
                            <tr class="d-none" ><th>Brevets </th> <td > <a class="nav-link " target="_blank"   target="_blank"  href="<?php echo $distinction ?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="ibd_a1" id="ibd_a1" onchange="calc_Distinctions()" value="0" ></td> <td disabled><input id='n_ibd_a1' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                    <?php
                        }
                        else{
                        ?> 
                            <tr ><th>Distinctions</th> <td > <a class="nav-link " target="_blank"   href="<?php echo $distinction ?>">Voir </a></td>
                                <td class='text-center '><input class='text-center form-control' name="ibd_a2" id="ibd_a2" onchange="calc_Distinctions()" value="0" ></td> <td disabled><input id='n_ibd_a2' class='form-control text-center' disabled  value="0" type="text"></td></tr>
                            
                        <?php
                        }
                    ?>
                    
     
                    

                </table>
            </div>

            </div>
            <!-- Fin d'un grand point -->

                
        





        </div>
       

    </div>
    <div class="row fixed-bottom validation_note bg-light mx-3">
            <div class="col-6" >
                <div class="col-12 my-1 mx-3">
                    <a onclick=save_note_totale() id='sauvegarde' href="#"> <button class="btn btn-sm btn-success">Enregistrer</button></a>
                </div>
                <div class="col-12 my-1 mx-3">
                    <a  href="http://localhost/candidature/liste_des_pers/"> <button class="btn btn-sm btn-danger">Annuler</button></a>
                </div>
            </div>

            <div class="col-6">
             <button type="button" onclick=note_totale() class=" m-1 btn btn-sm btn-info">Somme</button>
                <input type="text" class="m-1" name="somme_total" id="somme_total" disabled>
            </div>


        </div>
    
    
</body>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
    function note_totale(){
        somme_total=parseInt(document.getElementById('n_ps_p_a1').value)+parseInt(document.getElementById('n_ps_p_a2').value)+parseInt(document.getElementById('n_ps_p_a3').value)+parseInt(document.getElementById('n_ps_p_a4').value)+parseInt(document.getElementById('n_ps_p_a5').value)+parseInt(document.getElementById('n_ps_p_b1').value)+parseInt(document.getElementById('n_ps_p_b2').value)+parseInt(document.getElementById('n_ps_p_b3').value)+parseInt(document.getElementById('n_ps_p_b4').value)+parseInt(document.getElementById('n_ps_p_b5').value)+parseInt(document.getElementById('n_ps_p_c1').value)+parseInt(document.getElementById('n_ps_p_c2').value)+parseInt(document.getElementById('n_ps_p_c3').value)+parseInt(document.getElementById('n_ps_p_c4').value)+parseInt(document.getElementById('n_ps_p_c5').value)+parseInt(document.getElementById('n_ps_p_d1').value)+parseInt(document.getElementById('n_ps_p_d2').value)+parseInt(document.getElementById('n_ps_p_d3').value)+parseInt(document.getElementById('n_ps_p_d4').value)+parseInt(document.getElementById('n_ps_p_d5').value)+parseInt(document.getElementById('n_ps_p_e1').value)+parseInt(document.getElementById('n_ps_p_e2').value)+parseInt(document.getElementById('n_ps_p_e3').value)+parseInt(document.getElementById('n_ps_p_e4').value)+parseInt(document.getElementById('n_ps_p_e5').value)+parseInt(document.getElementById('n_ps_p_f1').value)+parseInt(document.getElementById('n_ps_p_g1').value)+parseInt(document.getElementById('n_ps_p_h1').value)+parseInt(document.getElementById('n_ps_p_i1').value)+parseInt(document.getElementById('n_ps_c_a1').value)+parseInt(document.getElementById('n_ps_c_a2').value)+parseInt(document.getElementById('n_ps_c_a3').value)+parseInt(document.getElementById('n_encadrement_a1').value)+parseInt(document.getElementById('n_encadrement_a2').value)+parseInt(document.getElementById('n_encadrement_a3').value)+parseInt(document.getElementById('n_encadrement_a4').value)+parseInt(document.getElementById('n_encadrement_a5').value)+parseInt(document.getElementById('n_encadrement_a6').value)+parseInt(document.getElementById('n_mjd_a1').value)+parseInt(document.getElementById('n_mjd_a2').value)+parseInt(document.getElementById('n_mjd_a3').value)+parseInt(document.getElementById('n_mjd_a4').value)+parseInt(document.getElementById('n_mjd_a5').value)+parseInt(document.getElementById('n_pjd_a1').value)+parseInt(document.getElementById('n_pjd_a2').value)+parseInt(document.getElementById('n_pjd_a3').value)+parseInt(document.getElementById('n_pjd_a4').value)+parseInt(document.getElementById('n_respo_aca_a1').value)+parseInt(document.getElementById('n_respo_aca_a2').value)+parseInt(document.getElementById('n_respo_aca_a3').value)+parseInt(document.getElementById('n_respo_aca_a4').value)+parseInt(document.getElementById('n_respo_aca_a5').value)+parseInt(document.getElementById('n_respo_aca_a6').value)+parseInt(document.getElementById('n_respo_aca_a7').value)+parseInt(document.getElementById('n_respo_aca_a8').value)+parseInt(document.getElementById('n_respo_aca_a9').value)+parseInt(document.getElementById('n_respo_aca_aa1').value)+parseInt(document.getElementById('n_respo_aca_aa2').value)+parseInt(document.getElementById('n_respo_aca_aa3').value)+parseInt(document.getElementById('n_respo_aca_aa4').value)+parseInt(document.getElementById('n_di_a1').value)+parseInt(document.getElementById('n_di_a2').value)+parseInt(document.getElementById('n_di_a3').value)+parseInt(document.getElementById('n_di_a4').value)+parseInt(document.getElementById('n_di_a5').value)+parseInt(document.getElementById('n_di_a6').value)+parseInt(document.getElementById('n_ibd_a1').value)+parseInt(document.getElementById('n_ibd_a2').value);
        document.getElementById('somme_total').value=somme_total;

    }
    function save_note_totale(){
        somme_total=parseInt(document.getElementById('n_ps_p_a1').value)+parseInt(document.getElementById('n_ps_p_a2').value)+parseInt(document.getElementById('n_ps_p_a3').value)+parseInt(document.getElementById('n_ps_p_a4').value)+parseInt(document.getElementById('n_ps_p_a5').value)+parseInt(document.getElementById('n_ps_p_b1').value)+parseInt(document.getElementById('n_ps_p_b2').value)+parseInt(document.getElementById('n_ps_p_b3').value)+parseInt(document.getElementById('n_ps_p_b4').value)+parseInt(document.getElementById('n_ps_p_b5').value)+parseInt(document.getElementById('n_ps_p_c1').value)+parseInt(document.getElementById('n_ps_p_c2').value)+parseInt(document.getElementById('n_ps_p_c3').value)+parseInt(document.getElementById('n_ps_p_c4').value)+parseInt(document.getElementById('n_ps_p_c5').value)+parseInt(document.getElementById('n_ps_p_d1').value)+parseInt(document.getElementById('n_ps_p_d2').value)+parseInt(document.getElementById('n_ps_p_d3').value)+parseInt(document.getElementById('n_ps_p_d4').value)+parseInt(document.getElementById('n_ps_p_d5').value)+parseInt(document.getElementById('n_ps_p_e1').value)+parseInt(document.getElementById('n_ps_p_e2').value)+parseInt(document.getElementById('n_ps_p_e3').value)+parseInt(document.getElementById('n_ps_p_e4').value)+parseInt(document.getElementById('n_ps_p_e5').value)+parseInt(document.getElementById('n_ps_p_f1').value)+parseInt(document.getElementById('n_ps_p_g1').value)+parseInt(document.getElementById('n_ps_p_h1').value)+parseInt(document.getElementById('n_ps_p_i1').value)+parseInt(document.getElementById('n_ps_c_a1').value)+parseInt(document.getElementById('n_ps_c_a2').value)+parseInt(document.getElementById('n_ps_c_a3').value)+parseInt(document.getElementById('n_encadrement_a1').value)+parseInt(document.getElementById('n_encadrement_a2').value)+parseInt(document.getElementById('n_encadrement_a3').value)+parseInt(document.getElementById('n_encadrement_a4').value)+parseInt(document.getElementById('n_encadrement_a5').value)+parseInt(document.getElementById('n_encadrement_a6').value)+parseInt(document.getElementById('n_mjd_a1').value)+parseInt(document.getElementById('n_mjd_a2').value)+parseInt(document.getElementById('n_mjd_a3').value)+parseInt(document.getElementById('n_mjd_a4').value)+parseInt(document.getElementById('n_mjd_a5').value)+parseInt(document.getElementById('n_pjd_a1').value)+parseInt(document.getElementById('n_pjd_a2').value)+parseInt(document.getElementById('n_pjd_a3').value)+parseInt(document.getElementById('n_pjd_a4').value)+parseInt(document.getElementById('n_respo_aca_a1').value)+parseInt(document.getElementById('n_respo_aca_a2').value)+parseInt(document.getElementById('n_respo_aca_a3').value)+parseInt(document.getElementById('n_respo_aca_a4').value)+parseInt(document.getElementById('n_respo_aca_a5').value)+parseInt(document.getElementById('n_respo_aca_a6').value)+parseInt(document.getElementById('n_respo_aca_a7').value)+parseInt(document.getElementById('n_respo_aca_a8').value)+parseInt(document.getElementById('n_respo_aca_a9').value)+parseInt(document.getElementById('n_respo_aca_aa1').value)+parseInt(document.getElementById('n_respo_aca_aa2').value)+parseInt(document.getElementById('n_respo_aca_aa3').value)+parseInt(document.getElementById('n_respo_aca_aa4').value)+parseInt(document.getElementById('n_di_a1').value)+parseInt(document.getElementById('n_di_a2').value)+parseInt(document.getElementById('n_di_a3').value)+parseInt(document.getElementById('n_di_a4').value)+parseInt(document.getElementById('n_di_a5').value)+parseInt(document.getElementById('n_di_a6').value)+parseInt(document.getElementById('n_ibd_a1').value)+parseInt(document.getElementById('n_ibd_a2').value);
        document.getElementById('sauvegarde').href="http://localhost/candidature/code_per/per_verif_note_totale.php?somme="+somme_total+"&matricule="+<?php echo json_encode($auteur);?>;

    }

</script>
<script>

//  DEBUT PUBLICATION

function calc_indexe (){

    let nbr_auteur1 = document.getElementById("ps_p_a1").value;
    let nbr_auteur2 = document.getElementById("ps_p_a2").value;
    let nbr_auteur3 = document.getElementById("ps_p_a3").value; 
    let nbr_auteur4 = document.getElementById("ps_p_a4").value;
    let nbr_auteur5 = document.getElementById("ps_p_a5").value;

    let note_auteur1 = document.getElementById("n_ps_p_a1");
    let note_auteur2 = document.getElementById("n_ps_p_a2");
    let note_auteur3 = document.getElementById("n_ps_p_a3"); 
    let note_auteur4 = document.getElementById("n_ps_p_a4");
    let note_auteur5 = document.getElementById("n_ps_p_a5");

    note_auteur1.value = nbr_auteur1 * <?php echo json_encode($ps_p_a1) ?> ;
    note_auteur2.value = nbr_auteur2 * <?php echo json_encode($ps_p_a2) ?> ;
    note_auteur3.value = nbr_auteur3 * <?php echo json_encode($ps_p_a3) ?> ;
    note_auteur4.value = nbr_auteur4 * <?php echo json_encode($ps_p_a4) ?> ;
    note_auteur5.value = nbr_auteur5 * <?php echo json_encode($ps_p_a5)  ?> ;
   
}

function calc_Nonindexe (){

let nbr_auteur1 = document.getElementById("ps_p_b1").value;
let nbr_auteur2 = document.getElementById("ps_p_b2").value;
let nbr_auteur3 = document.getElementById("ps_p_b3").value; 
let nbr_auteur4 = document.getElementById("ps_p_b4").value;
let nbr_auteur5 = document.getElementById("ps_p_b5").value;

let note_auteur1 = document.getElementById("n_ps_p_b1");
let note_auteur2 = document.getElementById("n_ps_p_b2");
let note_auteur3 = document.getElementById("n_ps_p_b3"); 
let note_auteur4 = document.getElementById("n_ps_p_b4");
let note_auteur5 = document.getElementById("n_ps_p_b5");

note_auteur1.value = nbr_auteur1 * <?php echo json_encode($ps_p_b1) ?> ;
note_auteur2.value = nbr_auteur2 * <?php echo json_encode($ps_p_b2) ?> ;
note_auteur3.value = nbr_auteur3 * <?php echo json_encode($ps_p_b3) ?> ;
note_auteur4.value = nbr_auteur4 * <?php echo json_encode($ps_p_b4) ?> ;
note_auteur5.value = nbr_auteur5 * <?php echo json_encode($ps_p_b5)  ?> ;

}


function calc_Proceeding (){

let nbr_auteur1 = document.getElementById("ps_p_c1").value;
let nbr_auteur2 = document.getElementById("ps_p_c2").value;
let nbr_auteur3 = document.getElementById("ps_p_c3").value; 
let nbr_auteur4 = document.getElementById("ps_p_c4").value;
let nbr_auteur5 = document.getElementById("ps_p_c5").value;

let note_auteur1 = document.getElementById("n_ps_p_c1");
let note_auteur2 = document.getElementById("n_ps_p_c2");
let note_auteur3 = document.getElementById("n_ps_p_c3"); 
let note_auteur4 = document.getElementById("n_ps_p_c4");
let note_auteur5 = document.getElementById("n_ps_p_c5");

note_auteur1.value = nbr_auteur1 * <?php echo json_encode($ps_p_c1) ?> ;
note_auteur2.value = nbr_auteur2 * <?php echo json_encode($ps_p_c2) ?> ;
note_auteur3.value = nbr_auteur3 * <?php echo json_encode($ps_p_c3) ?> ;
note_auteur4.value = nbr_auteur4 * <?php echo json_encode($ps_p_c4) ?> ;
note_auteur5.value = nbr_auteur5 * <?php echo json_encode($ps_p_c5)  ?> ;

}

function calc_Chapitre (){

let nbr_auteur1 = document.getElementById("ps_p_d1").value;
let nbr_auteur2 = document.getElementById("ps_p_d2").value;
let nbr_auteur3 = document.getElementById("ps_p_d3").value; 
let nbr_auteur4 = document.getElementById("ps_p_d4").value;
let nbr_auteur5 = document.getElementById("ps_p_d5").value;

let note_auteur1 = document.getElementById("n_ps_p_d1");
let note_auteur2 = document.getElementById("n_ps_p_d2");
let note_auteur3 = document.getElementById("n_ps_p_d3"); 
let note_auteur4 = document.getElementById("n_ps_p_d4");
let note_auteur5 = document.getElementById("n_ps_p_d5");

note_auteur1.value = nbr_auteur1 * <?php echo json_encode($ps_p_d1) ?> ;
note_auteur2.value = nbr_auteur2 * <?php echo json_encode($ps_p_d2) ?> ;
note_auteur3.value = nbr_auteur3 * <?php echo json_encode($ps_p_d3) ?> ;
note_auteur4.value = nbr_auteur4 * <?php echo json_encode($ps_p_d4) ?> ;
note_auteur5.value = nbr_auteur5 * <?php echo json_encode($ps_p_d5)  ?> ;

}

function calc_Melange (){

let nbr_auteur1 = document.getElementById("ps_p_e1").value;
let nbr_auteur2 = document.getElementById("ps_p_e2").value;
let nbr_auteur3 = document.getElementById("ps_p_e3").value; 
let nbr_auteur4 = document.getElementById("ps_p_e4").value;
let nbr_auteur5 = document.getElementById("ps_p_e5").value;

let note_auteur1 = document.getElementById("n_ps_p_e1");
let note_auteur2 = document.getElementById("n_ps_p_e2");
let note_auteur3 = document.getElementById("n_ps_p_e3"); 
let note_auteur4 = document.getElementById("n_ps_p_e4");
let note_auteur5 = document.getElementById("n_ps_p_e5");

note_auteur1.value = nbr_auteur1 * <?php echo json_encode($ps_p_e1) ?> ;
note_auteur2.value = nbr_auteur2 * <?php echo json_encode($ps_p_e2) ?> ;
note_auteur3.value = nbr_auteur3 * <?php echo json_encode($ps_p_e3) ?> ;
note_auteur4.value = nbr_auteur4 * <?php echo json_encode($ps_p_e4) ?> ;
note_auteur5.value = nbr_auteur5 * <?php echo json_encode($ps_p_e5)  ?> ;

}

function calc_Ouvrage (){

    let nbr_ouvrage = document.getElementById("ps_p_f1").value;
    let note_ouvrage = document.getElementById("n_ps_p_f1");
    note_ouvrage.value = nbr_ouvrage * <?php echo json_encode($ps_p_f1) ?> ;
}

function calc_Revue (){

let nbr_revue = document.getElementById("ps_p_g1").value;
let note_revue = document.getElementById("n_ps_p_g1");
note_revue.value = nbr_revue * <?php echo json_encode($ps_p_g1) ?> ;
}

function calc_Fiche_tech (){

let nbr_fiche_tech = document.getElementById("ps_p_h1").value;
let note_fiche_tech = document.getElementById("n_ps_p_h1");
note_fiche_tech.value = nbr_fiche_tech * <?php echo json_encode($ps_p_h1) ?> ;
}

function calc_Doc_valorisation (){

let nbr_doc_valorisation = document.getElementById("ps_p_i1").value;
let note_doc_valorisation = document.getElementById("n_ps_p_i1");
note_doc_valorisation.value = nbr_doc_valorisation * <?php echo json_encode($ps_p_i1) ?> ;
}


// DEBUT COMMUNICATION


function calc_Conf_internationale (){

let nbr_conf_internationale = document.getElementById("ps_c_a1").value;
let note_conf_internationale = document.getElementById("n_ps_c_a1");
note_conf_internationale.value = nbr_conf_internationale * <?php echo json_encode($ps_c_a1) ?> ;
}

function calc_Conf_nationale (){

let nbr_doc_conf_nationale = document.getElementById("ps_c_a2").value;
let note_doc_conf_nationale = document.getElementById("n_ps_c_a2");
note_doc_conf_nationale.value = nbr_doc_conf_nationale * <?php echo json_encode($ps_c_a2) ?> ;
}

function calc_Conf_internationale_domaine (){

let nbr_conf_internationale_domaine = document.getElementById("ps_c_a3").value;
let note_conf_internationale_domaine = document.getElementById("n_ps_c_a3");
note_conf_internationale_domaine.value = nbr_conf_internationale_domaine * <?php echo json_encode($ps_c_a3) ?> ;
}


// DEBUT ENCADREMENT


function calc_Licence(){

let nbr_licence = document.getElementById("encadrement_a1").value;
let note_licence = document.getElementById("n_encadrement_a1");
note_licence.value = nbr_licence * <?php echo json_encode($encadrement_a1) ?> ;
}

function calc_Ingenieur (){

let nbr_ingenieur = document.getElementById("encadrement_a2").value;
let note_ingenieur = document.getElementById("n_encadrement_a2");
note_ingenieur.value = nbr_ingenieur * <?php echo json_encode($encadrement_a2) ?> ;
}

function calc_Master (){

let nbr_master = document.getElementById("encadrement_a3").value;
let note_master = document.getElementById("n_encadrement_a3");
note_master.value = nbr_master * <?php echo json_encode($encadrement_a3) ?> ;
}

function calc_DocteurMPOV (){

let nbr_docteurMPOV = document.getElementById("encadrement_a4").value;
let note_docteurMPOV = document.getElementById("n_encadrement_a4");
note_docteurMPOV.value = nbr_docteurMPOV * <?php echo json_encode($encadrement_a4) ?> ;
}

function calc_DocteurUnique (){

let nbr_docteurUnique = document.getElementById("encadrement_a5").value;
let note_docteurUnique = document.getElementById("n_encadrement_a5");
note_docteurUnique.value = nbr_docteurUnique * <?php echo json_encode($encadrement_a5) ?> ;
}

function calc_DES (){

let nbr_des = document.getElementById("encadrement_a6").value;
let note_des = document.getElementById("n_encadrement_a6");
note_des.value = nbr_des * <?php echo json_encode($encadrement_a6) ?> ;
}


// DEBUT MEMBRE JURY DELIBERATION


function calc_Ingenieur_mjd (){

let nbr_ingenieur_mjd = document.getElementById("mjd_a1").value;
let note_ingenieur_mjd = document.getElementById("n_mjd_a1");
note_ingenieur_mjd.value = nbr_ingenieur_mjd * <?php echo json_encode($mjd_a1) ?> ;
}

function calc_Master_mjd (){

let nbr_master_mjd = document.getElementById("mjd_a2").value;
let note_master_mjd = document.getElementById("n_mjd_a2");
note_master_mjd.value = nbr_master_mjd * <?php echo json_encode($mjd_a2) ?> ;
}

function calc_DocteurMPOV_mjd (){

let nbr_docteurMPOV_mjd = document.getElementById("mjd_a3").value;
let note_docteurMPOV_mjd = document.getElementById("n_mjd_a3");
note_docteurMPOV_mjd.value = nbr_docteurMPOV_mjd * <?php echo json_encode($mjd_a3) ?> ;
}

function calc_DES_mjd (){

let nbr_des_mjd = document.getElementById("mjd_a4").value;
let note_des_mjd = document.getElementById("n_mjd_a4");
note_des_mjd.value = nbr_des_mjd * <?php echo json_encode($mjd_a4) ?> ;
}
function calc_evaluateur_mjd (){

let nbr_evaluateur_mjd = document.getElementById("mjd_a5").value;
let note_evaluateur_mjd = document.getElementById("n_mjd_a5");
note_evaluateur_mjd.value = nbr_evaluateur_mjd * <?php echo json_encode($mjd_a5) ?> ;
}


// PRESIDENT JURY DELIBERATION


function calc_Ingenieur_pjd (){

let nbr_ingenieur_pjd = document.getElementById("pjd_a1").value;
let note_ingenieur_pjd = document.getElementById("n_pjd_a1");
note_ingenieur_pjd.value = nbr_ingenieur_pjd * <?php echo json_encode($pjd_a1) ?> ;
}

function calc_Master_pjd (){

let nbr_master_pjd = document.getElementById("pjd_a2").value;
let note_master_pjd = document.getElementById("n_pjd_a2");
note_master_pjd.value = nbr_master_pjd * <?php echo json_encode($pjd_a2) ?> ;
}

function calc_DocteurMPOV_pjd (){

let nbr_docteurMPOV_pjd = document.getElementById("pjd_a3").value;
let note_docteurMPOV_pjd = document.getElementById("n_pjd_a3");
note_docteurMPOV_pjd.value = nbr_docteurMPOV_pjd * <?php echo json_encode($pjd_a3) ?> ;
}

function calc_Docteur_unique_pjd (){

let nbr_Docteur_unique_pjd = document.getElementById("pjd_a4").value;
let note_Docteur_unique_pjd = document.getElementById("n_pjd_a4");
note_Docteur_unique_pjd.value = nbr_Docteur_unique_pjd * <?php echo json_encode($pjd_a4) ?> ;
}

// DEBUT RESPONSABILITES ACADEMIQUES


function calc_Resp_niveau (){

let nbr_resp_niveau = document.getElementById("respo_aca_a1").value;
let note_resp_niveau = document.getElementById("n_respo_aca_a1");
note_resp_niveau.value = nbr_resp_niveau * <?php echo json_encode($respo_aca_a1) ?> ;
}

function calc_Resp_formation (){

let nbr_resp_formation = document.getElementById("respo_aca_a2").value;
let note_resp_formation = document.getElementById("n_respo_aca_a2");
note_resp_formation.value = nbr_resp_formation * <?php echo json_encode($respo_aca_a2) ?> ;
}

function calc_Chef_departement  (){

let nbr_chef_departement = document.getElementById("respo_aca_a3").value;
let note_chef_departement = document.getElementById("n_respo_aca_a3");
note_chef_departement.value = nbr_chef_departement * <?php echo json_encode($respo_aca_a3) ?> ;
}

function calc_Dr_Inst_Faculte (){

let nbr_Dr_inst_fac = document.getElementById("respo_aca_a4").value;
let note_Dr_inst_fac = document.getElementById("n_respo_aca_a4");
note_Dr_inst_fac.value = nbr_Dr_inst_fac * <?php echo json_encode($respo_aca_a4) ?> ;
}

function calc_Dr_Inst_Universite (){

let nbr_Dr_inst_universite = document.getElementById("respo_aca_a5").value;
let note_Dr_inst_universite = document.getElementById("n_respo_aca_a5");
note_Dr_inst_universite.value = nbr_Dr_inst_universite * <?php echo json_encode($respo_aca_a5) ?> ;
}

function calc_Dr_Ufr_adjoint (){

let nbr_Dr_Ufr_adjoint = document.getElementById("respo_aca_a6").value;
let note_Dr_Ufr_adjoint = document.getElementById("n_respo_aca_a6");
note_Dr_Ufr_adjoint.value = nbr_Dr_Ufr_adjoint * <?php echo json_encode($respo_aca_a6) ?> ;
}

function calc_Dr_central (){

let nbr_Dr_central = document.getElementById("respo_aca_a7").value;
let note_Dr_central = document.getElementById("n_respo_aca_a7");
note_Dr_central.value = nbr_Dr_central * <?php echo json_encode($respo_aca_a7) ?> ;
}

function calc_Resp_formation_doctorale (){

let nbr_resp_form_doctorale = document.getElementById("respo_aca_a8").value;
let note_resp_form_doctorale = document.getElementById("n_respo_aca_a8");
note_resp_form_doctorale.value = nbr_resp_form_doctorale * <?php echo json_encode($respo_aca_a8) ?> ;
}

function calc_Dr_revue (){

let nbr_Dr_revue = document.getElementById("respo_aca_a9").value;
let note_Dr_revue = document.getElementById("n_respo_aca_a9");
note_Dr_revue.value = nbr_Dr_revue * <?php echo json_encode($respo_aca_a9) ?> ;
}

function calc_Dr_laboratoire (){

let nbr_Dr_laboratoire = document.getElementById("respo_aca_aa1").value;
let note_Dr_laboratoire = document.getElementById("n_respo_aca_aa1");
note_Dr_laboratoire.value = nbr_Dr_laboratoire * <?php echo json_encode($respo_aca_aa1) ?> ;
}

function calc_Dr_ecole_doctorale (){

let nbr_Dr_ecole_doctorale = document.getElementById("respo_aca_aa2").value;
let note_Dr_ecole_doctorale= document.getElementById("n_respo_aca_aa2");
note_Dr_ecole_doctorale.value = nbr_Dr_ecole_doctorale * <?php echo json_encode($respo_aca_aa2) ?> ;
}

function calc_Dr_Ufr (){

let nbr_Dr_ufr = document.getElementById("respo_aca_aa3").value;
let note_Dr_ufr = document.getElementById("n_respo_aca_aa3");
note_Dr_ufr.value = nbr_Dr_ufr * <?php echo json_encode($respo_aca_aa3) ?> ;
}

function calc_Dr_institut_universite (){

let nbr_Dr_institut_universite = document.getElementById("respo_aca_aa4").value;
let note_Dr_institut_universite = document.getElementById("n_respo_aca_aa4");
note_Dr_institut_universite.value = nbr_Dr_institut_universite * <?php echo json_encode($respo_aca_aa4) ?> ;
}


// DEBUT DEVELOPPEMENT INSTITUTIONNEL

function calc_Promotion_pedagogie (){

let nbr_pedagogie = document.getElementById("di_a1").value;
let note_pedagogie = document.getElementById("n_di_a1");
note_pedagogie.value = nbr_pedagogie * <?php echo json_encode($di_a1) ?> ;
}


function calc_Promotion_recherche (){

let nbr_recherche = document.getElementById("di_a2").value;
let note_recherche = document.getElementById("n_di_a2");
note_recherche.value = nbr_recherche * <?php echo json_encode($di_a2) ?> ;
}


function calc_Promotion_gouvernance (){

let nbr_gouvernance = document.getElementById("di_a3").value;
let note_gouvernance = document.getElementById("n_di_a3");
note_gouvernance.value = nbr_gouvernance * <?php echo json_encode($di_a3) ?> ;
}


function calc_Service_a_la_communaute (){

let nbr_service_com = document.getElementById("di_a4").value;
let note_service_com = document.getElementById("n_di_a4");
note_service_com.value = nbr_service_com * <?php echo json_encode($di_a4) ?> ;
}

function calc_Chercheur_principal  (){

let nbr_principal = document.getElementById("di_a5").value;
let note_principal = document.getElementById("n_di_a5");
note_principal.value = nbr_principal * <?php echo json_encode($di_a5) ?> ;
}

function calc_chercheur_associe  (){

let nbr_associe = document.getElementById("di_a6").value;
let note_associe = document.getElementById("n_di_a6");
note_associe.value = nbr_associe * <?php echo json_encode($di_a6) ?> ;
}


// DEBUT INNOVATIONS, BREVETS, DISTINCTIONS

function calc_Brevets (){

let nbr_brevet = document.getElementById("ibd_a1").value;
let note_brevet = document.getElementById("n_ibd_a1");
note_brevet.value = nbr_brevet * <?php echo json_encode($ibd_a1) ?> ;
note_brevet.value = nbr_brevet * 10 ;
}

function calc_Distinctions (){

let nbr_distinction = document.getElementById("ibd_a2").value;
let note_distinction = document.getElementById("n_ibd_a2");
note_distinction.value = nbr_distinction * <?php echo json_encode($ibd_a2) ?> ;
}



</script>



</html>