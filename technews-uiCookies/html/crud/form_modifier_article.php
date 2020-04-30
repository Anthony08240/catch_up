
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un article</title>

</head>

    <body>
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

            <?php
    require_once('../traitement/connectBDD.php');

    $connexion = new Database('localhost', 'technews', 'root', '');
    $bdd = $connexion->PDOConnexion();


$req = $bdd->prepare(" SELECT * FROM article WHERE id_Article ='".$_GET['id']."'");
$req ->execute();

while( $donnees = $req->fetch() ) { ?>

<center>
            <form action="modifier_article.php?id=<?php echo $donnees['id_Article'];?>" method="POST" >
                <h2>Modifier un Article</h2>

                <label><b>Nom De l'Article</b><br><br></label>
                <input type="text" value="<?php echo $donnees['titre']?>" name="titre" autofocus> <br><br>

                <label><b>Auteur</b><br><br></label>
                <input type="text" value="<?php echo $donnees['auteur']?>" name="auteur"> <br><br>

                <label><b>Contenu</b><br><br></label>
                <textarea type="text" name="contenu" cols="100" rows="20" maxlength="2000"><?php echo $donnees['contenu']?></textarea><br><br>

                <label><b>Contenu Rapide</b><br><br></label>
                <textarea type="text" name="contenu_rapide" cols="50" rows="8" maxlength="250"><?php echo $donnees['contenu_rapide']?></textarea><br><br>
                
                <label><b>Date</b><br><br></label>
                <input type="date" value="<?php echo $donnees['date_article']?>" name="date_article"><br><br>

                <label><b>Image</b><br><br></label>
                <input type="text" size="100px" value="<?php echo $donnees['image_article']?>" name="image_article"><br><br><br><br>

                <input class="ok" type="submit" id='submit' value='MODIFIER'> <br><br>


            </form>
</center>
<?php } ?>
        </div>

    </body>

</html>