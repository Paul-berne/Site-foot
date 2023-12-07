<?php
include_once("header.php");
include_once("./view/V_Connexion.php");

$dsn = 'pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
$cnx = new PDO($dsn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = $_POST['mail'];
    $password = md5($_POST['password']);

    $stmt = $cnx->query("SELECT * FROM utilisateur WHERE mail_uti = '$mail' AND password_uti = '$password'");

    
    if ($stmt->rowCount() == 1) {
        foreach ($stmt as $row) {
            $imagePath = $row['image_uti'];
            $_SESSION['image'] = $row["image_uti"];
            $_SESSION['nom'] = $row['nom_uti'];
            $_SESSION['prenom'] = $row['prenom_uti'];
            $_SESSION['id'] = $row['id_uti'];
        }
        echo 'Connexion réussie !';
    } else {
        echo 'Identifiants incorrects. Veuillez réessayer.';
    }
    
}
?>