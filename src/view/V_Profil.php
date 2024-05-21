<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
</head>

<body>
    <div class="profile-container">
        <img src="<?php echo $_SESSION['image']; ?>" alt="Photo de profil">
        <h2><?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?></h2>
        <p>ID Utilisateur: <?php echo $_SESSION['id']; ?></p>
        <form action="/Profil" method="post">
            <button type="submit">Déconnexion</button>
        </form>
    </div>
</body>

</html>