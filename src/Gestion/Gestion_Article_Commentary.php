<?php
class GestionArticle
{
    private PDO $cnx;

    function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }

    function GetListeArticle(): array
    {
        $lesArticles = [];

        $article = $this->cnx->query("SELECT news.*, COUNT(commentaire.id_commentaire) AS comment_count
FROM news
LEFT JOIN commentaire ON news.id_news = commentaire.id_news
GROUP BY news.id_news
HAVING COUNT(commentaire.id_commentaire) >= 3
ORDER BY news.date_news DESC
LIMIT 4");

        foreach ($article as $item) {
            $lesArticles[] = new Article($item['id_news'], $item['id_club'], $item['title_news'], $item['article_news'], DateTime::createFromFormat('Y-m-d', $item['date_news']), $this->GetListeCommentaire($item['id_news']));
        }
        return $lesArticles;

    }
    function GetListeCommentaire(int $idArticle): array
    {
        $dsn = 'pgsql:host=localhost;dbname=Ligue_1_backup;password=Paulberne13?;user=postgres;port=5432';
        $cnx = new PDO($dsn);
        $LesCommentaires = [];
        $commentary = $cnx->prepare(
            "SELECT commentaire.*, utilisateur.nom_uti
    FROM commentaire
    INNER JOIN utilisateur ON commentaire.id_uti = utilisateur.id_uti
    WHERE commentaire.id_news = :id_news
    ORDER BY commentaire.date_publication DESC
    LIMIT 3"
        );

        $commentary->bindParam(':id_news', $idArticle, PDO::PARAM_INT);

        $commentary->execute();

        $results = $commentary->fetchAll(PDO::FETCH_ASSOC);


        foreach ($results as $item) {
            $LesCommentaires[] = new Commentary($idArticle, $item['nom_uti'], $item['str_commentaire'], DateTime::createFromFormat('Y-m-d', $item['date_publication']));
        }
        return $LesCommentaires;
    }
}