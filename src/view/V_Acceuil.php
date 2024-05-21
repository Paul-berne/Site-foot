<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon Site de Football en Ligue</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Mon Site de Football</h1>
    </header>

    <div class="container">
        <h2>Bienvenue sur mon site de football en ligue 1</h2>
        <p>Vous pouvez retrouver ici toute l'actualité sur la ligue 1.</p>
        <p>Explorez notre site pour trouver des informations passionnantes sur les matchs, les classements. Restez
            connectés avec le monde du football en ligue 1!</p>
        <a href="/inscription" class="btn">S'inscrire</a>
        <a href="/listedeclub" class="btn">Classements</a>
    </div>

    <section class="section_article">
        <?php foreach ($article as $row): ?>
        <div class="article_container">
            <h2><?= $row->getTitle() ?></h2>
            <p><?= $row->getDescNews() ?></p>

            <div class="comment_container">
                <?php foreach ($row->getArrayCommentary() as $comment): ?>
                <div class="comment">
                    <strong><?= $comment->getIdUti() ?>:</strong>
                    <?= $comment->getDescCommentary() ?><br>
                </div>
                <?php endforeach; ?>
            </div>

            <form action="Acceuil" method="post">
                <input type="hidden" name="id_news" value="<?= $row->getIdNews() ?>">
                <label for="nouveau_commentaire">Ajouter un commentaire :</label><br>
                <textarea name="nouveau_commentaire" id="nouveau_commentaire" rows="3" required></textarea>
                <input type="submit" value="Ajouter commentaire">
            </form>
        </div>
        <?php endforeach; ?>
    </section>
</body>

</html>