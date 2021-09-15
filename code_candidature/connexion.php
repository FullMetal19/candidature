<?php
    session_start();
/* Template name: connexion*/

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
        margin-left: -200px;
        margin-top: -250px;
        text-align: center;     
        background-color: rgba(255, 255, 255, 0.1);
        box-shadow: 10px 5px 5px rgb(145, 142, 142);

    }
    .contenu{
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-top: 50px;
        
    }

    input{
        border-radius: 5px;
        margin: 10px;
        height: 50px;
        width: 300PX;
        background-color: rgba(255, 255, 255, 0.2);
        border: 2px solid green;
    }

    input::placeholder {
        color: rgb(44, 3, 17);
    }


    .button_connecter{
        width: 300px;
        border-radius: 20px;
        font-size: x-large;
        background-color: green;
    }
    .lien{

    }

    .lien a{
        text-decoration: none;
        font-size: large;
        list-style-type: circle;
        color: green;
    }
   
    


    .principal{
        background-color: aqua;
    }

    
    img{
        position: relative;
        border-radius: 50%;
        width: 200px;
        border: 5px solid rgb(192, 206, 0);
        /* margin-bottom: 5px; */

    }

    
</style>
<body>
      
        <fieldset class="connexion">
            <legend> <img src="USSEIN-LOGO.png" alt=""> </legend>
            <form action="" method="POST">
                <!-- <label for="">CONNEXION</label> -->
                <div class="contenu">
                    <div class="mail">
                        <input type="text" placeholder="e-mail" name="mail" ><br>
                    </div>
                    <div class="mot-de-passe">
                        <input type="password" placeholder=" mot de passe" name="mot_de_passe"><br>
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
                        <a href=" ">Mot de passe oublié?</a>

                        <a href=" ">S'inscrire</a>
                    </div>
                </div>    
                
    
            </form>
    
        </fieldset>
    
    
</body>