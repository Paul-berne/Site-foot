<?php
class User {
    private string $nom;
    private string $prenom;
    private string $mail;
    private $mdp;
    private string $sexe;

    public function __construct(string $nom, string $prenom, string $mail, $mdp, string $sexe) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->mdp = $mdp;
        $this->sexe = $sexe;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    public function getMail(): string {
        return $this->mail;
    }

    public function setMail(string $mail) {
        $this->mail = $mail;
    }

    public function getMdp() {
        return $this->mdp;
    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    public function getSexe(): string {
        return $this->sexe;
    }

    public function setSexe(string $sexe) {
        $this->sexe = $sexe;
    }
}
?>