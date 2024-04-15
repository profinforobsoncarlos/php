<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 1</title>
</head>
<body>
    <!--Ex001:
        Ler o ano de nascimento de uma pessoa
        e mostrar se ela pode votar e dirigir.
    -->
    <div>
        <?php 
            $ano_nasc = $_GET["ano"];
            $idade = date("Y") - $ano_nasc;
            if ($idade>=18) {
                echo "<h3>Você tem $idade anos<br/>
                e já tem idade para<br/>
                VOTAR e DIRIGIR.</h3>";
            }
            else {
                echo "<h3>Sua idade é $idade anos<br/>
                e ainda não pode VOTAR e<br/>
                nem DIRIGIR.</h3>";
            }
                    
        ?>
        <br/>
        <a href="pratica1.html"><button>Voltar</button></a>        
            
    </div>
    
        
                
    
</body>
</html>