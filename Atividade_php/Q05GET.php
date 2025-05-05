<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas do Aluno (GET)</title>
</head>
<body>

    <form method="GET" action="">
        Nome: <input type="text" name="nome"><br>
        Nota 1: <input type="number" name="nota_1" step="0.01"><br>
        Nota 2: <input type="number" name="nota_2" step="0.01"><br>
        Nota 3: <input type="number" name="nota_3" step="0.01"><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nome"])) {
        $nome = $_GET["nome"];
        $nota_1 = $_GET["nota_1"];
        $nota_2 = $_GET["nota_2"];
        $nota_3 = $_GET["nota_3"];
        
        if (is_numeric($nota_1) && is_numeric($nota_2) && is_numeric($nota_3)) {
            $media = ($nota_1 + $nota_2 + $nota_3) / 3;
            echo "<br>Nome do aluno: " . htmlspecialchars($nome);
            echo "<br>Média: " . number_format($media, 2);
        } else {
            echo "<br>Por favor, insira notas válidas.";
        }
    }
    ?>

</body>
</html>
