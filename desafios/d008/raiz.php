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
        $num = $_GET['numero'] ?? 0;
        $raiz_quad = 0;
        $raiz_cub = 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="inumero">Número</label>
            <input type="number" name="numero" id="inumero" value="" required>
            
            <input type="submit" value="Calcular Raízes">
        </form>
        
    </main>

    <section>
        <h2>Resultado Final</h2>
            <?php 
                echo "Analisando o <strong>número $num</strong>, temos: <br>";
                echo "<ul><li>A sua raiz quadrada é <strong>$raiz_quad</strong></li>";
                echo "<li>A sua raiz cúbica é <strong>$raiz_cub</strong></li></ul>";
            ?>
    </section>

</body>
</html>