<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        
        <form action="numero.php" method="get">
            <label for="inum">Número Real:</label>
            <input type="number" step="0.001" name="num" id="inum">

            <input type="submit" value="Analisar">
        </form>
    </main>
</body>
</html>