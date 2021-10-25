<?php
/*Template name: Calcul Note Candidat Par Offre*/
session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublier')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}
// include("http://localhost/candidature/code_candidature/variable_point_calcul.php");



$mail = $_GET['id'];
$prenom = $_GET['prenom'];
$nom = $_GET['nom'];
$titre_offre = $_GET['titre'];
$id_offre = $_GET['id_offre'];





//LES REQUETES D'AFFICHAGES




$title="";
$lien = 'http://localhost/candidature/code_candidature/ec_offre/'.$id_offre.'/'.$mail.'/';
// $auteur= $_SESSION['mail'];
$con = mysqli_connect("localhost","root","","ussein_candidature");

$requete_date =  mysqli_query($con,"SELECT * FROM ec_postuler WHERE id_offre='$id_offre' AND id_candidat='$mail'");
$tab_date = mysqli_fetch_array($requete_date);

// *****  code pour le justificatif licence   *****

$requete_infos_candidat =  mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab_candidat = mysqli_fetch_array($requete_infos_candidat);


$requete_infos_candidat =  mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab_candidat = mysqli_fetch_array($requete_infos_candidat);

// AUTRE INFORMATIONS

$requete_cv = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='cv.pdf'");
$selecteur_cv = mysqli_fetch_array($requete_cv);


// *****  code pour le justificatif master   *****
 
$requete_autre_dossier = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='autre_fichier.pdf'");
$selecteur_autre_dossier = mysqli_fetch_array($requete_autre_dossier);

   
// *****  code pour le justificatif doctorat   *****

$requete_demande = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='lettre_de_motivation.pdf'");
$selecteur_demande = mysqli_fetch_array($requete_demande);

 
    /*       ***   FIN DE CODE PHP POUR LES DIPLOMES   ***           */

 
$requete_licence = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='licence.pdf'");
$selecteur_licence = mysqli_fetch_array($requete_licence);


// *****  code pour le justificatif master   *****
 
$requete_master = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='master.pdf'");
$selecteur_master = mysqli_fetch_array($requete_master);

   
// *****  code pour le justificatif doctorat   *****

$requete_doctorat = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='doctorat.pdf'");
$selecteur_doctorat = mysqli_fetch_array($requete_doctorat);

 
    /*       ***   FIN DE CODE PHP POUR LES DIPLOMES   ***           */

// *****  code pour l'experience secondaire *****
 
$requete_secondaire = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='secondaire.pdf'");
$selecteur_secondaire = mysqli_fetch_array($requete_secondaire);


// *****  code pour l'experience superieur *****
 
$requete_superieur = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='superieur.pdf'");
$selecteur_superieur = mysqli_fetch_array($requete_superieur);


/*       ***   FIN DE CODE PHP POUR LES EXPERIENCES PEDAGOGIQUES   ***           */

// *****  code pour le laboratoire academique  *****
 
$requete_laboratoire = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='laboratoire.pdf'");
$selecteur_laboratoire = mysqli_fetch_array($requete_laboratoire);


// *****  code pour l'institution de recherche   *****
 
$requete_institution = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='institution.pdf'");
$selecteur_institution = mysqli_fetch_array($requete_institution);


// *****  Industrie ou structure de développement,post doc   *****
 
$requete_industrie = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='industrie.pdf'");
$selecteur_industrie = mysqli_fetch_array($requete_industrie);


/*       ***   FIN DE CODE PHP POUR LES EXPERIENCES DE RECHERCHES   ***           */

// *****  Coordonnateur de réseau :   *****
 
$requete_gestion = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='gestion.pdf'");
$selecteur_gestion = mysqli_fetch_array($requete_gestion);


// *****  code pour le Gestion de programme dans les ONG, associations, collectivités et structures étatiques   *****
 
$requete_investigateur = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='investigateur.pdf'");
$selecteur_investigateur = mysqli_fetch_array($requete_investigateur);


// *****  Investigateur principal de projet   *****
 
$requete_coordonnateur = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='coordonnateur.pdf'");
$selecteur_coordonnateur = mysqli_fetch_array($requete_coordonnateur);



/*       ***   FIN DE CODE PHP POUR LES AUTRES EXPERIENCES   ***           */

// *****  code pour les articles indexes  *****
 
$requete_article_indexe = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='article_domaine.pdf'");
$selecteur_article_indexe = mysqli_fetch_array($requete_article_indexe);


// *****  code pour le justificatif licence   *****
 
$requete_article_non_indexe = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='article_hors_domaine.pdf'");
$selecteur_article_non_indexe = mysqli_fetch_array($requete_article_non_indexe);


// *****  code pour le justificatif licence   *****
 
$requete_livre_du_domaine = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='livre_domaine.pdf'");
$selecteur_livre_du_domaine = mysqli_fetch_array($requete_livre_du_domaine);


// *****  code pour le justificatif licence   *****
 
$requete_fiche_technique = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='livre_vulgarisation.pdf'");
$selecteur_fiche_technique = mysqli_fetch_array($requete_fiche_technique);


/*       ***   FIN DE CODE PHP POUR LES PUBLICATIONS   ***           */

// *****  code pour les distinctions   *****
 
$requete_distinction = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='distinction.pdf'");
$selecteur_distinction = mysqli_fetch_array($requete_distinction);

// *****  code pour les grades   *****
 
$requete_grade = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='grade.pdf'");
$selecteur_grade = mysqli_fetch_array($requete_grade);


// *****  code pour les brevets   *****
 
$requete_brevet = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='brevet.pdf'");
$selecteur_brevet = mysqli_fetch_array($requete_brevet);


// *****  code pour les proceding   *****
 
$requete_proceding = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='proceding.pdf'");
$selecteur_proceding = mysqli_fetch_array($requete_proceding);


// *****  code pour la communication de conference  *****
 
$requete_communication_conference = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$mail' and nom_fichier='communication.pdf'");
$selecteur_communication_conference = mysqli_fetch_array($requete_communication_conference);


// ***   FIN DE CODE PHP POUR LES PUBLICATIONS   ***  



// FIN DES REQUETES D'AFFICHAGE 




// L'ensemble des variables pour la partie calcul

// $con = mysqli_connect("localhost","root","","ussein_candidature");

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

mysqli_close($con);




// $id_offre = 3;
// $mail = "mouhamadou.diallo@etu.ussein.edu.sn";
// $prenom = "Cheikh Abdoul Ahad Mbacké";
// $nom = "DIOP";
// $titre_offre = "Voici le titre de mon offre";
?>








<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        color:black;
    }
     
    div.fichier_recapitulatif{
        display:flex;
        flex-direction:column;
        gap:4em 0;
        /* padding: 1% 1%; */
        box-shadow: 2px 2px 10px gray;     
       width:70%;
       margin:1%;
    } 
    div.bordure_interne_du_fichier{
       padding: 2% 1%;
       border: 1px dotted rgb(10,107,49);
       background-color:rgba(10,107,49,0.5);
      
    }
    div.entete_du_fichier{
        display:flex;
        justify-content: space-between;
        gap:1em 2em;
        flex-wrap:wrap;
        margin-bottom: 5%;
    }
    div.contenu_entete{
        display: flex;
        flex-direction: column;
        background-color:white;
        opacity:0.8;
        padding:1em;
  
      
    
        /* align-items: center; */
    }
    div.ce_gauche{
        width:30%;
        align-items:center;
        
    }
    div.ce_droite{
        width:60%;
    }
    div.ce_gauche span{
        font-size: larger;
        text-align: center;
    }
    div.ce_droite span{
        font-size: larger;
        text-align: right;
    }
    img.image_candidature{
        width:100px;height:100px;
    }
    div.corps_du_fichier{
        display: flex;
        flex-direction: column;
        /* gap:6em 0; */
    }
    div.bloc_diplome{
        display:flex;
        justify-content: space-between;
        gap:2em 2em;
        flex-wrap: wrap;
        padding: 2em 1em;
    }
    div.bloc_items{
        display:flex;
        flex-direction: column;
        gap:5% 5%;
    }
    h2{margin-bottom: 1em;}
    div.box_diplome{
        display:flex;
        gap: 1em;
        margin-bottom: 1em;
    }
    label.diplome{
        font-weight:bold;
        font-size:large;
    }
    input.bouton{
       margin-top:2em;
        padding: 1.5% 4%;
        color: white;
        font-size: large;
    }
    input.modifier{
        background-color: rgb(141,54,20);
        float:left;
        
    }
    input.envoyer{
        background-color: rgb(10,107,49);
        float:right;
    }
 
    fieldset.field{
        border-color:rgb(10,107,49) ;
        margin-bottom:4%;
        background-color:white;
        opacity:0.8;
    }
    legend{
        text-align: center;
        font-size: x-large;
        font-weight: bolder;
        background-color:rgb(10,107,49);
        color:white;
        border-radius: 10px;
        padding: 1% 4%;
    }
    h2{
        color:rgb(10,107,49);
    }
    a{
        transition: all 1s;
        color: rgb(10,107,49);
        font-size: large;
    }
    a:hover{
        transform: scale(1.1);
        transition: all 1s;
        text-decoration: none;
    }
    section.corps{
        margin:5% 5%;
       /* width:100%; */
      display: flex;
      flex-direction: column;
      align-items: center;
      padding:1em 2em;
      box-shadow:0 0 20px gray;
    }
    div.dossier_supplementaire{
        display:flex;
        flex-direction:column;
        align-items:center;
        border:2px solid rgb(10,107,49);
    }
    div.contenu_dossier_supplementaire{
        display:flex;
        /* width:100%; */
       
        padding:2em 1em;
        gap:1em;
        flex-wrap:wrap;
    }
    div.fichier_supplementaire{
        display:flex;
        flex-wrap:wrap;
        width:100%;
        padding:1em;
        gap:1em;
        border:2px solid rgb(10,107,49);
    }
    input#enregistrer_dossier{
        margin-bottom:1em;
        color:white;
        font-size:large;
        background:gray;
        padding:1% 4%;
    }
    div.fichier_supplementaire label{
        font-weight:bold;
        font-size:large;
    }
    label.notif_dossier_supp{
        color:rgb(141,54,20);
        font-size:large;
    }
</style>










