
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
    
    $reponse = $bdd->query('SELECT * FROM `clients` WHERE `lastName` LIKE \'M%\'ORDER BY `lastName`');
    while($donnees = $reponse->fetch()){
        echo '<b>Nom</b> : ' . $donnees['lastName'] . '<br>';
        echo '<b>Prenom</b> : ' . $donnees['firstName'] . '<br><br>';
    };

    
    ?>
</body>
</html>