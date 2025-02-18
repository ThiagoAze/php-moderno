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
        $valor = $_GET['valor'] ?? 0;
        $cem = 0;
        $cinquenta = 0;
        $dez = 0;
        $cinco = 0;

        if($valor != 0){
            $cem = floor($valor / 100);
            $resto = $valor % 100; 
            
            $cinquenta = floor($resto / 50);
            $resto %= 50;
            
            $dez = floor($resto / 10);
            $resto %= 10;
            
            $cinco = floor($resto / 5);
        }
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual vaor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" step="5">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php 
            echo "<h2>Saque de R$".number_format($valor,'2',',','.')." realizado</h2>";
            echo "O caixa eletrônico vai te entregar as seguintes notas:";
            echo "<ul>";
            echo " <li><p><img src='./imagens/100-reais.png' alt=100 Reais'>x$cem</p></li>";
            echo " <li><p><img src='./imagens/50-reais.png' alt=50 Reais'>x$cinquenta</li></p>";
            echo " <li><p><img src='./imagens/10-reais.png' alt=10 Reais'>x$dez</li></p>";
            echo " <li><img src='./imagens/5-reais.png' alt=5 Reais'>x$cinco</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>