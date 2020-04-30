<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Article</title>
</head>
<body>

<?php

require_once('../traitement/connectBDD.php');

$connexion = new Database('localhost', 'technews', 'root', '');
  $bdd = $connexion->PDOConnexion();

  ?>
<div id="container">
<h2><center>modifier un utilisateur</center></h2>
<?php
$req = $bdd->prepare(" SELECT * FROM user WHERE id_user ='".$_GET['id']."' ");
                $req->execute();

while( $donnees = $req->fetch() ) { ?>

 <form id="contact" action="modifier_user.php?id=<?php echo $donnees['id_user'];?>" method="post">

 <center><label><b>Nom</b><br><br></label>
                <input type="text" value="<?php echo $donnees['nom']?>" name="nom" autofocus> <br><br>

                <label><b>email</b><br><br></label>
                <input type="text" value="<?php echo $donnees['email']?>" name="email"> <br><br>
                
                <label><b>mot de passe</b><br><br></label>
                <input type="password" value="<?php echo $donnees['pass']?>" name="pass"><br><br>
 <?php } ?>
    




<br><br>
<fieldset>
<p>1 = Administrateur<br>2 = Modérateur<br>3 = Membre</p>
<select  name="id_typeUser" required >
            <?php

                $req = $bdd->prepare(" SELECT id_typeUser FROM typeuser ");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option value="<?= $donnees['id_typeUser']; ?>"><?= $donnees['id_typeUser']; ?></option>


              <?php  }

             ?>





            </select>
</fieldset>
<br><br>
<fieldset>
      <button class="ok" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Modifier</button>
    </fieldset></center>
  </form>
</div>
</body>
</html>