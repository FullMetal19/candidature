<?php
/* template name:sc_per_jury */

session_start();
// get_header();
$auteur =$_SESSION['matricule'];
$mail=$_SESSION['per_mail'];
$title="";
$lien = 'http://localhost/candidature/code_per/repertoire_per/'.$mail.'/';
$con = mysqli_connect("localhost","root","","ussein_candidature");
$lien_suppression="http://localhost/candidature/code_per/suppression_justificatif_per.php/?fiche=";

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

         
                $requete_docteur = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Docteur.pdf'");
                $selecteur_docteur = mysqli_fetch_array($requete_docteur);
                
                $docteur="";
                if(($selecteur_docteur['lien']!="")){
                    $docteur=$selecteur_docteur['lien'] ;                         
                }
                else if(isset($selecteur_docteur['nom_fichier'])){
                
                    $docteur= $lien.$selecteur_docteur['nom_fichier'];
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

$requete_docteurMPOV = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Docteur_MPOV.pdf'");
$selecteur_docteurMPOV = mysqli_fetch_array($requete_docteurMPOV);

$docteurMPOV="";
if(($selecteur_docteurMPOV['lien']!="")){
    $docteurMPOV=$selecteur_docteurMPOV['lien'] ;                         
}
else if(isset($selecteur_docteurMPOV['nom_fichier'])){

    $docteurMPOV= $lien.$selecteur_docteurMPOV['nom_fichier'];
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
                    <h3 m-0>MEMBRES AUX JURY</h3>
                </div>
            <!-- changer action -->
        <form class='p-0 m-0 col-12 border' enctype=multipart/form-data action="http://localhost/candidature/code_per/per_verif_jury.php" method="POST">

            <div class="row m-1 border">

                <div class="col-12 text-center border-success m-0 p-0 entete">
                    <h3 m-0>Membre jury délibération</h3>
                </div>
                
                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Diplome Ingenieur Ou Equivalent</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($Diplome_Ingenieur_Ou_Equivalent==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="file_D_I_Ou_E"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_D_I_Ou_E"  > <!-- changer name -->
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
                                <a href="<?php echo $Diplome_Ingenieur_Ou_Equivalent?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Diplome_Ingenieur_Ou_Equivalent.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Master ou Equivalent</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($Master_ou_Equivalent_mjd==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="file_M_ou_E"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_M_ou_E"  > <!-- changer name -->
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
                                <a href="<?php echo $Master_ou_Equivalent_mjd?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Master_ou_Equivalent.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Doctorat en MPOV </h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($doctorat_en_mpov_mjd==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="file_d_en_mpov"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_d_en_mpov"  > <!-- changer name -->
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
                                <a href="<?php echo $doctorat_en_mpov_mjd?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."doctorat_en_mpov.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">DES</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($DES==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="file_DES"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_DES"  > <!-- changer name -->
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
                                <a href="<?php echo $DES?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."DES.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Evaluation These Doctorat Unique</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($Evaluation_These_Doctorat_Unique==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="file_E_T_D_U"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_E_T_D_U"  > <!-- changer name -->
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
                                <a href="<?php echo $Evaluation_These_Doctorat_Unique?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."E_T_D_U.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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
                    <h3 m-0>President jury deliberation</h3>
                </div>
                
                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Ingenieurs</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($ingenieur==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileIngenieur"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_ingenieur"  > <!-- changer name -->
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
                                <a href="<?php echo $ingenieur?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Ingenieur.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->



                <?php
                
                $requete_master = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Master.pdf'");
                $selecteur_master = mysqli_fetch_array($requete_master);
                
                $master="";
                if(($selecteur_master['lien']!="")){
                    $master=$selecteur_master['lien'] ;                         
                }
                else if(isset($selecteur_master['nom_fichier'])){
                
                    $master= $lien.$selecteur_master['nom_fichier'];
                }
                

                ?>


                 <!-- case d'un critere -->
                 <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Master</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($master==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileMaster"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_master"  > <!-- changer name -->
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
                                <a href="<?php echo $master ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Master.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Docteur_MPOV</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($docteurMPOV==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileDocteurMPOV"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_docteurMPOV"  > <!-- changer name -->
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
                                <a href="<?php echo $docteurMPOV?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Docteur_MPOV.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Docteur</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($docteur==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileDocteur"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_docteur"  > <!-- changer name -->
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
                                <a href="<?php echo $docteur ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Docteur.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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