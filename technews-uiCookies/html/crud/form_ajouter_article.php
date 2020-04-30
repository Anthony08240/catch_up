
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>

</head>

    <body>

    <?php

require_once('../traitement/connectBDD.php');

$connexion = new Database('localhost', 'technews', 'root', '');
  $bdd = $connexion->PDOConnexion();

  ?>


    <script type="text/javascript">
 function MaxLengthTextarea(objettextarea,maxlength){
  if (objettextarea.value.length > maxlength) {
    objettextarea.value = objettextarea.value.substring(0, maxlength);
    alert('Votre texte ne doit pas dépasser '+maxlength+' caractères!');
   }
}
</script>

        <!-- modifier un film -->

        <div id="container">

<center>
            <form action="ajouter_article.php" method="POST" >
                <h2>Ajouter un Article</h2>

                <label><b>Nom De l'Article</b><br><br></label>
                <input type="text" name="titre" autofocus> <br><br>

                <label><b>Auteur</b><br><br></label>
                <input type="text" name="auteur"> <br><br>

                <label><b>Contenu</b><br><br></label>
                <textarea type="text" name="contenu" cols="100" rows="20" maxlength="2000" placeholder="max 2000 caractères"></textarea><br><br>

                <label><b>Contenu Rapide</b><br><br></label>
                <textarea type="text" name="contenu_rapide" cols="50" rows="8" maxlength="250" placeholder="max 250 caractères"></textarea><br><br>
                
                <label><b>Date</b><br><br></label>
                <input type="date" name="date_article"><br><br>

                <label><b>Image</b><br><br></label>
                <input type="text" size="100px" placeholder="copier l'url de l'image" name="image_article"><br><br><br><br>
                
                <label><b>Utilisateur</b><br><br></label>
                <select  name="id_user" required >
            <?php 


                $req = $bdd->prepare(" SELECT id_user, nom FROM user ");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option value="<?= $donnees['id_user']; ?>"> Nom : <?= $donnees['nom']; ?> </option>


              <?php  }

             ?>

            </select><br><br><br><br>

                <input class="ok" type="submit" id='submit' value='Ajouter'> <br><br>


            </form>
</center>
        </div>

    </body>

</html>