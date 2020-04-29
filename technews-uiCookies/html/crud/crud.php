<?php require_once('../traitement/connectBDD.php'); 

$connexion = new Database('localhost', 'technews', 'root', '');
    $bdd = $connexion->PDOConnexion();?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crud</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="container">
    <form id="contact">
      <h3><center>affichage des articles </center></h3>
        <table border="1">
          <tr>
            <td>ID de l'article</td>
            <td>Image</td>
            <td>Titre de l'article</td>
            <td>Auteur</td>
            <td>Contenu</td>
            <td>Contenu rapide</td>
            <td>Date</td>

            <td>modifier</td>
            <td>supprimer</td>
          </tr>

          <?php

            $req = $bdd->prepare(" SELECT * FROM article");
            $req ->execute();

            while( $donnees = $req->fetch() ) { ?>

            <tr>
              <td><?= $donnees['id_Article']; ?></td>
              <td><img src="<?= $donnees['image_article'];?> "height="200px"></td>
              <td><?= $donnees['titre']; ?></td>
              <td><?= $donnees['auteur']; ?></td>
              <td><?= $donnees['contenu']; ?></td>
              <td><?= $donnees['contenu_rapide']; ?></td>
              <td><?= $donnees['date_article']; ?></td>
              <td><button><a href="*" style="color:black;">Modifier</a></button></td>
              <td><button><a href="supprimer_article.php?id=<?php echo $donnees['id_Article'];?>" style="color:black;">Supprimer</a></button></td>
            </tr>


            <?php
          }
          ?>




        </table>
    </form>
  </div>
</body>
</html>