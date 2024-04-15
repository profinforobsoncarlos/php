<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 2</title>
</head>
<body>
    <form action="pratica2.php" method="get">
        <?php
            $n = 1;
            while ($n <= 5) {
                echo "<label for='v$n'>Valor $n</label>;
                <input type='number' name='v$n' id='v$n' max='100' min='0' value='0'/><br/>";
                $n++;
            }
            
        ?>
        <br/>
        <br/>
        <button type="submit">Enviar</button>
    </form>
    
    
    
</body>
</html>