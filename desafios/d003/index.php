<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        
        <form action="conversao.php" method="get">
            <label for="inum">Quantos R$ você tem na carteira?</label>
            <input type="number" step="0.01" name="num" id="inum">

            <input type="submit" value="Converter">
        </form>
    </section>
</body>
</html>