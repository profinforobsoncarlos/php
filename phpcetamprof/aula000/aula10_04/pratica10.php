<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual X Idêntico</title>
    <style>

        body{

            font: 20pt Arial;


        }
    </style>
</head>
<body>
    <?php 
       $a = 3;
       $b = "3";
       $r = $a === $b? "sim": "não";
       echo $r;
    ?>
    
</body>
</html>