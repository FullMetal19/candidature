<?php 
/* template name:recapitulatif */ 
session_start();
get_header();
$auteur =$_SESSION['mail'];
$title="";
$lien = "";
// $auteur= $_SESSION['mail'];
$con = mysqli_connect("localhost","root","","ussein_candidature");

// *****  code pour le justificatif licence   *****

// $requete_infos_candidat =  mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur'");
// $tab_candidat = mysqli_fetch_array($requete_infos_candidat);
 
$requete_licence = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='licence.pdf'");
$selecteur_licence = mysqli_fetch_array($requete_licence);
if(isset($selecteur_licence['nom_fichier'])){
    $selecteur_licence['nom_fichier']=$selecteur_licence['nom_fichier'];
    $title="votre fichier justificatif";
    $lien='http://localhost/candidature/code_candidature/ec_repertoire/'.$auteur.'/';
}
else{
    $selecteur_licence['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour le justificatif master   *****
 
$requete_master = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='master.pdf'");
$selecteur_master = mysqli_fetch_array($requete_master);
if(isset($selecteur_master['nom_fichier'])){
    $selecteur_master['nom_fichier']=$selecteur_master['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_master['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
    }
   
// *****  code pour le justificatif doctorat   *****

$requete_doctorat = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='doctorat.pdf'");
$selecteur_doctorat = mysqli_fetch_array($requete_doctorat);
if(isset($selecteur_doctorat['nom_fichier'])){
    $selecteur_doctorat['nom_fichier']=$selecteur_doctorat['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_doctorat['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

 
    /*       ***   FIN DE CODE PHP POUR LES DIPLOMES   ***           */

// *****  code pour l'experience secondaire *****
 
$requete_secondaire = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='secondaire.pdf'");
$selecteur_secondaire = mysqli_fetch_array($requete_secondaire);
if(isset($selecteur_secondaire['nom_fichier'])){
    $selecteur_secondaire['nom_fichier']=$selecteur_secondaire['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_secondaire['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour l'experience superieur *****
 
$requete_superieur = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='superieur.pdf'");
$selecteur_superieur = mysqli_fetch_array($requete_superieur);
if(isset($selecteur_superieur['nom_fichier'])){
    $selecteur_superieur['nom_fichier']=$selecteur_superieur['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_superieur['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

/*       ***   FIN DE CODE PHP POUR LES EXPERIENCES PEDAGOGIQUES   ***           */

// *****  code pour le laboratoire academique  *****
 
$requete_laboratoire = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='laboratoire.pdf'");
$selecteur_laboratoire = mysqli_fetch_array($requete_laboratoire);
if(isset($selecteur_laboratoire['nom_fichier'])){
    $selecteur_laboratoire['nom_fichier']=$selecteur_laboratoire['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_laboratoire['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour l'institution de recherche   *****
 
$requete_institution = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='institution.pdf'");
$selecteur_institution = mysqli_fetch_array($requete_institution);
if(isset($selecteur_institution['nom_fichier'])){
    $selecteur_institution['nom_fichier']=$selecteur_institution['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_institution['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  Industrie ou structure de développement,post doc   *****
 
$requete_industrie = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='industrie.pdf'");
$selecteur_industrie = mysqli_fetch_array($requete_industrie);
if(isset($selecteur_industrie['nom_fichier'])){
    $selecteur_industrie['nom_fichier']=$selecteur_industrie['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_industrie['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

/*       ***   FIN DE CODE PHP POUR LES EXPERIENCES DE RECHERCHES   ***           */

// *****  Coordonnateur de réseau :   *****
 
$requete_gestion = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='gestion.pdf'");
$selecteur_gestion = mysqli_fetch_array($requete_gestion);
if(isset($selecteur_gestion['nom_fichier'])){
    $selecteur_gestion['nom_fichier']=$selecteur_gestion['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_gestion['nom_dossier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour le Gestion de programme dans les ONG, associations, collectivités et structures étatiques   *****
 
$requete_investigateur = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='investigateur.pdf'");
$selecteur_investigateur = mysqli_fetch_array($requete_investigateur);
if(isset($selecteur_investigateur['nom_fichier'])){
    $selecteur_investigateur['nom_fichier']=$selecteur_investigateur['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_investigateur['nom_dossier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  Investigateur principal de projet   *****
 
$requete_coordonnateur = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='coordonnateur.pdf'");
$selecteur_coordonnateur = mysqli_fetch_array($requete_coordonnateur);
if(isset($selecteur_coordonnateur['nom_fichier'])){
    $selecteur_coordonnateur['nom_fichier']=$selecteur_coordonnateur['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_coordonnateur['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}


/*       ***   FIN DE CODE PHP POUR LES AUTRES EXPERIENCES   ***           */

// *****  code pour les articles indexes  *****
 
$requete_article_indexe = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='article_indexe_du_domaine.pdf'");
$selecteur_article_indexe = mysqli_fetch_array($requete_article_indexe);
if(isset($selecteur_article_indexe['nom_fichier'])){
    $selecteur_article_indexe['nom_fichier']=$selecteur_article_indexe['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_article_indexe['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour le justificatif licence   *****
 
$requete_article_non_indexe = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='article_non_indexe_du_domaine.pdf'");
$selecteur_article_non_indexe = mysqli_fetch_array($requete_article_non_indexe);
if(isset($selecteur_article_non_indexe['nom_fichier'])){
    $selecteur_article_non_indexe['nom_fichier']=$selecteur_article_non_indexe['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_article_non_indexe['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour le justificatif licence   *****
 
$requete_livre_du_domaine = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='livre_du_domaine.pdf'");
$selecteur_livre_du_domaine = mysqli_fetch_array($requete_livre_du_domaine);
if(isset($selecteur_livre_du_domaine['nom_fichier'])){
    $selecteur_livre_du_domaine['nom_fichier']=$selecteur_livre_du_domaine['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_livre_du_domaine['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour le justificatif licence   *****
 
$requete_fiche_technique = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='fiche_technique.pdf'");
$selecteur_fiche_technique = mysqli_fetch_array($requete_fiche_technique);
if(isset($selecteur_fiche_technique['nom_fichier'])){
    $selecteur_fiche_technique['nom_fichier']=$selecteur_fiche_technique['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_fiche_technique['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

/*       ***   FIN DE CODE PHP POUR LES PUBLICATIONS   ***           */

// *****  code pour les distinctions   *****
 
$requete_distinction = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='distinction.pdf'");
$selecteur_distinction = mysqli_fetch_array($requete_distinction);
if(isset($selecteur_distinction['nom_fichier'])){
    $selecteur_distinction['nom_fichier']=$selecteur_distinction['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_distinction['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour les grades   *****
 
$requete_grade = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='grade.pdf'");
$selecteur_grade = mysqli_fetch_array($requete_grade);
if(isset($selecteur_grade['nom_fichier'])){
    $selecteur_grade['nom_dossier']=$selecteur_grade['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_grade['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour les brevets   *****
 
$requete_brevet = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='brevet.pdf'");
$selecteur_brevet = mysqli_fetch_array($requete_brevet);
if(isset($selecteur_brevet['nom_fichier'])){
    $selecteur_brevet['nom_fichier']=$selecteur_brevet['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_brevet['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour les proceding   *****
 
$requete_proceding = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='proceding.pdf'");
$selecteur_proceding = mysqli_fetch_array($requete_proceding);
if(isset($selecteur_proceding['nom_fichier'])){
    $selecteur_proceding['nom_fichier']=$selecteur_proceding['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_proceding['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}

// *****  code pour la communication de conference  *****
 
$requete_communication_conference = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='communication_conference.pdf'");
$selecteur_communication_conference = mysqli_fetch_array($requete_communication_conference);
if(isset($selecteur_communication_conference['nom_fichier'])){
    $selecteur_communication_conference['nom_fichier']=$selecteur_communication_conference['nom_fichier'];
    $title="votre fichier justificatif";
    $lien="http://localhost/candidature/code_candidature/ec_repertoire/";
}
else{
    $selecteur_communication_conference['nom_fichier']="NEANT";
    $title="Pas de fichier justificatif uplaoder";
    $lien="#";
}


// ***   FIN DE CODE PHP POUR LES PUBLICATIONS   ***  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        color:black;
        background-color: white;
    }
    .cspt-title-bar-wrapper{
               display: none;
          }

    div.fichier_recapitulatif{
        display:flex;
        flex-direction:column;
        gap:4em 0;
        padding: 1% 1%;
        margin: 2% 8%;
        box-shadow: 2px 2px 10px gray;    
    }
    div.bordure_interne_du_fichier{
       padding: 2% 4%;
       border: 1px dotted rgb(10,107,49);
       
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
    
        /* align-items: center; */
    }
    span{
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
    }
    div.bouton_modifier{
        float:right;
        padding: 1% 4%;
        color: white;
        
        /* background-color: rgb(10,107,49); */
    }
    input.bouton{
        float:right;
        padding: 5% 2em;
        color: white;
        font-size: large;
        background-color: rgb(10,107,49);
    }
   
    /* input.envoyer{
        background-color: rgb(10,107,49);
    } */
    fieldset{
        border-color:rgb(10,107,49) ;
        margin-bottom:4%;
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
</style>
<body>

    <div class="fichier_recapitulatif">
        <div class="bordure_interne_du_fichier">
        <div class="entete_du_fichier">
             <!-- <?php echo $lien='http://localhost/candidature/code_candidature/ec_repertoire/'.$auteur.'/'; ?> -->
            <div class="contenu_entete">
                <img src="http://localhost/candidature/code_candidature/ec_repertoire/<?php echo $auteur; ?>/<?php echo $_SESSION['image'] ; ?>" alt="" class="image_candidature">
                <span><?php echo $_SESSION['prenom'].' '.$_SESSION['nom'] ; ?></span>
            </div>

            <div class="contenu_entete">
              <span> ne (e) le : <?php echo $_SESSION['date_de_naissance'];?></span>
              <span>Sexe : <?php echo $_SESSION['genre']; ?></span>
              <span>mail : <?php echo $_SESSION['mail']; ?></span>
              <span>Tel : <?php echo $_SESSION['telephone']; ?></span>
              <span>adresse: <?php echo $_SESSION['adresse']; ?></span>
              <span>date: <?php echo date('d - m - Y'); ?></span>
            </div>
            
        </div>
        <div class="corps_du_fichier">
            <!-- POUR DIPLOME -->
            <fieldset>
            <legend>MES DIPLOMES</legend>
            <div class="bloc_diplome">
                    <div class="box_diplome">
                    <label class="diplome">Diplome licence : </label>
                    <a href="<?php echo $lien.$selecteur_licence['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_licence['nom_fichier'] ?></a>
                    </div> 
                  
                    <div class="box_diplome">
                    <label class="diplome">Diplome master : </label>
                    <a href="<?php echo $lien.$selecteur_master['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_master['nom_fichier'] ?></a>
                    </div> 
                
                    <div class="box_diplome">
                    <label class="diplome">Diplome doctorat : </label>
                    <a href="<?php echo $lien.$selecteur_doctorat['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_doctorat['nom_fichier'] ?></a>
                    </div> 
            </div>
            </fieldset>
           <!-- POUR EXPERIENCE -->
          
           <fieldset>
            <legend>MES EXPERIENCES</legend>
            <div class="bloc_diplome">
                <div class="bloc_items">
                    <h2>Pedagogique</h2>
                    <div class="box_diplome">
                    <label class="diplome">Experience secondaire : </label>
                    <a href="<?php echo $lien.$selecteur_secondaire['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_secondaire['nom_fichier'] ?></a>
                    </div> 
                  
                    <div class="box_diplome">
                    <label class="diplome">Experience superieur : </label>
                    <a href="<?php echo $lien.$selecteur_superieur['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_superieur['nom_fichier'] ?></a>
                    </div> 
                </div>   
                <div class="bloc_items">
                    <h2>Recherche</h2>
                    <div class="box_diplome">
                    <label class="diplome">laboratoire académique : </label>
                    <a href="<?php echo $lien.$selecteur_laboratoire['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_laboratoire['nom_fichier'] ?></a>
                    </div> 
                  
                    <div class="box_diplome">
                    <label class="diplome">Institution de recherche : </label>
                    <a href="<?php echo $lien.$selecteur_institution['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_institution['nom_fichier'] ?></a>
                    </div> 
                
                    <div class="box_diplome">
                    <label class="diplome">Industrie ou structure de développement,post doc : </label>
                    <a href="<?php echo $lien.$selecteur_industrie['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_industrie['nom_fichier'] ?></a>
                    </div> 
                </div>   
                <div class="bloc_items">
                    <h2>Autres</h2>
                    <div class="box_diplome">
                    <label class="diplome">Investigateur principal de projet : </label>
                    <a href="<?php echo $lien.$selecteur_investigateur['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_investigateur['nom_fichier'] ?></a>
                    </div>  

                    <div class="box_diplome">
                    <label class="diplome">Gestion de programme dans les ONG, associations, collectivités et structures étatiques : </label>
                    <a href="<?php echo $lien.$selecteur_gestion['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_gestion['nom_fichier'] ?></a>
                    </div> 
                    </div> 
                   
                
                    <div class="box_diplome">
                    <label class="diplome">Coordonnateur de réseau : </label>
                    <a href="<?php echo $lien.$selecteur_coordonnateur['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_coordonnateur['nom_fichier'] ?></a>
                    </div> 
                </div>    
            </div>
            </fieldset>

            <!-- POUR PUBLICATION -->
            <fieldset>
                <legend>MES PUBLICATIONS</legend>
                <div class="bloc_diplome">
                        <div class="box_diplome">
                        <label class="diplome"> Article indéxé du domaine : </label>
                        <a href="<?php echo $lien.$selecteur_article_indexe['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_article_indexe['nom_fichier'] ?></a>
                        </div> 

                        <div class="box_diplome">
                        <label class="diplome">Article indexé hors domaine, article non indexé du domaine et article de vulgarisation : </label>
                        <a href="<?php echo $lien.$selecteur_article_non_indexe['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_article_non_indexe['nom_fichier'] ?></a>
                        </div> 
                    
                        <div class="box_diplome">
                        <label class="diplome">Livre du domaine : </label>
                        <a href="<?php echo $lien.$selecteur_livre_du_domaine['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_livre_du_domaine['nom_fichier'] ?></a>
                        </div> 

                        <div class="box_diplome">
                            <label class="diplome">Livre de vulgarisation et fiche technique du domaine : </label>
                            <a href="<?php echo $lien.$selecteur_fiche_technique['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_fiche_technique['nom_fichier'] ?></a>
                        </div> 
                </div>
                </fieldset>

                  <!-- POUR AUTRES -->
            <fieldset>
                <legend>Autres</legend>
                <div class="bloc_diplome">
                        <div class="box_diplome">
                        <label class="diplome"> Distinction : </label>
                        <a href="<?php echo $lien.$selecteur_distinction['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_distinction['nom_fichier'] ?></a>
                        </div> 

                        <div class="box_diplome">
                        <label class="diplome">Grade: </label>
                        <a href="<?php echo $lien.$selecteur_grade['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_grade['nom_fichier'] ?></a>
                        </div> 
                    
                        <div class="box_diplome">
                        <label class="diplome">Brevet: </label>
                        <a href="<?php echo $lien.$selecteur_brevet['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_brevet['nom_fichier'] ?></a>
                        </div> 
                       
                        <div class="box_diplome">
                            <label class="diplome">Proccedings ou chapitre d'un livre du domaine : </label>
                            <a href="<?php echo $lien.$selecteur_proceding['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_proceding['nom_fichier'] ?></a>
                        </div> 

                        <div class="box_diplome">
                            <label class="diplome">Communication conférence : </label>
                            <a href="<?php echo $lien.$selecteur_communication_conference['nom_fichier'] ;?>" title="<?php echo $title ?>" class="justificatif"><?php echo $selecteur_communication_conference['nom_fichier'] ?></a>
                        </div> 
                </div>
                </fieldset>

        <!-- </div> -->
        <div class="bouton_modifier">
            <input type="submit" value="Modifier" class="bouton">
            
        </div>
    </div>
    </div>
</body>
</html>

