<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style_Connexion.css">
</head>

<body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="Connexion" method="post">
            <label for="mail">Adresse Mail :</label>
            <input type="email" name="mail" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>

            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>

</html>