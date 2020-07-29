<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $reponse = $bdd->query('SELECT * FROM `clients` ');
    while ($donnees = $reponse->fetch()) {
        echo '<b>Nom</b> : ' . $donnees['lastName'] . '<br>';
        echo '<b>Prenom</b> : ' . $donnees['firstName'] . '<br>';
        echo '<b>Date de naissance </b> : ' . $donnees['birthDate'] . '<br>';
        if ($donnees['card'] == 1) {
            echo '<b>Carte de fidélité</b> : OUI <br>';
            echo '<b>Numéro de carte</b> : ' . $donnees['cardNumber'] . '<br>';
        }else {
            echo '<b>Carte de fidélité</b> : NON <br>';
        }
        echo '<br>';
    };


    ?>
</body>

</html>