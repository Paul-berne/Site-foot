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
    $sexe = $_POST['sexe'];
    echo "Voici votre nom : " .$nom . "<br>";
    echo "Voici votre prénom : " .$prenom. "<br>";
    echo "Voici votre mail : " .$mail. "<br>";
    echo "Voici votre mot de passe : " .$mdp. "<br>";
    echo "Voici votre sexe : ".$sexe;
    var_dump($sexe);
    $dsn ='pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
    $cnx = new PDO($dsn);
    
    ?>
</body>

</html>