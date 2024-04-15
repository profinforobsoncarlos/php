<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Simples</title>
</head>
<body>
<div>
    <?php 
        $ano_nasc = $_GET["ano"];
        $idade = date("Y") - $ano_nasc;
        if ($idade < 16) {
            $v = "PROIBIDO.";
        }
        elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
                $v = "FACULTATIVO";
            }
        else {
                $v = "OBRIGATÓRIO";
            }
        
        echo "Sua situação é $v";
            
    
    ?>
    <br>
    <a href="aula1204.html"><button>Voltar</button></a>
</div>    
</body>
</html>