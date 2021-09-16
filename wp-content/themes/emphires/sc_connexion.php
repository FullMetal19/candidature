<?php
    session_start();
/* Template name: connexion */

?>

<style>
    .connexion{
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 15px ;
        height: 500px;
        width: 400px;
        justify-content: center;
        margin-left: -214px;
        margin-top: -250px;
        text-align: center;     
        background-color: rgba(255, 255, 255, 0.1);
        box-shadow: 10px 5px 10px rgb(10,107,49);

    }
    .contenu{
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-top: 10px;
        
    }

    input{
        border-radius: 5px;
        margin: 10px;
        height: 50px;
        width:300PX;
        background-color: rgba(255, 255, 255, 0.2);
        border: 2px solid rgb(10,107,49);
    }

    input::placeholder {
        color: rgb(44, 3, 17);
    }


    .button_connecter{
        width: 300px;
        border-radius: 20px;
        font-size: x-large;
        background-color: rgb(132,181,39);
        margin-bottom:20px;
    }
    .button_connecter:hover{
        background-color: rgb(10,107,49);
    }
    .lien{

    }

    .lien a{
        text-decoration: none;
        font-size: large;
        /* list-style-type: circle; */
        color: rgb(10,107,49);
        width: 100%;
    }
   
    


    .principal{
        background-color: aqua;
    }

    
    img{
        position: relative;
        border-radius: 50%;
        width: 200px;
        height:200px;
        border: 5px solid rgb(10,107,49);
        /* margin-bottom: 5px; */

    }

    
</style>
<body>
      
        <fieldset class="connexion">
            <legend> <img src="http://localhost/candidature/wp-content/uploads/2021/09/USSEIN-LOGO.png" alt="Logo"> </legend>
            <form action="http://localhost/candidature/code_candidature/verification_connexion.php" method="POST">
                <!-- <label for="">CONNEXION</label> -->

                <div class="contenu">
                <label > <?php 
                    if(isset($_SESSION['message_validation'])){
                        echo $_SESSION['message_validation'];
                        unset($_SESSION['message_validation']);
                    }
                ?></label> 
                    <div class="mail">
                        <input type="email" placeholder="e-mail" name="mail" ><br>
                    </div>
                    <div class="mot-de-passe">
                        <input type="password" placeholder="mot de passe" name="mot_de_passe"><br>
                    </div>

                    <div class='message_erreur'>
                        <?php
                        if(isset($_SESSION['message_erreur'])){
                            echo $_SESSION['message_erreur'];
                            unset($_SESSION['message_erreur']);
                        }
                        ?>
                        
                    </div>

                    <div class="connecter">
                        <input type="submit" value="Se connecter" class="button_connecter"> <br>
                    </div>
    
                    <div class="lien">
                        <a href="http://localhost/candidature/mot-de-passe-oublie/">Mot de passe oublié?</a>
                            <span>&nbsp;&nbsp;&nbsp;</span>
                        <a href="http://localhost/candidature/inscription/ ">S'inscrire</a>
                    </div>
                </div>    
                
    
            </form>
    
        </fieldset>
    
    
</body>