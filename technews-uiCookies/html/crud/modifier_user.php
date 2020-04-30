<?php

require_once('../traitement/connectBDD.php');

$connexion = new Database('localhost', 'technews', 'root', '');
  $bdd = $connexion->PDOConnexion();

 $id_typeUser= !empty($_POST['id_typeUser']) ? $_POST['id_typeUser'] : NULL;
 $nom= !empty($_POST['nom']) ? $_POST['nom'] : NULL;
 $email= !empty($_POST['email']) ? $_POST['email'] : NULL;
 $pass= !empty($_POST['pass']) ? $_POST['pass'] : NULL;

 $sql = $bdd->prepare ("UPDATE user 
 SET id_typeUser = ?, nom = ?, email = ?, pass = ?
 WHERE id_user ='".$_GET['id']."' ");
 
$sql->execute([$id_typeUser,$nom,$email,$pass]);

  header('location:crud_user.php');

?>