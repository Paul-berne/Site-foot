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

    <?php
    include_once("router.php");
    $router = new router();
    $router->addRoute("/inscription","/control/C_inscription.php" );
     
    $currentURL = $_SERVER['REQUEST_URL'];
    
    $router->execute($currentURL);
?>

</body>

</html>