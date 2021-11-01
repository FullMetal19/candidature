<?php
/* template name:sc_per_inovation */

session_start();
// get_header();
$auteur ="mouhamed.sane@etu.ussein.edu.sn";
$title="";
$lien = 'http://localhost/candidature/code_per/repertoire_per/'.$auteur.'/';
$con = mysqli_connect("localhost","root","","ussein_candidature");
$lien_suppression="http://localhost/candidature/code_per/suppression_justificatif_per.php/?fiche=";

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
                    <h3 m-0>INNOVATIONS, BREVETS, DISTINCTIONS</h3>
                </div>
            <!-- changer action -->
        <form class='p-0 m-0 col-12 border' enctype=multipart/form-data action="http://localhost/candidature/code_per/per_verif_innovation.php" method="POST">
            <div class="row m-1 border">

                <div class="col-12 text-center border-success m-0 p-0 entete">
                    <h3 m-0>INNOVATIONS</h3>
                </div>
                
                <!-- case d'un critere -->
                <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Brevets</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($brevet==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileBrevet"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_brevet"  > <!-- changer name -->
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
                                <a href="<?php echo $brevet?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Brevet.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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
                
                $requete_distinction = mysqli_query($con,"SELECT * FROM ec_dossier_per WHERE matricule='$auteur' and nom_fichier='Distinction.pdf'");
                $selecteur_distinction = mysqli_fetch_array($requete_distinction);
                
                $distinction="";
                if(($selecteur_distinction['lien']!="")){
                    $distinction=$selecteur_distinction['lien'] ;                         
                }
                else if(isset($selecteur_distinction['nom_fichier'])){
                
                    $distinction= $lien.$selecteur_distinction['nom_fichier'];
                }
                

                ?>


                 <!-- case d'un critere -->
                 <div class="col-12 col-sm-6 col-lg-4  ">
                    <div class="card m-2 border-success critere shadow">
                        <h4 class="text-center  text-decoration-underline border-bottom titre_critere">Distinctions</h4> <!-- nom critere -->
                    <div class="card-body">
                        <div class='row'>
                            
                        <?php
                        //verification fichier
                        if($distinction==""){

                        ?>
                            <!-- ajout de fichier justificatif s'il l'élément n'en a pas -->
                            <div class="col-12 text-center">
                                <h6 class="col-12 badge border-success bg-success text-white text-wrap text-center p-1"> <p class=" m-0 p-0">Aucun justificatif </p> <p class="m-0 p-0">Ajoutez</p></h6>
                            </div>
                                <!-- fichier -->
                            <div class="input-group mb-1">
                                <input type="file" class="form-control p-1" name="fileDistinction"> <!-- changer name -->
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="input-group mb-1">
                                <input type="url" class="form-control" placeholder='Entrer un lien' name="lien_distinction"  > <!-- changer name -->
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
                                <a href="<?php echo $distinction ?>" target='_blank' class="btn btn-success text-center">Voir</a>
                            </div>

                            <div class="col-12 text-center">
                                <h6 class="text-center"> ou</h6>
                            </div>
                            
                                <!-- lien -->
                            <div class="col-12 text-center">
                                        <!-- nom fichier -->
                                <a href="<?php echo $lien_suppression."Distinction.pdf" ?>" class="btn btn-danger text-center">Supprimer</a>
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