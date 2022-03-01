<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../fichier.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../icone.png">
    <title>Exercice 1</title>
</head>

<body>
    <?php
    $nombre = rand(0, 100);
    if ($nombre % 2 == 1) {
        echo ("<span class=rouge>$nombre est impaire</span>");
    } else {
        echo ("<span class=bleu>$nombre est paire</span>");
    }
    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>