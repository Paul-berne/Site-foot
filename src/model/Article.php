<?php
class Article {
    private int $id_news;
    private int $id_club;
    private string $title;
    private string $desc_news;
    private DateTime $date;
    private array $array_commentary;

    // Constructeur
    public function __construct(int $id_news, int $id_club, string $title, string $desc_news, DateTime $date, array $array_commentary) {
        $this->id_news = $id_news;
        $this->id_club = $id_club;
        $this->title = $title;
        $this->desc_news = $desc_news;
        $this->date = $date;
        $this->array_commentary = $array_commentary;
    }

    // Getters
    public function getIdNews(): int {
        return $this->id_news;
    }

    public function getIdClub(): int {
        return $this->id_club;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getDescNews(): string {
        return $this->desc_news;
    }

    public function getDate(): DateTime {
        return $this->date;
    }

    public function getArrayCommentary(): array {
        return $this->array_commentary;
    }

    // Setters
    public function setIdNews(int $id_news): void {
        $this->id_news = $id_news;
    }

    public function setIdClub(int $id_club): void {
        $this->id_club = $id_club;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setDescNews(string $desc_news): void {
        $this->desc_news = $desc_news;
    }

    public function setDate(DateTime $date): void {
        $this->date = $date;
    }

    public function setArrayCommentary(array $array_commentary): void {
        $this->array_commentary = $array_commentary;
    }
}
?>