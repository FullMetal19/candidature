<?php 
/*
Template name: accueil candidat
*/
get_header();
?>

     <style>
          *{
               margin: 0;
               padding: 0;
          }
          .cspt-title-bar-wrapper{
               display: none;
          }
     .presentation{
          width: 100%;
    height: 300px;
    margin: 5% auto;
    box-shadow: 0px 15px 10px -5px #777;
    background-color: #EDEDED;
    background-size: cover;
    background-attachment: scroll;
    animation: fondu 15s ease-in-out infinite both;
     }
     .contener{
          display: grid;
          grid-template-rows: auto auto;
          margin: 2% 10%;
     }

     .offre h1 {
          text-align: center;
          font-size: 2em;
          padding: 1%;
          background-color: rgb(10, 107, 49);
          color :white;
          box-shadow: 10px -10px 10px  rgb(132, 181, 39);
     }
     .offre a p {
          
          margin: 2% 10%;
          padding: 1%;
          font-size: 1em;
          background-color: rgb(132, 181, 39);
          color :white;
          transition: 0.5s all;
          box-shadow: 5px 5px 5px  rgb(10, 107, 49);
          text-align: justify;
          
     }
     .offre a p:hover {
     transform: scale(1.1);
     transition: 0.5s all;
     }
     .offre a {
          text-decoration: none;
          

     }
     .presentation:hover{
          animation-play-state: paused;
     }
     @keyframes fondu{
    0%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/09/ufr-sfi.png");}
    33.33%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/09/ufr-saepan.png");}
    66.67%{background-image: url("https://www.ussein.sn/wp-content/uploads/2019/12/ff.jpg");}
    100%{background-image: url("https://www.ussein.sn/wp-content/uploads/2019/12/ii.jpg");}
}
     @media(max-width:700px){
          .offre a p:hover {
     transform: scale(1.1 );
     }
     }
     @media(max-width:500px){
          .offre a p:hover {
          transform: scale(1);
          }
          .offre a p {
               font-size:0.8em ;
          }
          .offre h1 {
               font-size: 1.5em;
          }
     }
     p#notification{
          color:rgb(141,54,20);
          font-size:large;
     }
     </style>


     <div class="contener">
            <div class="presentation"></div>
            <div class="offre">
            <h1>Les offres actuels</h1>
            <p id="notification"><?php if(isset($_SESSION['notificatiion'])){ echo $_SESSION['notificatiion'];}unset($_SESSION['notificatiion']); ?></p>
            <?php

            $con = mysqli_connect("localhost","root","","ussein_candidature");
            $req = mysqli_query($con,"SELECT * FROM ec_offre");
            
            while($tab=mysqli_fetch_array($req)){
            ?>
           
            <a href="http://localhost/candidature/plus-dinformations?id=<?php echo $tab['id'] ?>"><p><?php echo $tab['titre'] ?></p></a>
            <?php } ?>
            </div>
     </div>