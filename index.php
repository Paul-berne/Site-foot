<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    include_once("router.php");
    $router = new Router(); 
    $router->addRoute("/inscription", "control/C_inscription.php"); 

    $currentURL = $_SERVER['REQUEST_URI'];

    $router->execute($currentURL);
    ?>

</body>

</html>