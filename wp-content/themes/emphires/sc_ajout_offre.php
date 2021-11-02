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
$_SESSION['0'] = "active";
$_SESSION['1'] = "";
$_SESSION['2'] = "";
$_SESSION['3'] = "";
$_SESSION['4'] = "";
$_SESSION['5'] = "";

//requete pour admin simple
$con=mysqli_connect('localhost','root','','ussein_candidature');
$mail=$_SESSION['mail'];
$requete=mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab=mysqli_fetch_array($requete);


?>
 <style>
    
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
            background-color: rgba(132, 181, 31,0.4)
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
        <!-- Partie Gauche -->
        <?php 
        include('sc_admin_partie_gauche.php');
        ?>
        
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