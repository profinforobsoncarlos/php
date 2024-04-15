<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler os Dados de uma Pessoa</title>
</head>
<body>
<div>
    <?php 
        $n1 = $_GET["n"];
        $suc = $n1 + 1;
        $ant = $n1 -1;
        
        echo "Você informou o Nº $n1, e seu sucessor é $suc e seu antecessor é $ant.";

    ?>
<br/>
<a href="pratica003.html">Voltar</a>

</div>    
</body>
</html>