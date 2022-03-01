<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Exercice Final</title>
    <link rel='stylesheet' href='../fichier.css'>
    <link rel="icon" type="image/png" sizes="16x16" href="../icone.png">
</head>

<body>
    <?php
    if (isset($_POST["Valider"])) {
        if ($_POST["MDP"] == "1234" && $_POST["Nom"] == "julien") {
            $_SESSION["EtatConnexion"] = true;
        } else {
            if ($_POST["MDP"] != "1234") {
                echo "Ce n'est pas le bon mdp";
            }
            if ($_POST["Nom"] != "julien") {
                echo "Ce n'est pas le bon Login";
            }
        }
    }

    if (isset($_POST["Deconnexion"])) {
        session_unset();
        session_destroy();
    }

    if ((isset($_SESSION["EtatConnexion"]) && $_SESSION["EtatConnexion"] == true)) {
    ?>
        <p>Bonjour Monde !</p>
        <p>Hello World !</p>

        <form action="" method="post" class="form-example">
            <input type="submit" value="Deconnexion" name="Deconnexion">
        </form>
    <?php
    } else {
    ?>

        <form action="" method="post" class="form-example">
            <span>
                Nom :
                <input type="text" name="Nom" id="Nom" required>
            </span>
            <span>
                Mot de Passe :
                <input type="password" name="MDP" id="MDP" required>
            </span>
            <input type="submit" value="Valider" name="Valider">
        </form>
    <?php
    }

    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>