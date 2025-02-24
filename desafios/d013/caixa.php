<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        // Pegando valor que irá ser sacado
        $valor = $_GET['valor'] ?? 0;

        // Calculando notas que seráo entregues
        $cem = floor($valor / 100);
        $resto = $valor % 100; 
        
        $cinquenta = floor($resto / 50);
        $resto %= 50;
        
        $dez = floor($resto / 10);
        $resto %= 10;
        
        $cinco = floor($resto / 5);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" step="5"  value="<?=$valor?>" required>
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$ <?=number_format($valor,'2',',','.')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src='./imagens/100-reais.png' class="nota" alt='100 Reais'>x<?=$cem?></li>
            <li><img src='./imagens/50-reais.png' class="nota" alt='50 Reais'>x<?=$cinquenta?></li>
            <li><img src='./imagens/10-reais.png' class="nota" alt='10 Reais'>x<?=$dez?></li>
            <li><img src='./imagens/5-reais.png' class="nota" alt='5 Reais'>x<?=$cinco?></li>
        </ul>
    </section>
</body>
</html>