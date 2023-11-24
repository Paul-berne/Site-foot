<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon Site de Football en Ligue</title>

</head>

<body>
    <header>
        <h1>Mon Site de Football</h1>
    </header>

    <div class="container">
        <h2>Bienvenue sur mon site de football en ligue 1</h2>
        <p>Vous pouvez retrouver ici toute l'actualité sur la ligue 1.</p>
        <p>Explorez notre site pour trouver des informations passionnantes sur les matchs, les classements. Restez
            connectés avec le monde du football en ligue !</p>
        <a href="/inscription" class="btn">S'inscrire</a>
        <a href="/listedeclub" class="btn">Liste des clubs</a>

    </div>
    <?php
$dsn = 'pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
$cnx = new PDO($dsn);

// Sélectionner les 4 articles ayant au moins 3 commentaires
$article = $cnx->query("SELECT news.*, COUNT(commentary.id_com) AS comment_count
                        FROM news
                        LEFT JOIN commentary ON news.id_news = commentary.id_news
                        GROUP BY news.id_news
                        HAVING COUNT(commentary.id_com) >= 3
                        ORDER BY news.date_news DESC
                        LIMIT 4");

foreach ($article as $row) {
    echo '<div class="article_container">';
    echo '<h2>' . $row['article_news'] . '</h2>';

$commentary = $cnx->query("SELECT commentary.*, utilisateur.nom_uti
                               FROM commentary
                               INNER JOIN utilisateur ON commentary.id_uti = utilisateur.id_uti
                               WHERE commentary.id_news = " . $row['id_news'] . "
                               ORDER BY commentary.date_comment DESC
                               LIMIT 3");

    echo '<div class="comment_container">';
    foreach ($commentary as $comment) {
        echo $comment['nom_uti'];
        echo '<div class="comment">' . $comment['desc_com'] . '</div><br>';
    }

    echo '</div>';

    echo '<form action="Acceuil" method="post">';
    echo '<input type="hidden" name="id_news" value="' . $row['id_news'] . '">';
    echo '<label for="nouveau_commentaire">Ajouter un commentaire :</label><br>';
    echo '<textarea name="nouveau_commentaire" id="nouveau_commentaire" rows="3" required></textarea>';
    echo '<input type="submit" value="Ajouter commentaire">';
    echo '</form>';

    echo '</div>';
}

?>

</body>

</html>