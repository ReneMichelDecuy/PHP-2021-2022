<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../fichier.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../icone.png">
    <title>Exercice 4</title>
</head>

<body>
    <?php
    $A = rand(-10, 10);
    $B = rand(-10, 10);
    $C = rand(-10, 10);
    echo "<p>A=$A, B=$B, C=$C</p>";
    $D = $B * $B + 4 * $A * $C;
    echo "<p>delta=$D</p>";
    if ($D < 0 || $A == 0) {
        echo "Pas de solutions";
    } elseif ($D == 0) {
        echo "1 solution : ";
        $Res = (-$B) / (2 * $A);
        echo $Res;
    } else {
        echo "2 solutions : ";
        $Res1 = (-$B - sqrt($D)) / (2 * $A);
        $Res2 = (-$B + sqrt($D)) / (2 * $A);
        echo "$Res1, $Res2";
    }
    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>