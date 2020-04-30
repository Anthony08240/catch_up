<?php

  require_once('../traitement/connectBDD.php');

  $connexion = new Database('localhost', 'technews', 'root', '');
    $bdd = $connexion->PDOConnexion();



    $req = $bdd->prepare(" DELETE FROM user WHERE id_user ='".$_GET['id']."'");
    $req ->execute();
    
    header("location:crud_user.php");

?>