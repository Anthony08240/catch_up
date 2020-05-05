<?php if(isset($_GET['tokken'])){

require_once('connectBDD.php');

$connexion = new Database('localhost', 'technews', 'root', '');
$bdd = $connexion->PDOConnexion();

$tokken = $_GET['tokken'];


$req = $bdd->prepare("SELECT tokken FROM user WHERE tokken = :tokken");
$req->execute(array(

    'tokken' => $tokken

)));

$count = $req->rowCount();

    if($count > 0){

        $sql = $bdd->prepare ("UPDATE user 
                             SET confirmation_user = :confirmation_user WHERE tokken = :tokken");
 
$sql->execute(array(
    'confimation_user' => 1,
    'tokken' => $tokken
));

        echo"votre compte a été validéée vous pouvez maintenant vous connecté";

    }else {
        echo'pas de tokken trouvé';
    }

else{

    header('location:../index.php');
}











} else {

    header('location:../index.php');
}