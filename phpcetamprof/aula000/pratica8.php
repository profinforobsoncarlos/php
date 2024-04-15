<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referência entre Variáveis</title>
    <style>
        body{
            font: 30px Arial;
        }
    </style>

</head>
<body>

    <?php
        /*$a = 3;
        $b = $a;
        $b += 5;
        echo $a;
        echo "<br/>".$b;*/

        $a = 3;
        $b = &$a;
        $b += 5;
        echo $a;
        echo "<br/>".$b;
        
        
        
    ?>
    
</body>
</html>