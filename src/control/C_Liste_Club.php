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
    include_once("header.php");
    include_once('./model/Club.php');
    include_once('./model/GestionClub.php');
    $dsn ='pgsql:host=192.168.30.110;dbname=Ligue_1;password=P@ssw0rdsio;user=postgres;port=9876';
    $cnx = new PDO($dsn);
    $gc = new GestionClub($cnx);
    $t = [];
    $t=$gc->getLIsteClub();
    include("./view/V_listeclub.php");
?>
</body>

</html>