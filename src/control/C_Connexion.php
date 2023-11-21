<?php
include_once("header.php");
include_once("./view/V_Connexion.php");

$dsn = 'pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
$cnx = new PDO($dsn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = $_POST['mail'];
    $password = md5($_POST['password']);

    // Utilisation de requêtes préparées pour éviter l'injection SQL
    $stmt = $cnx->prepare("SELECT * FROM utilisateur WHERE mail_uti = :mail AND password_uti = :password");
    $stmt->execute(['mail' => $mail, 'password' => $password]);

    if ($stmt->rowCount() > 0) {
        echo 'Connexion réussie !';
    } else {
        echo 'Identifiants incorrects. Veuillez réessayer.';
    }
}
?>