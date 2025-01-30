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
        
        <?php 
            $num = $_GET['num'] ?? null;
            $conversao = $num / 5.22;

            echo "Seus R$ ". number_format($num, 2, ',', '.') ." equivalem a <strong>US$ ". number_format($conversao, 2) ." </strong>";
            echo '<p><strong>* Cotação fixa de R$ 5,22</strong> informada diretamente no código.</p>'
        ?>
        
        <p>
            <button onclick="javascript:history.go(-1)"> &#x2B05 Voltar</button>
        </p>
    </section>
</body>
</html>