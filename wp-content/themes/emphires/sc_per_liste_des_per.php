<?php
/* template name:sc_per_liste */

?>



    <!-- Partie Gauche -->
    <?php 
    
$_SESSION['0'] = "";
$_SESSION['1'] = "";
$_SESSION['2'] = "";
$_SESSION['3'] = "";
$_SESSION['4'] = "active";
$_SESSION['5'] = "";
        include('sc_admin_partie_gauche.php');
        ?>

<div class="droite" id="droite">
                <div class="droite_container">

<h1 class="titre_per">L'ensemble des PERs</h1>
<table>
    <tr>
        <th>Nº</th>
        <th>MATRICULE</th>
        <th>PRENOM</th>
        <th>NOM</th>
        <th>UFR</th>
        <th>EMAIL</th>
        <th>NOTE</th>
        <th></th>
    </tr>
    <?php
    $con = mysqli_connect("localhost","root","","ussein_candidature");
    $query= "SELECT * FROM ec_connexion_per";
    $result = mysqli_query($con, $query);
    $i=1;
    while ($ligne1 =  mysqli_fetch_array ($result)) { ?>
    
         <tr> 
        <td><?php echo $i?></td>
        <td><?php echo $ligne1['matricule'] ?></td>
        <td><?php echo $ligne1['prenom'] ?></td>
        <td> <?php echo $ligne1['nom'] ?> </td>
        <td> <?php echo $ligne1['ufr'] ?> </td>
        <td><?php echo $ligne1['email'] ?></td>
        <td><?php echo $ligne1['note'] ?></td>
        <td class="lien_consulter"><a href='http://localhost/candidature/notation_per?matricule=<?php echo $ligne1['matricule'] ;?>&mail=<?php echo $ligne1['email'] ;?>' >Consulter </a></td>
    </tr>


    <?php $i+=1; } ?>
  </table>
                </div>
</div>
  <style>
      .lien_Consulter{ 
          width:5%;
      }
      .lien_Consulter a{
      text-decoration: none;
      background-color: rgb(192, 206, 0);
      padding: 0 25px;
      font-weight: bold;

    }

      *,* ::before,*::after{
    box-sizing: border-box;
  }

  table{
    width: 90%;
    border-collapse: collapse;
    margin-left: 55px;
    color: #fff;
    background-color: rgba(10, 107, 49,0.6);
  }
  th,td{
    padding: 3px;
    text-align: left;
    border: solid 1px grey;
   
  }
  tr:nth-child(odd){
    background-color: rgba(10,107,49,0.1);
  }
  th{
    color: white;
  }
  th{
    background-color: rgba(10, 107, 49,0.9);
  }
  .titre_per{
    text-align: center;
        background-color: rgb(10, 107, 49);
        color: white;
        border-radius: 15px;
        margin: 1% 0%;;
      
  }
  </style>