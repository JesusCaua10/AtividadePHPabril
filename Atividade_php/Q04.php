<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "valdemar airton";
        $salario = 2100;
        $total_vendas = 5000;
        $comissao = $salario + ($total_vendas * 15)/100;
        echo "nome: $nome";
        echo "<br>";
        echo "salario fixo: $salario";
        echo "<br>";
        echo "salario no final do mes: $comissao ";
    ?>
</body>
</html>