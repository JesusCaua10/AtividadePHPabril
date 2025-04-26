<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $precoCusto = 55;
        $percentualAcrescimo = 5;
        $valorAcrescimo = ($precoCusto * $percentualAcrescimo) / 100;
        $precoVenda = $precoCusto + $valorAcrescimo;
        echo "O preço de venda do produto é $precoVenda";
    ?>
</body>
</html>