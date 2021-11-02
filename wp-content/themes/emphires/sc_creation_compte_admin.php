<?php
    session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublier')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}
/* Template name: creation compte admin*/

$con=mysqli_connect('localhost','root','','ussein_candidature');
$mail=$_SESSION['mail'];
$requete=mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab=mysqli_fetch_array($requete);

$_SESSION['0'] = "";
$_SESSION['1'] = "";
$_SESSION['2'] = "";
$_SESSION['3'] = "active";
$_SESSION['4'] = "";
$_SESSION['5'] = "";
?>


    <style>
         
   
    
    .titre{
        text-align:center;
        padding:0px;
        color:#fff;
        width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
        
    }
.bouton{
    
    width:100%;
    border-radius: 25px;
}
legend{
    text-align:center;
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


.logo{
    
    position: relative;
        border-radius: 50%;
        width: 150px;
        height: 150px;
        border: 5px solid rgba(255, 255, 255,0.3);
        background-color:rgb(10,107,49);
        top:-5em;

    
}
.inscription{
    position:absolute;
        border-radius: 15px ;
        height: 75em;
        width: 60%;
        justify-content: center;
        text-align: center;     
        background-color: rgba(10, 107, 49, 0.4);
        box-shadow: 10px 5px 10px rgb(10,107,49);
        margin:2% 15%;

   
}
fieldset{margin-top: -15px;}

form {
    display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 1px;
    
}


/* Full-width inputs */
input[type=text], input[type=password], input[type=email],input[type=tel],input[type=date] {
    width: 80%;
    padding:2%;
    margin:2%;
    /* display: #67BE4B; */
    border-radius:5px;
    background-color: transparent;
    border: 2px solid rgb(10,107,49);
    color:#fff;
    outline:none;
    /* border: 1px solid #ccc; */
    /* box-sizing: border-box; */
}
::placeholder{
    color:#fff;
    background-color:transparent;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: rgb(132,181,39);
    border: 2px solid rgb(10,107,49);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    /* border: none; */
    cursor: pointer;
    width: 100%;
    border-radius:20px;
    font-size:large;
}
input[type=submit]:hover {
    background-color: rgb(10,107,49);
    /* color: ; */
    border: 1px solid #53af57;
}
.check_titre{
    color:#fff;
    font-size:large;
}
.check{
    text-align:left;
    margin:1% 3%;
    color:#fff;
}


</style>
    <!-- Partie Gauche -->
    <?php 
        include('sc_admin_partie_gauche.php');
        ?>
        <div class="droite" id="droite">
                <div class="droite_container">
                <?php
                    if($tab['status']==2){ ?>
                    <p class="phrase">VOUS N'AVEZ PAS ACCES DANS CETTE PAGE !</p>
                    <?php } else{ ?>
            
            
           
            <div class="inscription">  
                <legend> <img src="http://localhost/candidature/code_candidature/logo.png" alt="logo" class="logo"></legend> 

                <h1 class="titre">Creation Compte</h1> 

                <form action="http://localhost/candidature/code_candidature/verification_creation_compte_admin.php" method="POST">
<!-- 
               <div class="titre"><h1>INSCRIPTION</h1></div>  -->
                
               
                <input type="text" placeholder="PRENOM" name="prenom" required>

                
                <input type="text" placeholder="NOM" name="nom" required>
                
                <input type="email" placeholder="Mail" name="mail" required>
                <input type="tel" placeholder="Telephone" name="telephone" required>
                <label >Date de naissance</label>
                <input type="date" placeholder="Date de naissance" name="date_de_naissance" required>
                <label class="check_titre">Liste des offres à administrer</label>
                <div class="check">
               <?php 
               $requete2 = mysqli_query($con,"SELECT * FROM ec_offre");
               while($tab = mysqli_fetch_array($requete2)){ ?>
               <input type="checkbox" name="tableau[]" value="<?php echo $tab['id'] ?>">
                         <?php echo $tab['titre'] ?> <br><br>
               <?php }
               ?>
               </div>

                <input type="password" placeholder="Mot de passe" name="mot_de_passe" required>
                <input type="password" placeholder="Confirmation " name="confirmation_mot_de_passe" required>

                <label > <?php 
                    if(isset($_SESSION['message_validation'])){
                        echo $_SESSION['message_validation'];
                        unset($_SESSION['message_validation']);
                    }?>
                </label> 

                
                <!-- <input type="tel" placeholder="TEL" name="telephone" required> </br> -->
                <div class="bouton">
                <input  type="submit" id='submit' value="Valider" name="Valider" ></div>
                </form>
 
        </div>

                </div>
        </div>
  <?php } ?>




        