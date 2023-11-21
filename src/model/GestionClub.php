<?php
class GestionClub{
    private PDO $cnx;

    function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }
    function getListeClub(): array {
        $dsn ='pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
        $cnx = new PDO($dsn);
        
        $res = $this->cnx->query("SELECT * from club");
        $tabresultat = [];
        
        foreach($res as $row ){
            $tabresultat[] = new Club($row['id_club'],$row['nom_club'], $row['ligue_club']);
        }
        return $tabresultat;
    }
}
?>