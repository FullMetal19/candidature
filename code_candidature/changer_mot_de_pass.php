<?php

/* Template name: inscription*/
?>

<html>
    <head>
       <meta charset="utf-8">
        
        
    </head>
    <body>
        <div id="contenu">
            
            
            <form action="verification.php" method="POST">
            <fieldset>  <legend> <img src="http://localhost/candidature/code_candidature/logo.png" alt="" class="logo"></legend> 
               <div class="titre"><h1>Changer votre mot de passe</h1></div> 
                
               
                

                
                
                
                <input type="text" placeholder="Ancien mot de passe" name="mot_de_passe" required>
                
                <input type="text" placeholder="Mot de passe" name="mot_de_passe_1" required>
                <input type="text" placeholder="Confirmation " name="mot_de_passe_1" required>

                
       
                <div class="bouton">
                <input  type="submit" id='submit' value='Valider' ></div>
                </fieldset>
            </form>
        </div>
    </body>
</html>

<style>
    .titre{
        text-align:center;
    }
.bouton{
    margin-top:25px;
    width:100px;
}
legend{
    text-align:center;
}
body{
    background: #67BE4B;
}

.logo{
    width:175px;
    position:relative;
    top:-6em;
    border:10px solid #67BE4B;
    Border-radius:50%;
    border-style:2px;
    background:white;
}

#contenu{
    width: 600px;
    margin:0 auto;
    margin-top:10%;
    bottom:;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}

</style>
<?php
  
  ?>