<?php
require_once('connectBDD.php');

$connexion = new Database('localhost', 'technews', 'root', '');
$bdd = $connexion->PDOConnexion();

require_once('../class/User.php');

$nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
$pass = !empty($_POST['pass']) ? $_POST['pass'] : NULL;



$user1 = new User($nom, $pass);

$user1 -> connect($bdd);


?>