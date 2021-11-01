<?php
/* template name:sc_per_point_modulable*/
include("http://localhost/candidature/code_per/les_variables_note_per.php");
?>

<form class="body"    action="per_verif_point_modulable.php" method="POST">
 <details open=""> <summary>PRODUCTION SCIENTIFIQUE</summary>

<details class="publication">
    <summary>Publications</summary>
<table>
<tr>
<th>            </th>
<th>Description</th>
<th>Pondération</th>

</tr>

<tr><td rowspan="6">Articles scientifiques indexés</td></tr> 
    <tr><td>Auteur1</td>   <td><input type="text" name="ps_p_a1" value="<?php echo $ps_p_a1 ?>"></td></tr>
    <tr><td>Auteur2</td>  <td><input type="text" name="ps_p_a2" value="<?php echo $ps_p_a2 ?>" ></td></tr>
    <tr><td>Auteur3</td> <td><input type="text" name="ps_p_a3" value="<?php echo $ps_p_a3 ?>" ></td></tr>
    <tr><td>Autre auteur</td> <td><input type="text" name="ps_p_a4" value="<?php echo $ps_p_a4 ?>" ></td> </tr>  
    <tr><td>Le responsable du laboratoire ou du projet</td> <td><input type="text" name="ps_p_a5" value="<?php echo $ps_p_a5 ?>" ></td> </tr>
     <!--finide la liaison--> 

    

<tr><td rowspan="6">Articles scientifiques non indexés</td></tr>
    <tr><td>Auteur1</td>   <td><input type="text" name="ps_p_b1" value="<?php echo $ps_p_b1 ?>"         ></td></tr>
    <tr><td>Auteur2</td>  <td><input type="text" name="ps_p_b2" value="<?php echo $ps_p_b2 ?>"      ></td></tr>
    <tr><td>Auteur3</td> <td><input type="text" name="ps_p_b3" value="<?php echo $ps_p_b3 ?>"       ></td></tr>
    <tr><td>Autre auteur</td> <td><input type="text" name="ps_p_b4" value="<?php echo $ps_p_b4 ?>"   ></td> </tr> 
    <tr><td>Le responsable du laboratoire ou du projet</td> <td><input type="text" name="ps_p_b5" value="<?php echo $ps_p_b5 ?>" ></td></tr>
 <!--finide la liaison-->
 


<tr><td rowspan="6">Proceedings de conférence</td></tr>
   <tr><td>Auteur1</td>   <td> <input type="text" name="ps_p_c1" value="<?php echo $ps_p_c1 ?>"    ></td></tr>
    <tr><td>Auteur2</td>  <td><input type="text" name="ps_p_c2" value="<?php echo $ps_p_c2 ?>"    ></td></tr>
    <tr><td>Auteur3</td> <td><input type="text" name="ps_p_c3" value="<?php echo $ps_p_c3 ?>"    ></td></tr>
    <tr><td>Autre auteur</td> <td><input type="text" name="ps_p_c4" value="<?php echo $ps_p_c4 ?>"    ></td> </tr>   
    <tr><td>Le responsable du laboratoire ou du projet</td> <td><input type="text" name="ps_p_c5" value="<?php echo $ps_p_c5 ?>" ></td> </tr>
 <!--finide la liaison-->
    
<tr><td rowspan="6">Chapitres de livre </td></tr>
    <tr><td>Auteur1</td>   <td><input type="text" name="ps_p_d1" value="<?php echo $ps_p_d1 ?>"   ></td></tr>
    <tr><td>Auteur2</td>  <td><input type="text" name="ps_p_d2" value="<?php echo $ps_p_d2 ?>"   ></td></tr>
    <tr><td>Auteur3</td> <td><input type="text" name="ps_p_d3" value="<?php echo $ps_p_d3 ?>"    ></td></tr>
    <tr><td>Autre auteur</td> <td><input type="text" name="ps_p_d4" value="<?php echo $ps_p_d4 ?>"   ></td> </tr> 
    <tr><td>Le responsable du laboratoire ou du projet</td> <td><input type="text" name="ps_p_d5" value="<?php echo $ps_p_d5 ?>" ></td> </tr>
 <!--finide la liaison--> 


