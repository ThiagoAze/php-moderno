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
        // Pegando valores dos inputs
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        $resto = 0;
        
        $resultado = floor($dividendo / $divisor);
        
        // Calculando resultados se existir valores
        if($dividendo != 0 && $divisor != 1){
            $resto = $dividendo % $divisor;
        }
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="idividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idividendo" min="0" value="<?=$dividendo?>">
            
            <label for="idivisor">Divisor</label>
            <input type="number" name="divisor" id="idivisor" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura de Divisão</h2>
        <table class="divisao">
            <?php 
                echo "<tr><td>$dividendo</td> <td>$divisor</td></tr>";
                echo "<tr><td>$resto</td> <td>$resultado</td></tr>"
            ?>
        </table>
    </section>

</body>
</html>