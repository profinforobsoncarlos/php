<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Escolha - Switch2</title>
    <style>
        span{
            color: red;
        }
    </style>
    
</head>
<body>
    <?php
        $ds = $_GET["Dia_Sem"];
        switch ($ds) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Estamos na semana ainda, hoje TEM AULA :D";
                break;            
            case 7:
            case 8:
            default:
                echo "Relaxa, estamos no final de semana ;)";
                break;
        }
    ?>
    <br/>
    <a href="pratica2.html"><button><span style="color: blue;">Voltar</span></button></a><!-- a tag span no ambiente HTML funciona também in line-->
     
</body>
</html>