<tr><td  rowspan="6">Mélanges</td></tr>
    <tr><td>Auteur1</td>   <td><input type="text" name="ps_p_e1" value="<?php echo $ps_p_e1 ?>"   ></td></tr>
    <tr><td>Auteur2</td>  <td><input type="text" name="ps_p_e2" value="<?php echo $ps_p_e2 ?>"   ></td></tr>
    <tr><td>Auteur3</td>  <td><input type="text" name="ps_p_e3" value="<?php echo $ps_p_e3 ?>"   ></td></tr>
    <tr><td>Autre auteur</td><td><input type="text" name="ps_p_e4" value="<?php echo $ps_p_e4 ?>"   ></td> </tr>  
    <tr><td>Le responsable du laboratoire ou du projet</td> <td><input type="text" name="ps_p_e5" value="<?php echo $ps_p_e5 ?>" ></td> </tr>
   <!--finide la liaison--> 


<tr>
<td rowspan="2">Ouvrages</td></tr>
<tr><td></td> <td><input type="text" name="ps_p_f1" value="<?php echo $ps_p_f1 ?>"   ></td></tr>

   


<tr>
    <td rowspan="2">Directeur de Revue</td></tr>
    <tr><td></td><td><input type="text" name="ps_p_g1" value="<?php echo $ps_p_g1 ?>"   ></td></tr>
    
   


<tr>
    <td rowspan="2">Fiches techniques </td></tr>
   <tr><td></td><td><input type="text" name="ps_p_h1" value="<?php echo $ps_p_h1 ?>"   ></td></tr> 
  
    

<tr>
    <td rowspan="2">Documents de vulgarisation ou de valorisation</td></tr>
   <tr><td></td> <td><input type="text" name="ps_p_i1" value="<?php echo $ps_p_i1 ?>"   ></td> </tr> 
   
    
</table>
</details>


<!-- debut communication -->
<details><summary>Communications</summary>
<table class="a">
<tr>
<th>            </th>
<th>Pondération</th>
</tr>

 
    <tr><td>Participation et communication dans des conférences internationales  </td><td><input type="text" name="ps_c_a1" value="<?php echo $ps_c_a1 ?>"></td></tr>
    <tr><td>Participation à des conférences nationales  </td><td><input type="text" name="ps_c_a2" value="<?php echo $ps_c_a2 ?>"></td></tr>
    <tr><td>Conférencier ou animateur de séminaire dans le domaine au niveau international</td><td><input type="text" name="ps_c_a3" value="<?php echo $ps_c_a3 ?>"></td></tr>
   

     <!--finide la liaison--> 
</table>
</details>
</details>

<!-- debut encadrement -->
<details>
    <summary> ENCADREMENT</summary>
<table class="a">
<tr>
<th>            </th>
<th>Pondération</th>
</tr>
<tr><td>Licence ou équivalent</td><td><input type="text" name="encadrement_a1" value="<?php echo $encadrement_a1 ?>"></td></tr>
    <tr><td>Diplôme d’Ingénieur  ou équivalent</td><td><input type="text" name="encadrement_a2" value="<?php echo $encadrement_a2 ?>"></td></tr>
    <tr><td>Master ou équivalents</td><td><input type="text" name="encadrement_a3" value="<?php echo $encadrement_a3 ?>"></td></tr>
    <tr><td>Diplôme d’État de Docteur en MPOV</td><td><input type="text" name="encadrement_a4" value="<?php echo $encadrement_a4 ?>"></td></tr>
    <tr><td>Doctorat unique</td><td><input type="text" name="encadrement_a5" value="<?php echo $encadrement_a5 ?>"></td></tr>
    <tr><td>DES</td><td><input type="text" name="encadrement_a6" value="<?php echo $encadrement_a6 ?>"></td></tr>

     <!--finide la liaison--> 
</table>
</details>


<!-- debut  encadrement 
<details>
    <summary> ENCADREMENT</summary>
<table>
<tr>
<th>            </th>
<th>Description</th>
<th>Pondération</th>
</tr>
<tr><td>Licence ou équivalent</td>  <td>mémoire</td>  <td><input type="text" name=" " value=" "></td></tr>
    <tr><td>Diplôme d’Ingénieur  ou équivalent</td>  <td>mémoire</td>  <td><input type="text" name=" " value=" "></td></tr>
    <tr><td>Master ou équivalents</td>  <td>mémoire</td>  <td><input type="text" name=" " value=" "></td></tr>
    <tr><td>Diplôme d’État de Docteur en MPOV</td>  <td>thése</td>  <td><input type="text" name=" " value=" "></td></tr>
    <tr><td>Doctorat unique</td>  <td>thése</td>  <td><input type="text" name=" " value=" "></td></tr>
    <tr><td>DES</td>  <td>mémoire</td>  <td><input type="text" name=" " value=" "></td></tr>

     
