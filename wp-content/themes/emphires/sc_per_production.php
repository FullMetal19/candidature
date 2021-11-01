<?php
/* template name:sc_per_production */

session_start();
// get_header();
// $auteur =$_SESSION['matricule'];
$auteur =$_SESSION['matricule'];
$mail=$_SESSION['per_email'];
$title="";
$lien = 'http://localhost/candidature/code_per/repertoire_per/'.$mail.'/';
$con = mysqli_connect("localhost","root","","ussein_candidature");
$lien_suppression="http://localhost/candidature/code_per/suppression_justificatif_per.php/?fiche=";

//   Verification et recuperation d'un fichier
// XXX.pdf
// $requete_XXX = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='XXX.pdf'");
// $selecteur_XXX = mysqli_fetch_array($requete_XXX);

// $XXX="";
// if(($selecteur_XXX['lien']!="")){
//     $XXX=$selecteur_XXX['lien'] ;                         
// }
// else  if(isset($selecteur_XXX['nom_fichier'])){

//     $XXX= $lien.$selecteur_XXX['nom_fichier'];
// }

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





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"
    >
    <title>Accueil PER</title>
    <style>
        .entete{
            background-color:rgb(10,107,49);
            color:white
        }
        .active{
        color:rgb(132,181,39);
    }
    .badge{
        background-color:rgb(10,107,49);
    }
    .critere:hover{
        transform:scale(1.05)
    }
    .titre_critere{
        color:rgb(10,107,49);
    }
    .bouton_enreg{
        background-color:rgb(10,107,49);
        font-size:25px;
    }
       
    </style>
</head>
<body class='m-0 p-0 '>
<div class="row m-0">
    <!-- menu de navigation verticale -->
    <?php
    include('sc_per_accueil.php');
    ?>
    
    <!-- Contenu dans le centre -->

    <div class="col m-0" >

        <!-- Div grand point -->
            <div class="col-12 text-center border-success m-0 p-0 entete">
                    <h3 m-0>Production scientifique</h3>
                </div>
            <!-- changer action -->
        <form class='p-0 m-0 col-12 border' enctype=multipart/form-data action="http://localhost/candidature/code_per/per_verif_publication.php" method="POST">
            <div class="row m-1 border">

                <div class="col-12 text-center border-success m-0 p-0 entete">
                    <h3 m-0>Publications</h3>
                </div>
                
                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Articles scientifiques indexés</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($article_indexe==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileIndexe"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_indexe"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $article_indexe?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."A-S-Indexe.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Articles scientifiques non indexés</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($article_non_indexe==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileNonIndexe"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_nonIndexe"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $article_non_indexe?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."A-S-NonIndexe.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Proceedings de conférence</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($proceeding==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileProceeding"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_proceeding"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $proceeding?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."proceeding.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere -->
<div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Chapitre de livres</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($chapitre==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileChapitre"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_chapitre"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $chapitre ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."chapitre.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere -->
<div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Mélanges</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($melange==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileMelange"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_melange"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $melange ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Melange.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Ouvrages</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($ouvrage==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileOuvrage"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_ouvrage"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $ouvrage ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Ouvrage.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere -->
<div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Directeur de Revue</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($revue==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileRevue"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_revue"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $revue ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Revue.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère --> 
                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Fiches techniques  </h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($ficheTechnique==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileFicheTechnique"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_ficheTechnique"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $ficheTechnique ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."ficheTechnique.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Documents de vulgarisation ou de valorisation </h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($vulgarisation==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileVulgarisation"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_vulgarisation"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $vulgarisation ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."vulgarisation.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                

                
            </div>
            <div class="row m-1 border">

                <div class="col-12 text-center border-success m-0 p-0 entete">
                    <h3 m-0>Communications</h3>
                </div>
                
                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Participation et communication dans des conférences internationales </h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($conf_internationales==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileconf_internationales"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_conf_internationales"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $conf_internationales?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."conf_internationales.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Participation à des conférences nationales</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($conf_nationales==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileconf_nationales"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_conf_nationales"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $conf_nationales ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."conf_nationales.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere -->
<div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Conférencier ou animateur de séminaire dans le domaine au niveau international</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($conferencier_inter==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileconferencier_inter"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_conferencier_inter"  > <!-- changer name -->
                            </div>
                        <?php
                        }


                        else{
                        ?>
                            <!-- Si le fichier justificatif  -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class="m-0 p-0">justificatif présent </p> </h6>
                            </div>
                                <!-- fichier -->
                            <div class="col-12 text-center">
                                                                                 <!-- nom fichier -->
                                <a href="<?php echo $conferencier_inter ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."conferencier_inter.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->


                

                

                
            </div>

            <div class="col-12 justify-content-center input-group ">
                    <!-- <input class="col-12 text-white fs-1 fw-bold bouton_enreg " type="button" value="Enregistrer" name=""> -->
                </div>

                <input class="col-12 text-white fs-1 fw-bold bouton_enreg " type="submit" value="Enregistrer" name="">

        </form>
        
    </div>
</div> 
</body>
    <script type="text/javascript" src="js_per.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>