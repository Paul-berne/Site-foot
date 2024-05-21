<?php

class Championnat
{
    private string $nom_club;
    private int $matchs_gagnes;
    private int $matchs_perdus;
    private int $matchs_nuls;
    private int $buts_marques;
    private int $buts_encaissees;
    private int $difference_buts;
    private int $nb_points;
    private string $logo_club;

    public function __construct(string $nom_club,int $matchs_gagnes,int $matchs_perdus,int $matchs_nuls,int $buts_marques,int $buts_encaissees,int $difference_buts,int $nb_points,string $logo_club) {
        $this->nom_club = $nom_club;
        $this->matchs_gagnes = $matchs_gagnes;
        $this->matchs_perdus = $matchs_perdus;
        $this->matchs_nuls = $matchs_nuls;
        $this->buts_marques = $buts_marques;
        $this->buts_encaissees = $buts_encaissees;
        $this->difference_buts = $difference_buts;
        $this->nb_points = $nb_points;
        $this->logo_club = $logo_club;
    }

    public function getNomClub(): string
    {
        return $this->nom_club;
    }

    public function setNomClub(string $nom_club): void
    {
        $this->nom_club = $nom_club;
    }

    public function getMatchsGagnes(): int
    {
        return $this->matchs_gagnes;
    }

    public function setMatchsGagnes(int $matchs_gagnes): void
    {
        $this->matchs_gagnes = $matchs_gagnes;
    }

    public function getMatchsPerdus(): int
    {
        return $this->matchs_perdus;
    }

    public function setMatchsPerdus(int $matchs_perdus): void
    {
        $this->matchs_perdus = $matchs_perdus;
    }

    public function getMatchsNuls(): int
    {
        return $this->matchs_nuls;
    }

    public function setMatchsNuls(int $matchs_nuls): void
    {
        $this->matchs_nuls = $matchs_nuls;
    }

    public function getButsMarques(): int
    {
        return $this->buts_marques;
    }

    public function setButsMarques(int $buts_marques): void
    {
        $this->buts_marques = $buts_marques;
    }

    public function getButsEncaissees(): int
    {
        return $this->buts_encaissees;
    }

    public function setButsEncaissees(int $buts_encaissees): void
    {
        $this->buts_encaissees = $buts_encaissees;
    }

    public function getDifferenceButs(): int
    {
        return $this->difference_buts;
    }

    public function setDifferenceButs(int $difference_buts): void
    {
        $this->difference_buts = $difference_buts;
    }

    public function getNbPoints(): int
    {
        return $this->nb_points;
    }

    public function setNbPoints(int $nb_points): void
    {
        $this->nb_points = $nb_points;
    }

    public function getLogoClub(): string
    {
        return $this->logo_club;
    }

    public function setLogoClub(string $logo_club): void
    {
        $this->logo_club = $logo_club;
    }
}