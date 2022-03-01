<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="../icone.png">
    <title>Exercice 2.1</title>
</head>

<body>
    <?php
    $a = array(
        0 => rand(0, 100),
        1 => rand(0, 100),
        2 => rand(0, 100),
        3 => rand(0, 100),
        4 => rand(0, 100)
    );
    for ($i = 0; $i <= 4; $i++) {
        print "$a[$i] ";
    }
    echo ("<table><tr><td>$a[0]</td><td>$a[1]</td><td>$a[2]</td><td>$a[3]</td><td>$a[4]</td></tr></table>")
    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>