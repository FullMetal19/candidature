<?php 
/*
Template name: offres
*/
get_header();


if(isset($_SESSION['verification_id_offre'])){
    $id_offre = $_SESSION['verification_id_offre'];
}
$id_offre = $_GET['id'];
$mail_candidat = $_SESSION['mail'];
$con = mysqli_connect("localhost","root","","ussein_candidature");
$req = mysqli_query($con,"SELECT * FROM ec_offre WHERE id='$id_offre'");
$tab_offre = mysqli_fetch_array($req);

?>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .contener{
            display: grid;
            grid-template-rows: auto auto;
            width:100%;
            margin: 0% 5%;
        }
       .titre p{
        text-align: center;
        margin: 1% 0%;
        padding: 1%;
        background-color: rgb(10, 107, 49);
        font-size: 1.3em;
        color: white;
        box-shadow: 5px 5px 5px rgb(132, 181, 39);
       }
       .cspt-title-bar-wrapper{
               display: none;
          }
       .fichier img {
           width: 70%;
       }
       .fichier{
           display:flex;
           flex-direction:column;
           text-align: center;
           width: 100%;
           height:100%;
       }
       .bouton{
           position: fixed;
           bottom: 40px;
           right: 25px;
           padding: 1.5%;
           background-color: rgb(141, 54 , 20);
           border-radius: 50%;
           transition: 1s all;
       }
       .bouton a {
           text-decoration: none;
           color: white;
           font-size: 1em;
           display: flex;
           flex-direction: column;
       }
       .bouton a img {
           margin-left: 25%;
       }
       .bouton:hover{
           transform: scale(1.2);
           transition: 1s all;
       }
       @media(max-width:700px){
           .titre p {
            font-size: 1em;
           }
           .bouton a {
            font-size:0.6em ;
           }
           .bouton a img {
               margin-left: 15%;
               width: 20px;
           }
       }
       @media(max-width:450px){
           .titre p {
            font-size: 0.8em;
           }
           .bouton a {
            font-size:0.5em ;
           }
           .bouton a img {
               margin-left: 13%;
               width: 15px;
           }
       }
       embed{
           margin: 5% 0%;
           width:100%;
           height:1000px;
       }
       .baner{
          width: 100%;
    height: 300px;
    margin: 5% auto;
    box-shadow: 0px 15px 10px -5px #777;
    background-color: #EDEDED;
    background-size: cover;
    background-attachment: scroll;
    animation: fondu 15s ease-in-out infinite both;
     }
}
     .baner:hover{
          animation-play-state: paused;
     }
     .download:hover{
         color:rgb(141,54,20);
         cursor: pointer;
     }
     @keyframes fondu{
    0%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/09/ufr-sfi.png");}
    33.33%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/09/ufr-saepan.png");}
    66.67%{background-image: url("https://www.ussein.sn/wp-content/uploads/2019/12/ff.jpg");}
    100%{background-image: url("https://www.ussein.sn/wp-content/uploads/2019/12/ii.jpg");}
}
       
    </style>

        <div class="contener">
              <div class="baner"></div>
               <div class="description">
               <div class="titre">
               <p><?php echo $tab_offre['titre'] ?></p>
               <!-- <p><?php echo $tab_offre['description'] ?></p> -->
               </div>
               
               <div class="fichier">
                    <?php if(strpos($tab_offre['nom_fichier'],'.pdf') or strpos($tab_offre['nom_fichier'],'.PDF')){ ?>
                    <embed src="http://localhost/candidature/code_candidature/ec_offre/<?php echo $id_offre ?>/<?php echo $tab_offre['nom_fichier'] ?>#toolbar=0" type="application/pdf">
                   <?php }
                   elseif(strpos($tab_offre['nom_fichier'],'.png') or strpos($tab_offre['nom_fichier'],'.jpg') or strpos($tab_offre['nom_fichier'],'.JPG') or strpos($tab_offre['nom_fichier'],'.PNG')){ ?>
                        <img src="http://localhost/candidature/code_candidature/ec_offre/<?php echo $id_offre ?>/<?php echo $tab_offre['nom_fichier'] ?>" alt="offre">
                    <?php } ?>
                        <a class="download" href="http://localhost/candidature/code_candidature/ec_offre/<?php echo $id_offre ?>/<?php echo $tab_offre['nom_fichier'] ?>" download="<?php echo $tab_offre['nom_fichier'] ?>">Télécharger ici le fichier</a>
                   
                   
                </div>
               </div>
        </div>

        <div class="bouton">
            <a href="http://localhost/candidature/fiche-a-postuler/?info=<?php echo $mail_candidat.' '.$id_offre ?>">
                
                <img src="https://img.icons8.com/ios/50/000000/set-as-resume.png"width="30px"/>
                <p>Postuler</p>
            </a>
        </div>