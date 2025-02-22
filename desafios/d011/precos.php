<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Pegando preço e porcentagem do produto
        $preco = $_GET['preco'] ?? 0;
        $perc = $_GET['percentual'] ?? 0;

        // Calculando resultado
        $resul = ($preco * $perc / 100) + $preco;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.1" value="<?=$preco?>">
            <label for="percentual">Qual será o percentual de reajuste? (<strong><output id="perc"><?=$perc?></output>%</strong>)</label> <!-- Mostrando na tela a porcentagem em tempo real do range -->
            <input type="range" name="percentual" id="percentual" value="<?=$perc?>" min="0" max="100" oninput="perc.innerHTML = Number(percentual.value)">
            
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            echo "O produto que custava R$".number_format($preco,'2',',','.')." com <strong>$perc% de aumento</strong> vai passar a custar <strong>R$".number_format($resul,'2',',','.')."</strong> a partir de agora.";
        ?>
    </section>
</body>
</html>