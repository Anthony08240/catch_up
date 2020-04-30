<?php

require_once('../traitement/connectBDD.php');

$connexion = new Database('localhost', 'technews', 'root', '');
  $bdd = $connexion->PDOConnexion();


  $titre = !empty($_POST['titre']) ? $_POST['titre'] : NULL;
  $auteur = !empty($_POST['auteur']) ? $_POST['auteur'] : NULL;
  $contenu = !empty($_POST['contenu']) ? $_POST['contenu'] : NULL;
  $contenu_rapide = !empty($_POST['contenu_rapide']) ? $_POST['contenu_rapide'] : NULL;
  $date_article = !empty($_POST['date_article']) ? $_POST['date_article'] : NULL;
  $image_article = !empty($_POST['image_article']) ? $_POST['image_article'] : NULL;
  $id_user = !empty($_POST['id_user']) ? $_POST['id_user'] : NULL;


  $sql = $bdd->prepare("INSERT INTO article ( titre, auteur, contenu, contenu_rapide, date_article, image_article, id_user )
  VALUES ( :titre, :auteur, :contenu, :contenu_rapide, :date_article, :image_article, :id_user )");

$sql->execute(array(
":titre" => $titre,
":auteur" => $auteur,
":contenu" => $contenu,
":contenu_rapide" => $contenu_rapide,
":date_article" => $date_article,
":image_article" => $image_article,
":id_user" => $id_user,
));

echo 'Ajout effectué' 

?>
<br><br>
<a href="crud.php">Retour</a>