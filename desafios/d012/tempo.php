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
        $tempo = $_GET['tempo'] ?? 0;
        
        // Calculando o total de semanas, dias, horas, minutos e segundos
        
        $semanas = floor($tempo / 604800); // 7 * 24 * 60 * 60
        $tempoRestante = $tempo % 604800;

        $dias = floor($tempoRestante / 86400); //24 * 60 * 60
        $tempoRestante %= 86400;

        $horas = floor($tempoRestante / (3600)); //60 * 60
        $tempoRestante %= (3600);

        $minutos = floor($tempoRestante / 60);
        $segundos = $tempoRestante % 60;
    ?>
    <main>
        <h1></h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>totalizando Tudo</h2>
        <?php 
            echo "Analisando o valor que você digitou, <strong>".number_format($tempo,'0','.','.')." segundos</strong> equivalem a um total de:";
            echo "<ul>";
            echo " <li>$semanas semanas</li>";
            echo " <li>$dias dias</li>";
            echo " <li>$horas horas</li>";
            echo " <li>$minutos minutos</li>";
            echo " <li>$segundos segundos</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>