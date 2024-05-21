<?php
class GestionChampionnat
{
    private PDO $cnx;

    function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }
    function getListeChampionnat(int $annee): array
    {
        $sql = "select * from classement_par_annee(:annee)
        ";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindParam(':annee', $annee, PDO::PARAM_INT);
        $stmt->execute();
        $tabresultat = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tabresultat[] = new Championnat($row['nom_club'], $row['matchs_gagnes'], $row['matchs_perdus'], $row['matchs_nuls'], $row['buts_marques'], $row['buts_encaisse'], $row['difference_buts'], $row['nb_points'], $row['logo_club'], );
        }

        return $tabresultat;
    }

    function getAnneeSaison(): array
    {
        $sql = 'select distinct annee from saison order by annee asc
        ';
        $stmt = $this->cnx->query($sql);

        $result = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row['annee'];
        }

        return $result;
    }
}