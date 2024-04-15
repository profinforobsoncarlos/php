<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando a Raiz Quadrada</title>
</head>
<body>
<div>
    <?php 
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A Raiz Quadrada de $valor é ". number_format($rq, 2);

    ?>
<br/>
<a href="pratica001.html">Voltar</a>

</div>    
</body>
</html>