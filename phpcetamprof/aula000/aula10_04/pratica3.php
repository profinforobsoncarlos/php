<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento de Salário</title>
    <style>

        body{

            font: 20pt Arial;


        }
    </style>
</head>
<body>
    <?php 
        //aumento salário 10%
        $sal = 4500;
        //$sal = $sal + ($sal * 10 / 100);
        //$sal += ($sal *10/100);
        //$sal = $sal - ($sal * 10 / 100);
        $sal -= ($sal * 10 / 100);
        //echo "O novo salário será $sal";
        echo "O salário final com o desconto foi R$".number_format($sal, 2, ",",".");
    
    
    ?>
    
</body>
</html>