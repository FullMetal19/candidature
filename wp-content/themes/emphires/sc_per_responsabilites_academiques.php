<?php
/* template name:sc_per_responsabilite_academique */

session_start();
// get_header();
$auteur =$_SESSION['matricule'];
$mail=$_SESSION['per_mail'];
$title="";
$lien = 'http://localhost/candidature/code_per/repertoire_per/'.$mail.'/';
$con = mysqli_connect("localhost","root","","ussein_candidature");
$lien_suppression="http://localhost/candidature/code_per/suppression_justificatif_per.php/?fiche=";

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

    <div class="col ">

        <!-- Div grand point -->
        <div class="col-12 text-center border-success m-0 p-0 entete">
                    <h3 m-0>Responsabilités Académiques</h3>
                </div>
            <!-- changer action -->
        <form class='p-0 m-0 col-12 border' enctype=multipart/form-data action="http://localhost/candidature/code_per/per_verif_responsable_academique.php" method="POST">
            <div class="row m-1 border">

                <!-- <div class="col-12 text-center border-success m-0 p-0 entete">
                    <h3 m-0>Publications</h3>
                </div> -->
                
                <!-- case d'un critere 1 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Responsable de niveau</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($responsabilite_niveau==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileResponNiveau"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_ResponNiveau"  > <!-- changer name -->
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
                                <a href="<?php echo $responsabilite_niveau?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."responsable_niveau.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere 2 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Responsable de formation</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($responsabilite_formation==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileResponFormation"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_ResponFormation"  > <!-- changer name -->
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
                                <a href="<?php echo $responsabilite_formation?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."responsable_formation.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere  3-->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Chef de département</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($chef_departement==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileChefDept"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_ChefDept"  > <!-- changer name -->
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
                                <a href="<?php echo $chef_departement?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."chef_departement.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere 4 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Directeur des Études (Instituts de faculté)</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($directeur_etudes_if==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileDEIF"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_DEIF"  > <!-- changer name -->
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
                                <a href="<?php echo $directeur_etudes_if?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."directeur_etudes_if.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere 5 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Directeur des Études (Instituts d’Université)</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($directeur_etudes_iu==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileDEIU"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_DEIU"  > <!-- changer name -->
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
                                <a href="<?php echo $directeur_etudes_iu?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."directeur_etudes_iu.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere 6 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Directeur des Études (Instituts d’Université)</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($a_directeur_adjoint_u==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileADAU"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_ADAU"  > <!-- changer name -->
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
                                <a href="<?php echo $a_directeur_adjoint_u?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."a_directeur_adjoint_u.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere 7 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Directeur central</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($directeur_central==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileDirecteurCentral"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_DirecteurCentral"  > <!-- changer name -->
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
                                <a href="<?php echo $directeur_central?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."directeur_central.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                
                <!-- case d'un critere 8 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Responsable de formation doctorale</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($responsable_form_doct==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileRFD"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_RFD"  > <!-- changer name -->
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
                                <a href="<?php echo $responsable_form_doct?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."responsable_form_doct.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere 9 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Directeur de revue</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($directeur_revue==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileDRevue"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_DRevue"  > <!-- changer name -->
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
                                <a href="<?php echo $directeur_revue?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."directeur_revue.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->
                <!-- case d'un critere 10 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Directeur de laboratoire/Chef de service</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($directeur_lab_chef_service==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileDLCS"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_DLCS"  > <!-- changer name -->
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
                                <a href="<?php echo $directeur_lab_chef_service?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."directeur_lab_chef_service.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->
                <!-- case d'un critere 11 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Directeur de laboratoire/Chef de service</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($directeur_ecole_doct==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileDED"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_DED"  > <!-- changer name -->
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
                                <a href="<?php echo $directeur_ecole_doct?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."directeur_ecole_doct.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere 12 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté)</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($chef_etablissement_1==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileChefE1"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_ChefE1"  > <!-- changer name -->
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
                                <a href="<?php echo $chef_etablissement_1?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."chef_etablissement_1.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <!-- case d'un critere 13 -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Chef d’Établissement (Directeurs d’Institut d’Université) </h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($chef_etablissement_2==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileChefE2"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_ChefE2"  > <!-- changer name -->
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
                                <a href="<?php echo $chef_etablissement_2?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."chef_etablissement_2.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>