<?php
/*Template name: liste admin niveau2*/
session_start();
$con=mysqli_connect('localhost','root','','ussein_candidature');
$requete = mysqli_query($con,"SELECT * FROM ec_connexion WHERE status='2'");

$_SESSION['0'] = "";
$_SESSION['1'] = "";
$_SESSION['2'] = "";
$_SESSION['3'] = "active";
$_SESSION['4'] = "";
$_SESSION['5'] = "";

?>

<style>
    #a{
    background-color: rgb(192,206,0);
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
    
    table{
    width: 100%;
    border-collapse: collapse;
    color: #fff;
    background-color: rgba(10, 107, 49, 0.6);
  }
  th,td{
    padding: 10px;
    text-align: left;
    border: solid 1px green;
   
  }
  tr:nth-child(odd){
    background-color: rgba(192, 206, 0,0.6);
  }
  th{
    color: white;
  }
  th{
    background-color: rgb(10, 107, 49);
  }
  .titre_page{
        text-align: center;
        background-color: rgb(10, 107, 49);
        color: white;
        border-radius: 15px;
        margin: 1% 0%;;
    }
    .le_lien{
        text-align: center;
    }

    a.lien{
        text-decoration: none;
        color: #fff;
           background-color:rgba(141, 54, 20, 0.6);
           padding: 5%;
    }

</style>
<?php
                                    if(isset($_SESSION["notification1"])){
                                        echo $_SESSION["notification1"];
                                        unset($_SESSION["notification1"]);
                                    }
                                    ?>
    <!-- Partie Gauche -->
    <?php 
        include('sc_admin_partie_gauche.php');
        ?>

        <div class="droite" id="droite">
                <div class="droite_container">
                <h1 class="titre_page">Liste des Admins Simples</h1>
                <table>
                <tr>
                    <th>Nº</th>
                    <th>PRENOM</th>
                    <th>NOM</th>
                    <th>E-MAIL</th>
                    <th>TEL</th>
                    <th class="note">GESTION</th>
                    <!-- <th></th> -->
                </tr>
                <?php 
                $i=1;
                while($result=mysqli_fetch_array($requete)){?>
                <div class="candidat"> 
                   <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $result['prenom']; ?></td>
                     <td><?php echo $result['nom'] ;?> </td>
                     <td><?php echo $result['mail'] ;?></td>
                     <td><?php echo $result['telephone'] ;?></td>
                     <td class="le_lien"><a href='http://localhost/candidature/gestion-admin-simple?mail=<?php echo $result['mail'] ;?>' class="lien"> Modifier</a> </td>
                   </tr>

                 </div>
                 <?php $i+=1;  }  ?>
                
                </table>
                </div>
        </div>

        <script>
            setTimeout(function(){
        document.getElementById('a').style.display="none";
    },6000);
        </script>