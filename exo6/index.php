
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
    
    $reponse = $bdd->query('SELECT * FROM `shows` ORDER BY `title`');
    while($donnees = $reponse->fetch()){
        echo '<i>' . $donnees['title'] . '</i> par <i>' . $donnees['performer'] . '</i>, le <i>' . $donnees['date'] . '</i> à <i>' . $donnees['startTime'] . '<br>';
    };

    
    ?>
</body>
</html>