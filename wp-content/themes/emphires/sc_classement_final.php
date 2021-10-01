<?php
session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublier')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}
/* Template name: classement_final */
$id=$_GET['id'];

?>
<h1 class="titre_page">Classement final</h1>
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

<style>
  .case_note{
    color: rgb(141, 54, 20);
    font-size: 20px;
  }
 .note{
   width: 100px;
   background: rgb(141, 54, 20);
 }
  .titre_page{
    text-align: center;
    background: rgb(10, 107, 49);
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
  body{
    font-family: sans-serif;
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
  th{
    color: white;
  }
  th{
    background-color: rgb(10, 107, 49);
  }
  tr:nth-child(odd){
    background-color: rgb(192, 206, 0);
  }
  
</style>
