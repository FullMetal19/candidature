<?php
/*
template name: ajout-et-suppression-d'offre
*/
session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublier')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}

//requete pour admin simple
$con=mysqli_connect('localhost','root','','ussein_candidature');
$mail=$_SESSION['mail'];
$requete=mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab=mysqli_fetch_array($requete);


?>
 <style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        
        background-image: url('http://localhost/candidature/wp-content/uploads/2021/09/background-scaled.jpg');
        background-position: 0;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    /* div.container{
        display: grid;
        grid-template-columns:300px auto;
        position: absolute;
        box-sizing: border-box;
        height: 100%;
        width: 100%;
    } */

   
    div.gauche{
        background-color: rgba(10, 107, 49,0.6);
        display: flex;
        flex-direction: column;
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        width: 21%;
        left: -15%;
        gap: 2%;
        transition: all 1.5s;
        z-index: 100;
    }
    div.gauche:hover{
        left: 0%;

    }
    div.droite{
        height: 100%;
        box-sizing: border-box;
        position: fixed;
        top: 0;
        left: -15%;
        right: 0;
        width: calc(100%-21%);
        margin-left: 21%;
        transition: all 1.5s;
        overflow-y: scroll;
        overflow-x: hidden;
    }
    div.droite_container{
        margin: 5%;
    }
    
    div.bloc_menu a img{
        width: 30px;
        height: 30px;
    }
    div.bloc_menu a label{
        vertical-align: 0.9em;
        font-size: large;
        margin-right: 15%;
        cursor: pointer;
        color: white;
    }
    div.bloc_menu{
        margin-top:5%;
        background-color: rgba(132, 181, 39,0.6);
        padding: 1em;
        text-align: right;
    }
    div.bloc_menu:hover{
        background-color: rgba(141, 54, 20,0.6);
    }    
    div.bloc_menu a{
        text-decoration: none;
        color: black;
        transition: 1s all;
    }
    div.bloc_menu a:hover{
        color: white;
        transition: 1s all;
    }
    div.titre{
        display: flex;
        text-align: center;
        margin: 0% 10%;
        justify-content: right;
        color: white;
    }
    div.titre h1{
        margin-top: 5%;
        margin-right: 15%;
    }
    div.titre img{
        width: 30px;
        height: 30px;
        position: relative;
        top: 20%;
    }
    div.active{
        background-color: rgba(141, 54, 20,0.6);
    }  
    
    @media(max-width:900px){
        div.titre h1{
            font-size: 1.2em;
        }
        div.bloc_menu a label{
            font-size: 0.8em;
        }
    }
    @media(max-width:750px){
        div.titre h1{
            font-size: 1em;
        }
        div.bloc_menu a label{
            font-size: 0.6em
        }
        div.gauche,div.droite{
            left: -13%;
        }
    }
    @media(max-width:630px){
        div.bloc_menu a label,div.titre h1{
            display: none;
        }
        div.gauche,div.droite{
            left: -11%;
        }
    }
    @media(max-width:600px){
        div.gauche,div.droite{
            left: -5%;
        }
    }

    /* .principal{
          align-items: center;
          width: 100%;
          height: 100%;
          align-items: center;
        margin-top:-75px;

          
      } */
        .suppression{
            align-items: center;
            width: 90%;
            margin: auto;
            padding: 1% 2%;
            margin: 2% 0%;
        }

            
        .supprimer{
             color: white;
             padding: 1%;
             background-color: rgba(141,54,20,0.6);
             box-shadow: 5px 5px 5px  rgba(141,54,20,0.6);
             border-radius: 5px 10px ;
             font-size: 15px; 
             text-decoration:none;   
             float:right;
         }
         .supprimer:hover {
            transform: scale(1.1 );
             transition: 0.5s all;
             
         }
        
