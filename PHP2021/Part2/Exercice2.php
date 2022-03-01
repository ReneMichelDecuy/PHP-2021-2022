<!DOCTYPE html>
<?php
function tableau($a,$b,$c)
{
?>
    <table>
        <tr>
            <td><?php echo("$a") ?></td>
            <td><?php echo("$b") ?></td>
            <td><?php echo("$c") ?></td>
        </tr>
        <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
        <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
    </table>
<?php
}
?>
<html>

<head>
    <link rel="stylesheet" href="../fichier.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../icone.png">
    <title>Exercice 2</title>
</head>

<body>
    <?php
        if(!isset($_POST["Nom1"]))$_POST["Nom1"]="Metalosse";
        if(!isset($_POST["Nom2"]))$_POST["Nom2"]="Crabagarre";
        if(!isset($_POST["Nom3"]))$_POST["Nom3"]="Porygon2";
    
    ?>
    <form action="" method="post" class="form-example">
            <span>
                Nom :
                <input type="text" name="Nom1" id="Nom" required>
            </span>
            <span>
                Nom :
                <input type="text" name="Nom2" id="Nom" required>
            </span>
            <span>
                Nom :
                <input type="text" name="Nom3" id="Nom" required>
            </span>
            <input type="submit" value="Valider" name="Valider">
        </form>
    <?php
    tableau($_POST["Nom1"],$_POST["Nom2"],$_POST["Nom3"]);
    ?>
    
    <p><a href="../index.php">Retour</a></p>
</body>

</html>