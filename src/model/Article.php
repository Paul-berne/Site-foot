<?php
class Article {
    private int $id_news;
    private string $desc_news;
    private array $array_commentary;

    public function __construct(int $id_news, string $desc_news, array $array_commentary) {
        $this->id_news = $id_news;
        $this->desc_news = $desc_news;
        $this->array_commentary = $array_commentary;
    }

    // Getter pour id_news
    public function getIdNews(): int {
        return $this->id_news;
    }

    // Setter pour id_news
    public function setIdNews(int $id_news): void {
        $this->id_news = $id_news;
    }

    // Getter pour desc_news
    public function getDescNews(): string {
        return $this->desc_news;
    }

    // Setter pour desc_news
    public function setDescNews(string $desc_news): void {
        $this->desc_news = $desc_news;
    }

    // Getter pour array_commentary
    public function getArrayCommentary(): array {
        return $this->array_commentary;
    }

    // Setter pour array_commentary
    public function setArrayCommentary(array $array_commentary): void {
        $this->array_commentary = $array_commentary;
    }
}
?>