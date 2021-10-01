<?php
    session_start();
/* Template name: connexion */

?>

<style>

.imgbackground{
        position: fixed;
        left: 0;
        right: 0;
        z-index: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        filter : blur(12px); 
        animation: image 30s linear infinite both;
    }

@keyframes image{
    0%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/10/2.jpg");}
    25%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/10/3.jpg");}
    50{background-image: url("http://localhost/candidature/wp-content/uploads/2021/10/1.jpg");}
    75%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/10/4.jpg");}
    100%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/10/5.jpg");}
}
    .connexion{
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 15px ;
        height: 550px;
        width: 400px;
        justify-content: center;
        margin-left: -214px;
        margin-top: -300px;
        text-align: center;     
        background-color: rgba(255, 255, 255, 0.3);
        box-shadow: 10px 5px 10px rgb(10,107,49);
        border: 1px solid rgb(10,107,49);

    }
    .contenu{
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 10px;
        margin-top: 1px;
        
    }

    .box{
        position: relative;
        border-radius: 5px;
        margin: 10px;
        height: 50px;
        width:300PX;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 15px;
        /* border: 2px solid rgb(10,107,49); */
    }
    input{
        width: 100%;
        height: 100%;
        border: 2px solid rgb(10,107,49);
        border-radius: 5px;
        padding: 3%;
    }

    input::placeholder {
        color: rgb(44, 3, 17);
    }


    .button_connecter{
        width: 300px;
        border-radius: 20px;
        font-size: x-large;
        background-color: rgb(132,181,39);
        margin-bottom:5px;
        color: white;
        position: relative;
    }
    .button_connecter:hover{
        background-color: rgb(10,107,49);
    }

    .lien a{
        text-decoration: none;
        font-size: large;
        /* list-style-type: circle; */
        color: rgb(10,107,49);
        width: 100%;
    }

    img{
        position: relative;
        border-radius: 50%;
        width: 200px;
        height:200px;
        border: 5px solid rgb(10,107,49);
        /* margin-bottom: 5px; */

    }
    .mail input, .mot_de_passe input {
        position: absolute;
        top:0;
        left:0;
        background: transparent;

    }
    label{
        position: absolute;
        text-align: left;
        left: 3px;
        bottom: 20%;
        font-size: large;
        padding: 2%;
        transition: 0.9s;
        pointer-events: none;
        color: rgb(10,107,49);
    }
    .contenu .box input:focus ~ .info,
    .contenu .box input:valid ~ .info{
        transform: translateX(-5px) translateY(-32px);
        font-size: 15PX;
        /* color: ; */
    } 
    .message_erreur{
        color: rgb(141, 54, 20);
        font-size: large;
    }
    .message_erreur_Mail{
        color: rgb(141, 54, 20);
        font-size: large;
       top: 0;
        text-align: left;
    }
    .message_validation{
        text-align:center;
        color: rgb(10,107,49);
    }
    .titre span{
        font-size: x-large;
        color:rgb(10,107,49) ;
        font-weight: bold;
        font-style: italic;
    }
.connecter{
    margin-top:30px;
}
.mot_de_passe{
    margin-bottom:1px;
}
</style>
<body>
        <div class="imgbackground">
        </div>
        <!-- ARRIERE PLAN FLOU -->
      
        <fieldset class="connexion">
            <legend> <img src="http://localhost/candidature/wp-content/uploads/2021/09/USSEIN-LOGO.png" alt="Logo"> </legend>
            <form action="http://localhost/candidature/code_candidature/verification_connexion.php" method="POST">
                <!-- <label for="">CONNEXION</label> -->

                <div class="contenu">
                    <div class="titre">
                        <span>USSEIN CANDIDATURE</span>
                    </div>
                   
                    <div class="mail box">
                        <input type="text"  name="mail" id="email"  required>
                         <label for="email" class="mail info">e-Mail</label>
                          <!-- <br> -->
                    </div>
                  
                    <div class="mot_de_passe box">
                        <input type="password"  name="mot_de_passe" required>
                        <label for="mot_de_passe" class='mdp info'>Mot de passe</label>
                        <!-- <br> -->
                    </div>

                    <div class='message_erreur'>
                        <?php
                        if(isset($_SESSION['message_erreur'])){
                            echo $_SESSION['message_erreur'];
                            unset($_SESSION['message_erreur']);
                        }
                        ?>
                        
                    </div>
                    <div class="message_validation">
                        <label > <?php 
                        if(isset($_SESSION['message_validation'])){
                            echo $_SESSION['message_validation'];
                            unset($_SESSION['message_validation']);
                        }
                    ?></label>
                    </div>
                    <div class='message_erreur_Mail'>
                        <?php
                        if(isset($_SESSION['message_erreur_Mail'])){
                            echo $_SESSION['message_erreur_Mail'];
                            unset($_SESSION['message_erreur_Mail']);
                        }
                        ?>
                        
                    </div>
               

                    <div class="connecter box">
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