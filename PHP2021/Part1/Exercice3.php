<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="../icone.png">
    <title>Exercice 3</title>
</head>

<body>
    <?php
    $a = array(
        "Perso1" => array(
            "Nom" => "Riquier",
            "Prenom" => "Vincent",
            "MotDePasse" => "MDP PDM"
        ), "Perso2" => array(
            "Nom" => "Riquier",
            "Prenom" => "Vincent",
            "MotDePasse" => "MDP PDM"
        ), "Perso3" => array(
            "Nom" => "Riquier",
            "Prenom" => "Vincent",
            "MotDePasse" => "MDP PDM"
        )
    );
    ?>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mot de passe</th>
        </tr>
        <tr>
            <td><?php echo $a["Perso1"]["Nom"]; ?></td>
            <td><?php echo $a["Perso1"]["Prenom"]; ?></td>
            <td><?php echo $a["Perso1"]["MotDePasse"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $a["Perso2"]["Nom"]; ?></td>
            <td><?php echo $a["Perso2"]["Prenom"]; ?></td>
            <td><?php echo $a["Perso2"]["MotDePasse"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $a["Perso3"]["Nom"]; ?></td>
            <td><?php echo $a["Perso3"]["Prenom"]; ?></td>
            <td><?php echo $a["Perso3"]["MotDePasse"]; ?></td>
        </tr>
    </table>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>