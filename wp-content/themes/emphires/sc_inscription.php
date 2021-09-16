<?php
    session_start();
/* Template name: inscription */
?>

<html>
    <head>
       <meta charset="utf-8">
        
        
    </head>
    <style>
    
    .titre{
        text-align:center;
        padding:0px;
        
    }
.bouton{
    /* margin-top:px; */
    width:100%;
    border-radius: 25px;
}
legend{
    text-align:center;
}
body{
    /* background: #67BE4B; */
}

.logo{
    
    position: relative;
        border-radius: 50%;
        width: 150px;
        height: 150px;
        border: 5px solid white;
        background-color:rgb(10,107,49);

    /* width:175px;
    height:175px;
    position:relative;
    /* top:-6em; */
    /* border:10px solid #67BE4B;
    Border-radius:50%;
    border-style:2px;
    background:white;  */
}
.inscription{
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 15px ;
        height: 540px;
        width: 400px;
        justify-content: center;
        margin-left: -215px;
        margin-top: -270px;
        text-align: center;     
        background-color: rgba(0, 0, 0, 0.1);
        box-shadow: 10px 5px 10px rgb(10,107,49);

   
}
/* Bordered form */
form {
    display: flex;
        flex-direction: column;
        justify-content: center;
        padding-top: 1px;
    /* width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); */
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    /* display: #67BE4B; */
    border-radius:5px;
    background-color: rgba(255, 255, 255, 0.2);
    border: 2px solid rgb(10,107,49);
    /* border: 1px solid #ccc; */
    /* box-sizing: border-box; */
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

</style>

    <body>
        <div id="contenu">
            
            
           
            <fieldset class="inscription">  
                <legend> <img src="http://localhost/candidature/code_candidature/logo.png" alt="logo" class="logo"></legend> 

                <div class="titre">INSCRIPTION</div> 

                <form action="http://localhost/candidature/code_candidature/inscription_mail.php" method="POST">
<!-- 
               <div class="titre"><h1>INSCRIPTION</h1></div>  -->
                
               
                <input type="text" placeholder="PRENOM" name="prenom" required>

                
                <input type="text" placeholder="NOM" name="nom" required>
                
                <input type="email" placeholder="Mail" name="mail" required>
                
                <input type="password" placeholder="Mot de passe" name="mot_de_passe" required>
                <input type="password" placeholder="Confirmation " name="confirmation_mot_de_passe" required>

                <label > <?php 
                    if(isset($_SESSION['message_validation'])){
                        echo $_SESSION['message_validation'];
                        unset($_SESSION['message_validation']);
                    }
                ?></label> 

                
                <!-- <input type="tel" placeholder="TEL" name="telephone" required> </br> -->
                <div class="bouton">
                <input  type="submit" id='submit' value="S'inscrire" name="inscrire" ></div>
                </form>
                </fieldset>
 
        </div>
    </body>
</html>


<?php
  
  ?>