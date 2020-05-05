<?php 

class User {


protected $_nom;
protected $_pass;

    
    public function __construct( $_nom, $_pass ) {   
      $this->_nom = $_nom;
      $this->_pass = $_pass;
    }

    public function getNom(){
      return $this->_nom;
    }
    public function getPass(){
      return $this->_pass;
    }

    public function connect($bdd){
        $req = $bdd->prepare("SELECT * FROM user WHERE nom = :nom AND pass = :pass");
        $req->execute(array(
                ':nom' => $this->_nom,
                ':pass' => $this->_pass,
    ));

    $count = $req->rowCount();

    if($count > 0)
    {

      $donnees = $req->fetch();

        session_start();
        $_SESSION['nom'] = $this->_nom;
        $_SESSION['id_typeUser'] = $donnees['id_typeUser'];
        
        header("location:../index.php");
    }
    else
    {
     //Mauvais identifiant ou mauvais tout cours
     echo "movais mot de pass ou nom !!!" ;
    }
  }
}
  // inscription

  class User_insc {
    
  protected $_nom;
  protected $_email;
  protected $_pass;
      
      public function __construct($_nom, $_email, $_pass){   
        $this->_nom = $_nom;
        $this->_email = $_email;
        $this->_pass = $_pass;
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
      public function inscription($bdd){
          $sql = $bdd->prepare("INSERT INTO user ( nom, email, pass, id_typeUser )
                          VALUES ( :nom, :email, :pass, 3 )");
  
    $sql->execute(array(
        ":nom" => $this->_nom,
        ":email" => $this->_email,
        ":pass" => $this->_pass
    ));
    
  
    if($this->_email == $this->_email)
    {
      session_start();
        $_SESSION['nom'] = $this->_nom;
        $_SESSION['pass'] = $this->_pass;

      header("location:../index.php");
    }
    else
    {
     //Mauvais identifiant ou mauvais tout cours
     echo"errueur dans l'inscription veuiller réessayer !! <br><br>";
     echo "<a href='../sign_in_up/sign_up.php'> Cliquer ici pour revenir en arrière </a>";
    }
    }
}
?>