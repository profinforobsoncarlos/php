<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex003</title>
    <style>
        body{
            font: 18pt Arial;
        }
    </style>
</head>
<body>
    <?php 
        $nome = $_GET["n"];
        $sal= $_GET["s"];
        echo "Nome do funcionário (a): $nome.";
        echo "<br/>Salário R$".number_format($sal,2,",",".");
        echo "<br/>------------------------------------";
        echo "<br/>O (a) funcionário(a) $nome tem um salário de R$".number_format($sal, 2, ",", ".")." em 10/05/2024.";

            ?>
    
</body>
</html>