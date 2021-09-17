<?php 
/*
Template name: offres
*/
get_header();


if(isset($_SESSION['verification_id_offre'])){
    $id_offre = $_SESSION['verification_id_offre'];
}
$id_offre = $_GET['id'];

$con = mysqli_connect("localhost","root","","ussein_candidature");
$req = mysqli_query($con,"SELECT * FROM ec_offre WHERE id='$id_offre'");
$tab_offre = mysqli_fetch_array($req);

$ufr = "ufr-";
$ufr.=strchr($tab_offre['nom_ufr'],"S");


?>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .contener{
            display: grid;
            grid-template-rows: auto auto;
            margin: 2% 5%;
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
           text-align: center;
           width: 100%;
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
       
    </style>

        <div class="contener">
              <div class="baner">
               <img src="http://localhost/candidature/wp-content/uploads/2021/09/<?php echo $ufr ?>.png" alt="baner" width="100%" height="264px">
               </div>
               <div class="description">
               <div class="titre">
               <p><?php echo $tab_offre['titre'] ?></p>
               </div>
               
               <div class="fichier">
                   <img src="<?php echo $tab_offre['nom_fichier'] ?>" alt="offre">
               </div>
               </div>
        </div>

        <div class="bouton">
            <a href="">
                
                <img src="https://img.icons8.com/ios/50/000000/set-as-resume.png"width="30px"/>
                <p>Postuler</p>
            </a>
        </div>