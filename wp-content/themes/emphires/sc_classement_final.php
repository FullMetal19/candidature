<?php
session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublier')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}

$_SESSION['0'] = "";
$_SESSION['1'] = "active";
$_SESSION['2'] = "";
$_SESSION['3'] = "";
$_SESSION['4'] = "";
$_SESSION['5'] = "";

/* Template name: classement_final */
$id=$_GET['id'];

?>
<style>
  
    fieldset{
        text-align: center;
        width: 90%;
        margin-left: 2.2%;
        padding: 2em;
    }
    
    .principal{
        display: flex;
        flex-direction: column;
        gap: 2em 0;
    }
    a.offre{
        border-inline-start: 1rem solid white;
        writing-mode: horizontal-tb;
        direction: rtl;
        padding: 0.5em;
        background-color: rgb(10, 107, 49);
        text-decoration: none;
        text-align: center;
        color: white;
        font-weight:bolder;
        margin: 0 100px;
        border-radius: 5px;
        transition: 0.5s all;
      }
       .offre:hover {
           background: rgb(141,54, 20);
           transform:scale(1.02);
           color: white;
           transition: 0.5s all;
       }
       .titre_des_offres{
        
           text-align: center;
           color: white;
           background: rgb(10, 107, 49);
           border-radius: 50px;
           width: 50%;
           font-size: xx-large;
       }
       @media(max-width:700px){
    a.offre{
     display: flex;
     gap:1em 0;
     flex-direction:column;
     padding:3%;
     align-items:center;
 }
}
  .case_note{
    color: rgb(141, 54, 20);
    font-size: 20px;
    background-color:rgba(255,255,255,0.6);
    
  }
 .note{
   width: 100px;
   background: rgb(141, 54, 20);
 }
  .titre_page{
    text-align: center;
    background: rgb(10, 107, 49);
    margin:2% 0%;
    border-radius: 50px;
    color: white;
  }
.le_lien{
  text-align: center;
  background: rgb(192, 206, 0);
  width: 25px;
  border-radius: 50px;
 
 
}
.le_lien:hover {
           background: rgb(10, 107, 49);
           transform:scale(1.02);
            color: white;}
.le_lien a{
  text-decoration: none;
  width: 100%;
  color: white;
}
  *,* ::before,*::after{
    box-sizing: border-box;
  }

  table{
    width: 100%;
    border-collapse: collapse;
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
  .bouton_valider{
      color: white;
      transition: 1s;
	 background:rgb(141, 54, 20);
     padding : 0.4em 1em;
      
  }
  .bouton_valider:hover{
           background: rgb(10, 107, 49);
           transform:scale(1.04);
            color: white;
            transition: 1s;
			background:rgb(141, 54, 20);
  }
  div.zone_saisir_candidat{
      text-align:center;
      margin-bottom:5px;
     
  }
  .text_pour_saisir{
      margin-right:25px;
      font-size:large;
      font-weight:bold; 
  }
  .saisir{
    margin-right:30px; 
    color:black;
    padding : 0.4em 2em;

  }
  
</style>
    <!-- Partie Gauche -->
    <?php 
        include('sc_admin_partie_gauche.php');
        ?>

    
        <div class="droite" id="droite">
                <div class="droite_container">



<h1 class="titre_page">Classement final</h1>


<div class="zone_saisir_candidat">
       <form action="http://localhost/candidature/code_candidature/notification_finale_mail.php?id=<?php echo $id ?>" method="POST">

        <label class="text_pour_saisir">Veuillez saisir le nombre de candidat retenu</label> 
        <input type="number" name="quota" class="saisir" >
        <input type="submit" value="Valider" class="bouton_valider"> 
     
       </form>
    </div>


<table>
  <tr>
    <th>Nº</th>
    <th>PRENOM</th>
    <th>NOM</th>
    <th>E-MAIL</th>
    <th>TEL</th>
    <th class="note">NOTE</th>
    <!-- <th></th> -->
  </tr>
<?php 
  
  $con=mysqli_connect('localhost','root','','ussein_candidature');
  //  $query=mysqli_query($con,"SELECT *FROM ec_postuler WHERE id_offre=' mettre ici le id'");
  //  while($tab=mysqli_fetch_array($query)){


    
//----------------requte de jointure entre deux table -----
  $requete=mysqli_query($con,"SELECT * FROM ec_connexion INNER JOIN ec_postuler ON mail=ec_postuler.id_candidat WHERE id_offre='$id' ORDER BY note DESC");
  $i=1;
  while($result=mysqli_fetch_array($requete)){?>
  <div class="candidat"> 
     
     <tr>
       <td><?php echo $i ?></td>
       <td><?php echo $result['prenom']; ?></td>
       <td><?php echo $result['nom'] ;?> </td>
       <td><?php echo $result['mail'] ;?></td>
       <td><?php echo $result['telephone'] ;?></td>
       <td class="case_note"><?php echo $result['note'];?></td>
       <!-- <td class="le_lien"><a href=' ' class="lien"> Consulter</a> </td> -->
     </tr>
   
   <?php $i+=1;  }  ?>  
 </div>
     <!-- <?php //} ?> -->

</table>

  </div>
  </div>

