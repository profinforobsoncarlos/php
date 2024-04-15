<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aluno</title>
    <style>

        body{

            font: 20pt Arial;


        }
    </style>
</head>
<body>
    <?php 
       $nota1 = $_GET["n1"];
       $nota2 = $_GET["n2"];
       $m = ($nota1 + $nota2) / 2;
       echo "A média do aluno é $m";
       $sit = ($m <6)?"Reprovado":"Aprovado!";
       echo "<br/>A situação do aluno é $sit";
    ?>
    
</body>
</html>