<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        
        background-image: url('http://localhost/candidature/wp-content/uploads/2021/10/background.jpg');
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
    #a{
    background-color: red;
    color: white;
    width: 400px;
    padding: 2%;
    text-align: justify;
    position: fixed;
    right: 10px;
    border-radius: 10px 100px / 120px;
    z-index: 9000;
    animation: aa 1s ease forwards;
}
@keyframes aa{
    0%{
        transform: translateX(100%);
    }
    40%{
        transform: translateX(-10%);
    }
    80%{
        transform: translateX(0%);
    }
    100%{
        transform: translateX(-10%);
    }
}
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
        display:flex;
        gap:0 2em;
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
    
    div.bloc_menu a img{
        width: 30px;
        height: 30px;
    }
    div.bloc_menu a label{
        vertical-align: 0.9em;
        font-size: large;
        margin-right: 15%;
        cursor: pointer;
        color: #fff;
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
    div.active{
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
    }
    div.titre h1{
        margin-top: 5%;
        margin-right: 15%;
        color: #fff;
    }
    div.titre img{
        width: 30px;
        height: 30px;
        position: relative;
        top: 20%;
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
tr td:last-child{
        width: 10%;
        
    }
    input[type=text]{
        width: 100%;
        height: 100%;
        text-align: right;
        font-size: 1em;
        outline: none;
        border: none;
        background-color: transparent;
        color: #fff;
    }
    select{
        width: 100%;
        height: 100%;
        border: none;
        background-color: transparent;
        color: black;
        outline: none;
        text-align: right;
        font-size: 1em;
    }
    
    table{
        border-collapse:collapse while;
        width:100%;
    }
    th,td{
        border:1px solid white;
        padding:2px;
        text-align:center;
        background-color: rgba(10, 107, 49,0.5);
    }
    td{
        color: #fff;
    }
    select{
        color: #fff;
    }
    option{
        color: #000;
    }

    tr{
        border-right:3px solid white;
        border-left: 3px solid;
    }
    
     .blocD{
        border-top:3px solid white;
     }
     .blocF{
         border-bottom:3px solid white;
     }

    th{
        background-color:rgb(10,107,49);
        color:white;
        /* text-align:left; */
        width: 150px;
        /* border:3px solid; */
    }
    tr:hover{
        background-color:rgb(192,206,0);
    }
    /* .entete{
        position:sticky;
    } */
    div.detail_candidadat{
        display: flex;
        flex-direction: column;
        padding: 2%;
        border: 1px solid;
        background-color: rgb(10,107,49);
        box-shadow: 2px 2px 2px rgb(192,206,0);
        margin: 2%;
    }
    
    label.info{
        color: #fff;
        font-size: large;
    }
    a.lien_candidature{
        text-decoration: none;
        padding: 2%;
        background-color: rgb(10,107,49);
        color: #fff;
        
    }
    .lien{
        margin: 2%;
        text-align: right;
        width: 80%;
    }
    div.main{
        /* display: flex;
        flex-direction: column;
        position: absolute;*/
        margin: 2%; 
        display:flex;
        flex-direction:column;
        /* position:relative; */
         width:100%; 
       
    }
    div.droite_container{
       display:flex;
       flex-direction: row;
        justify-content:center; 
       /* gap:0 1em;  */

    }

    @media(max-width:800px){

        div.droite_container{
         display:flex;
         flex-direction: row;
         flex-wrap:wrap;
         gap:1em 0; 
    
    }
    div.fichier_recapitulatif{
        display:flex;
        flex-direction:column;
        gap:4em 0;
        /* padding: 1% 1%; */
        box-shadow: 2px 2px 10px gray;     
       width:100%;
       margin:2%;
    }
    }
</style>
<body>
    <!-- <div class="container"> -->
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
            <div class="bloc_menu active">
                <a href="http://localhost/candidature/visualisation/">
                    <label>Visualisation</label>
                    <img src="https://img.icons8.com/ios/50/000000/doughnut-chart--v2.png"/>
                </a>
            </div>
            <div class="bloc_menu">
            <a href="http://localhost/candidature/point-modulable/">
                    <label>Point Modulable</label>
                    <img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-calculator-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>
                </a>
            </div>
            <div class="bloc_menu">
                <a href="http://localhost/candidature/parametre/">
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

                        <div class="main">
                            <div class="detail_candidadat">
                                <label class="info">Prénom : <?php echo $prenom ?></label>
                                <label class="info">Nom : <?php echo $nom ?></label>
                                <label class="info">Email : <?php echo $mail ?></label>
                                <label class="info">Titre Offre : <?php echo $titre_offre ?></label>
                                    <?php
                                    if(isset($_SESSION["message_candidat_note"])){
                                        echo $_SESSION["message_candidat_note"];
                                        unset($_SESSION["message_candidat_note"]);
                                    }
                                    ?>
                            </div>
                            <div class="table">
                            <table>
                            <div class="entete"><tr class="blocD blocF"><th>Critères</th><th>détails et précisions</th><th>Candidats</th><th>Note</th></tr></div> 
                            
                                <!-- Age -->
                                <tr class="blocD blocF"><th>Age</th><td> <select name="diplome" id="diplome" onchange="calcul1()"> 
                                <option value=""></option>
                                <option value="Master">Master</option>
                                <option value="Doctorat">Doctorat</option>
                            </select> </td><td> <select name="age" id="age" onchange="calcul1()">
                                <option value=""></option>
                                <option value="Moins de 25 ans">Moins de 25 ans</option>
                                <option value="25-30">25-30</option>
                                <option value="30-35">30-35</option>
                                <option value="35-40">35-40</option>
                                <option value="40-45">40-45</option>
                                <option value="Plus de 45 ans">Plus de 45 ans</option>
                            </select> </td> <td> <input type="text" id="note1" class="note" value="0" disabled><br> </td></tr>

                                <!-- Diplôme -->
                                <tr class="blocD blocF"><th>Diplôme </th><td colspan="2"> <select name="diplomes" id="diplomes" onchange="calcul2()">
                                <option value=""></option>
                                <option value="Doctorat d'état + (PhD ou Doctorat unique)">Doctorat d'état + (PhD ou Doctorat unique)</option>
                                <option value="Doctorat d'état + Doctorat troisième cycle">Doctorat d'état + Doctorat troisième cycle</option>
                                <option value="(PhD ou Doctorat unique)+ Doctorat troisième cycle">(PhD ou Doctorat unique)+ Doctorat troisième cycle</option>
                                <option value="PhD ou Doctorat unique">PhD ou Doctorat unique</option>
                                <option value="Doctorat troisième cycle ou Doctorat d'exercice">Doctorat troisième cycle ou Doctorat d'exercice</option>
                                <option value="Master, DEA ou équivalent">Master, DEA ou équivalent</option>
                            </select> </td><td> <input type="text" id="note2" class="note" disabled value="0"> </td></tr>

                                <!-- licence et Master -->
                                <tr class="blocD"><th rowspan=3> Licence et Master</th> <td>Licence complète en 3 ans</td><td><select name="licence" id="licence" onchange="Calcul3()">
                                <option value=""></option>
                                <option value="Oui">Oui</option>
                                <option value="Non">Non</option>
                            </select></td> <td><input type="text" id="note3" class="note" disabled value="0"></td></tr>
                                <tr>    <td>M1-M2 ou AEA- DEA en 2 ans </td><td><select name="master" id="master" onchange="Calcul4()">
                                <option value=""></option>
                                <option value="Oui">Oui</option>
                                <option value="Non">Non</option>
                            </select></td> <td> <input type="text" id="note4" class="note" disabled value="0"></td></tr>
                                <tr class="blocF"><td>Autres</td><td><select name="autre" id="autre" onchange="Calcul5()">
                                <option value=""></option>
                                <option value="Oui">Oui</option>
                                <option value="Non">Non</option>
                            </select> </td><td><input type="text" id="note5" class="note" value="0" disabled>  </td></tr>



                                <!-- Doctorat -->
                                <tr class="blocD"><th rowspan=3> Doctorat</th> <td> <select name="doctorat1" id="doctorat1" onchange="calcul6()">
                                <option value=""></option>
                                <option value="Thèse troisième cycle">Thèse troisième cycle</option>
                                <option value="Thèse unique ou Ph D">Thèse unique ou Ph D</option>
                            </select></td><td> <select name="duree" id="duree" onchange="calcul6()">
                                <option value=""></option>
                                <option value="Moins de 3 ans">Moins de 3 ans</option>
                                <option value="Entre 3 et 5 ans">Entre 3 et 5 ans</option>
                                <option value="Plus de 5 ans">Plus de 5 ans</option>
                            </select> </td><td> <input type="text" id="note6" class="note" disabled value="0"></td></tr>

                                <tr>    <td>Thèse d’état </td><td><select name="duree2" id="duree2" onchange="calcul7()">
                                <option value=""></option>
                                <option value="Moins de 3 ans">Moins de 3 ans</option>
                                <option value="Entre 3 et 5 ans">Entre 3 et 5 ans</option>
                                <option value="Plus de 5 ans">Plus de 5 ans</option>
                            </select></td><td> <input type="text" id="note7" disabled value="0"> </td></tr>
                                <tr class="blocF"><td>Thèse d’exercice</td><td> <select name="duree3" id="duree3" onchange="calcul8()">
                                <option value=""></option>
                                <option value="inférieur ou égale à 1 ans">inférieur ou égale à 1 ans</option>
                                
                                <option value="Plus de 1 ans">Plus de 1 ans</option>
                            </select> </td><td> <input type="text" id="note8" disabled value="0"> </td></tr>


                                <!-- expériences -->
                                <tr class="blocD"><th rowspan=2>Expérience pédagogique (public ou privé agrée)</th><td>Secondaire</td><td><select name="secondaire" id="secondaire" onchange="calcul9()">
                                <?php for($i=0; $i<=12; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                            </select></td> <td> <input type="text" id="note9" class="note" disabled value="0"> </td></tr>

                                <tr class="blocF"><td>Supéreur</td><td>  <select name="superieur" id="superieur" onchange="calcul10()">
                                <?php for($i=0; $i<=6; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>

                            </select></td><td><input type="text" id="note10" class="note" disabled value="0"> </td></tr>
                                
                                <!-- Experiences recherche -->
                                <tr class="blocD"><th rowspan=4>Experiences recherche</th> <td>laboratoire académique</td><td>
                                    <!-- Select laboratoire académique nombre Max 6-->
                                    <select name="laboratoire_academique" id="laboratoire_academique" onchange="laboratoire_academique()">
                                        <?php for($i=0; $i<=6; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                </td><td>
                                    <!-- Input Pour laboratoire académique-->
                                    <input value="0" type="text" id="note_laboratoire_academique" disabled class="note">
                                </td></tr>
                                <tr>    <td>Institution de recherche </td><td>
                                    <!-- Select Institution de recherche nombre max 8 -->
                                    <select name="institution_recherche" id="institution_recherche" onchange="institution_recherche()">
                                        <?php for($i=0; $i<=8; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                </td><td>
                                    <!-- Input Pour Institution de recherche-->
                                    <input value="0" type="text" id="note_institution_recherche" disabled class="note">
                                </td></tr>
                                <tr><td>Industrie ou structure de développement</td><td>
                                    <!-- Select Industrie ou structure de développement nombre Max 10-->
                                    <select name="industrie_structure_developpement" id="industrie_structure_developpement" onchange="industrie_structure_developpement()">
                                        <?php for($i=0; $i<=10; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                </td><td>
                                    <!-- Input Pour Industrie ou structure de développement-->
                                    <input value="0" type="text" id="note_industrie_structure_developpement" disabled class="note">
                                </td></tr>
                                <tr class="blocF"><td>Post Doc</td><td>
                                    <!-- Select PostDoc nombre Max 5 -->
                                    <select name="postdoc" id="postdoc" onchange="postdoc()">
                                        <?php for($i=0; $i<=5; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                </td><td>
                                    <!-- Input Pour Industrie ou structure de développement-->
                                    <input value="0" type="text" id="note_postdoc" disabled class="note">
                                </td></tr>

                                <!-- Autres experiences-->
                                <tr class="blocD"><th rowspan=3>Autres expériences</th>
                                <td>Gestion de programme dans les ONG, associations, collectivités et structures étatiques</td><td>
                                    <!-- Select Pour Gestion de prrogramme dans les ONG, associations, collectivités et structures étatiques nombre Max 4 -->       
                                    <select name="GestionProgramme" id="GestionProgramme" onchange="GestionProgramme()">
                                        <?php for($i=0; $i<=4; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                </td><td>
                                    <!-- Input Pour Gestion de prrogramme dans les ONG, associations, collectivités et structures étatiques-->
                                    <input value="0" type="text" id="note_GestionProgramme" disabled class="note">
                                </td></tr>
                                <tr>    <td>Investigateur principal de projet</td><td>
                                    <!-- Select Investigateur principal de projet oui-non -->
                                    <select name="investigateur_principal_de_projet" id="investigateur_principal_de_projet" onchange="investigateur_principal_de_projet()">
                                        <option value=""></option>
                                        <option value="1">OUI</option>
                                        <option value="0">NON</option>
                                    </select>
                                </td><td>
                                    <!-- Input Pour Investigateur principal de projet-->
                                    <input value="0" type="text" id="note_investigateur_principal_de_projet" disabled class="note">
                                </td></tr>
                                <tr><td>Coordonnateur de réseau</td><td>
                                    <!-- Select Coordonnateur de réseau oui-non -->
                                    <select name="coordonnateur_de_reseau" id="coordonnateur_de_reseau" onchange="coordonnateur_de_reseau()">
                                        <option value=""></option>
                                        <option value="1">OUI</option>
                                        <option value="0">NON</option>
                                    </select>
                                </td><td>
                                    <!-- Input Pour Coordonnateur de réseau-->
                                    <input value="0" type="text" id="note_coordonnateur_de_reseau" disabled class="note">
                                </td></tr>
                                

                                <!-- Distinction -->
                                <tr class="blocD"><th rowspan=2>Distinctions</th><td>prix et concours</td><td>
                                    <!-- Select Pour Prix Et Concours nombre Max 12 -->       
                                    <select name="prix_concours" id="prix_concours" onchange="prix_concours()">
                                        <?php for($i=0; $i<=12; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                </td> <td>
                                    <!-- Input Pour Prix Et Concours -->
                                    <input value="0" type="text" id="note_prix_concours" disabled class="note">
                                </td></tr>
                                <tr class="blocF"><td>Décoration</td><td>
                                    <!-- Select Pour Décoration nombre Max 13 -->       
                                    <select name="decoration" id="decoration" onchange="decoration()">
                                        <?php for($i=0; $i<=13; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                </td><td>
                                    <!-- Input Pour Décoration -->
                                    <input value="0" type="text" id="note_decoration" disabled class="note">
                                </td></tr>

                                <!-- grade -->
                                <tr class="blocD blocF"><th>Grade</th> <td colspan=2> 
                                    <!-- Select Pour Grade -->
                                    <select name="grade" id="grade" onchange="grade()">
                                        <option value="0"></option>
                                        <option value="1">Prof. Enseignement secondaire</option>
                                        <option value="2">Assistant</option>
                                        <option value="3">Maître assistant</option>
                                        <option value="4">Maître de conférence</option>
                                        <option value="5">Prof. titulaire</option>
                                    </select>
                                </td><td> 
                                    <!-- Input pour grade -->
                                    <input value="0" type="text" id="note_grade" disabled class="note">
                                </td></tr>

                                <!-- Production scientifique -->
                                <tr><th colspan=3> Production scientifique</th><td>  </td> </tr>

                                <!-- brevet -->
                                <tr class="blocD blocF"><th>Brevet</th><td colspan=2>
                                    <!-- Select Brevet oui-non -->
                                    <select name="brevet" id="brevet" onchange="brevet()">
                                        <option value=""></option>
                                        <option value="1">OUI</option>
                                        <option value="0">NON</option>
                                    </select>
                                </td><td>
                                    <!-- Input Pour Brevet -->
                                    <input value="0" type="text" id="note_brevet" disabled class="note">
                                </td></tr>

                                <!-- Article -->
                                <tr class="blocD"><th rowspan=4>Article indéxé du domaine</th><td>Auteur 1</td><td>
                                    <!-- Select Article indéxé du domaine auteur1 max 30 -->
                                    <select name="aid_a1" id="aid_a1" onchange="aid_a1()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Article indéxé du domaine auteur1 max 30-->
                                    <input value="0" type="text" id="note_aid_a1" disabled class="note">
                                </td></tr>
                                <tr><td>Auteur 2</td><td>
                                    <!-- Select Article indéxé du domaine auteur2 max 30 -->
                                    <select name="aid_a2" id="aid_a2" onchange="aid_a2()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Article indéxé du domaine auteur2 max 30-->
                                    <input value="0" type="text" id="note_aid_a2" disabled class="note">
                                </td></tr>
                                <tr><td>Auteur 3</td><td>
                                    <!-- Select Article indéxé du domaine auteur3 max 30 -->
                                    <select name="aid_a3" id="aid_a3" onchange="aid_a3()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Article indéxé du domaine auteur3 max 30-->
                                    <input value="0" type="text" id="note_aid_a3" disabled class="note">
                                </td></tr>
                                <tr class="blocF"><td>Autre auteur</td><td>
                                    <!-- Select Article indéxé du domaine autre auteur max 30 -->
                                    <select name="aid_aa" id="aid_aa" onchange="aid_aa()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Article indéxé du domaine autre auteur auteur max 30-->
                                    <input value="0" type="text" id="note_aid_aa" disabled class="note">
                                </td></tr>

                                <tr class="blocD"><th rowspan=4>Article indexé hors domaine, article non indexé du domaine et article de vulgarisation</th><td>Auteur 1</td><td>
                                    <!-- Select Article indexé hors domaine, article non indexé du domaine et article de vulgarisation auteur1 max 30 -->
                                    <select name="aihd_a1" id="aihd_a1" onchange="aihd_a1()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Article indexé hors domaine, article non indexé du domaine et article de vulgarisation auteur1 max 30-->
                                    <input value="0" type="text" id="note_aihd_a1" disabled class="note">
                                </td></tr>
                                <tr><td>Auteur 2</td><td>
                                    <!-- Select Article indexé hors domaine, article non indexé du domaine et article de vulgarisation auteur2 max 30 -->
                                    <select name="aihd_a2" id="aihd_a2" onchange="aihd_a2()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Article indexé hors domaine, article non indexé du domaine et article de vulgarisation auteur2 max 30-->
                                    <input value="0" type="text" id="note_aihd_a2" disabled class="note">
                                </td></tr>
                                <tr><td>Auteur 3</td><td>
                                    <!-- Select Article indexé hors domaine, article non indexé du domaine et article de vulgarisation auteur3 max 30 -->
                                    <select name="aihd_a3" id="aihd_a3" onchange="aihd_a3()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Article indexé hors domaine, article non indexé du domaine et article de vulgarisation auteur3 max 30-->
                                    <input value="0" type="text" id="note_aihd_a3" disabled class="note">
                                </td></tr>
                                <tr class="blocF"><td>Autre auteur</td><td>
                                        <!-- Select Article indexé hors domaine, article non indexé du domaine et article de vulgarisation autre auteur max 30 -->
                                    <select name="aihd_aa" id="aihd_aa" onchange="aihd_aa()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Article indexé hors domaine, article non indexé du domaine et article de vulgarisation autre auteur max 30 -->
                                    <input value="0" type="text" id="note_aihd_aa" disabled class="note">
                                </td></tr>
                                
                                <tr class="blocD"><th rowspan=4>Livre du domaine</th> <td>Auteur 1</td><td>
                                    <!-- Select Livre du domaine autre1 max 30 -->
                                    <select name="ldd_a1" id="ldd_a1" onchange="ldd_a1()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Livre du domaine autre1 -->
                                    <input value="0" type="text" id="note_ldd_a1" disabled class="note">
                                </td></tr>
                                <tr><td>Auteur 2</td><td>
                                    <!-- Select Livre du domaine autre2 max 30 -->
                                    <select name="ldd_a2" id="ldd_a2" onchange="ldd_a2()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Livre du domaine autre2 -->
                                    <input value="0" type="text" id="note_ldd_a2" disabled class="note">
                                </td></tr>
                                <tr><td>Auteur 3</td><td>
                                    <!-- Select Livre du domaine autre3 max 30 -->
                                    <select name="ldd_a3" id="ldd_a3" onchange="ldd_a3()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Livre du domaine autre3 -->
                                    <input value="0" type="text" id="note_ldd_a3" disabled class="note">
                                </td></tr>
                                <tr class="blocF"><td>Autre auteur</td><td>
                                    <!-- Select Livre du domaine autre auteur max 30 -->
                                    <select name="ldd_aa" id="ldd_aa" onchange="ldd_aa()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Livre du domaine autre auteur -->
                                    <input value="0" type="text" id="note_ldd_aa" disabled class="note">
                                </td></tr>
                                
                                <tr class="blocD"><th rowspan=4>Livre de vulgarisation et fiche technique du domaine</th><td>Auteur 1</td><td>
                                    <!-- Select Livre de vulgarisation et fiche technique du domaine auteur1 max 30 -->
                                    <select name="lv_a1" id="lv_a1" onchange="lv_a1()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Livre de vulgarisation et fiche technique du domaine auteur1 -->
                                    <input value="0" type="text" id="note_lv_a1" disabled class="note">
                                </td></tr>
                                <tr><td>Auteur 2</td><td>
                                    <!-- Select Livre de vulgarisation et fiche technique du domaine auteur2 max 30 -->
                                    <select name="lv_a2" id="lv_a2" onchange="lv_a2()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Livre de vulgarisation et fiche technique du domaine auteur2 -->
                                    <input value="0" type="text" id="note_lv_a2" disabled class="note">
                                </td></tr>
                                <tr><td>Auteur 3</td><td>
                                        <!-- Select Livre de vulgarisation et fiche technique du domaine auteur3 max 30 -->
                                    <select name="lv_a3" id="lv_a3" onchange="lv_a3()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Livre de vulgarisation et fiche technique du domaine auteur3 -->
                                    <input value="0" type="text" id="note_lv_a3" disabled class="note">
                                </td></tr>
                                <tr class="blocF"><td>Autre auteur</td><td>
                                    <!-- Select Livre de vulgarisation et fiche technique du domaine auteura max 30 -->
                                    <select name="lv_aa" id="lv_aa" onchange="lv_aa()">
                                    <?php for($i=0; $i<=30; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?> 
                                    </select>
                                </td><td>
                                    <!-- Input Livre de vulgarisation et fiche technique du domaine autre auteur -->
                                    <input value="0" type="text" id="note_lv_aa" disabled class="note">
                                </td></tr>

                                <!-- Proccedings ou chapitre d'un livre du domaine -->
                                <tr class="blocD blocF"><th>Proccedings ou chapitre d'un livre du domaine</th><td> 
                                    <!-- Select1 Pour Proccedings ou chapitre d'un livre du domaine Oui-Non -->
                                    <select name="Proccedings_chapitre_livre_du_domaine1" id="Proccedings_chapitre_livre_du_domaine1" onchange="Proccedings_chapitre_livre_du_domaine()">
                                        <option value=""></option>
                                        <option value="1">OUI</option>
                                        <option value="0">NON</option>
                                    </select>
                                </td><td>  
                                    <!-- Select2 Pour Proccedings ou chapitre d'un livre du domaine Nombre Max 3 -->
                                    <select name="Proccedings_chapitre_livre_du_domaine2" id="Proccedings_chapitre_livre_du_domaine2" onchange="Proccedings_chapitre_livre_du_domaine()">
                                    <?php for($i=0; $i<=3; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>            
                                    </select>
                                </td><td> 
                                    <!-- Input Pour Proccedings ou chapitre d'un livre du domaine -->
                                    <input value="0" type="text" id="note_Proccedings_chapitre_livre_du_domaine" disabled class="note">
                                </td></tr>

                                <!-- Communication conférence -->
                                <tr class="blocD"><th rowspan=6>Communication conférence</th> <td>Communication orale internationale</td><td> 
                                    <!-- Select Pour Communication orale internationale Nombre Max 5 -->
                                    <select name="Communication_orale_internationale" id="Communication_orale_internationale" onchange="Communication_orale_internationale()">
                                    <?php for($i=0; $i<=3; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                </td><td> 
                                    <!-- Input Pour Communication orale internationale -->
                                    <input value="0" type="text" id="note_Communication_orale_internationale" disabled class="note">
                                    </td></tr>
                                <tr><td>Poster discussion internationale</td><td> 
                                    <!-- Select Pour Poster discussion internationale Nombre Max 4 -->
                                    <select name="poster_discussion_internationale" id="poster_discussion_internationale" onchange="poster_discussion_internationale()">
                                    <?php for($i=0; $i<=4; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                </td><td> 
                                    <!-- Input Pour Poster discussion internationale -->
                                    <input value="0" type="text" id="note_poster_discussion_internationale" disabled class="note">
                                </td></tr>
                                <tr><td>Communication orale nationale</td><td> 
                                    <!-- Select Pour Communication orale nationale Nombre Max 6 -->
                                    <select name="communication_orale_nationale" id="communication_orale_nationale" onchange="communication_orale_nationale()">
                                        <?php for($i=0; $i<=6; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>  
                                    </select>
                                </td><td> 
                                    <!-- Input Communication orale nationale -->
                                    <input value="0" type="text" id="note_communication_orale_nationale" disabled class="note">    
                                </td></tr>
                                <tr><td>Communication nationale affichée</td><td>
                                    <!-- Select Pour Communication nationale affichée Nombre max 4-->
                                    <select name="communication_nationale_affichee" id="communication_nationale_affichee" onchange="communication_nationale_affichee()">
                                        <?php for($i=0; $i<=4; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>    
                                </td><td> 
                                    <!-- Input Communication nationale affichée -->
                                    <input value="0" type="text" id="note_communication_nationale_affichee" disabled class="note">    
                                </td></tr>
                                <tr><td>Conférencier(e) invité(e) international</td><td> 
                                    <!-- Select Pour Conférencier(e) invité(e) international Nombre max 2-->
                                    <select name="conferencier_invite_international" id="conferencier_invite_international" onchange="conferencier_invite_international()">
                                        <?php for($i=0; $i<=2; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>   
                                    </select>
                                </td><td> 
                                    <!-- Input Conférencier(e) invité(e) international -->
                                    <input value="0" type="text" id="note_conferencier_invite_international" disabled class="note">
                                </td></tr>
                                <tr class="blocF"><td>Conférencier(e) national</td><td> 
                                    <!-- Select Pour Conférencier(e) national Nombre max 3-->
                                    <select name="conferencier_national" id="conferencier_national" onchange="conferencier_national()">
                                    <?php for($i=0; $i<=3; $i++){
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                </td><td>  
                                    <!-- Input Conférencier(e) national -->
                                    <input value="0" type="text" id="note_conferencier_national" disabled class="note">
                                </td></tr>
                                <tr><th colspan=2>BONUS VACATION USSEIN</th> <td colspan=2><input type="text" name="bonus" id="bonus"></td></tr>

                            </table>
                            </div>
                            <div class="lien">
                            <a href="#" id="lien_candidature" class="lien_candidature" onclick="note_totale()">
                                Valider Candidature
                            </a>
                            </div>
                            </div>
                <!-- </div> -->

        <!-- </div> -->


 <!-- ********* BLOC DU FORMULAIRE DU CANDIDAT  ******** -->



 <div class="fichier_recapitulatif">
        <div class="bordure_interne_du_fichier">
        <div class="entete_du_fichier">
             <!-- <?php echo $lien='http://localhost/candidature/code_candidature/ec_offre/'.$id_offre.'/'.$mail.'/'; ?> -->
            <div class="contenu_entete ce_gauche">
                <img src="http://localhost/candidature/code_candidature/ec_offre/<?php echo $id_offre; ?>/<?php echo $mail; ?>/<?php echo $tab_candidat['image']
 ; ?>" alt="" class="image_candidature">
                <span><?php echo $tab_candidat['prenom'].' '.$tab_candidat['nom'] ; ?></span>
            </div>

            <div class="contenu_entete ce_droite">
              <span> ne (e) le : <?php echo $tab_candidat['date_de_naissance'];?></span>
              <span>Sexe : <?php echo $tab_candidat['genre']; ?></span>
              <!-- <span>mail : <?php echo $tab_candidat['mail']; ?></span> -->
              <span>Tel : <?php echo $tab_candidat['telephone']; ?></span>
              <span>adresse: <?php echo $tab_candidat['adresse']; ?></span>
              <span>Postuler depuis: <?php echo $tab_date['date']; ?></span>
            </div>
            
        </div>
        <div class="corps_du_fichier">
            <!-- POUR DIPLOME -->
            <fieldset class="field">
            <legend>MES DIPLOMES</legend>
            <div class="bloc_diplome">
                    <div class="box_diplome">
                    <label class="diplome">Diplome licence : </label>
                    <?php
                    if(($selecteur_licence['lien']!="")){

                        $title="votre fichier justificatif";?>
                        <a href="<?php echo $selecteur_licence['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_licence['nom_fichier'] ?></a>
                        
                        <?php }
                        
                        else  if(isset($selecteur_licence['nom_fichier'])){

$title="votre fichier justificatif";?>
<a href="<?php echo $lien.$selecteur_licence['nom_fichier'] ;?>" title="<?php echo $title ?>" target="_blank" class="justificatif"><?php echo $selecteur_licence['nom_fichier'] ?></a>

<?php }

else{

$selecteur_licence['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_licence['nom_fichier'] ?></a>
<?php  }  ?>
                    </div> 
                  
                    <div class="box_diplome">
                    <label class="diplome">Diplome master : </label>
                    <?php
                    
                    if(( $selecteur_master['lien'])!=""){

                        $title="votre fichier justificatif"; ?>
                        
                        <a href="<?php echo $selecteur_master['lien'] ;?>" title="<?php echo $title ?>" class="justificatif"  target="_blank"><?php echo $selecteur_master['nom_fichier']; ?></a>
                        
                        <?php }
                        
                        else if(isset( $selecteur_master['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_master['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"  target="_blank"><?php echo $selecteur_master['nom_fichier']; ?></a>

<?php }

else { $selecteur_master['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_master['nom_fichier']; ?></a>
<?php  }  ?>
                    </div> 
                
                    <div class="box_diplome">
                    <label class="diplome">Diplome doctorat : </label>
                    <?php 
                    if(( $selecteur_doctorat['lien'])!=""){

                        $title="votre fichier justificatif"; ?>
                        
                        <a href="<?php echo $selecteur_doctorat['lien'] ;?>" title="<?php echo $title ?>" class="justificatif"  target="_blank"><?php echo $selecteur_doctorat['nom_fichier']; ?></a>
                        
                        <?php }
                        
                        else if(isset($selecteur_doctorat['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_doctorat['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"  target="_blank"><?php echo $selecteur_doctorat['nom_fichier'] ?></a>

<?php }

else{

$selecteur_doctorat['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_doctorat['nom_fichier'] ?></a>
<?php  }  ?>
                    </div> 
            </div>
            </fieldset>
           <!-- POUR EXPERIENCE -->
          
           <fieldset class="field">
            <legend>MES EXPERIENCES</legend>
            <div class="bloc_diplome">
                <div class="bloc_items">
                    <h2>Pedagogique</h2>
                    <div class="box_diplome">
                    <label class="diplome">Experience secondaire : </label>
                    <?php 
                    if(($selecteur_secondaire['lien'])!=""){

                        $title="votre fichier justificatif";?>
                        <a href="<?php echo $selecteur_secondaire['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_secondaire['nom_fichier'] ?></a>
                        
                        <?php }
                        
                        else if(isset($selecteur_secondaire['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_secondaire['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_secondaire['nom_fichier'] ?></a>

<?php }

else{

$selecteur_secondaire['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_secondaire['nom_fichier'] ?></a>
<?php  }  ?>
                    </div> 
                  
                    <div class="box_diplome">
                    <label class="diplome">Experience superieur : </label>
                    <?php
                    if(($selecteur_superieur['lien'])!=""){

                        $title="votre fichier justificatif";?>
                        <a href="<?php echo $selecteur_superieur['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_superieur['nom_fichier'] ?></a>
                        
                        <?php }
                        
                        else if(isset($selecteur_superieur['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_superieur['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_superieur['nom_fichier'] ?></a>

<?php }

else{

$selecteur_superieur['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_superieur['nom_fichier'] ?></a>
<?php  }  ?>
                    </div> 
                </div>  

                 
                <div class="bloc_items">
                    <h2>Recherche</h2>
                    <div class="box_diplome">
                    <label class="diplome">laboratoire académique : </label>
                    <?php   
                    if(($selecteur_laboratoire['lien'])!=""){

                        $title="votre fichier justificatif";?>
                        <a href="<?php echo $selecteur_laboratoire['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_laboratoire['nom_fichier'] ?></a>
                        
                        <?php }
                        
                        else  if(isset($selecteur_laboratoire['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_laboratoire['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_laboratoire['nom_fichier'] ?></a>

<?php }

else{

$selecteur_laboratoire['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_laboratoire['nom_fichier'] ?></a>
<?php  }  ?>
                    </div> 
                  
             
                    <div class="box_diplome">
                    <label class="diplome">Institution de recherche : </label>
                    <?php
                    if(($selecteur_institution['lien'])!=""){

                        $title="votre fichier justificatif";?>
                        <a href="<?php echo $selecteur_institution['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_institution['nom_fichier'] ?></a>
                        
                        <?php }
                        
                        else if(isset($selecteur_institution['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_institution['nom_fichier'] ;?>" title="<?php echo $title  ?>" class="justificatif" target="_blank"><?php echo $selecteur_institution['nom_fichier'] ?></a>

<?php }

else{

$selecteur_institution['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_institution['nom_fichier'] ?></a>
<?php  }  ?>
                    </div> 
                
                    <div class="box_diplome">
                    <label class="diplome">Industrie ou structure de développement,post doc : </label>
                    <?php
                    if(($selecteur_industrie['lien'])!=""){
                        $title="votre fichier justificatif";?>
                        <a href="<?php echo $selecteur_industrie['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_industrie['nom_fichier'] ?></a>
                        
                        <?php }
                        
                        else if(isset($selecteur_industrie['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_industrie['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_industrie['nom_fichier'] ?></a>

<?php }

else{

$selecteur_industrie['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_industrie['nom_fichier'] ?></a>
<?php  }  ?>
                    </div> 
                </div>   
                <div class="bloc_items">
                    <h2>Autres</h2>
                    <div class="box_diplome">
                    <label class="diplome">Investigateur principal de projet : </label>
                       
                    <?php
                    if(($selecteur_investigateur['lien'])!=""){

                        $title="votre fichier justificatif";?>
                        <a href="<?php echo $selecteur_investigateur['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_investigateur['nom_fichier'] ?></a>
                        
                        <?php }
                        
                        else if(isset($selecteur_investigateur['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_investigateur['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_investigateur['nom_fichier'] ?></a>

<?php }

else{

$selecteur_investigateur['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_investigateur['nom_fichier'] ?></a>
<?php  }  ?>
                    </div>  
   
                    <div class="box_diplome">
                    <label class="diplome">Gestion de programme dans les ONG, associations, collectivités et structures étatiques : </label>
                    
                             <?php 
                             if(($selecteur_gestion['lien'])!=""){

                                $title="votre fichier justificatif";?>
                                <a href="<?php echo $selecteur_gestion['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_gestion['nom_fichier'] ?></a>
                                
                                <?php }
                                
                                else if(isset($selecteur_gestion['nom_fichier'])){

$title="votre fichier justificatif";?>

<a href="<?php echo $lien.$selecteur_gestion['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_gestion['nom_fichier'] ?></a>

<?php }

else{

$selecteur_gestion['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_gestion['nom_fichier'] ?></a>
<?php  }  ?> 

                    </div> 
                    </div> 
                   
                
                    <div class="box_diplome">
                    <label class="diplome">Coordonnateur de réseau : </label>
                    <?php 
                    if(($selecteur_coordonnateur['lien'])!=""){

                        $title="votre fichier justificatif";?>
                        <a href="<?php echo $selecteur_coordonnateur['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_coordonnateur['nom_fichier'] ?></a>
                        
                        <?php }
                        
                        else if(isset($selecteur_coordonnateur['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_coordonnateur['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_coordonnateur['nom_fichier'] ?></a>

<?php }

else{

$selecteur_coordonnateur['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_coordonnateur['nom_fichier'] ?></a>
<?php  }  ?>
                    </div> 
                </div>    
            </div>
            </fieldset>

            <!-- POUR PUBLICATION -->
            <fieldset class="field">
                <legend>MES PUBLICATIONS</legend>
                <div class="bloc_diplome">
                        <div class="box_diplome">
                        <label class="diplome"> Article indéxé du domaine : </label>
                        <?php 
                        if(($selecteur_article_indexe['lien'])!=""){

                            $title="votre fichier justificatif";?>
                            <a href="<?php echo $selecteur_article_indexe['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_article_indexe['nom_fichier'] ?></a>
                            
                            <?php }
                            
                            else if(isset($selecteur_article_indexe['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_article_indexe['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_article_indexe['nom_fichier'] ?></a>

<?php }

else{

$selecteur_article_indexe['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_article_indexe['nom_fichier'] ?></a>
<?php  }  ?>
                        </div> 

                        <div class="box_diplome">
                        <label class="diplome">Article indexé hors domaine, article non indexé du domaine et article de vulgarisation : </label>
                        <?php 
                        if(($selecteur_article_non_indexe['lien'])!=""){

                            $title="votre fichier justificatif";?>
                            <a href="<?php echo $selecteur_article_non_indexe['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_article_non_indexe['nom_fichier'] ?></a>
                            
                            <?php }
                            
                            else if(isset($selecteur_article_non_indexe['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_article_non_indexe['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_article_non_indexe['nom_fichier'] ?></a>

<?php }

else{

$selecteur_article_non_indexe['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_article_non_indexe['nom_fichier'] ?></a>
<?php  }  ?>
                        </div> 
                   
                        <div class="box_diplome">
                        <label class="diplome">Livre du domaine : </label>
                        <?php 
                        if(($selecteur_livre_du_domaine['lien'])!=""){

                            $title="votre fichier justificatif";?>
                            <a href="<?php echo $selecteur_livre_du_domaine['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_livre_du_domaine['nom_fichier'] ?></a>
                            
                            <?php }
                            
                            else if(isset($selecteur_livre_du_domaine['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_livre_du_domaine['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_livre_du_domaine['nom_fichier'] ?></a>

<?php }

else{

$selecteur_livre_du_domaine['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_livre_du_domaine['nom_fichier'] ?></a>
<?php  }  ?>
                        </div> 

                        <div class="box_diplome">
                            <label class="diplome">Livre de vulgarisation et fiche technique du domaine : </label>
                       
                            <?php 
                            if(($selecteur_fiche_technique['lien'])!=""){

                                $title="votre fichier justificatif";?>
                                <a href="<?php echo $selecteur_fiche_technique['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_fiche_technique['nom_fichier'] ?></a>
                                
                                <?php }
                                
                                else if(isset($selecteur_fiche_technique['nom_fichier'])){

$title="votre fichier justificatif";?>

<a href="<?php echo $lien.$selecteur_fiche_technique['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_fiche_technique['nom_fichier'] ?></a>

<?php }

else{

$selecteur_fiche_technique['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_fiche_technique['nom_fichier'] ?></a>
<?php  }  ?>
                        </div> 
                </div>
                </fieldset>

                  <!-- POUR AUTRES -->
            <fieldset class="field">
                <legend>Autres</legend>
                <div class="bloc_diplome">
                        <div class="box_diplome">
                        <label class="diplome"> Distinction : </label>
                     
                    <?php 
                    if(($selecteur_distinction['lien'])!=""){

                        $title="votre fichier justificatif";?>
                        <a href="<?php echo $selecteur_distinction['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_distinction['nom_fichier'] ?></a>
                        
                        <?php }
                        
                        else if(isset($selecteur_distinction['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_distinction['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_distinction['nom_fichier'] ?></a>

<?php }

else{

$selecteur_distinction['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_distinction['nom_fichier'] ?></a>
<?php  }  ?> 
                        </div> 

                        <div class="box_diplome">
                        <label class="diplome">Grade: </label>
                        <?php 
                        if(($selecteur_grade['lien'])!=""){

                            $title="votre fichier justificatif";?>
                            <a href="<?php echo $selecteur_grade['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_grade['nom_fichier'] ?></a>
                            
                            <?php }
                            
                            else if(isset($selecteur_grade['nom_fichier'])){

$title="votre fichier justificatif";?>

<a href="<?php echo $lien.$selecteur_grade['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_grade['nom_fichier'] ?></a>

<?php }

else{

$selecteur_grade['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_grade['nom_fichier'] ?></a>
<?php  }  ?>
                        </div> 
                 
                        <div class="box_diplome">
                        <label class="diplome">Brevet: </label>
                        <?php 
                        if(($selecteur_brevet['lien'])!=""){

                            $title="votre fichier justificatif";?>
                            <a href="<?php echo $selecteur_brevet['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_brevet['nom_fichier'] ?></a>
                            
                            <?php }
                            
                            else if(isset($selecteur_brevet['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_brevet['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_brevet['nom_fichier'] ?></a>

<?php }

else{

$selecteur_brevet['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_brevet['nom_fichier'] ?></a>
<?php  }  ?>
                        </div> 
                       
                        <div class="box_diplome">
                            <label class="diplome">Proccedings ou chapitre d'un livre du domaine : </label>
                            <?php 
                            if(($selecteur_procceding['lien'])!=""){

                                $title="votre fichier justificatif";?>
                                <a href="<?php echo $selecteur_procceding['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_procceding['nom_fichier'] ?></a>
                                
                                <?php }
                                
                                else if(isset($selecteur_procceding['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_procceding['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_procceding['nom_fichier'] ?></a>

<?php }

else{

$selecteur_proceding['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_procceding['nom_fichier'] ?></a>
<?php  }  ?>
                        </div> 

                        <div class="box_diplome">
                            <label class="diplome">Communication conférence : </label>
                            <?php 
                            if(($selecteur_communication_conference['lien'])!=""){

                                $title="votre fichier justificatif";?>
                                <a href="<?php echo $selecteur_communication_conference['lien'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_communication_conference['nom_fichier'] ?></a>
                                
                                <?php }
                                
                                else if(isset($selecteur_communication_conference['nom_fichier'])){

                                 $title="votre fichier justificatif"; ?>

                                 <a href="<?php echo $lien.$selecteur_communication_conference['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif" target="_blank"><?php echo $selecteur_communication_conference['nom_fichier'] ?></a>

                                 <?php }

                                else{

                                 $selecteur_communication_conference['nom_fichier']="NEANT";
                                 $title="Pas de fichier justificatif uplaoder";?>
                                 <a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_communication_conference['nom_fichier'] ?></a>
                               <?php  }  ?>
                        </div> 
                </div>
                </fieldset>
               
               
                   <!-- POUR DOSSIER SUPPLEMENTAIRE -->
            <fieldset class="field">
            <legend>DOSSIER SUPPLEMENTAIRE</legend>
            <div class="bloc_diplome">
                    <div class="box_diplome">
                    <label class="diplome">CV : </label>
                    <?php if(isset($selecteur_cv['nom_fichier'])){

$title="votre fichier justificatif";?>
<a href="<?php echo $lien.$selecteur_cv['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_cv['nom_fichier'] ?></a>

<?php }

else{

$selecteur_cv['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_cv['nom_fichier'] ?></a>
<?php  }  ?>
                    </div> 
                  
                    <div class="box_diplome">
                    <label class="diplome">DEMANDE : </label>
                    <?php if(isset( $selecteur_demande['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $selecteur_demande['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php $selecteur_demande['nom_fichier']; ?></a>

<?php }

else { $selecteur_demande['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_demande['nom_fichier']; ?></a>
<?php  }  ?>
                    </div> 
                
                    <div class="box_diplome">
                    <label class="diplome">AUTRE DOSSIER : </label>
                    <?php if(isset($selecteur_autre_dossier['nom_fichier'])){

$title="votre fichier justificatif"; ?>

<a href="<?php echo $lien.$selecteur_autre_dossier['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_autre_dossier['nom_fichier'] ?></a>

<?php }

else{

$selecteur_autre_dossier['nom_fichier']="NEANT";
$title="Pas de fichier justificatif uplaoder";?>
<a title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_autre_dossier['nom_fichier'] ?></a>
<?php  }  ?>
                    </div> 
            </div>
            </fieldset>


    </div>
    </div>

<!-- ******* FIN DU BLOC DU FORMULAIRE DU CANDIDAT ******* -->


</div>


<!-- Fonction JavaScripte Pour Le calcul des notes -->


<script>
    function calcul1(){
        var diplome= document.getElementById("diplome").value;
        var age= document.getElementById("age").value;
        var note= document.getElementById("note1");
        
        if((age=="")||(diplome=="")){
            note.value="0";
        }

        else if(age=="Moins de 25 ans"){
            if(diplome=="Master"){
                note.value=<?php echo json_encode($can_note_age_1); ?>;
            }
            else{
                note.value=<?php echo json_encode($can_note_age_7); ?>;
            }
        }
        else if(age=="25-30"){
            if(diplome=="Master"){
                note.value=<?php echo json_encode($can_note_age_2); ?>;
            }
            else{
                note.value=<?php echo json_encode($can_note_age_8); ?>;
            }
        }
        else if(age=="30-35"){
            if(diplome=="Master"){
                note.value=<?php echo json_encode($can_note_age_3); ?>;
            }
            else{
                note.value=<?php echo json_encode($can_note_age_9); ?>;
            }
        }
        else if(age=="35-40"){
            if(diplome=="Master"){
                note.value=<?php echo json_encode($can_note_age_4); ?>;
            }
            else{
                note.value=<?php echo json_encode($can_note_age_10); ?>;
            }
        }

        else if(age=="40-45"){
            if(diplome=="Master"){
                note.value=<?php echo json_encode($can_note_age_5); ?>;
            }
            else{
                note.value=<?php echo json_encode($can_note_age_11); ?>;
            }
        }
        else if(age=="Plus de 45 ans"){
            if(diplome=="Master"){
                note.value=<?php echo json_encode($can_note_age_6); ?>;
            }
            else{
                note.value=<?php echo json_encode($can_note_age_12); ?>;
            }
        }
    }


    function calcul2(){
        var diplome= document.getElementById("diplomes").value;
        var note= document.getElementById("note2");
        if(diplome==""){
            note.value=$can_note_diplome_7 = $tab2[5][0];
        }
        else if(diplome=="Doctorat d'état + (PhD ou Doctorat unique)"){
            note.value=<?php echo json_encode($can_note_diplome_1); ?>;
        }
        else if(diplome=="Doctorat d'état + Doctorat troisième cycle"){
            note.value=<?php echo json_encode($can_note_diplome_2); ?>;
        }
        else if(diplome=="(PhD ou Doctorat unique)+ Doctorat troisième cycle"){
            note.value=<?php echo json_encode($can_note_diplome_3); ?>;
        }
        else if(diplome=="PhD ou Doctorat unique"){
            note.value=<?php echo json_encode($can_note_diplome_4); ?>;
        }
        else if(diplome=="Doctorat troisième cycle ou Doctorat d'exercice"){
            note.value=<?php echo json_encode($can_note_diplome_5); ?>;
        }
        else if(diplome=="Master, DEA ou équivalent"){
            note.value=<?php echo json_encode($can_note_diplome_6); ?>;
        }


    }

    function Calcul3(){
        var valeur= document.getElementById("licence").value;
        var note= document.getElementById("note3");
        if(valeur=="Oui"){
            note.value=<?php echo json_encode($can_note_licence_master_1); ?>
        }
        else{
            note.value=<?php echo json_encode($can_note_licence_master_2); ?>
        }
    }

    function Calcul4(){
        var valeur= document.getElementById("master").value;
        var note= document.getElementById("note4");
        if(valeur=="Oui"){
            note.value=<?php echo json_encode($can_note_licence_master_3); ?>
        }
        else{
            note.value=<?php echo json_encode($can_note_licence_master_4); ?>
        }
    }

    function Calcul5(){
        var valeur= document.getElementById("autre").value;
        var note= document.getElementById("note5");
        if(valeur=="Oui"){
            note.value=<?php echo json_encode($can_note_licence_master_5);?>
        }
        else{
            note.value=<?php echo json_encode($can_note_licence_master_6);?>
        }
    }

    function calcul6(){
        var diplome= document.getElementById("doctorat1").value;
        var durees= document.getElementById("duree").value;
        var note= document.getElementById("note6");

        if((durees=='')||(diplome=='')){
            note.value="0";
        }
        else if (durees=="Moins de 3 ans"){
            if(diplome=="Thèse troisième cycle"){
                note.value=<?php echo json_encode($can_note_doctorat_1);?>;
            }
            else{
                note.value=<?php echo json_encode($can_note_doctorat_4);?>;
            }
        }
        else if (durees=="Entre 3 et 5 ans"){
            if(diplome=="Thèse troisième cycle"){
                note.value=<?php echo json_encode($can_note_doctorat_2);?>;
            }
            else{
                note.value=<?php echo json_encode($can_note_doctorat_5);?>;
            }
        }
        else if (durees=="Plus de 5 ans"){
            if(diplome=="Thèse troisième cycle"){
                note.value=<?php echo json_encode($can_note_doctorat_3);?>;
            }
            else{
                note.value=<?php echo json_encode($can_note_doctorat_6);?>;
            }
        }
        
        
    }

    function calcul7(){
        var duree= document.getElementById("duree2").value;
        var note= document.getElementById("note7");

        if(duree==''){
            note.value="0";
        }
        else if (duree=="Moins de 3 ans"){    
                note.value=<?php echo json_encode($can_note_doctorat_7);?>
        }
        else if (duree=="Entre 3 et 5 ans"){
                note.value=<?php echo json_encode($can_note_doctorat_8);?>
        }
        else if (duree=="Plus de 5 ans"){
                note.value=<?php echo json_encode($can_note_doctorat_9);?>
        }
    }

    function calcul8(){
        var duree= document.getElementById("duree3").value;
        var note= document.getElementById("note8");

        if(duree==''){
            note.value="0";
        }
        else if (duree=="inférieur ou égale à 1 ans"){    
                note.value=<?php echo json_encode($can_note_doctorat_10);?>
        }
        else if (duree=="Plus de 1 ans"){
                note.value=<?php echo json_encode($can_note_doctorat_11);?>
        }
        
        
    }

    function calcul9(){
        var nombre= document.getElementById("secondaire").value;
        var note= document.getElementById("note9");
        if(nombre==""){
            note.value="0";
        }
        else if(0<nombre<13){
            note.value=nombre*<?php echo json_encode($can_note_experience_pedagogique_1);?>;
        }
        else{
            note.value=0;
        }
        
    }

    function calcul10(){
        var nombre= document.getElementById("superieur").value;
        var note= document.getElementById("note10");
        if(nombre==""){
            note.value="0";
        }
        else if(0<nombre<7){
            note.value=nombre*<?php echo json_encode($can_note_experience_pedagogique_2);?>;
        }
        else{
            note.value="0";
        }
        
    }

    // Fonction Pour Communication orale internationale
    function Communication_orale_internationale(){
        var nombre_Communication_orale_internationale = document.getElementById('Communication_orale_internationale').value
        document.getElementById('note_Communication_orale_internationale').value = nombre_Communication_orale_internationale*<?php echo json_encode($can_note_communication_conference_1);?>;
    }


    // Fonction Pour Poster discussion internationale
    function poster_discussion_internationale(){
        var nombre_poster_discussion_internationale = document.getElementById('poster_discussion_internationale').value
        document.getElementById('note_poster_discussion_internationale').value = nombre_poster_discussion_internationale*<?php echo json_encode($can_note_communication_conference_2);?>;
    }


    //Fonction Pour Communication Orale National
    function communication_orale_nationale(){
        var nombre_communication_orale_nationale = document.getElementById('communication_orale_nationale').value
        document.getElementById('note_communication_orale_nationale').value = nombre_communication_orale_nationale*<?php echo json_encode($can_note_communication_conference_3);?>;
    }


    // Fonction Pour Communication nationale affichée
    function communication_nationale_affichee(){
        var nombre_communication_nationale_affichee = document.getElementById('communication_nationale_affichee').value
        document.getElementById('note_communication_nationale_affichee').value = nombre_communication_nationale_affichee*<?php echo json_encode($can_note_communication_conference_4);?>;
    }


    // Fonction Pour Conférencier(e) invité(e) international
    function conferencier_invite_international(){
        var nombre_conferencier_invite_international = document.getElementById('conferencier_invite_international').value
        document.getElementById('note_conferencier_invite_international').value = nombre_conferencier_invite_international*<?php echo json_encode($can_note_communication_conference_5);?>;
    }


    // Fonction Pour Conférencier national
    function conferencier_national(){
        var nombre_conferencier_national = document.getElementById('conferencier_national').value
        document.getElementById('note_conferencier_national').value = nombre_conferencier_national*<?php echo json_encode($can_note_communication_conference_6);?>;
    }

    //Fonction Proccedings ou chapitre d'un livre du domaine
    function Proccedings_chapitre_livre_du_domaine(){
        var reponse_Proccedings_chapitre_livre_du_domaine = document.getElementById('Proccedings_chapitre_livre_du_domaine1').value
        var nombre_Proccedings_chapitre_livre_du_domaine =document.getElementById('Proccedings_chapitre_livre_du_domaine2').value

        if(reponse_Proccedings_chapitre_livre_du_domaine == 0 || reponse_Proccedings_chapitre_livre_du_domaine ==""){
            document.getElementById('note_Proccedings_chapitre_livre_du_domaine').value = <?php echo json_encode($can_note_proccedings_2);?>;
        }
        else if(reponse_Proccedings_chapitre_livre_du_domaine == 1){
            document.getElementById('note_Proccedings_chapitre_livre_du_domaine').value = nombre_Proccedings_chapitre_livre_du_domaine*<?php echo json_encode($can_note_proccedings_1);?>;
        }
    }


    // Fonction grade
    function grade(){
        var reponse_grade = document.getElementById('grade').value
        if(reponse_grade == 0){document.getElementById('note_grade').value = 0}
        else if(reponse_grade == 1){document.getElementById('note_grade').value = <?php echo json_encode($can_note_grade_1);?>}
        else if(reponse_grade == 2){document.getElementById('note_grade').value = <?php echo json_encode($can_note_grade_2);?>}
        else if(reponse_grade == 3){document.getElementById('note_grade').value = <?php echo json_encode($can_note_grade_3);?>}
        else if(reponse_grade == 4){document.getElementById('note_grade').value = <?php echo json_encode($can_note_grade_4);?>}
        else if(reponse_grade == 5){document.getElementById('note_grade').value = <?php echo json_encode($can_note_grade_5);?>}
    }

    // Fonction decoration
    function decoration(){
        var nombre_decoration = document.getElementById('decoration').value
        document.getElementById('note_decoration').value = nombre_decoration*<?php echo json_encode($can_note_distinction_2);?>;
    }
    // Fonction Prix Et Concours
    function prix_concours(){
        var nombre_prix_concours = document.getElementById('prix_concours').value
        document.getElementById('note_prix_concours').value = nombre_prix_concours*<?php echo json_encode($can_note_distinction_1);?>;
    }

    // Fonction GestionProgramme
    function GestionProgramme(){
        var nombre_GestionProgramme = document.getElementById('GestionProgramme').value
        document.getElementById('note_GestionProgramme').value = nombre_GestionProgramme*<?php echo json_encode($can_note_autre_experience_1);?>;
    }

    // Fonction investigateur_principal_de_projet
    function investigateur_principal_de_projet(){
        var reponse_investigateur_principal_de_projet = document.getElementById('investigateur_principal_de_projet').value
        if(reponse_investigateur_principal_de_projet == 0 || reponse_investigateur_principal_de_projet == ""){document.getElementById('note_investigateur_principal_de_projet').value=<?php echo json_encode($can_note_autre_experience_3);?>}
        else if(reponse_investigateur_principal_de_projet == 1){document.getElementById('note_investigateur_principal_de_projet').value=<?php echo json_encode($can_note_autre_experience_2);?>}
    }

    // Fonction coordonnateur_de_reseau
    function coordonnateur_de_reseau(){
        var reponse_coordonnateur_de_reseau = document.getElementById('coordonnateur_de_reseau').value
        if(reponse_coordonnateur_de_reseau == 0 || reponse_coordonnateur_de_reseau == ""){document.getElementById('note_coordonnateur_de_reseau').value=<?php echo json_encode($can_note_autre_experience_5);?>}
        else if(reponse_coordonnateur_de_reseau==1){document.getElementById('note_coordonnateur_de_reseau').value=<?php echo json_encode($can_note_autre_experience_4);?>}
    }
    // Fonction laboratoire_academique
    function laboratoire_academique(){
        var nombre_laboratoire_academique = document.getElementById('laboratoire_academique').value
        document.getElementById('note_laboratoire_academique').value = nombre_laboratoire_academique*<?php echo json_encode($can_note_experience_recherche_1);?>;
    }

    // Fonction Institution de recherche
    function institution_recherche(){
        var nombre_institution_recherche = document.getElementById('institution_recherche').value
        document.getElementById('note_institution_recherche').value = nombre_institution_recherche*<?php echo json_encode($can_note_experience_recherche_2);?>;
    }

    // Fonction industrie_structure_developpement
    function industrie_structure_developpement(){
        var nombre_industrie_structure_developpement = document.getElementById('industrie_structure_developpement').value
        document.getElementById('note_industrie_structure_developpement').value = nombre_industrie_structure_developpement*<?php echo json_encode($can_note_experience_recherche_3);?>;
    }

    // Fonction Post Doc
    function postdoc(){
        var nombre_postdoc = document.getElementById('postdoc').value
        document.getElementById('note_postdoc').value = nombre_postdoc*<?php echo json_encode($can_note_experience_recherche_4);?>;
    }

    // Fonction Brevet
    function brevet(){
        var reponse_brevet = document.getElementById('brevet').value
        if(reponse_brevet == 0 || reponse_brevet == ""){document.getElementById('note_brevet').value=<?php echo json_encode($can_note_brevet_2);?>}
        else if(reponse_brevet == 1){document.getElementById('note_brevet').value=<?php echo json_encode($can_note_brevet_1);?>}
    }

    // Fonction Article indéxé du domaine auteur1
    function aid_a1(){
        var nombre_aid_a1 = document.getElementById('aid_a1').value
        if(nombre_aid_a1*5>30){document.getElementById('note_aid_a1').value = 30}else{document.getElementById('note_aid_a1').value =nombre_aid_a1*<?php echo json_encode($can_note_aid_1);?>}
        aid_a2()
    }

    // Fonction Article indéxé du domaine auteur2
    function aid_a2(){
        var nombre_aid_a2 = document.getElementById('aid_a2').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        if(aid_a1 == 30){
            document.getElementById('note_aid_a2').value = 0
        }
        else if(((nombre_aid_a2*<?php echo json_encode($can_note_aid_2);?>)+aid_a1) >30){
            document.getElementById('note_aid_a2').value = (30-(aid_a1))
        }
            else{
                document.getElementById('note_aid_a2').value = nombre_aid_a2*<?php echo json_encode($can_note_aid_2);?>
            }
        aid_a3()
    }

    // Fonction Article indéxé du domaine auteur3
    function aid_a3(){
        var nombre_aid_a3 = document.getElementById('aid_a3').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        if(aid_a1+aid_a2 == 30){
            document.getElementById('note_aid_a3').value = 0
        }
        else if(((nombre_aid_a3*<?php echo json_encode($can_note_aid_3);?>)+aid_a1+aid_a2) >30){
            document.getElementById('note_aid_a3').value = (30-(aid_a1+aid_a2))
        }
            else{
                document.getElementById('note_aid_a3').value = nombre_aid_a3*<?php echo json_encode($can_note_aid_3);?>
            }
        aid_aa()
    }

    // Fonction Article indéxé du domaine autre auteur
    function aid_aa(){
        var nombre_aid_aa = document.getElementById('aid_aa').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        if(aid_a1+aid_a2+aid_a3 == 30){
            document.getElementById('note_aid_aa').value = 0
        }
        else if(((nombre_aid_aa*<?php echo json_encode($can_note_aid_4);?>)+aid_a1+aid_a2+aid_a3) >30){
            document.getElementById('note_aid_aa').value = (30-(aid_a1+aid_a2+aid_a3))
        }
            else{
                document.getElementById('note_aid_aa').value = nombre_aid_aa*<?php echo json_encode($can_note_aid_4);?>
            }
        aihd_a1()
    }

    // Fonction Article indexé hors domaine, article non indexé du domaine et article de vulgarisation auteur1
    function aihd_a1(){
        var nombre_aihd_a1 = document.getElementById('aihd_a1').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        if(aid_a1+aid_a2+aid_a3+aid_aa == 30){
            document.getElementById('note_aihd_a1').value = 0
        }
        else if(((nombre_aihd_a1*<?php echo json_encode($can_note_aihd_1);?>)+aid_a1+aid_a2+aid_a3+aid_aa) >30){
            document.getElementById('note_aihd_a1').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa))
        }
            else{
                document.getElementById('note_aihd_a1').value = nombre_aihd_a1*<?php echo json_encode($can_note_aihd_1);?>
            }
        aihd_a2()
    }

    // Fonction Article indexé hors domaine, article non indexé du domaine et article de vulgarisation auteur2
    function aihd_a2(){
        var nombre_aihd_a2 = document.getElementById('aihd_a2').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1 == 30){
            document.getElementById('note_aihd_a2').value = 0
        }
        else if(((nombre_aihd_a2*<?php echo json_encode($can_note_aihd_2);?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1) >30){
            document.getElementById('note_aihd_a2').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1))
        }
            else{
                document.getElementById('note_aihd_a2').value = nombre_aihd_a2*<?php echo json_encode($can_note_aihd_2);?>
            }
        aihd_a3()
    }


    // Fonction Article indexé hors domaine, article non indexé du domaine et article de vulgarisation auteur3
    function aihd_a3(){
        var nombre_aihd_a3 = document.getElementById('aihd_a3').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)
        var aihd_a2 = parseInt(document.getElementById('note_aihd_a2').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2 == 30){
            document.getElementById('note_aihd_a3').value = 0
        }
        else if(((nombre_aihd_a3*<?php echo json_encode($can_note_aihd_3);?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2) >30){
            document.getElementById('note_aihd_a3').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2))
        }
            else{
                document.getElementById('note_aihd_a3').value = nombre_aihd_a3*<?php echo json_encode($can_note_aihd_3);?>
            }
        aihd_aa()
    }

    // Fonction Article indexé hors domaine, article non indexé du domaine et article de vulgarisation auteur3
    function aihd_aa(){
        var nombre_aihd_aa = document.getElementById('aihd_aa').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)
        var aihd_a2 = parseInt(document.getElementById('note_aihd_a2').value)
        var aihd_a3 = parseInt(document.getElementById('note_aihd_a3').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3 == 30){
            document.getElementById('note_aihd_aa').value = 0
        }
        else if(((nombre_aihd_aa*<?php echo json_encode($can_note_aihd_4);?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3) >30){
            document.getElementById('note_aihd_aa').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3))
        }
            else{
                document.getElementById('note_aihd_aa').value = nombre_aihd_aa*<?php echo json_encode($can_note_aihd_4);?>
            }
        ldd_a1()
    }

    // Fonction Livre du domaine autre1
    function ldd_a1(){
        var nombre_ldd_a1 = document.getElementById('ldd_a1').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)
        var aihd_a2 = parseInt(document.getElementById('note_aihd_a2').value)
        var aihd_a3 = parseInt(document.getElementById('note_aihd_a3').value)
        var aihd_aa = parseInt(document.getElementById('note_aihd_aa').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa == 30){
            document.getElementById('note_ldd_a1').value = 0
        }
        else if(((nombre_ldd_a1*<?php echo json_encode($can_note_ldd_1 );?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa) >30){
            document.getElementById('note_ldd_a1').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa))
        }
            else{
                document.getElementById('note_ldd_a1').value = nombre_ldd_a1*<?php echo json_encode($can_note_ldd_1 );?>
            }
        ldd_a2()
    }


    // Fonction Livre du domaine autre2

    function ldd_a2(){
        var nombre_ldd_a2 = document.getElementById('ldd_a2').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)
        var aihd_a2 = parseInt(document.getElementById('note_aihd_a2').value)
        var aihd_a3 = parseInt(document.getElementById('note_aihd_a3').value)
        var aihd_aa = parseInt(document.getElementById('note_aihd_aa').value)
        var ldd_a1 = parseInt(document.getElementById('note_ldd_a1').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1 == 30){
            document.getElementById('note_ldd_a2').value = 0
        }
        else if(((nombre_ldd_a2*<?php echo json_encode($can_note_ldd_2);?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1) >30){
            document.getElementById('note_ldd_a2').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1))
        }
            else{
                document.getElementById('note_ldd_a2').value = nombre_ldd_a2*<?php echo json_encode($can_note_ldd_2);?>
            }
        ldd_a3()
    }

    // Fonction Livre du domaine autre3

    function ldd_a3(){
        var nombre_ldd_a3 = document.getElementById('ldd_a3').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)
        var aihd_a2 = parseInt(document.getElementById('note_aihd_a2').value)
        var aihd_a3 = parseInt(document.getElementById('note_aihd_a3').value)
        var aihd_aa = parseInt(document.getElementById('note_aihd_aa').value)
        var ldd_a1 = parseInt(document.getElementById('note_ldd_a1').value)
        var ldd_a2 = parseInt(document.getElementById('note_ldd_a2').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2 == 30){
            document.getElementById('note_ldd_a3').value = 0
        }
        else if(((nombre_ldd_a3*<?php echo json_encode($can_note_ldd_3);?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2) >30){
            document.getElementById('note_ldd_a3').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2))
        }
            else{
                document.getElementById('note_ldd_a3').value = nombre_ldd_a3*<?php echo json_encode($can_note_ldd_3);?>
            }
    ldd_aa()
    }

    // Fonction Livre du domaine autre3

    function ldd_aa(){
        var nombre_ldd_aa = document.getElementById('ldd_aa').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)
        var aihd_a2 = parseInt(document.getElementById('note_aihd_a2').value)
        var aihd_a3 = parseInt(document.getElementById('note_aihd_a3').value)
        var aihd_aa = parseInt(document.getElementById('note_aihd_aa').value)
        var ldd_a1 = parseInt(document.getElementById('note_ldd_a1').value)
        var ldd_a2 = parseInt(document.getElementById('note_ldd_a2').value)
        var ldd_a3 = parseInt(document.getElementById('note_ldd_a3').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3 == 30){
            document.getElementById('note_ldd_aa').value = 0
        }
        else if(((nombre_ldd_aa*<?php echo json_encode($can_note_ldd_4);?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3) >30){
            document.getElementById('note_ldd_aa').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3))
        }
            else{
                document.getElementById('note_ldd_aa').value = nombre_ldd_aa*<?php echo json_encode($can_note_ldd_4);?>
            }
    lv_a1()
    }
    
     // Fonction Livre de vulgarisation et fiche technique du domaine auteur1

     function lv_a1(){
        var nombre_lv_a1 = document.getElementById('lv_a1').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)
        var aihd_a2 = parseInt(document.getElementById('note_aihd_a2').value)
        var aihd_a3 = parseInt(document.getElementById('note_aihd_a3').value)
        var aihd_aa = parseInt(document.getElementById('note_aihd_aa').value)
        var ldd_a1 = parseInt(document.getElementById('note_ldd_a1').value)
        var ldd_a2 = parseInt(document.getElementById('note_ldd_a2').value)
        var ldd_a3 = parseInt(document.getElementById('note_ldd_a3').value)
        var ldd_aa = parseInt(document.getElementById('note_ldd_aa').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa == 30){
            document.getElementById('note_lv_a1').value = 0
        }
        else if(((nombre_lv_a1*<?php echo json_encode($can_note_lv_1);?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa) >30){
            document.getElementById('note_lv_a1').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa))
        }
            else{
                document.getElementById('note_lv_a1').value = nombre_lv_a1*<?php echo json_encode($can_note_lv_1);?>
            }
    lv_a2()
    }


    // Fonction Livre de vulgarisation et fiche technique du domaine auteur1

    function lv_a2(){
        var nombre_lv_a2 = document.getElementById('lv_a2').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)
        var aihd_a2 = parseInt(document.getElementById('note_aihd_a2').value)
        var aihd_a3 = parseInt(document.getElementById('note_aihd_a3').value)
        var aihd_aa = parseInt(document.getElementById('note_aihd_aa').value)
        var ldd_a1 = parseInt(document.getElementById('note_ldd_a1').value)
        var ldd_a2 = parseInt(document.getElementById('note_ldd_a2').value)
        var ldd_a3 = parseInt(document.getElementById('note_ldd_a3').value)
        var ldd_aa = parseInt(document.getElementById('note_ldd_aa').value)
        var lv_a1 = parseInt(document.getElementById('note_lv_a1').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa+lv_a1 == 30){
            document.getElementById('note_lv_a2').value = 0
        }
        else if(((nombre_lv_a2*<?php echo json_encode($can_note_lv_2);?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa+lv_a1) >30){
            document.getElementById('note_lv_a2').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa+lv_a1))
        }
            else{
                document.getElementById('note_lv_a2').value = nombre_lv_a2*<?php echo json_encode($can_note_lv_2);?>
            }
    lv_a3()
    }

     // Fonction Livre de vulgarisation et fiche technique du domaine auteur1

     function lv_a3(){
        var nombre_lv_a3 = document.getElementById('lv_a3').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)
        var aihd_a2 = parseInt(document.getElementById('note_aihd_a2').value)
        var aihd_a3 = parseInt(document.getElementById('note_aihd_a3').value)
        var aihd_aa = parseInt(document.getElementById('note_aihd_aa').value)
        var ldd_a1 = parseInt(document.getElementById('note_ldd_a1').value)
        var ldd_a2 = parseInt(document.getElementById('note_ldd_a2').value)
        var ldd_a3 = parseInt(document.getElementById('note_ldd_a3').value)
        var ldd_aa = parseInt(document.getElementById('note_ldd_aa').value)
        var lv_a1 = parseInt(document.getElementById('note_lv_a1').value)
        var lv_a2 = parseInt(document.getElementById('note_lv_a2').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa+lv_a1+lv_a2 == 30){
            document.getElementById('note_lv_a3').value = 0
        }
        else if(((nombre_lv_a3*<?php echo json_encode($can_note_lv_3);?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa+lv_a1+lv_a2) >30){
            document.getElementById('note_lv_a3').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa+lv_a1+lv_a2))
        }
            else{
                document.getElementById('note_lv_a3').value = nombre_lv_a3*<?php echo json_encode($can_note_lv_3);?>
            }
    lv_aa()
    }

     // Fonction Livre de vulgarisation et fiche technique du domaine autre auteur

     function lv_aa(){
        var nombre_lv_aa = document.getElementById('lv_aa').value
        var aid_a1 = parseInt(document.getElementById('note_aid_a1').value) 
        var aid_a2 = parseInt(document.getElementById('note_aid_a2').value)
        var aid_a3 = parseInt(document.getElementById('note_aid_a3').value)
        var aid_aa = parseInt(document.getElementById('note_aid_aa').value)
        var aihd_a1 = parseInt(document.getElementById('note_aihd_a1').value)
        var aihd_a2 = parseInt(document.getElementById('note_aihd_a2').value)
        var aihd_a3 = parseInt(document.getElementById('note_aihd_a3').value)
        var aihd_aa = parseInt(document.getElementById('note_aihd_aa').value)
        var ldd_a1 = parseInt(document.getElementById('note_ldd_a1').value)
        var ldd_a2 = parseInt(document.getElementById('note_ldd_a2').value)
        var ldd_a3 = parseInt(document.getElementById('note_ldd_a3').value)
        var ldd_aa = parseInt(document.getElementById('note_ldd_aa').value)
        var lv_a1 = parseInt(document.getElementById('note_lv_a1').value)
        var lv_a2 = parseInt(document.getElementById('note_lv_a2').value)
        var lv_a3 = parseInt(document.getElementById('note_lv_a3').value)

        if(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa+lv_a1+lv_a2+lv_a3 == 30){
            document.getElementById('note_lv_aa').value = 0
        }
        else if(((nombre_lv_aa*<?php echo json_encode($can_note_lv_4);?>)+aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa+lv_a1+lv_a2+lv_a3) >30){
            document.getElementById('note_lv_aa').value = (30-(aid_a1+aid_a2+aid_a3+aid_aa+aihd_a1+aihd_a2+aihd_a3+aihd_aa+ldd_a1+ldd_a2+ldd_a3+ldd_aa+lv_a1+lv_a2+lv_a3))
        }
            else{
                document.getElementById('note_lv_aa').value = nombre_lv_aa*<?php echo json_encode($can_note_lv_4);?>
            }
    }

    // Fonction qui calcul la note totale du candidat

    function note_totale(){
        somme_total=parseInt(document.getElementById('note_aid_a1').value)+parseInt(document.getElementById('note_aid_a2').value)+parseInt(document.getElementById('note_aid_a3').value)+parseInt(document.getElementById('note_aid_aa').value)+parseInt(document.getElementById('note_aihd_a1').value)+parseInt(document.getElementById('note_aihd_a2').value)+parseInt(document.getElementById('note_aihd_a3').value)+parseInt(document.getElementById('note_aihd_aa').value)+parseInt(document.getElementById('note_ldd_a1').value)+parseInt(document.getElementById('note_ldd_a2').value)+parseInt(document.getElementById('note_ldd_a3').value)+parseInt(document.getElementById('note_ldd_aa').value)+parseInt(document.getElementById('note_lv_a1').value)+parseInt(document.getElementById('note_lv_a2').value)+parseInt(document.getElementById('note_lv_a3').value)+parseInt(document.getElementById('note_brevet').value)+parseInt(document.getElementById('note_postdoc').value)+parseInt(document.getElementById('note_industrie_structure_developpement').value)+parseInt(document.getElementById('note_institution_recherche').value)+parseInt(document.getElementById('note_laboratoire_academique').value)+parseInt(document.getElementById('note_coordonnateur_de_reseau').value)+parseInt(document.getElementById('note_investigateur_principal_de_projet').value)+parseInt(document.getElementById('note_GestionProgramme').value)+parseInt(document.getElementById('note_prix_concours').value)+parseInt(document.getElementById('note_decoration').value)+parseInt(document.getElementById('note_grade').value)+parseInt(document.getElementById('note_Proccedings_chapitre_livre_du_domaine').value)+parseInt(document.getElementById('note_conferencier_national').value)+parseInt(document.getElementById('note_conferencier_invite_international').value)+parseInt(document.getElementById('note_communication_nationale_affichee').value)+parseInt(document.getElementById('note_communication_orale_nationale').value)+parseInt(document.getElementById('note_poster_discussion_internationale').value)+parseInt(document.getElementById('note_Communication_orale_internationale').value)+parseInt(document.getElementById("note10").value)+parseInt(document.getElementById("note9").value)+parseInt(document.getElementById("note8").value)+parseInt(document.getElementById("note7").value)+parseInt(document.getElementById("note6").value)+parseInt(document.getElementById("note5").value)+parseInt(document.getElementById("note4").value)+parseInt(document.getElementById("note3").value)+parseInt(document.getElementById("note2").value)+parseInt(document.getElementById("note1").value)+parseInt(document.getElementById("bonus").value);
        document.getElementById('lien_candidature').href = "http://localhost/candidature/code_candidature/verification_calcul_offre.php?somme="+somme_total+"&mail="+<?php echo json_encode($mail);?>+"&id_offre="+<?php echo json_encode($id_offre);?>+"&prenom="+<?php echo json_encode($prenom);?>+"&nom="+<?php echo json_encode($nom);?>;
    }
        // alerte message

        setTimeout(function(){
        document.getElementById('a').style.display="none";
    },5000);



    



    
</script>
