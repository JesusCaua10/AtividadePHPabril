<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = 128;       
        if ($numero >= 100 && $numero <= 200) {
            echo "O número $numero está no intervalo entre 100 e 200.";
        } else {
            echo "O número $numero não está no intervalo entre 100 e 200.";
        }
    ?>
</body>
</html>