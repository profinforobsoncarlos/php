<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex004</title>
    <style>
        body{
            font: 30px Arial;
        }
    </style>

</head>
<body>

    <?php
        echo "Digite um Valor:";
        echo "<br/>Digite outro Valor:";
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        $soma = $v1 + $v2;
        echo "<br/>A soma entre $v1 e $v2 é $soma.";    
    
    ?>
    
</body>
</html>