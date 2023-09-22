<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <script>
    function resetform(event) {
        let message_formulaire_false = document.getElementById("message_non_valide");
        if (passwordsame() == true) {
            document.getElementById("formulaire").reset();
        } else {
            message_formulaire_false.innerHTML = "Vous avez mal informé les informations dans le formulaire !";
            event.preventDefault(); // Empêche la soumission du formulaire
        }
    }

    function passwordsame() {
        let mdp = document.getElementById("mdp").value;
        let confirmmdp = document.getElementById("confirmmdp").value;
        let message = document.getElementById("passwordmessage");
        if (mdp != "" || confirmmdp != "") {
            if (mdp == confirmmdp) {
                message.innerHTML = "correct";
                return true;
            } else {
                message.innerHTML = "Mot de passe différent";
                return false;
            }
        }
        return false;
    }
    </script>

    <form action="donnee.php" id="formulaire" method="post" enctype="multipart/form-data">
        <div id="form-group">
            <label for="nom">Veuillez saisir votre nom </label>
            <input type="text" name="nom" id="nom">
        </div>
        <br>
        <div id="form-group">
            <label for="prenom">Veuillez saisir votre prénom </label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <br>
        <div id="form-group">
            <label for="mail">Veuillez saisir votre Adresse mail</label>
            <input type="text" name="mail" id="mail">
        </div>
        <br>
        <div id="form-group">
            <label for="mdp">Veuillez saisir votre mot de passe</label>
            <input type="text" name="mdp" id="mdp">
        </div>
        <br>
        <div id="form-group">
            <label for="confirmmdp">Veuillez confirmer votre mot de passe</label>
            <input type="text" name="comfirmmdp" id="confirmmdp" oninput="passwordsame()">
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
        <div>
            <input type="submit" value="Validez" onclick="resetform(event)">
            <p id="message_non_valide"></p>
        </div>
    </form>
</body>

</html>