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
        // Pegando número para cálculo
        $num = $_GET['numero'] ?? 0;

        // Calculando raizes quadrada e cúbica
        $raiz_quad = sqrt($num);
        $raiz_cub = pow($num, 1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="inumero">Número</label>
            <input type="number" name="numero" id="inumero" min="0" value="<?=$num?>" required>
            
            <input type="submit" value="Calcular Raízes">
        </form>
        
    </main>

    <section>
        <h2>Resultado Final</h2>
            <?php 
                echo "Analisando o <strong>número $num</strong>, temos: <br>";
                echo "<ul><li>A sua raiz quadrada é <strong>". number_format($raiz_quad, '3',',','.') ."</strong></li>";
                echo "<li>A sua raiz cúbica é <strong>". number_format($raiz_cub,'3',',','.') ."</strong></li></ul>";
            ?>
    </section>

</body>
</html>