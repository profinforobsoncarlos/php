<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valore do Usuário</title>
    <style>
        h2{
            color: blue;
            font: 18pt Times New Roman;
        }
        
    </style>
</head>
<body>
    <?php
        $v1 = $_GET["a"];
        $v2 = $_GET["b"];

        echo "<h2>Os valores recebidos são: $v1 e $v2</h2>";
        $soma = $v1 + $v2;
        $sub = $v1 - $v2;
        $mul = $v1 * $v2;
        $divisao = $v1 / $v2;
        echo "O resultado da Soma é $soma.";
        echo "<br/>O resultado da Subtração é $sub.";
        echo "<br/>O resultado da Multiplicação é $mul.";
        echo "<br/>O resultado da Divisão é $divisao.";
        ////Funções Básicas em PHP
        //abs = valor absoluto
        echo "<br/>O valor absoluto de $v1 é: ". abs($v1);
        //pow = potenciação
        echo "<br/>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
        //sqrt = Raiz Qyadrada
        echo "<br/>A raiz quadra de $v1 é ".sqrt($v1);

        //round() = Arredondamento
        echo "<br/>O valor arredondado de $v1 é ".round($v1);
        echo "<br/>O valor arredondado de $v1 é ".ceil($v1);//ARREDONDA PARA CIMA
        echo "<br/>O valor arredondado de $v1 é ".floor($v1);//ARREDONDA PARA BAIXO
        //NUMBER_FORMAT = Formatação moedas.
        echo "<br/> O valor de $v1 em moeda é R$".NUMBER_FORMAT($v1,2,",",".");


    
    
    
    ?>
    
</body>
</html>