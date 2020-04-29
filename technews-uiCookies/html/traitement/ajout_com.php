<?php

require_once('../traitement/connectBDD.php');

  $auteur = !empty($_POST['auteur']) ? $_POST['auteur'] : NULL;
  $contenu = !empty($_POST['contenu']) ? $_POST['contenu'] : NULL;


  $sql = $bdd->prepare("INSERT INTO commentaires ( auteur, contenu )
                        VALUES ( :auteur, :contenu ) ");

  $sql->execute(array(
      ":auteur" => $auteur,
      ":contenu" => $contenu
  ));

  $sql-> closeCursor();

  header('location:index.php');

?>