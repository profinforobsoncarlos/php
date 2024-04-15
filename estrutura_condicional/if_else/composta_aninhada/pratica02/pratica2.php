<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 2</title>
</head>
<body>
    <!--Ex002:
        Ler o ano de nascimento de uma pessoa e mostrar
        a idade e a seguinte mensagem EX.:
        - 15 anos. Para essa idade o tipo de voto é PROIBIDO.
        - 16 anos. Para essa idade o tipo de voto é FACULTATIVO.
        - 18 anos. Para essa idade o tipo de voto é OBRIGATÓRIO.
        - 65 anos. Para essa idade o tipo de voto é FACULTATIVO.
    -->
    <div>
        <?php 
            $ano_nasc = $_GET["ano"];
            $idade = date("Y") - $ano_nasc;
            if ($idade < 16) {
                $v = "PROIBIDO.";                
            }
            else {
                if (($idade >= 16 && $idade < 18) || ($idade > 65)) { //mostrar que podemos usar nesta linha elseif//
                    $v = "FACULTATIVO.";                   
                }
                else {
                    $v = "OBRIGATÓRIO.";
                    }                
                            
            }
        echo "<h2>$idade anos. Para essa idade o tipo de voto é: $v</h2>";
                    
        ?>
        <br/>
        <a href="pratica2.html"><button>Voltar</button></a>        
            
    </div>                
    
</body>
</html>