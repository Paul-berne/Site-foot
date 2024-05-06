<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="../css/style_Acceuil.css">
</head>

<body>
    <?php
    include_once("header.php");
    include_once("./view/V_Acceuil.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dsn ='pgsql:host=localhost;dbname=Ligue_1_backup;password=Paulberne13?;user=postgres;port=5432';
    $cnx = new PDO($dsn);

    if(isset($_SESSION['nom'])){
        $nom_utilisateur = $cnx->quote($_SESSION['nom']); 
        $id_uti = $cnx->query("select id_uti from utilisateur where nom_uti = ".$nom_utilisateur.";");
        foreach($id_uti as $resultat){
            $id_user = $resultat;
        }
        $insert = $cnx->query("INSERT INTO COMMENTARY(desc_com, id_news, id_uti)");
    }else{
        echo "vous devez vous connecté";
    }

}
    ?>
</body>

</html>