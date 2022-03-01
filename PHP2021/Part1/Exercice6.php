<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../fichier.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../icone.png">
    <title>Exercice 6</title>
</head>

<body>
    <form action="Exercice6.php" method="GET">
        <input type="text " id="name" name="nom">
        <input type="submit">
    </form>
    <?php
    if (!empty($_GET['nom'])) {
        $test = $_GET['nom'];
        echo ("Votre nom est ->");
        echo ("<span class=purple>$test</span>");
    } else {
        echo "Entrez votre nom";
    }
    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>