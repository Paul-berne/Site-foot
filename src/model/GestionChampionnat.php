<?php
class GestionChampionnat{
    private PDO $cnx;

    function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }
    function getListeChampionnat(int $annee): array {
        $sql = "select * from saison where annee = :annee order by nb_points desc";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindParam(':annee', $annee, PDO::PARAM_INT);
        $stmt->execute();
        $tabresultat = [];
    
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tabresultat[] = new Championnat($row['id_club'], $row['id_championnat'],$row['annee'],$row['nb_buts_marques'],$row['nb_buts_encaisse'],$row['nb_points'],$row['gagner'],$row['perdus'],$row['nul'], );
        }
    
        return $tabresultat;
    }
    
}
?>