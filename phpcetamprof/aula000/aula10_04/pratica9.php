<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opertadores RelacionaisII</title>
    <style>

        body{

            font: 20pt Arial;


        }
    </style>
</head>
<body>
    <?php 
       $n1 = $_GET["a"];
       $n2 = $_GET["b"];
       $tipo = $_GET["op"];
       echo "Os valores recebidos foram: $n1 e $n2";
       echo "<br/>";
       $r = ($tipo == "s")?$n1 + $n2 : $n1 * $n2; //operador Unário
       echo "O resultado será $r";
    ?>
    
</body>
</html>