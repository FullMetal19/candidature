<?php
/* template name:sc_per_liste */
?>
<h1 class="titre_per">P.E.R</h1>
<table>
    <tr>
        <th>Nº</th>
        <th>MATRICULE</th>
        <th>PRENOM</th>
        <th>NOM</th>
        <th>UFR</th>
        <th>EMAIL</th>
        <th>NOTE</th>
    </tr>
    <?php
    $con = mysqli_connect("localhost","root","","ussein_candidature");
    $query= "SELECT * FROM ec_connexion_per";
    $result = mysqli_query($con, $query);
    $i=1;
    while ($ligne1 =  mysqli_fetch_array ($result)) { ?>
         <td><?php echo $i?></td>
        <td><?php echo $ligne1['matricule'] ?></td>
        <td><?php echo $ligne1['prenom'] ?></td>
        <td> <?php echo $ligne1['nom'] ?> </td>
        <td> <?php echo $ligne1['ufr'] ?> </td>
        <td><?php echo $ligne1['email'] ?></td>
        <td><?php echo $ligne1['note'] ?></td>
        </a>
    </tr>

    <?php $i+=1; } ?>
  </table>

  <style>
      *,* ::before,*::after{
    box-sizing: border-box;
  }

  table{
    width: 90%;
    border-collapse: collapse;
    margin-left: 55px;
  }
  th,td{
    padding: 3px;
    text-align: left;
    border: solid 1px green;
   
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
      background-color:rgb(10, 107, 49);
      color: white;
       width: 90%;
       text-align: center;
       margin-left: 55px;
      
  }
  </style>