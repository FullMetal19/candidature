<?php
try{
    $con = new PDO('mysql:host=localhost;dbname=ussein_candidature;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>