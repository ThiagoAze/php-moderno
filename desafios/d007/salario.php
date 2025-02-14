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
        $quant_salario = 0;
        $resto_salario = 0.00;

        // Calculando se tiver o valor de salário
        if($salario != 0){ 
            // Pegando quantidade de salários minímos
            $quant_salario = floor ($salario / 1380);
            // Pegando resto da quantidade de salários minímos
            $resto_salario = (($quant_salario * 1380) - $salario) * -1; 
        }
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="isalario">Salarío (R$)</label>
            <input type="number" name="salario" id="isalario" value="<?=$salario?>" required>
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
        
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "Quem recebe salário de R$1.380,00 ganha <strong>$quant_salario salários mínimos</strong> + R$ ". number_format($resto_salario, '2', ',', '.').".";
        ?>
    </section>

</body>
</html>