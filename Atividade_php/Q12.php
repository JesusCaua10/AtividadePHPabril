<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $custoFabrica = 20000;
        $percentualImpostos = 45;
        $percentualDistribuidor = 28;    
        $valorImpostos = ($custoFabrica * $percentualImpostos) / 100;     
        $custoComImpostos = $custoFabrica + $valorImpostos;        
        $valorDistribuidor = ($custoComImpostos * $percentualDistribuidor) / 100;      
        $custoConsumidor = $custoComImpostos + $valorDistribuidor;
        echo "O custo ao consumidor é $custoConsumidor";
    ?>
</body>
</html>