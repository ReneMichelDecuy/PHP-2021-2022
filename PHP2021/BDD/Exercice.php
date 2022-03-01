<?php
try {
    $MaBase = new PDO('mysql:host=192.168.64.186;dbname=TD2Exo2Riquier', 'riquier', 'riquier');
} catch (Exception $e) {
    echo "Ya un gros probleme" . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Exercice 3</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../icone.png">
    <link rel='stylesheet' href='../fichier.css'>
</head>

<body>
    <h1>Insertion de Medecin</h1>
    <?php
    if (isset($_GET["btnAjoutMedecin"])) {
        $Nom = $_GET["txtNom"];
        $Prenom = $_GET["txtPrenom"];
        $Req = $MaBase->query("INSERT INTO Medecin (nom,prenom) VALUE ('" . $Nom . "','" . $Prenom . "')");
    } else {
    ?>
        <h2>Formulaire </h2>
        <form action="" method="get">
            Nom : <input type="text" name="txtNom" id="nom" required>
            Prenom : <input type="text" name="txtPrenom" id="Prenom" required>
            <input type="submit" name="btnAjoutMedecin" value="Ajouter un Medecin">
        </form>
    <?php
    }
    ?>
    <?php
    try {
        $Req = $MaBase->query("SELECT * FROM Medecin");
    ?>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
            <?php
            while ($tab = $Req->fetch()) {
            ?>
                <tr>
                    <td><?php echo $tab["Nom"]; ?></td>
                    <td><?php echo $tab["Prenom"]; ?></td>
                    <td></td>
                </tr>
            <?php
            }
            ?>
        </table>
    <?php
    } catch (Exception $e) {
        echo "Ya un gros probleme" . $e->getMessage();
    }
    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>