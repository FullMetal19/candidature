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
        border: 5px solid rgb(10,107,49) ;
        background-color:white;
    }
.inscription{
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 15px ;
        height: 600px;
        width: 450px;
        justify-content: center;
        margin-left: -215px;
        margin-top: -300px;
        text-align: center;     
        background-color: rgba(255, 255, 255, 0.1);
        box-shadow: 10px 5px 10px rgb(10,107,49);

   
}
form {
    display: flex;
        flex-direction: column;
       align-items: center;
        padding-top: 1px;
}
.contenu{
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 10px;
        margin-top: 1px;
        
    }

    .titre span{
        font-size: x-large;
        color:rgb(10,107,49) ;
        font-weight: bold;
        font-style: italic;
    }


.box{
        position: relative;
        border-radius: 5px;
        height: 40px;
        width:350PX;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 10px;
        /* border: 2px solid rgb(10,107,49); */
    }
    input{
        width: 100%;
        height: 100%;
        border: 2px solid rgb(10,107,49);
        border-radius: 5px;
        padding: 3%;
    }
    .button_inscription input{
        width: 350px;
        border-radius: 20px;
        font-size: x-large;
        color: white;
        /* padding:1em; */
        cursor: pointer;
        background-color:rgb(132,181,39);
        
        
    }

    
    .button_inscription input:hover{
        background-color: rgb(10,107,49);
    }
    input {
        position: absolute;
        top:0;
        left:0;
        background: transparent;

    }
    label{
        position: absolute;
        text-align: left;
        left: 3px;
        bottom: 5%;
        font-size: large;
        padding: 2%;
        transition: 0.9s;
        pointer-events: none;
        color: rgb(10,107,49);
    }
    .contenu .box input:focus ~ .indice,
    .contenu .box input:valid ~ .indice{
        transform: translateX(-5px) translateY(-30px);
        font-size: 15PX;
        /* color: ; */
    }
    
</style>

    <body>  
        <fieldset class="inscription">  
                <legend> <img src="http://localhost/candidature/code_candidature/logo.png" alt="logo" class="logo"></legend> 
                <form action="http://localhost/candidature/code_candidature/inscription_mail.php" method="POST">
                <div class="contenu">
                    <div class="titre">
                        <span> INSCRIPTION  A <br> USSEIN CANDIDATURE</span>
                    </div> 

                    <div class="box prenom">
                        <input type="text" name="prenom" required>
                        <label class="indice" >Prenom</label>
                    </div>
                    <div class="box ">
                        <input type="text" name="nom" required>
                        <label class="indice" >Nom</label>
                    </div>
                    <div class="box">
                        <input type="text" name="mail" required>
                        <label class="indice" >e-Mail</label>
                    </div>
                    <div class="box">
                        <input type="password" name="mot_de_passe" required>
                        <label class="indice" >Mot de passe</label>
                    </div>
                    <div class="box">
                        <input type="password" name="confirmation_mot_de_passe" required>
                        <label class="indice" >Confirmation du mot de passe </label>
                    </div>
                    <div class="button_inscription box">
                    <input  type="submit" id='submit' value="S'inscrire" name="inscrire" ></div>
                    </div>
                    <div class="box"></div>
                </div>
               

                
                

                
                </form>
                </fieldset>           
                  
    </body>
</html>


<?php
  
  ?>