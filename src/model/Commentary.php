<?php

class Commentary {
    private $leArticle;
    private $desc_com;
    private $id_uti;

    // Constructeur
    public function __construct($leArticle, $desc_com, $id_uti) {
        $this->leArticle = $leArticle;
        $this->desc_com = $desc_com;
        $this->id_uti = $id_uti;
    }

    // Getter pour le commentaire
    public function getleArticle() {
        return $this->leArticle;
    }

    // Setter pour le commentaire
    public function setleArticle($leArticle) {
        $this->leArticle = $leArticle;
    }

    // Getter pour la description du commentaire
    public function getDescCom() {
        return $this->desc_com;
    }

    // Setter pour la description du commentaire
    public function setDescCom($desc_com) {
        $this->desc_com = $desc_com;
    }

    // Getter pour l'ID de l'utilisateur
    public function getIdUti() {
        return $this->id_uti;
    }

    // Setter pour l'ID de l'utilisateur
    public function setIdUti($id_uti) {
        $this->id_uti = $id_uti;
    }
}

?>