</table>
</details> -->

<!-- debut participation jurys -->
<details open>
<summary>PARTICIPATION AUX JURYS</summary>
<details>
    <summary>Membre jury délibération  </summary>
  <table class="a"> <th>            </th>
<th>Pondération</th>
</tr> 
    <tr><td>Diplôme Ingénieur ou équivalents</td><td><input type="text" name="mjd_a1" value="<?php echo $mjd_a1 ?>"></td></tr>
    <tr><td>Master ou équivalents</td><td><input type="text" name="mjd_a2" value="<?php echo $mjd_a2 ?>"></td></tr>
    <tr><td>Diplôme d’État de Docteur en MPOV</td><td><input type="text" name="mjd_a3" value="<?php echo $mjd_a3 ?>"></td></tr>
    <tr><td>DES</td><td><input type="text" name="mjd_a4" value="<?php echo $mjd_a4 ?>"></td></tr>
    <tr><td>Évaluateur thèse Doctorat unique </td><td><input type="text" name="mjd_a5" value="<?php echo $mjd_a5 ?>"></td></tr>
    
</table>
</details>

<details>
    <summary>Président jury délibération  </summary>
    <table class="a">
<tr>
<th>            </th>
<th>Pondération</th>
</tr>
<tr><td>Diplôme Ingénieur ou équivalent</td><td><input type="text" name="pjd_a1" value="<?php echo $pjd_a1 ?>"></td></tr>
    <tr><td>Master ou équivalents</td><td><input type="text" name="pjd_a2" value="<?php echo $pjd_a2 ?>"></td></tr>
    <tr><td>Diplôme d’État de Docteur en MPOV</td><td><input type="text" name="pjd_a3" value="<?php echo $pjd_a3 ?>"></td></tr>
    <tr><td>Thèse Doctorat unique</td><td><input type="text" name="pjd_a4" value="<?php echo $pjd_a4 ?>"></td></tr>
    </table>
</details>

</details>
<details>
    <summary>RESPONSABILITES ACADÉMIQUES</summary>
 
 <table class="a">   <tr>
<th>            </th>
<th>Pondération</th>
</tr>
<tr><td>Responsable de niveau </td><td><input type="text" name="respo_aca_a1" value="<?php echo $respo_aca_a1 ?>"></td></tr>
<tr><td>Responsable de formation </td><td><input type="text" name="respo_aca_a2" value="<?php echo $respo_aca_a2 ?>"></td></tr>
<tr><td>Chef de département  </td><td><input type="text" name="respo_aca_a3" value="<?php echo $respo_aca_a3 ?>"></td></tr>
<tr><td>Directeur des Études (Instituts de faculté)</td>  <td><input type="text" name="respo_aca_a4" value="<?php echo $respo_aca_a4 ?>"></td></tr>
<tr><td>Directeur des Études (Instituts d’Université) </td>  <td><input type="text" name="respo_aca_a5" value="<?php echo $respo_aca_a5 ?>"></td></tr>
<tr><td>Assesseur, Directeur d’UFR adjoint  </td>    <td><input type="text" name="respo_aca_a6" value="<?php echo $respo_aca_a6 ?>"></td></tr>
<tr><td>Directeur central  </td>   <td><input type="text" name="respo_aca_a7" value="<?php echo $respo_aca_a7 ?>"></td></tr>
<tr><td>Responsable de formation doctorale </td>  <td><input type="text" name="respo_aca_a8" value="<?php echo $respo_aca_a8 ?>"></td></tr>
<tr><td>Directeur de revue </td>    <td><input type="text" name="respo_aca_a9" value="<?php echo $respo_aca_a9 ?>"></td></tr>
<tr><td>Directeur de laboratoire/Chef de service  </td>   <td><input type="text" name="respo_aca_aa1" value="<?php echo $respo_aca_aa1 ?>"></td></tr>
<tr><td>Directeur d’École doctorale </td>    <td><input type="text" name="respo_aca_aa2" value="<?php echo $respo_aca_aa2 ?>"></td></tr>
<tr><td>Chef d’Établissement (Directeur d’UFR, Directeurs d’Écoles et d’instituts ayant de rang de faculté) </td>   <td><input type="text" name="respo_aca_aa3" value="<?php echo $respo_aca_aa3 ?>"></td></tr>
<tr><td>Chef d’Établissement (Directeurs d’Institut d’Université) </td>  <td><input type="text" name="respo_aca_aa4" value="<?php echo $respo_aca_aa4 ?>"></td></tr>
</table>
</details>

