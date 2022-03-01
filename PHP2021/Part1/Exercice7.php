<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="../icone.png">
    <title>Exercice 7</title>
</head>

<body>
    <form action="Exercice7.php" method="_SESSIONS">
        <input type="text " name="nom">
        <input type="submit">
    </form>
    <?php
    if (isset($_SESSION['nom'])) {
        echo "Votre nom est -> " . $_SESSION['nom'];
    } else {
        echo "Entrez votre nom";
    }
    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>