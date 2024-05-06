<?php
class GestionClub{
    private PDO $cnx;

    function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }
    function getListeClub(): array {
        $dsn ='pgsql:host=localhost;dbname=Ligue_1_backup;password=Paulberne13?;user=postgres;port=5432';
        $cnx = new PDO($dsn);
        
        $res = $this->cnx->query("select club.id_club, nom_club, championnat.nom from saison
        inner join club on saison.id_club = club.id_club
            inner join championnat on saison.id_championnat = championnat.id_championnat");
        $tabresultat = [];
        
        foreach($res as $row ){
            $tabresultat[] = new Club($row['id_club'],$row['nom_club'], $row['nom']);
        }
        return $tabresultat;
    }
}
?>