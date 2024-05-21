<?php
class Commentary {
    private int $id_news;
    private String $id_uti;
    private string $desc_commentary;
    private DateTime $date;

    // Constructeur
    public function __construct(int $id_news, String $id_uti, string $desc_commentary, DateTime $date) {
        $this->id_news = $id_news;
        $this->id_uti = $id_uti;
        $this->desc_commentary = $desc_commentary;
        $this->date = $date;
    }

    // Getters
    public function getIdNews(): int {
        return $this->id_news;
    }

    public function getIdUti(): String {
        return $this->id_uti;
    }

    public function getDescCommentary(): string {
        return $this->desc_commentary;
    }

    public function getDate(): DateTime {
        return $this->date;
    }

    // Setters
    public function setIdNews(int $id_news): void {
        $this->id_news = $id_news;
    }

    public function setIdUti(String $id_uti): void {
        $this->id_uti = $id_uti;
    }

    public function setDescCommentary(string $desc_commentary): void {
        $this->desc_commentary = $desc_commentary;
    }

    public function setDate(DateTime $date): void {
        $this->date = $date;
    }
}
?>