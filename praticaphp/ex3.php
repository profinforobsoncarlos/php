<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nome = $_GET["f"];
    $sal = $_GET["s"];
    echo "<h2>Nome do Funcionário: $nome.</h2";
    echo "<br/><h2>Salário R$ $sal.</h2";
    echo "<br/><h2> O (a) funcionário(a) $nome tem um salário de R$.$sal.NUMBER_FORMAT($sal 2,",",".")<h2>";    
    
    ?>
    
</body>
</html>