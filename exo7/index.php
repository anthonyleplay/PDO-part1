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
$reponse = $bdd->query(
    'SELECT `clients`.`firstName`, `clients`.`lastName`, `clients`.`birthDate`, `clients`.`card`, `clients`.`cardNumber`, `cardtypes`.`id`
    FROM `clients`
    INNER JOIN `cards` 
    ON `clients`.`cardNumber` = `cards`.`cardNumber`
    INNER JOIN `cardtypes`
    ON `cards`.`cardTypesId` = `cardtypes`.`id`
    ');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO part1 exo7</title>
</head>

<body>
    <?php
    while ($donnees = $reponse->fetch()) {
    ?>
        <p>
            <b>Nom</b> : <?= $donnees['lastName'] ?><br>
            <b>Prenom</b> : <?= $donnees['firstName'] ?><br>
            <b>Date de naissance </b> : <?= $donnees['birthDate'] ?><br>
            <?php
            if ($donnees['id'] == 1) {
            ?>
                <b>Carte de fidélité</b> : OUI <br>
                <b>Numéro de carte</b> : <?= $donnees['cardNumber'] ?><br>
            <?php
            } else {
            ?>
                <b>Carte de fidélité</b> : NON <br>
            <?php
            }
            ?>
        </p>
    <?php
    };
    $reponse->closeCursor();
    ?>

</body>

</html>