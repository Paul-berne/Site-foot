<?php
include_once ("header.php");
include_once ("./view/V_Connexion.php");

if (isset($_SESSION['user'])) {
    header("Location: Acceuil");
    exit();
} else {
    $dsn = 'pgsql:host=localhost;dbname=Ligue_1_backup;password=Paulberne13?;user=postgres;port=5432';
    $cnx = new PDO($dsn);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mail = $_POST['mail'];
        $password = md5($_POST['password']);

        $stmt = $cnx->prepare("SELECT * FROM utilisateur WHERE mail_uti = :mail AND password_uti = :password");

        $stmt->bindParam(":mail", $mail, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $_SESSION['image'] = $result['image_uti'];
            $_SESSION['nom'] = $result['nom_uti'];
            $_SESSION['prenom'] = $result['prenom_uti'];
            $_SESSION['id'] = $result['id_uti'];

            header("Location: Acceuil");
            exit();
        } else {
            echo 'Identifiants incorrects. Veuillez réessayer.';
        }

    }
}
?>