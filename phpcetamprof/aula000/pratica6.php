<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
    <style>
        body{
            font: 30px Arial;
        }
    </style>

</head>
<body>

    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$". number_format($preco, 2, ",", ".");
        //pocentagem de 10%//
        //$preco = $preco + ($preco * 10 / 100);
        //$preco += $preco * 10 / 100;//código com incremento ou decremento.
        //echo "<br/>O valor do produto com aumento de 10% é R$$preco.";
        //$preco = $preco - ($preco * 10 / 100);
        $preco -= $preco * 10 / 100; //com encremento ou decremento.

        echo "<br/> O valor com desconto de 10% é R$". number_format($preco, 2, ",", ".");
    
    ?>
    
</body>
</html>