<?php 
class Club {
    private int $id;
    private string $nom_club;
    private string $ligue_club;

    public function __construct(int $id, string $nom_club, string $ligue_club) {
        $this->id = $id;
        $this->nom_club = $nom_club;
        $this->ligue_club = $ligue_club;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getNomClub(): string {
        return $this->nom_club;
    }

    public function setNomClub(string $nom_club): void {
        $this->nom_club = $nom_club;
    }

    public function getLigueClub(): string {
        return $this->ligue_club;
    }

    public function setLigueClub(string $ligue_club): void {
        $this->ligue_club = $ligue_club;
    }
}
?>