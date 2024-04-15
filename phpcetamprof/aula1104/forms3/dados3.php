<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $nome = $_GET["n"];
        $ano_nasc = $_GET["ano"];
        $sexo = $_GET["sexo"];
        
        $idade = date("Y") - $ano_nasc;

        echo "<h2>$nome, tem $idade anos.</h2>";
    
    ?>
    <br/>
    <a href="index.html">Voltar</a>

</div>
    
</body>
</html>