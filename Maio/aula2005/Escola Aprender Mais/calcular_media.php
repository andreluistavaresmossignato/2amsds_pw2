<?php
    $nome = $_POST['txtNomeAluno'];
    $nota1 = $_POST['numNota1'];
    $nota2 = $_POST['numNota2'];

    $media = ($nota1 + $nota2) / 2;
    $situAluno = 0;

    if($media < 3) {
        $situAluno = "Reprovado";
    } elseif ($media < 5) {
        $situAluno = "Recuperação";
    } else {
        $situAluno = "Aprovado";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Escola Aprender mais</title>
</head>
<body>

    <div id="telaResultado" class="telas">
        <h1>Nome do aluno: <span id="nome"><?=$nome?></span></h1>
        <p>1ª nota: <?=$nota1?></p>
        <p>2ª nota: <?=$nota2?></p>
        <p>A média semestral desse aluno foi: <span class="situ"><?=$media?></span>, ou seja <span class="situ"><?=$situAluno?></span></p>
    </div>
    
</body>
</html>