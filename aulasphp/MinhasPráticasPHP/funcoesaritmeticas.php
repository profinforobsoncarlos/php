<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas no PHP</title>
    <style>
        h2{
            font: 18pt Arial;
            color: blue;
            font-weight:bold;

        }
    </style>
</head>
<body>
    <?php 
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Os valores recebidos são: $v1 e $v2.</h2>";
        echo "O valor Absoluto de $v2 é ". abs($v2); //função ABS
        echo "<br/>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2); //função de potenciação
        echo "<br/>A raiz quadrada de $v1 é ".sqrt($v1);//função de raiz quadrada
        echo "<br/>O valor arredondado de $v1 é ". round($v1);
        echo "<br/>A parte inteira de $v1 é ". intval($v1);
        echo "<br/>O valor de $v1 em moeda é R$". number_format($v1,2);
        echo "<br/>O valor de $v1 em moeda é R$". number_format($v1,2, ",");
        echo "<br/>O valor de $v1 em moeda é R$". number_format($v1,2, ",", ".");



    ?>
    
</body>
</html>