<?php 
/* template name:fiche a postuler */ 
session_start();
$auteur =$_SESSION['mail'];
$info = $_GET['info'];
$_SESSION['info_candidat']=$info;
$title="";
$lien = 'http://localhost/candidature/code_candidature/ec_repertoire/'.$auteur.'/';
// $auteur= $_SESSION['mail'];
$con = mysqli_connect("localhost","root","","ussein_candidature");

// *****  code pour le justificatif licence   *****

$requete_infos_candidat =  mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$auteur'");
$tab_candidat = mysqli_fetch_array($requete_infos_candidat);
 
$requete_licence = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='licence.pdf'");
$selecteur_licence = mysqli_fetch_array($requete_licence);


// *****  code pour le justificatif master   *****
 
$requete_master = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='master.pdf'");
$selecteur_master = mysqli_fetch_array($requete_master);

   
// *****  code pour le justificatif doctorat   *****

$requete_doctorat = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='doctorat.pdf'");
$selecteur_doctorat = mysqli_fetch_array($requete_doctorat);

 
    /*       ***   FIN DE CODE PHP POUR LES DIPLOMES   ***           */

// *****  code pour l'experience secondaire *****
 
$requete_secondaire = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='secondaire.pdf'");
$selecteur_secondaire = mysqli_fetch_array($requete_secondaire);


// *****  code pour l'experience superieur *****
 
$requete_superieur = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='superieur.pdf'");
$selecteur_superieur = mysqli_fetch_array($requete_superieur);


/*       ***   FIN DE CODE PHP POUR LES EXPERIENCES PEDAGOGIQUES   ***           */

// *****  code pour le laboratoire academique  *****
 
$requete_laboratoire = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='laboratoire.pdf'");
$selecteur_laboratoire = mysqli_fetch_array($requete_laboratoire);


// *****  code pour l'institution de recherche   *****
 
$requete_institution = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='institution.pdf'");
$selecteur_institution = mysqli_fetch_array($requete_institution);


// *****  Industrie ou structure de d??veloppement,post doc   *****
 
$requete_industrie = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='industrie.pdf'");
$selecteur_industrie = mysqli_fetch_array($requete_industrie);


/*       ***   FIN DE CODE PHP POUR LES EXPERIENCES DE RECHERCHES   ***           */

// *****  Coordonnateur de r??seau :   *****
 
$requete_gestion = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='gestion.pdf'");
$selecteur_gestion = mysqli_fetch_array($requete_gestion);


// *****  code pour le Gestion de programme dans les ONG, associations, collectivit??s et structures ??tatiques   *****
 
$requete_investigateur = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='investigateur.pdf'");
$selecteur_investigateur = mysqli_fetch_array($requete_investigateur);


// *****  Investigateur principal de projet   *****
 
$requete_coordonnateur = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='coordonnateur.pdf'");
$selecteur_coordonnateur = mysqli_fetch_array($requete_coordonnateur);



/*       ***   FIN DE CODE PHP POUR LES AUTRES EXPERIENCES   ***           */

// *****  code pour les articles indexes  *****
 
$requete_article_indexe = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='article_domaine.pdf'");
$selecteur_article_indexe = mysqli_fetch_array($requete_article_indexe);


// *****  code pour le justificatif licence   *****
 
$requete_article_non_indexe = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='article_hors_domaine.pdf'");
$selecteur_article_non_indexe = mysqli_fetch_array($requete_article_non_indexe);


// *****  code pour le justificatif licence   *****
 
$requete_livre_du_domaine = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='livre_domaine.pdf'");
$selecteur_livre_du_domaine = mysqli_fetch_array($requete_livre_du_domaine);


// *****  code pour le justificatif licence   *****
 
$requete_fiche_technique = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='livre_vulgarisation.pdf'");
$selecteur_fiche_technique = mysqli_fetch_array($requete_fiche_technique);


/*       ***   FIN DE CODE PHP POUR LES PUBLICATIONS   ***           */

// *****  code pour les distinctions   *****
 
$requete_distinction = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='distinction.pdf'");
$selecteur_distinction = mysqli_fetch_array($requete_distinction);

// *****  code pour les grades   *****
 
$requete_grade = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='grade.pdf'");
$selecteur_grade = mysqli_fetch_array($requete_grade);


// *****  code pour les brevets   *****
 
$requete_brevet = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='brevet.pdf'");
$selecteur_brevet = mysqli_fetch_array($requete_brevet);


// *****  code pour les proceding   *****
 
$requete_procceding = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='procceding.pdf'");
$selecteur_procceding = mysqli_fetch_array($requete_procceding);


// *****  code pour la communication de conference  *****
 
