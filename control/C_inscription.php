<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
    <script src="../script/script.js"></script>
    <link rel="stylesheet" href="../css/style_inscription.css">

</head>

<body>

    <?php
    include("./model/User.php");
    include("./model/GestionUser.php");
    include("./model/Club.php");
    include("./model/GestionClub.php");
    include_once("header.php");
    include_once('./view/V_inscription.php');
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dsn ='pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
    $cnx = new PDO($dsn);

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $sexe = $_POST["sexe"];
    $club_pref = $_POST["club_pref"];

    //$fichier = $_FILES["fichier"];
    //$championnat = $_POST["championnat"];
    //$club_news = $_POST["club_news"];
    $club_id;
    $gc = new GestionClub($cnx);
    $t = [];
    $t=$gc->getLIsteClub();
    foreach ($t as $club) {
        if ($club->getId() == $club_pref) {
            $club_id = $club->getId();
            break; 
        }
    }
    
    $theUser = new User($club_pref,$nom, $prenom, $mail, $mdp, $sexe);
    $gestionUser = new GestionUser($cnx);
    $gestionUser->sendToDB($theUser);
    
}
    
?>
</body>

</html>