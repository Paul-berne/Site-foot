<?php
class GestionUser{
    private PDO $cnx;

    function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }
    function sendToDB(User $user){
        
        $nom = $user->getNom();
        $prenom = $user->getPrenom();
        $mail = $user->getMail();
        $mdp = md5($user->getMdp());
        $sexe = $user->getSexe();
        $id_club = $user->getId_club();
        $image = $user->getImage();
        
        $insert = $this->cnx->prepare("INSERT INTO utilisateur (id_club, nom_uti, prenom_uti, mail_uti, password_uti, sexe_uti, date_inscription, image_uti) VALUES (:id_club,:nom, :prenom, :mail, :mdp, :sexe, CURRENT_TIMESTAMP, :image)");
        $insert->bindParam(":id_club", $id_club, PDO::PARAM_INT);
        $insert->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $insert->bindParam(":mail", $mail, PDO::PARAM_STR);
        $insert->bindParam(":mdp", $mdp, PDO::PARAM_STR);
        $insert->bindParam(":sexe", $sexe, PDO::PARAM_STR);
        $insert->bindParam(":image", $image, PDO::PARAM_STR);
        $insert->bindParam(":nom", $nom, PDO::PARAM_STR);

        $insert->execute();
    }
}
?>