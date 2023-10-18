<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <div class="container">
        <h1>Formulaire</h1>
        <form action="/inscription" id="formulaire" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">Veuillez saisir votre nom</label>
                <input type="text" name="nom" id="nom" value="Berne">
            </div>
            <br>
            <div class="form-group">
                <label for="prenom">Veuillez saisir votre prénom</label>
                <input type="text" name="prenom" id="prenom" value="Paul">
            </div>
            <br>
            <div class="form-group">
                <label for="mail">Veuillez saisir votre Adresse mail</label>
                <input type="email" name="mail" id="mail" value="paulberne1309@gmail.com">
            </div>
            <br>
            <div class="form-group">
                <label for="mdp">Veuillez saisir votre mot de passe</label>
                <input type="password" name="mdp" id="mdp" value="mdp">
            </div>
            <br>
            <div class="form-group">
                <label for="confirmmdp">Veuillez confirmer votre mot de passe</label>
                <input type="password" name="confirmmdp" id="confirmmdp" oninput="passwordsame()" value="mdp">
                <p id="passwordmessage"></p>
            </div>
            <div class="form-group">
                <span>Sexe :</span>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
            </div>


            <br>
            <div class="form-group">
                <label for="image">Sélectionnez une image :</label>
                <input type="file" name="image" id="image" accept="image/*">
            </div>

            <br>
            <div class="form-group">
                <span>Championnat :</span>
                <input type="radio" id="ligue1" name="championnat" value="ligue1">
                <label for="ligue1">Ligue 1</label>
                <input type="radio" id="ligue2" name="championnat" value="ligue2">
                <label for="ligue2">Ligue 2</label>
            </div>
            <br>
            <?php
                $dsn = 'pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
                $cnx = new PDO($dsn);
                $res = $cnx->query("SELECT * FROM club");

                echo '<div class="form-group">';
                echo '<label for="club_pref">Club préféré :</label>';
                echo '<select name="club_pref" id="club_pref">';

                foreach ($res as $row) {
                    echo '<option value="' . $row['id_club'] . '">' . $row['nom_club'] . '</option>';
                }

                echo '</select>';
                echo '</div>';
            ?>
            <br>
            <div class="form-group">
                <label>Veuillez choisir les news de quel club :</label>
                <input type="checkbox" class="select-all" onchange="selectAllClubs()">
                <label for="select_all">Tout sélectionner</label><br>

                <?php
                $dsn = 'pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
                $cnx = new PDO($dsn);
                $res = $cnx->query("SELECT * FROM club");
                $i = 0;
                foreach ($res as $row) {
                    $i = $i + 1;
                    $clubId = $row['id_club'];
                    $clubNom = $row['nom_club'];
                    echo '<input type="checkbox" id="' . $clubNom . '" name="club_news[]" value="' . $clubNom . '">';
                    echo '<label for="' . $clubNom . '">' . $clubNom . '</label>';
                    if ($i > 3) {
                        echo "<br>";
                        $i = 0;
                    }
                }
                ?>
            </div>
            <div>
                <input type="submit" value="Validez" onclick="resetform(event)">
                <p id="message_non_valide"></p>
            </div>
        </form>
    </div>
</body>

</html>