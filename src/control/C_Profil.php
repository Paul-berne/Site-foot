<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
    <link rel="stylesheet" href="../css/style_Profil.css">
</head>

<body>
    <?php
    include_once ("header.php");
    include_once ("./view/V_Profil.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        session_unset();
        session_destroy();
        header("Location: Acceuil");
        exit();
    }
    ?>
</body>

</html>