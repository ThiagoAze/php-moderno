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
            // Pegando data da semana
            $dataInicio = date('m-d-Y', strtotime("-7 days"));
            $dataFim = date('m-d-Y'); //O dia de hoje menos 7 dias

            // API do banco central do Brasil com cotação da semana
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dataInicio.'\'&@dataFinalCotacao=\''.$dataFim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            // Tratando dados em json, true é pra deixar em vetor/array
            $dados = json_decode(file_get_contents($url), true);

            // Pegando valor da cotação
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // Pegando o valor do real
            $num = $_GET['num'] ?? null;

            // Convertendo valores
            $conversao = $num / $cotacao;

            echo "Seus R$ ". number_format($num, 2, ',', '.') ." equivalem a <strong>US$ ". number_format($conversao, 2, ',', '.') ." </strong>";
            echo '<p>Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br"><strong><u>Banco Central do Brasil</u></strong></a></p>'
        ?>
        
        <p>
            <button onclick="javascript:history.go(-1)"> &#x2B05 Voltar</button>
        </p>
    </section>
</body>
</html>