 <?php
 /*Template name: Gestion d'un compte admin simple*/
 session_start();
$con=mysqli_connect('localhost','root','','ussein_candidature');
$mail = $_GET['mail'];
$query_info = mysqli_query($con,"SELECT prenom,nom FROM ec_connexion WHERE mail='$mail'");
$tab_info = mysqli_fetch_array($query_info);

$_SESSION['0'] = "";
$_SESSION['1'] = "";
$_SESSION['2'] = "";
$_SESSION['3'] = "active";
$_SESSION['4'] = "";
$_SESSION['5'] = "";

?>
<style>
        #a{
    background-color: rgb(141,54,20);
    color: white;
    width: 400px;
    padding: 2%;
    text-align: justify;
    position: fixed;
    right: 10px;
    border-radius: 10px 100px / 120px;
    z-index: 9999;
    animation: alert 1s ease forwards;
}
@keyframes alert{
    0%{
        transform: translateX(100%);
    }
    40%{
        transform: translateX(-10%);
    }
    80%{
        transform: translateX(0%);
    }
    100%{
        transform: translateX(-10%);
    }
}
    
    form{
        width: 50%;
        height: 80%;
        display: flex;
        flex-direction: column;
        margin-left: 25%;
        border: 1px solid #fff;
        border-radius: 5px;
        background-color: rgba(10, 107, 49,0.6);
        box-shadow: 5px 5px 5px rgba(132, 181, 39,0.6);
    }
    input[type=email],select,input[type=submit],input[type=text]{
        width: 90%;
        height: 10%;
        margin: 2% 5%;
        outline: none;
        background: rgba(132, 181, 39,0.4);
        color: #fff;

    }
    option{
        background-color: #fff;
        color: black;
    }
    input[type=checkbox]{
        margin: 1% 5%;
    }
    .titre_page{
        text-align: center;
        background-color: rgb(10, 107, 49);
        color: white;
        border-radius: 15px;
        margin: 1% 0%;;
    }

</style>
    <!-- Partie Gauche -->
    <?php 
        include('sc_admin_partie_gauche.php');
        ?>
        <div class="droite" id="droite">
                <div class="droite_container">
                <h1 class="titre_page">Gestion d'un Compte Admin Simple</h1>
<?php
if(isset($_SESSION['notification1'])){
    echo $_SESSION['notification1'];
    unset($_SESSION['notification1']);
}
$query1 = mysqli_query($con,"SELECT adresse FROM ec_connexion WHERE mail='$mail'");
                            $tab_query = mysqli_fetch_array($query1);
                            $tab_adresse = explode(";",$tab_query['adresse']);
?>
<form action="http://localhost/candidature/code_candidature/verification_update_admin_niveau2.php" method="POST">
    <input type="email" name="email" value="<?php echo $mail; ?>" style="display: none;">
    <input type="email" value="<?php echo $mail; ?>" disabled>
    <input type="text" value="<?php echo $tab_info['prenom']; ?>" disabled>
    <input type="text" value="<?php echo $tab_info['nom'];  ?>" disabled>
    <?php 
    if($tab_query['adresse'] == 0){?>
    <style>
        #check{
            display: none;
        }
    </style>
    <select name="choix" id="choix" onchange="check()">
        <option value="0">Désactiver</option>
        <option value="1">Activer</option>
    </select>

    <?php }
    else{?>
    <select name="choix" id="choix" onchange="check()">
        <option value="1">Activer</option>
        <option value="0">Désactiver</option>
    </select>
    <?php }
    ?>
    <div id="check">
        
    <?php               
               $requete2 = mysqli_query($con,"SELECT * FROM ec_offre");
               while($tab = mysqli_fetch_array($requete2)){
                   if(in_array($tab['id'],$tab_adresse)){
                    ?>
               <input type="checkbox" name="tableau[]" checked value="<?php echo $tab['id'] ?>">
                         <?php echo $tab['titre'] ?> <br><br>
                   <?php } else{
                        ?>
                        <input type="checkbox" name="tableau[]" value="<?php echo $tab['id'] ?>">
                                  <?php echo $tab['titre'] ?> <br><br>
                 <?php  } 
                   
                }
               ?>
               </div>
               <input type="submit" value="Enregistrer les changements">
</form>
                </div>
        </div>

<script>
    function check(){
       var choix = document.getElementById("choix").value;
       if(choix == 0){
        document.getElementById("check").style.display="none";
       }
    else if(choix == 1){
        document.getElementById("check").style.display="block";
    }
    }
            setTimeout(function(){
        document.getElementById('a').style.display="none";
    },5000);
</script>

<?php
mysqli_close($con);
?>