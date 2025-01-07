<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        
        <form method="post">
            <?php 
                // Verifica se o botão foi pressionado
                if(isset($_POST['gerar'])) {
                    // Gera um número aleatório entre 1 e 100
                    $num = rand(0, 100);
                    echo "<p>O valor gerado foi <strong>". $num ."</strong></p>";
                }
            ?>
            
            <input type="submit" name="gerar" value="Gerar número">
        </form>
    </section>
</body>
</html>