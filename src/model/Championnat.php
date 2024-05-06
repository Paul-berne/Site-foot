<?php
class Championnat{
    private int $id_club;
    private int $id_championnat;
    private int $annee;
    private int $nombre_but_marque;
    private int $nombre_but_encaisse;
    private int $nombre_point;
    private int $gagner;
    private int $perdus;
    private int $nul;

    public function __construct(int $id_club, int $id_championnat, int $annee, int $nombre_but_marque, int $nombre_but_encaisse, int $nombre_point, int $gagner, int $perdus, int $nul) {
        $this->id_club = $id_club;
        $this->id_championnat = $id_championnat;
        $this->annee = $annee;
        $this->nombre_but_marque = $nombre_but_marque;
        $this->nombre_but_encaisse = $nombre_but_encaisse;
        $this->nombre_point = $nombre_point;
        $this->gagner = $gagner;
        $this->perdus = $perdus;
        $this->nul = $nul;
    }

    public function getIdClub(): int {
        return $this->id_club;
    }

    public function setIdClub(int $id_club): void {
        $this->id_club = $id_club;
    }

    public function getIdChampionnat(): int {
        return $this->id_championnat;
    }

    public function setIdChampionnat(int $id_championnat): void {
        $this->id_championnat = $id_championnat;
    }

    public function getAnnee(): int {
        return $this->annee;
    }

    public function setAnnee(int $annee): void {
        $this->annee = $annee;
    }

    public function getNombreButMarque(): int {
        return $this->nombre_but_marque;
    }

    public function setNombreButMarque(int $nombre_but_marque): void {
        $this->nombre_but_marque = $nombre_but_marque;
    }

    public function getNombreButEncaisse(): int {
        return $this->nombre_but_encaisse;
    }

    public function setNombreButEncaisse(int $nombre_but_encaisse): void {
        $this->nombre_but_encaisse = $nombre_but_encaisse;
    }

    public function getNombrePoint(): int {
        return $this->nombre_point;
    }

    public function setNombrePoint(int $nombre_point): void {
        $this->nombre_point = $nombre_point;
    }

    public function getGagner(): int {
        return $this->gagner;
    }

    public function setGagner(int $gagner): void {
        $this->gagner = $gagner;
    }

    public function getPerdus(): int {
        return $this->perdus;
    }

    public function setPerdus(int $perdus): void {
        $this->perdus = $perdus;
    }

    public function getNul(): int {
        return $this->nul;
    }

    public function setNul(int $nul): void {
        $this->nul = $nul;
    }
}
?>