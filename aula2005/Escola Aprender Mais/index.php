<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de Média Escolar</title>
</head>
<body>
    <div id="telaPrincipal" class="telas">
        <h1>Escola Aprender Mais</h1>
        <h2>Cálculo de Média Semestral</h2>
        <form action="calcular_media.php" method="post">
            <label for="txtNomeAluno">Nome do Aluno: </label><br>
            <input type="text" name="txtNomeAluno" id="txtNomeAluno" required class="formu"> <br><br>
        
            <label for="numNota1">Nota 1 (0 a 10): </label><br>
            <input type="number" name="numNota1" id="numNota1" min="0" step="0.1" max="10" required class="formu"><br><br>
        
            <label for="numNota2">Nota 2 (0 a 10): </label><br>
            <input type="number" name="numNota2" id="numNota2" min="0" step="0.1" max="10" required class="formu"><br><br>
            <input type="submit" value="Calcular Média" class="butão">
            <input type="reset" value="Limpar Campos" class="butão">
        </form>    
    </div>
</body>
</html>