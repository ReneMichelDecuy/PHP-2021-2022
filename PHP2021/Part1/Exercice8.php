<!DOCTYPE html>
<?php
session_start();
?>

<html>

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="../icone.png">
    <title>Exercice 8</title>
</head>

<body>
    Entrez votre nom
    <form action="Exercice8.php" method="_SESSIONS">
        <input type="text " name="nom">
        <input type="reset" value="Reset">
        <input type="submit" value="Submit">
    </form>
    <p><a href="../index.php">Retour</a></p>

</body>

</html>