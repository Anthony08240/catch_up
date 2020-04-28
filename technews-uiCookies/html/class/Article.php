<?php 

class Article {

protected $_id_Article;
protected $_titre;
protected $_auteur;
protected $_contenu;
protected $_date_article;
protected $_image_article;
    
    public function __construct($_id_Article, $_titre, $_auteur, $_contenu, $_date_article, $_image_article){   
      $this->_id_Article = $_id_Article;
      $this->_titre = $_titre;
      $this->_auteur = $_auteur;
      $this->_contenu = $_contenu;
      $this->_date_article = $_date_article;
      $this->_image_article = $_image_article;
    }

    public function getid_Article(){
        return $this->_id_Article;
    }
    public function getTitre(){
      return $this->_titre;
    }
    public function getAuteur(){
      return $this->_auteur;
    }
    public function getContenu(){
       return $this->_contenu;
    }
    public function getDate(){
    return $this->_date_article;
    }
     public function getImage(){
      return $this->_image_article;
    }

    public function affiche_article($bdd){
        $req = $bdd->prepare("SELECT id_Article, titre, auteur, contenu, date_article, image_article FROM article");
        $req->execute(array(
            ':id_Article' => $this->_id_Article,
            ':titre' => $this->_titre,
            ':auteur' => $this->_auteur,
            ':contenu' => $this->_contenu,
            ':date_article' => $this->_date_article,
            ':image_article' => $this->_image_article
        ));
  }
}
?>