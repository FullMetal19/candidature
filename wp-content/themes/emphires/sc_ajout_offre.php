<?php
/*
template name: ajout-et-suppression-d'offre
*/
session_start();
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
        transition: 1s;
    }
    div.bloc_menu a:hover{
        color: white;
        transition: 1s;
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

    .principal{
          /* display: flex; */
          flex-direction: column;
          align-items: center;
          width: 100%;
          height: 100%;
          align-items: center;
        margin-top:-75px;

          
      }
        .suppression{
            /* display: flex; */
            flex-direction: column;
            align-items: center;
            width: 90%;
            margin: auto;
            padding: 5%;
            margin: 2% 0%;
           


        }
        .conter{
             /* display: flex; */
             flex-direction: column;
             align-items: center;
            width: 100%;
            }
            
         .supprimer{
             color: black;
             padding: 1%;
             background-color: white;
             box-shadow: 5px -5px 5px  black;
             border-radius: 5px 10px ;
             font-size: 15px;
             
         }
         .supprimer:hover {
            transform: scale(1.1 );
             transition: 0.5s all;
         }
        

    .offre01{
        display: flex;
        flex-direction: column;
        
        
    }
    select{
        outline: none;
        border: none;
        /* background-color: transparent; */
        color: white;
        
        
    }
    .zone_de_saisi{
        text-align: right;
        /* color: #fff; */
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
    /* display: #67BE4B;
     */
    border: 1px solid #ccc;
    box-sizing: border-box;
    /* background-color: rgba(132, 181, 31,0.1);  */

    
    /* color:white; */
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: rgba(10, 107, 49,0.9);
    color:white ;
    padding: 3% 5%;
    margin: 0% 35%;
    border: none;
    cursor: pointer;
    width: 25%;
    transition:1s all;
}

input[type=submit]:hover{
    background-color: rgba(141, 54, 20,0.9);
    transition:1s all;
    transform:scale(1.02);
    border-radius:50%;
   
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
             justify-content: space-around;
             gap:0 1em;
             background-color: rgba(132, 181, 31,0.6);
             width: 100%;
              padding: 1em; 
              margin: 0 0 2em 0 
              
         }
         span {
             /* width: 100%; */
             /* font-size: 15px; */
             /* flex-wrap: wrap; */
             color: white;

         }
        
        
        
        .titre01 h1, .titre02  h2{
             display: flex;
             background-color: rgba(10, 107, 49,0.8);
             padding: 3% ;
             justify-content: center;
             margin: 2% 0%;
             color: blanchedalmond;
             font-size: 30px;
            box-shadow: 5px -5px 5px rgba(132, 181, 31,0.6);
            width: 94%;
            border-radius: 50px;
         }
         .selection_ufr{
             color:white;
             font-size:15px;
         }
       
         label{
             /* color: rgb(141, 54, 20); */
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
<body>
    <!-- <div class="container"> -->
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
                <a href="">
                    <label>Calcul</label>
                    <img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-calculator-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>
                </a>
            </div>
            <div class="bloc_menu">
                <a href="http://localhost/candidature/creation-compte-admin/">
                    <label>Paramètre</label>
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
                <div class="principal">
    <div class="offre01">

    <div class="titre01">
       <h1> Ajout d'un offre</h1>
       </div>

<form action=" http://localhost/candidature/code_candidature/verification_ajout_offre.php" enctype="multipart/form-data" method="POST">
<div class="body">
<fieldset>
       <div class="main">
           <div class="zone_de_saisi">
            <div class="selection_ufr"><label for="UFR"> Véillez séléctionner un UFR</label></div>
            <select name="ufr" id="ufr">
            <option value="sfi">SFI</option>
            <option value="sejtses"> SES </option>
            <option value="ses"> SEJT </option>
            <option value="seapan"> SEAPAN </option>
            </select></div> <br>
             
            <input type="text" name="titre" id="titre" placeholder="Titre"><br>
            <input type="text" name="description" id="description" placeholder="description"><br>
            <input type="date" name ="date_limite" id="date_limite" placeholder="date limite de dépot"><br>
            <input  type="file" name="fichier" ><br>
            <label >
            <?php
            if(isset($_SESSION['obligatoire'])){
                echo $_SESSION['obligatoire'];
                unset($_SESSION['obligatoire']);
            }
            ?>
            </label>
            <input type="submit" value="envoyer">
        </div>
</fieldset>
</div>
</form> 
</div>
<div class="titre02">
       <h2>suppresion offre</h2>
       </div>
<div class="suppression">
    
       <?php

        $con = mysqli_connect("localhost","root","","ussein_candidature");
        $req = mysqli_query($con,"SELECT * FROM ec_offre");?>
 <div class="conter">

      <?php  while($tab=mysqli_fetch_array($req)){
            ?>
            <div class="offre">
            <span>
       <?php
            echo $tab['titre'];

        ?>
          </span> 
          <div class="supprimer">
        
        <a  href="http://localhost/candidature/code_candidature/verification_supprimer_offre.php?id=<?php echo $tab['id']?>">Supprimer</a>
        
        </div>
        </div>
        <?php } ?>
        
       </div>  


       </div>
     </div> 
                </div>
        </div>   
