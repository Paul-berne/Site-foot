<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clubs</title>
    <link rel="stylesheet" href="../css/style_liste_club.css">
</head>

<body>
    <?php
    include_once ("header.php");
    include_once ('./model/Championnat.php');
    include_once ('./Gestion/GestionChampionnat.php');
    $dsn = 'pgsql:host=localhost;dbname=Ligue_1_backup;password=P@ssw0rdsio;user=postgres;port=5432';
    $cnx = new PDO($dsn);
    $gc = new GestionChampionnat($cnx);
    $classement = [];
    if (isset($_POST['annee'])) {
        $classement = $gc->getListeChampionnat($_POST['annee']);
    } else {
        $classement = $gc->getListeChampionnat(date('Y'));
    }
    $tab_annee = [];
    $tab_annee = $gc->getAnneeSaison();
    include ("./view/V_Classement_saison.php");
    ?>
</body>

</html>