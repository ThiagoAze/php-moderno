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
        <h1>Resultado Final</h1>
        <?php
            $num = $_GET['num'] ?? null;

            if (!$num == null) {
                $antecessor = $num - 1;
                $sucessor = $num + 1;

                echo "<p>O número escolhido foi <strong>". $num ."</strong> </p>";
                echo "<p>O seu <em>antecessor</em> é " . $antecessor . "</p>";
                echo "<p>O seu <em>sucessor</em> é " . $sucessor . "</p>";
            } else {
                echo "<p>Valor não informado</p>";
            }
        ?>
        <p>
            <button onclick="javascript:history.go(-1)"> &#x2B05 Voltar</button>
        </p>
    </main>
</body>

</html>