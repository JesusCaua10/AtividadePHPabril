<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor1 = 5;
        $valor2 = 7;
        if ($valor1 > $valor2) {
            echo "O maior valor é $valor1";
        } elseif ($valor2 > $valor1) {
            echo "O maior valor é $valor2";
        } else {
            echo "Os valores são iguais.";
        }
    ?>
</body>
</html>