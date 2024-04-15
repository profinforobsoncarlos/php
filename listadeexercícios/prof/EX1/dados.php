<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <div>
        <?php
            $nm_aluno = $_GET["aluno"];
            $curso = $_GET["curso"];
            $disc = $_GET["disc"];

            echo "<h3>Nome: $nm_aluno.</h3>";
            echo "<h3>Curso: $curso.</h3>";
            echo "<h3>Disciplina: $disc.</h3>";
            echo "<h3>Seja ben-vindo $nm_aluno, ao mundo da programação!</3>";        
        
        ?>
        <br>
        <br>
        <a href="index1.html"><button>Voltar</button></a>
    </div>
</body>
</html>