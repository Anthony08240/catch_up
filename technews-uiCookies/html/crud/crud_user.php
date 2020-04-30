<?php require_once('../traitement/connectBDD.php'); 

$connexion = new Database('localhost', 'technews', 'root', '');
    $bdd = $connexion->PDOConnexion();?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crud user</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<a href="../index.php">Retour</a>
  <div class="container">
    <form id="contact"><center>
      <h3><center>affichage des utilisateur </center></h3>
        <table border="1">
          <tr>
            <td>ID de l'utilisateur</td>
            <td>Nom</td>
            <td>Email</td>
            <td>Mot de passe</td>
            <td>ID Type Utilisateur</td>
            <td>Modifier</td>
            <td>Supprimer</td>
          </tr>

          <?php

            $req = $bdd->prepare(" SELECT * FROM user");
            $req ->execute();

            while( $donnees = $req->fetch() ) { ?>

            <tr>
              <td><?= $donnees['id_user']; ?></td>
              <td><?= $donnees['nom']; ?></td>
              <td><?= $donnees['email']; ?></td>
              <td><?= $donnees['pass']; ?></td>
              <td><?= $donnees['id_typeUser']; ?></td>
              <td><button><a href="form_modifier_user.php?id=<?php echo $donnees['id_user'];?>" style="color:black;">Modifier</a></button></td>
              <td><button><a href="supprimer_user.php?id=<?php echo $donnees['id_user'];?>" style="color:black;">Supprimer</a></button></td>
            
            
            
            </tr>


            <?php
          }
          ?>




        </table></center>
    </form>
  </div>
</body>
</html>