<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
    <script src="./script/script.js"></script>
    <link rel="stylesheet" href="../css/style_inscription.css">

</head>

<body>

    <?php
include("./model/User.php");
include("./model/GestionUser.php");
include("./model/Club.php");
include("./model/GestionClub.php");
include_once("header.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dsn = 'pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
    $cnx = new PDO($dsn);

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $sexe = $_POST["sexe"];
    $club_pref = $_POST["club_pref"];
    $ligue = $_POST["championnat"];

    if(isset($_FILES['image']['name'])){
        $uploadDir = 'img/';
        $fileName = $nom . '_' . $prenom . '_' . basename($_FILES['image']['name']);
        $uploadfile = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            $imagePath = $uploadfile;
        } else {
            $imagePath = 'img/defaut_pfp.jpg';
        }
    }

    $gc = new GestionClub($cnx);
    $t = $gc->getLIsteClub();

    $theUser = new User($club_pref, $nom, $prenom, $mail, $mdp, $sexe, $imagePath);
    $gestionUser = new GestionUser($cnx);
    $gestionUser->sendToDB($theUser);

    echo "Création de compte réussie";
} else {
    include_once('./view/V_inscription.php');
}
?>



</body>

</html>