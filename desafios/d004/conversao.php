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
            // echo `Seus R$ $num equivalem a <strong>US$ $conversao </strong>`;
            echo '<p>Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br"><strong><u>Banco Central do Brasil</u></strong></a></p>'
        ?>
        
        <p>
            <button onclick="javascript:history.go(-1)"> &#x2B05 Voltar</button>
        </p>
    </section>
</body>
</html>