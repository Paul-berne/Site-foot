<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donnée</title>
</head>

<body>
    <?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    echo "Voici votre nom : " .$nom . "<br>";
    echo "Voici votre prénom : " .$prenom. "<br>";
    echo "Voici votre mail : " .$mail. "<br>";
    echo "Voici votre mot de passe : " .$mdp. "<br>";
    $dsn ='pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
    $cnx = new PDO($dsn);
    $res = $cnx->query("SELECT * FROM club");  
    foreach ($res as $row) {
        echo "<li>identifiant du club : " . $row['id_club'] . "</li>";
        echo "<li>Nom du club : " . $row['nom_club'] . "</li>";
        echo "<li>Ligue du club : " . $row['ligue_club'] . "</li>";
        // Ajoutez ici d'autres éléments que vous souhaitez afficher
        echo "<br>";
    }
    ?>
</body>

</html>