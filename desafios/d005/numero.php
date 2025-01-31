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

        <?php
            $num = $_GET['num'] ?? null;
            $int = floor($num); //parte inteira
            $frac = $num - $int; //parte fracionária

            echo "Analisando o número <strong>" . number_format($num, 3, ',', '.') . "</strong> informado pelo usuário:";
        
            echo '<ul><li>A parte inteira do número é <strong>'. number_format($int, '0', ',', '.') .'</strong></li>';
            echo '<li>A parte fracionária do número é <strong>'.number_format($frac, '3', ',', '.').'</strong></li></ul>';
        ?>

        <p>
            <button onclick="javascript:history.go(-1)"> &#x2B05 Voltar</button>
        </p>
    </main>
</body>

</html>