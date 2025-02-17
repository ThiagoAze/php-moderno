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
        $nasc = $_GET['ano_nasc'] ?? 2000;
        $ano_atual = date('Y');
        $ano = $_GET['data_atual'] ?? $ano_atual;

        $idade = ($nasc - $ano) * -1;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="ano_nasc" value="<?=$nasc?>">

            <label for="data_atual">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$ano_atual?></strong>)</label>
            <input type="number" name="data_atual" id="data_atual" value="<?=$ano?>">

            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            echo "Quem nasceu em $nasc vai ter <strong>$idade anos</strong> em $ano!";
        ?>
    </section>
</body>
</html>