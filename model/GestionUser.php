<?php
class GestionUser{
    private PDO $cnx;

    function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }
    function sendToDB(User $user){
        $dsn ='pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
        $cnx = new PDO($dsn);
        
        $nom = $user->getNom();
        $prenom = $user->getPrenom();
        $mail = $user->getMail();
        $mdp = $user->getMdp();
        $sexe = $user->getSexe();
        $id_club = $user->getId_club();
        
        $insert = $this->cnx->query("INSERT INTO utilisateur (id_club, nom_uti, prenom_uti, mail_uti, password_uti, sexe_uti, date_inscription) VALUES ('$id_club', '$nom', '$prenom', '$mail', '$mdp', '$sexe', CURRENT_TIMESTAMP)");
        
    }
}
?>