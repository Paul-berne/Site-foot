<?php
    class Article{
        private int $id_news;
        private string $desc_news;
        private array $array_commentary;

        public function __construct(int $id_news, string $desc_news, array $array_commentary){
            $this->id_news = $id_news;
            $this->desc_news = $desc_news;
            $this->array_commentary = $array_commentary;
        }
    }
?>