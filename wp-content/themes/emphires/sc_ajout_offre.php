<?php
/*
template name: ajout-et-suppression-d'offre
*/
session_start();
get_header()
?>
    <style>
      .principal{
          display: flex;
          flex-direction: column;
          align-items: center;
          width: 100%;
          height: 100%;
          align-items: center;
          
      }
        .suppression{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin: auto;
            padding: 0;

        }
        .conter{
             display: flex;
             flex-direction: column;
             align-items: center;
            width: 100%;
            }
            .titre02  h2{
            display: flex;
             background-color: rgb(10, 107, 49);
             padding: 1% ;
             justify-content: center;
             margin: 5% 0 3% 0;
             font-size: 20px;
             color: white;
             box-shadow: 5px -5px 5px rgb(132, 181, 31);
             width: 800px;   
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
     

       input{
           display: flex;
           justify-content: space-around;
           width: 500px;
           height: 25px;
           font-size: 15px;
       }
       fieldset{
           display: flex;
           width: 700px;
           height: 700px;
           justify-content: center;
           align-items: center;
           position: relative;
           background-color: rgb(132, 181, 31);
           
       }
       .main{
           display: flex;
           flex-direction: column;
           gap: 1em;
           padding: auto;
           }

           
       select{
           
           color: black;
       }

       
         .offre{
             display: flex;
             justify-content: space-around;
             gap:0 1em;
             background-color: rgb(132, 181, 31);
             width: 700px;
              padding: 1em; 
              margin: 0 0 2em 0 
              
         }
         span {
             /* width: 100%; */
             /* font-size: 15px; */
             /* flex-wrap: wrap; */
             color: white;

         }
        
        .titre01 h1{
             display: flex;
             background-color: rgb(10, 107, 49);
             padding: 1% ;
             justify-content: center;
             margin: 2em 5em;
             color: blanchedalmond;
             font-size: 20px;
            box-shadow: 5px -5px 5px rgb(132, 181, 31);
            width: 800px;
         }
       
         label{
             color: rgb(141, 54, 20);
         }
         #ufr{
             color: black;
             
         }
         .body{
             display: flex;
             justify-content: center;
         }

    </style>

    <div class="principal">
    <div class="offre01">

    <div class="titre01">
       <h1> ajout d'un offre</h1>
       </div>

<form action=" http://localhost/candidature/code_candidature/verification_ajout_offre.php" enctype="multipart/form-data" method="POST">
<div class="body">
<fieldset>
       <div class="main">
           <label for="UFR"></label>
            <select name="ufr" id="ufr">
            <option value="sfi">SFI</option>
            <option value="sejtses"> SES </option>
            <option value="ses"> SEJT </option>
            <option value="seapan"> SEAPAN </option>
            </select> <br>

            <input type="text" name="titre" id="titre" placeholder="Titre"><br>
            <input type="text" name="description" id="description" placeholder="description"><br>
            <input type="date" name ="date_limite" id="date_limite" placeholder="date limite de dépot"><br>
            <input type="file" name="fichier" ><br>
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
<div class="suppression">
    <div class="titre02">
       <h2>suppresion offre</h2>
       </div>
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
        
        <a  href="http://localhost/candidature/code_candidature/verification_supprimer_offre.php?id=<?php echo $tab['id'] ?>">supprimer</a>
        
        </div>
        </div>
        <?php } ?>
        
       </div>  


       </div>
     </div>     