<details>
    <summary>DEVELOPPEMENT INSTITUTIONNEL</summary>
    <table class="a">   <tr>
<th>            </th>
<th>Pondération</th>
</tr>
<tr><td>Promotion de la pédagogie  </td><td><input type="text" name="di_a1" value="<?php echo $di_a1 ?>"></td></tr>
<tr><td>Promotion de la recherche  </td><td><input type="text" name="di_a2" value="<?php echo $di_a2 ?>"></td></tr>
<tr><td>Promotion de la gouvernance  </td><td><input type="text" name="di_a3" value="<?php echo $di_a3 ?>"></td></tr>
<tr><td>Services à la communauté  </td> <td><input type="text" name="di_a4" value="<?php echo $di_a4 ?>"></td></tr>
<tr><td>Capacité à mobiliser des ressources et des partenaires(Pour le chercheur principal)</td><td><input type="text" name="di_a5" value="<?php echo $di_a5 ?>"></td></tr>
<tr><td>Capacité à mobiliser des ressources et des partenaires(Pour le chercheur associé)</td><td><input type="text" name="di_a6" value="<?php echo $di_a6 ?>"></td></tr>

    </table>
</details>

<details>
    <summary>INNOVATIONS, BREVETS, DISTINCTIONS</summary>
    <table class="a">   <tr>
<th>            </th>
<th>Pondération</th>
</tr>
<tr><td>Brevets  </td><td><input type="text" name="ibd_a1" value="<?php echo $ibd_a1 ?>"></td></tr>
<tr><td>Distinctions </td></td>  <td><input type="text" name="ibd_a2" value="<?php echo $ibd_a2 ?>"></td></tr>
</table>
</details>

<input type="submit" value="Enregistrer les modifications">
                </form>
                
                <!-- <a class="reinitialiser" href="http://localhost/candidature/code_candidature/verification_point_modulable_defaut.php"><div class="div_reinitialiser">Revenir à la configuration d'origine</div></a> -->
                <a class="reinitialiser" href="per_verif_point_modulable_defaut.php"><div class="div_reinitialiser">Revenir à la configuration d'origine</div></a>

























<style>
    .body{
        display: flex;
        flex-direction: column;
    }
input[type=text]{
        width: 100%;
        height: 100%;
        text-align: center;
        font-size: 1em;
        outline: none;
        border: none;
        background-color: rgba(10,107,49,0.5);
        color: #fff;}

*,* ::before,*::after{
    box-sizing: border-box;
  }
  *{
      margin: 0;
      padding: 0;
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
    background-color: rgb(10, 107, 49);
  }
  .a td:last-child{
        width: 10%;
    }
    summary{
        background-color: rgb(10, 107, 49);
        padding: 1%;
        cursor: pointer;
        margin: 1% 2%;
        color: #fff;
    }
    table{
        margin: 0% 5%;
    }
    details details summary{
        margin: 1% 5%;
        padding: 1%;
    }
    input[type=submit]{
        padding: 1%;
        width:80%;
        cursor: pointer;
        background-color: rgba(132, 181, 39,0.6);
        color: #fff;
        font-size: large;
        margin: 0% 10%;
        border: none;
        transition: 1s all;
    }
    input[type=submit]:hover{
        background-color: rgba(10, 107, 49,0.6);
        transition: 1s all;
        transform: translateX(5%);
    }
    a.reinitialiser{
        text-decoration: none;
        color: #fff;
        width: 100%;
}
div.div_reinitialiser{
    background-color: rgba(141, 54, 20,0.6);
    text-align: center;
    padding: 1%;
    margin: 2% 10%;
    font-size: large;
    transition: 1s all;
}
div.div_reinitialiser:hover{
    background-color: rgba(10, 107, 49,0.6);
        transition: 1s all;
        transform: translateX(5%);
}
</style>