<?php
require_once('connectBDD.php');

$connexion = new Database('localhost', 'technews', 'root', '');
$bdd = $connexion->PDOConnexion();

require_once('../class/User.php');

$nom = !empty($_POST['nom']) ? $_POST['nom'] : 1 ;
$pass = !empty($_POST['pass']) ? $_POST['pass'] : NULL;
$email = !empty($_POST['email']) ? $_POST['email'] : NULL;




$user1 = new User_insc($nom, $pass, $email);
$user1 -> inscription($bdd);


?>