/* 
    .offre01{
        display: flex;
        flex-direction: column;
        
        
    } */
    select{
        outline: none;
        border: none;
        color: white;   
    }
    .zone_de_saisi{
        text-align: right;
        padding: 3% 5%;
        margin: 0% 35%;
        text-align:center;
        height:25%;
        display:flex;
    }
    .placeholder{
        color:white;
    }
    input[type=text], input[type=date]{
    width: 95%;
    padding: 3% 0%;
    margin: 0% 3%;
    background-color:transparent;
    color:#fff;
    font-size:large;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.phrase{
    text-align:center;
    background-color: rgba(10, 107, 49,0.6);
    color:#fff;
    padding: 10% 0%;
    margin: 10%;
    border-radius:25px ;
    font-size:100%;
}

::placeholder{
    color:#fff;
}

input[type=submit] {
    background-color: rgba(10, 107, 49,0.6);
    color:white ;
    font-size:large;
    padding: 3% 5%;
    margin: 0% 35%;
    border: none;
    cursor: pointer;
    width: 25%;
    transition:1s all;
}

input[type=submit]:hover{
    transition:1s all;
    transform:scale(1.05);

   
}
     
       fieldset{
           text-align: center;
           width: 75%;
           align-items: center;
           position: relative;
            background-color: rgba(132, 181, 31,0.1); 
           
       }
       .main{
            width: 100%;
            
           display: flex;
           flex-direction: column;
           gap: 1em;
           }

         .offre{             
            display: flex;
            justify-content: space-between;
            gap:0 1em;
            background-color: rgba(132, 181, 31,0.6);
            width: 80%;
            padding: 1em; 
            margin:2% 10%;
            border-radius:5px 10px;

         }
         span {
             color: white;
         }
         /* #fichier{
         display: none;
         } */
        
        
        .telecharger{
           background-color: transparent;
           border:1px solid white;
           margin: 0% 3%;
           cursor: pointer;
           color:#fff;
           padding:3%;
        }
        .titre01 h1, .entete h1{
             display: flex;
             background-color: rgba(10, 107, 49,0.8);
             padding: 2%;
             justify-content: center;
             margin: 2% 0%;
             color: white;
             font-size: 30px;
            box-shadow: 5px -5px 5px rgba(132, 181, 31,0.6);
            width: 94%;
            border-radius: 50px;
         }
         .selection_ufr{
             color:white;
             font-size:15px;
         }

         #ufr{
             color: black;   
         }
         .body{
             display: flex;
             justify-content: center;
             width: 100%;
               }

</style>

<style>
div.droite_container{
    display:flex;
  flex-direction : column;
  gap: 3em;
  align-items:center;
}

div.Ajout_offre{
  display:flex;
  flex-direction : column;
  gap: 1em;
  width:100%;
  
}
div.Ajout_offre div.entete{
    display : flex;
    justify-content : center;  
}
div.Ajout_offre div.entete h1{
    color : white;
    text-align : center;
}
 div.blog_creation_offre{
    width :100%;
    display: flex;
   flex-direction : column;
   align-items:center;
}

div.blog_creation_offre form{
    display: flex;
    justify-content: center;
    margin: 0 10%;
    width:100%;
}

 div.blog_creation_offre form div.main{
  display :flex;
  flex-direction :column;
  gap:1em;
  width :80%;
  align-items:center;
  padding : 2em; 
  border-left :2px solid green;
  border-right :2px solid green;
  border-bottom :2px solid green;
}
div.main input {
    width :100%;
    border-radius:1em;
    padding:1em;
    font-size:large;
    outline :none;
    border-left :2em solid green;
    border-right :2em solid green;
    border-bottom :2px solid green;
    border-top :2px solid green;
}
div.main input#bouton_valider{
    width :60%;
    border : 3px solid green;
    font-size:large;

}
div.main label{
    font-size:large;
    color:brown;
    font-weight:bold;
}


div.Suppression_offre{
    display:flex;
    flex-direction:column;
    gap:2em 0;
    width:100%;
    
}

.titre01 h1, .entete h1{
             display: flex;
             background-color: rgba(10, 107, 49,0.8);
             padding: 2%;
             justify-content: center;
             margin: 2% 0%;
             color: white;
             font-size: 30px;
            box-shadow: 5px -5px 5px rgba(132, 181, 31,0.6);
            width: 94%;
            border-radius: 50px;
         }

         .suppression{
            align-items: center;
            width: 90%;
            margin: auto;
            padding: 1% 2%;
            margin: 2% 0%;
        }

