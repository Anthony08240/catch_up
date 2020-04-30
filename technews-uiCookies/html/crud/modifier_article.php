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


  $sql = $bdd->prepare ("UPDATE article
           SET titre = ?, auteur = ?, contenu = ?, contenu_rapide = ?, date_article = ?,image_article = ?
           WHERE id_Article ='".$_GET['id']."' ");
           
  $sql->execute([$titre,$auteur,$contenu,$contenu_rapide,$date_article,$image_article]);

  header("location:crud.php");

?>
<br><br>
<a href="crud.php">Retour</a>