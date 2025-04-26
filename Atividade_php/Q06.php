<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = 10;
        $n2 = 7;
        echo "Antes da troca:";
        echo "<br>";
        echo "a = $n1";
        echo "<br>";
        echo "b = $n2";
        echo "<br>";
        $troca = $n1;
        $n1 = $n2;
        $n2 = $troca;
        echo "Depois da troca:";
        echo "<br>";
        echo "a = $n1";
        echo "<br>";
        echo "b = $n2";
    ?>
</body>
</html>