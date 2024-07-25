<?php

require_once 'connexion.php';

$requete = "SELECT * FROM fournitures";
$taches = $bdd->query($requete);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description"content="page accueil de la to do list">
    <title>to do list</title>
</head>
<body>
<!-- tu fais ton foreach dans ton html -->
    <?php foreach($taches as $tache): ?>    
    <p>
        Fournitures : <?= htmlspecialchars($tache['taches']); ?>
        <a class="delete" href="traitementdelete.php?id=<?= htmlspecialchars($tache['id']); ?>">supprimer</a>
    </p>
    <?php endforeach; ?>
    <form action="traitementInsert.php" method="GET">

        nom tache
        <input type="text" name="taches">

        <br>

        <input type="submit" value="envoyer">

    </form>
</body>
</html>



