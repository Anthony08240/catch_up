<?php

  require_once('../traitement/connectBDD.php');

  $connexion = new Database('localhost', 'technews', 'root', '');
    $bdd = $connexion->PDOConnexion();



    $req = $bdd->prepare(" DELETE FROM article WHERE id_Article ='".$_GET['id']."'");
    $req ->execute();
    
    header("location:crud.php");

?>