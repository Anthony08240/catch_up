<?php

require_once('connectBDD.php');

$connexion = new Database('localhost', 'technews', 'root', '');
$bdd = $connexion->PDOConnexion();

  $auteur = !empty($_POST['auteur']) ? $_POST['auteur'] : NULL;
  $contenu = !empty($_POST['contenu']) ? $_POST['contenu'] : NULL;



  $sql = $bdd->prepare("INSERT INTO commentaires ( auteur, contenu, id_Article, id_user )
                        VALUES ( :auteur, :contenu, ?, ? ) ");

  $sql->execute(array(
      ":auteur" => $auteur,
      ":contenu" => $contenu
  ));

  $sql-> closeCursor();

  header('location:index.php');

?>