<?php
class GestionClub{
    private PDO $cnx;

    function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }
    function getListeClub(): array {
        $dsn ='pgsql:host=192.168.30.110;dbname=Ligue_1;password=P@ssw0rdsio;user=postgres;port=9876';
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