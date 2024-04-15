<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    <title>Exercício 2</title>
</head>
<body>
    <div>
        <?php
            $nm_fun = $_GET["nm_func"];
            $sal_fun = $_GET["sal_fun"];
            $ano_adms = $_GET["ano_adms"];
            echo "========================<br/>";
            echo "DADOS DO FUNCIONÁRIO<br/>";
            echo "========================<br/>";
            echo "Nome do Funcionário:<br/>";
            echo "$nm_fun<br/>";
            echo "Salário atual<br/>";
            echo "R$". number_format($sal_fun,2,",",".")."<br/>";
            echo "Ano admissão:<br/>";
            echo "$ano_adms<br/>";
            echo "Tempo de empresa:<br/>";
            $t_empresa = date("Y") - $ano_adms;
            echo $t_empresa. " anos.<br/>";            
            if ($t_empresa < 5) {
                $vl_aumento10 = $sal_fun * 10 / 100;
                echo "Valor do ajuste salarial por tempo de empresa:<br/>";
                echo "R$".number_format($vl_aumento10,2,",",".")."<br/>";
                echo "Novo Salário: ";
                $n_sal = $sal_fun + $vl_aumento10;
                echo "R$". number_format($n_sal,2,",","."); 
            }
            else {
                $vl_aumento20 = $sal_fun * 20/ 100;
                echo "Valor do ajuste salarial por tempo de empresa:<br/>";
                echo "R$".number_format($vl_aumento20,2,",",".")."<br/>";
                echo "Novo Salário: ";
                $n_sal = $sal_fun + $vl_aumento20;
                echo "R$". number_format($n_sal,2,",",".");
            }
            echo "<br/>========================"               
        
        ?>
        <br/>
        <a href="index2.html"><button>Voltar</button></a>        
    </div>
</body>
</html>