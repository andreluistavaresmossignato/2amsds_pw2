<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "André";
        $predio = "Fatec";
    ?> <!-- fecha a tag php no HTML -->

    <h1>Testando o PHP</h1>
    <h2>Mostrar resultados na tela</h2>
    <p>
        O professor <?=$nome?> está no prédio da <?=$predio?>. <!-- combina o PHP na tag HTML -->
    </p>
    
</body>
</html>