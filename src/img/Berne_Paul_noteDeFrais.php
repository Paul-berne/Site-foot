<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Note de Frais</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['id'])) {
        header("Location: Connexion.php");
        exit();
    }

    $user = "postgres";
    $pass = "Paulberne13?";
    $dsn = 'pgsql:host=localhost;dbname=BDD_DS2;';
    $cnx = new PDO($dsn, $user, $pass);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $montant = $_POST['montant'];
        $dateFrais = $_POST['dateFrais'];
        $categorie = $_POST['categorie'];
        $nombreAleatoire = rand(10, 50);
        
        if (empty($montant) || empty($dateFrais) || empty($categorie)) {
            echo "Veuillez remplir tous les champs.";
            exit();
        }
        if(is_int($montant)){
            echo 'Veuillez informer des nombres pour le montant';
            exit();
        }

        $uploadDir = "../PIECES/";
        $fileName = $_SESSION['id'] . '_' . $dateFrais . '_' . $nombreAleatoire . '.' . pathinfo($_FILES['justificatif']['name'], PATHINFO_EXTENSION);
        $uploadFilePath = $uploadDir . $fileName;
        move_uploaded_file($_FILES['justificatif']['tmp_name'], $uploadFilePath);
        
        $stmt = $cnx->prepare("INSERT INTO notedefrais (idutilisateur, idcategorie, montant, datefrais, datesaisie, piecejustificatif) VALUES (?, ?, ?, ?,NOW(), ?)");
        $stmt->execute([$_SESSION['id'], $categorie, $montant, $dateFrais, $uploadFilePath]);

        echo "La note de frais a été enregistrée avec succès.";
    }
    ?>

    <form method="POST" action="notedefrais.php" enctype="multipart/form-data">

        <label><b>Montant de la note : </b></label>
        <input type="number" name="montant" required> <br>

        <label><b>Date du frais : </b></label>
        <input type="date" placeholder="Entrer la date" name="dateFrais" required> <br>

        <label><b>Type de Frais : </b></label>
        <select name="categorie" required>
            <option value="">Choisir une option</option>
            <?php
            $res = $cnx->query("SELECT * FROM categorie");
            foreach ($res as $row) {
                echo '<option value="' . $row['id'] . '">' . $row['nomcategorie'] . '</option>';
            }
            ?>
        </select> <br>

        <label><b>Votre justificatif </b></label>
        <input type="file" accept=".png, .jpg, .pdf" placeholder="choisir un justificatif (Png, jpg, pdf)"
            name="justificatif" required /> <br />

        <input type="submit" value="Valider" name="valider" />
    </form>
</body>

</html>