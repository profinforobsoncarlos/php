<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex002</title>
</head>
<body>
    <?php 
        echo "<h1>Qual é o seu nome?</h1>";
        $nome = $_GET["n"];
        echo "<h3>$nome</h3>";
        echo "<br/><h2>Olá, $nome é um prazer te conhecer!</h2>";
            
    ?>
    
</body>
</html>