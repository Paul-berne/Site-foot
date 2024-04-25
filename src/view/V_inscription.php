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
                <input type="text" name="nom" id="nom" value="Berne" required>
            </div>
            <br>
            <div class="form-group">
                <label for="prenom">Veuillez saisir votre prénom</label>
                <input type="text" name="prenom" id="prenom" value="Paul" required>
            </div>
            <br>
            <div class="form-group">
                <label for="mail">Veuillez saisir votre Adresse mail</label>
                <input type="email" name="mail" id="mail" value="paulberne1309@gmail.com" required>
            </div>
            <br>
            <div class="form-group">
                <label for="mdp">Veuillez saisir votre mot de passe</label>
                <input type="password" name="mdp" id="mdp" value="Paulberne13?" oninput="validate()" required>
                <span id="message_conforme"></span>
            </div>
            <br>
            <div class="form-group">
                <label for="confirmmdp">Veuillez confirmer votre mot de passe</label>
                <input type="password" name="confirmmdp" id="confirmmdp" value="Paulberne13?" oninput="same_password()"
                    required>
                <p id="passwordmessage"></p><span id="message_invalide"></span>
            </div>
            <div class="form-group">
                <span>Sexe :</span>
                <label for="homme">Homme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="femme">femme</label>

                <input type="radio" id="femme" name="sexe" value="femme" checked>

            </div>


            <br>
            <div class="form-group">
                <label for="image">Sélectionnez une image :</label>
                <input type="file" name="image" id="image" accept="image/*">
            </div>

            <br>
            <div class="form-group">
                <span>Championnat :</span>
                <input type="radio" id="ligue1" name="championnat" value="ligue1" checked>
                <label for="ligue1">Ligue 1</label>
                <input type="radio" id="ligue2" name="championnat" value="ligue2">
                <label for="ligue2">Ligue 2</label>
            </div>
            <br>
            <?php
                $dsn ='pgsql:host=192.168.30.110;dbname=Ligue-1;password=P@ssw0rdsio;user=postgres;port=9876';

                $cnx = new PDO($dsn);
                $res = $cnx->query("SELECT * FROM club");

                echo '<div class="form-group">';
                echo '<label for="club_pref">Club préféré :</label>';
                echo '<select name="club_pref" id="club_pref">';

                foreach ($res as $row) {
                    if ($row['id_club'] == 6) {
                        echo '<option value="' . $row['id_club'] . '" selected>' . $row['nom_club'] . '</option>';
                    } else {
                        echo '<option value="' . $row['id_club'] . '" >' . $row['nom_club'] . '</option>';
                    }
                }

                echo '</select>';
                echo '</div>';
                echo '<br>';

                echo '<div class="form-group">';
                echo '<label>Veuillez choisir les news de quel club :</label>';
                echo '<input type="checkbox" class="select-all" onchange="selectAllClubs()">';
                echo '<label for="select_all">Tout sélectionner</label><br>';

                $res->execute(); 

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
                echo '</div>';
                ?>

    </div>
    <div>
        <input type="submit" value="Validez" onclick="checked_form(event)">
        <p id="message_non_valide"></p>
    </div>
    </form>
    </div>
</body>

</html>