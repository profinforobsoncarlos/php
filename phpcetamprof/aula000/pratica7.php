<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento</title>
    <style>
        body{
            font: 30px Arial;
        }
    </style>

</head>
<body>

    <?php
        /*Faça um programa que leia um número inteiro, ex.:
        Digite um número: 9
        E mostre o seu antecessor e seu sucessor. Ex.:
        O antecessor de 9 é 8
        O sucessor de 9 é 10*/
        
        $atual = $_GET["aa"];
        //echo "O ano atual é $atual e ano anterior é ". --$atual;
        echo "O ano atual é $atual e o próximo ano será ". ++$atual;#Essa linha mostra que somou +1 ano
    ?>
    
</body>
</html>