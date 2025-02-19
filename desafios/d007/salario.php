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
        $salario = $_GET['salario'] ?? 0;
        $salario_min = 1380.60;

        // Pegando quantidade de salários minímos
        $quant_salario = floor($salario / $salario_min);
        // Pegando resto da quantidade de salários minímos
        $resto_salario = ($salario % $salario_min); 
        
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="isalario">Salarío (R$)</label>
            <input type="number" name="salario" id="isalario" min="0" step="0.01" value="<?=$salario?>" required>
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salario_min,'2',',','.')?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "Quem recebe salário de R$".number_format($salario,'2',',','.')." ganha <strong>$quant_salario salários mínimos</strong> + R$ ". number_format($resto_salario, '2', ',', '.').".";
        ?>
    </section>

</body>
</html>