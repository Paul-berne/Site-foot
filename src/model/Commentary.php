<?php

class Commentary {
    private $leArticle;
    private $desc_com;
    private $id_uti;

    public function __construct($leArticle, $desc_com, $id_uti) {
        $this->leArticle = $leArticle;
        $this->desc_com = $desc_com;
        $this->id_uti = $id_uti;
    }

    public function getleArticle() {
        return $this->leArticle;
    }

    public function setleArticle($leArticle) {
        $this->leArticle = $leArticle;
    }

    public function getDescCom() {
        return $this->desc_com;
    }

    public function setDescCom($desc_com) {
        $this->desc_com = $desc_com;
    }

    public function getIdUti() {
        return $this->id_uti;
    }

    public function setIdUti($id_uti) {
        $this->id_uti = $id_uti;
    }
}

?>