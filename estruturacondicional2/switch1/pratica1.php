<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Escolha - Switch</title>
    <style>
        span{
            color: red;
        }
    </style>
    
</head>
<body>
    <?php
        $n = $_GET["num"];
        $o = $_GET["oper"];
        switch ($o) {
            case 1:
                $r = $n * 2;
                break;

            case 2:
                $r = pow($n, 3);
                break;

            case 3:
                $r = sqrt($n);
                break;
            
            default:
                echo "Escolha um Nº entre 1 e 3";
                break;
        }
        echo "<h2>O resultado da solicitação é <span>$r</span></h2>";//a tag span dentro do PHP só funciona com CSS interno ou externo  
    
    ?>
    <a href="pratica1.html"><button><span style="color: blue;">Voltar</span></button></a><!-- a tag span no ambiente HTML funciona também in line-->
     
</body>
</html>