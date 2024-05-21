<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clubs</title>
    <link rel="stylesheet" href="style_liste_club.css">
</head>

<body>
    <form method="POST" action="/Classement">
        <label for="annee">Sélectionnez l'année de la saison :</label>
        <select name="annee" id="annee">
            <?php foreach ($tab_annee as $annee): ?>
            <option value="<?= $annee ?>"> <?= $annee ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Afficher</button>
    </form>
    <h1>Classement :</h1>
    <table>
        <thead>
            <tr>
                <th>Position</th>
                <th>Nom du Club</th>
                <th>Matchs Gagnés</th>
                <th>Matchs Perdus</th>
                <th>Matchs Nuls</th>
                <th>Buts Marqués</th>
                <th>Buts Encaissés</th>
                <th>Différence de Buts</th>
                <th>Points</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($classement as $index => $club): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $club->getNomClub() ?></td>
                <td><?= $club->getMatchsGagnes() ?></td>
                <td><?= $club->getMatchsPerdus() ?></td>
                <td><?= $club->getMatchsNuls() ?></td>
                <td><?= $club->getButsMarques() ?></td>
                <td><?= $club->getButsEncaissees() ?></td>
                <td><?= $club->getDifferenceButs() ?></td>
                <td><?= $club->getNbPoints() ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>