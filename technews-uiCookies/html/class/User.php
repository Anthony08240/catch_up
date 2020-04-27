<?php 

class User {

protected $_id_user;
protected $_nom;
protected $_email;
protected $_pass;
protected $_id_typeUser;
    
    public function __construct( $_id_user, $_nom, $_email, $_pass, $_id_typeUser ) {   
      $this->_id_user = $_id_user;
      $this->_nom = $_nom;
      $this->_email = $_email;
      $this->_pass = $_pass;
      $this->_id_typeUser = $_id_typeUser;
    }


    public function getidUser(){
      return $this->_id_user;
    }
    public function getNom(){
      return $this->_nom;
    }
    public function getEmail(){
      return $this->_email;
    }
    public function getPass(){
      return $this->_pass;
    }
    public function getidTypeUser(){
      return $this->_id_typeUser;
    }

    public function connect($bdd){
        $req = $bdd->prepare("SELECT nom, pass FROM user WHERE nom = :nom AND pass = :pass");
    $req->execute(array(
            'nom' => $this->_nom,
            'pass' => $this->_pass
    ));

    $count = $req->rowCount();
    if($count > 0)
    {
        session_start();
        $_SESSION['nom'] = $this->_nom;
        $_SESSION['pass'] = $this->_pass;
        header("location:index.php");
    }
    else
    {
     //Mauvais identifiant ou mauvais tout cours
     echo"movais mot de pass ou nom !!!";
    }
  }
}
?>