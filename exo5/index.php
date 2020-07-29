<?php
try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table
$reponse = $bdd->query('SELECT * FROM `clients` WHERE `lastName` LIKE \'M%\'ORDER BY `lastName`');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO part1 exo5</title>
</head>

<body>
    <?php
    while ($donnees = $reponse->fetch()) {
    ?>
        <p>
            <b>Nom</b> : <?= $donnees['lastName'] ?><br>
            <b>Prenom</b> : <?= $donnees['firstName'] ?>
        </p>

    <?php
    };
    ?>
</body>

</html>