</style>


<body>
    <div class="container">
        <div class="gauche">
            <div class="titre">
                <h1>Dashboard</h1>
                <img src="https://img.icons8.com/ios-filled/50/000000/menu--v4.png"/>
            </div>
            
            <hr>
            <div class="bloc_menu active">
                <a href="http://localhost/candidature/ajout-offre/">
                    <label>Les Offres</label>
                    <img src="https://img.icons8.com/material-rounded/50/000000/discount-finder.png"/>
                </a>
            </div>
            <div class="bloc_menu">
                <a href="http://localhost/candidature/visualisation/">
                    <label>Visualisation</label>
                    <img src="https://img.icons8.com/ios/50/000000/doughnut-chart--v2.png"/>
                </a>
            </div>
            <div class="bloc_menu">
            <a href="http://localhost/candidature/point-modulable/">
                    <label>Point Modulable</label>
                    <img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-calculator-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>
                </a>
            </div>
            <div class="bloc_menu">
                <a href="http://localhost/candidature/parametre/">
                    <label>Paramètre</label>
                    <img src="https://img.icons8.com/ios/50/000000/settings--v1.png"/>
                </a>
            </div>
            <div class="bloc_menu">
                <a href="http://localhost/candidature/liste_des_pers/">
                    <label>Admin-PER</label>
                    <img src="https://img.icons8.com/ios/50/000000/settings--v1.png"/>
                </a>
            </div>
            <div class="bloc_menu">
                <a href="http://localhost/candidature/code_candidature/verification_deconnexion.php">
                    <label> Déconnexion</label>
                    <img src="https://img.icons8.com/ios/50/000000/exit.png"/>
                </a>
            </div>

        </div>
        
<div class="droite" id="droite">
               
<div class="droite_container">
                    <?php
                    if($tab['status']==2){ ?>
                    <p class="phrase">VOUS N'AVEZ PAS ACCES DANS CETTE PAGE !</p>
                    <?php }
                    
                    else{ ?>
                
<div class="Ajout_offre">

    <div class="entete">
       <h1> Ajout d'un offre</h1>
    </div>

    <div class="blog_creation_offre">

        <form action="http://localhost/candidature/code_candidature/verification_ajout_offre.php" enctype="multipart/form-data" method="POST">

        <div class="main">
           
             
            <input type="text" name="titre" id="titre" placeholder="Titre"><br>
            <!-- <input type="text" name="description" id="description" placeholder="Description"><br> -->
            <input type="date" name ="date_limite" placeholder="Date limite de dépot"><br>
            <input  type="file" name="fichier" ><br>
            <!-- <label class="telecharger" for="fichier">Veuillez choisir un fichier</label> -->
            <label>
            <?php
            if(isset($_SESSION['obligatoire'])){
                echo $_SESSION['obligatoire'];
                unset($_SESSION['obligatoire']);
            }
            ?>
            </label>
            <input type="submit" id="bouton_valider" value="Envoyer">
            
        </div>

        </form>
    
    </div>

</div> 

<div class="Suppression_offre">

    <div class="titre01">
       <h1>Suppresion Offre</h1>
    </div>

    <div class="suppression">
    
       <?php

        $con = mysqli_connect("localhost","root","","ussein_candidature");
        $req = mysqli_query($con,"SELECT * FROM ec_offre");?>


      <?php  while($tab=mysqli_fetch_array($req)){
            ?>
            <div class="offre">
            <span>
       <?php
            echo $tab['titre'];

        ?>
          </span> 
    
        
        <a class="supprimer"  href="http://localhost/candidature/code_candidature/verification_supprimer_offre.php?id=<?php echo $tab['id']?>">Supprimer</a>
        

        </div>
        <?php } ?>
          
    </div>
    
</div> 

         
<?php } ?>

</div>
       
</div>  

</body>