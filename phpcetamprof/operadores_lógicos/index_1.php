<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando Idade de Votar</title>
    <style>
        body{
            font: 25pt Arial Black;

        }
    </style>
</head>
<body>
    <?php 
        $ano = $_GET["an"];
        $idade = 2024 - $ano;
        echo "Quem nasceu em $ano, tem idade de $idade anos.";
        $sit = ($idade>= 18 && $idade < 65)?"Obrigatório":"Facultativo";
        echo "<br/> E dessa forma seu voto é $sit";    
    
    ?>
    
</body>
</html>