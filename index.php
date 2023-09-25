<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

</head>

<body>
    <div class="container">
        <h1>Formulaire</h1>
        <form action="donnee.php" id="formulaire" method="POST" enctype="multipart/form-data">
            <div id="form-group">
                <label for="nom">Veuillez saisir votre nom </label>
                <input type="text" name="nom" id="nom" value="Berne">
            </div>
            <br>
            <div id="form-group">
                <label for="prenom">Veuillez saisir votre prénom </label>
                <input type="text" name="prenom" id="prenom" value="Paul">
            </div>
            <br>
            <div id="form-group">
                <label for="mail">Veuillez saisir votre Adresse mail</label>
                <input type="email" name="mail" id="mail" value="paulberne1309@gmail.com">
            </div>
            <br>
            <div id="form-group">
                <label for="mdp">Veuillez saisir votre mot de passe</label>
                <input type="password" name="mdp" id="mdp" value="mdp">
            </div>
            <br>
            <div id="form-group">
                <label for="confirmmdp">Veuillez confirmer votre mot de passe</label>
                <input type="password" name="comfirmmdp" id="confirmmdp" oninput="passwordsame()" value="mdp">
                <p id="passwordmessage"></p>
            </div>
            <div id="form-group">
                <label for="sexe">Veuillez sélectionner votre sexe :</label>
                <select id="sexe" name="sexe">
                    <option value="male">Homme</option>
                    <option value="female">Femme</option>
                    <option value="non_binary">Non-binaire</option>
                    <option value="other">Autre..</option>
                </select>
            </div>
            <br>

            <div id="form-group">
                <input type="file">
            </div>

            <br>
            <div id="form-group">
                <span>Championnat :</span>
                <input type="radio" id="ligue1" name="championnat" value="ligue1">
                <label for="ligue1">Ligue 1</label>
                <input type="radio" id="ligue2" name="championnat" value="ligue2">
                <label for="ligue2">Ligue 2</label>
            </div>
            <br>
            <div id="form-group">
                <label for="club_pref">Club préféré :</label>
                <select name="club_pref" id="club_pref">
                    <option value="Paris SG">Paris SG</option>
                    <option value="Marseille">Marseille</option>
                    <option value="Lyon">Monaco</option>
                    <option value="Monaco">Monaco</option>
                </select>
            </div>
            <br>
            <div id="form_group">
                <label for="news_club">Veuillez choisir les news de quel club :</label>
                <input type="checkbox">
                <label for="">test</label>
            </div>
            <div>
                <input type="submit" value="Validez" onclick="resetform(event)">
                <p id="message_non_valide"></p>
            </div>
        </form>
    </div>
</body>

</html>