<?php

class Commentary {
    private $id_news;
    private $desc_com;
    private $id_uti;

    public function __construct($id_news, $desc_com, $id_uti) {
        $this->id_news = $id_news;
        $this->desc_com = $desc_com;
        $this->id_uti = $id_uti;
    }

    public function getid_news() {
        return $this->id_news;
    }

    public function setid_news($id_news) {
        $this->id_news = $id_news;
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