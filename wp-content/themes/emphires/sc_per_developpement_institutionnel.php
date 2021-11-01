<?php
/* template name:sc_per_developpement_institutionnel*/

session_start();


$auteur =$_SESSION['matricule'];
$mail=$_SESSION['per_email'];
$title="";
$lien = 'http://localhost/candidature/code_per/repertoire_per/'.$mail.'/';
$con = mysqli_connect("localhost","root","","ussein_candidature");
$lien_suppression="http://localhost/candidature/code_per/suppression_justificatif_per.php/?fiche=";

//   Verification et recuperation d'un fichier
$requete_promotion_de_la_P= mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Promotion-P.pdf'");
$selecteur_promotion_de_la_P = mysqli_fetch_array($requete_promotion_de_la_P);
$promotion_de_la_P="";


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
                    <h3 m-0>DEVELOPPEMENT INSTITUTIONNEL</h3>
                </div>
            <!-- changer action -->
        <form class='p-0 m-0 col-12 border' enctype=multipart/form-data action="http://localhost/candidature/code_per/per_verif_developpement_institutionnel.php" method="POST">
            <div class="row m-1 border">

                <!-- <div class="col-12 text-center border-success m-0 p-0 entete">
                    <h3 m-0>Publications</h3>
                </div> -->
                
                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Promotion de la pédagogie </h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($promotion_de_la_P==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="file_Pedagogique"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_Pedagogique"  > <!-- changer name -->
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
                                <a href="<?php echo $promotion_de_la_P?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                    <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Promotion-P.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- Fin critère -->

                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Promotion de la Recherche </h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($promotion_de_la_R==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="file_Recherche"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_Recherche"  > <!-- changer name -->
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
                                <a href="<?php echo $promotion_de_la_R?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Promotion-R.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- erererer -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Promotion de la gouvernance </h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($promotion_de_la_G==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="file_Gouvernance"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_Gouvernance"  > <!-- changer name -->
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
                                <a href="<?php echo $promotion_de_la_G?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Promotion-G.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 

                <!-- dddddd
             -->
             <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Services à la communauté  </h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($service_a_la_C==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="file_Service"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_Service"  > <!-- changer name -->
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
                                <a href="<?php echo $service_a_la_C?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Service-C.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 
                <!-- eeeeeeeeeeeeeeeeee -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Capacité à mobiliser des ressources et des partenaires</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($capacite_M_R_P==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="file_Capacite"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_Capacite"  > <!-- changer name -->
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
                                <a href="<?php echo $capacite_M_R_P?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Capacite-M-R-P.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
                            </div>
                        <?php
                        }
                        ?>

                        </div>

                    </div>
                    </div>
                </div> 

                
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
