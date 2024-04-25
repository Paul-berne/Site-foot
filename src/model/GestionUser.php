<?php
class GestionUser{
    private PDO $cnx;

    function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }
    function sendToDB(User $user){
        $dsn ='pgsql:host=192.168.30.110;dbname=Ligue_1;password=P@ssw0rdsio;user=postgres;port=9876';
        $cnx = new PDO($dsn);
        
        $nom = $user->getNom();
        $prenom = $user->getPrenom();
        $mail = $user->getMail();
        $mdp = md5($user->getMdp());
        $sexe = $user->getSexe();
        $id_club = $user->getId_club();
        $image = $user->getImage();
        
        $insert = $this->cnx->query("INSERT INTO utilisateur (id_club, nom_uti, prenom_uti, mail_uti, password_uti, sexe_uti, date_inscription, image_uti) VALUES ('$id_club', '$nom', '$prenom', '$mail', '$mdp', '$sexe', CURRENT_TIMESTAMP, '$image')");
        
    }
}
?>