$requete_communication_conference = mysqli_query($con,"SELECT * FROM ec_dossier WHERE auteur='$auteur' and nom_fichier='communication.pdf'");
$selecteur_communication_conference = mysqli_fetch_array($requete_communication_conference);


// ***   FIN DE CODE PHP POUR LES PUBLICATIONS   ***  

include('bg_body.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postuler</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        color:black;
    }
    div.fichier_recapitulatif{
        background-color:rgba(255,255,255,0.8);
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
    input.bouton{
       margin-top:2em;
        padding: 1.5% 4%;
        cursor : pointer;
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
 
    fieldset.filed{
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
        margin-top:1em;
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
        cursor :pointer;
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
    p#info{
        color:rgb(141,54,20);
        font-size : large;
        font-weight : bold;
    }
    p#info span#gris {
        color:gray;
    }
    p#info span#vert {
        color:rgb(10,107,49);;
    }

</style>
<body>


    <div class="fichier_recapitulatif">
        <div class="bordure_interne_du_fichier">
        <div class="entete_du_fichier">
             <!-- <?php echo $lien='http://localhost/candidature/code_candidature/ec_repertoire/'.$auteur.'/'; ?> -->
            <div class="contenu_entete">
                <img src="http://localhost/candidature/code_candidature/ec_repertoire/<?php echo $auteur; ?>/<?php echo $tab_candidat['image']
 ; ?>" alt="" class="image_candidature">
                <span><?php echo $tab_candidat['prenom'].' '.$tab_candidat['nom'] ; ?></span>
            </div>

            <div class="contenu_entete">
              <span> ne (e) le : <?php echo $tab_candidat['date_de_naissance'];?></span>
              <span>Sexe : <?php echo $tab_candidat['genre']; ?></span>
              <span>mail : <?php echo $tab_candidat['mail']; ?></span>
              <span>Tel : <?php echo $tab_candidat['telephone']; ?></span>
              <span>adresse: <?php echo $tab_candidat['adresse']; ?></span>
              <span>date: <?php echo date('d - m - Y'); ?></span>
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
                    <label class="diplome">laboratoire acad??mique : </label>
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
                    <label class="diplome">Industrie ou structure de d??veloppement,post doc : </label>
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
                    <label class="diplome">Gestion de programme dans les ONG, associations, collectivit??s et structures ??tatiques : </label>
                    
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
                    <label class="diplome">Coordonnateur de r??seau : </label>
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
                        <label class="diplome"> Article ind??x?? du domaine : </label>
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
                        <label class="diplome">Article index?? hors domaine, article non index?? du domaine et article de vulgarisation : </label>
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
                            <label class="diplome">Communication conf??rence : </label>
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
                <form action="http://localhost/candidature/code_candidature/envoie_de_dossier_supplementaire.php" method="POST"  enctype="multipart/form-data">

                 <div class="dossier_supplementaire">

                 <div class="contenu_dossier_supplementaire">

                 <div class="fichier_supplementaire"><label for="cv">votre CV : </label><input type="file" name="cv" id="cv">
                 <label for="" class="notif_dossier_supp">
                 <?php if(isset($_SESSION['notif_cv'])){echo $_SESSION['notif_cv']; unset($_SESSION['notif_cv']);} ?></label> 
                 </div>

                 <div class="fichier_supplementaire"><label for="lettre_de_motivation">votre Demande : </label><input type="file" name="lettre_de_motivation" id="lettre_de_motivation">
                 <label for="" class="notif_dossier_supp">
                 <?php if(isset($_SESSION['notif_lm'])){echo $_SESSION['notif_lm']; unset($_SESSION['notif_lm']);} ?></label> 
                 </div>
                 
                 <div class="fichier_supplementaire"><label for="autre_fichier">Aurtes dossier supplementaires : </label><input type="file" name="autre_fichier" id="autre_fichier">
                 <label for="" class="notif_dossier_supp">
                 <?php if(isset($_SESSION['notif_af'])){echo $_SESSION['notif_af']; unset($_SESSION['notif_af']);} ?></label> 
                 </div>
                 
                <p id="info">Attention veillez <span id="gris">Enregistrer</span> votre (CV, Demande et Autre dossier suplementaire) avant d'<span id="vert"> Envoyer</span> c'est important pour votre candidature</p>

                 </div>
                 <input type="submit" value='Enregistrer' id="enregistrer_dossier">
               
                 </div>
            
                </form> 
      <!-- </div> -->
      <div class="bouton_modifier">
            <form action=" http://localhost/candidature/mon-compte/" method="POST">
            <input type="submit" value="Modifier" class="bouton modifier">
            </form>
            <form action="http://localhost/candidature/code_candidature/envoie_de_candidature.php" method="POST">
            <input type="submit" value="Envoyer" class="bouton envoyer">
            </form>
        </div>
    </div>
    </div>
    
</body>
</html>


























 