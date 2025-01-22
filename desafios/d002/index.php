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
        
            <?php 
                $num = mt_rand(0, 100); //Utiliza o mt_rand ao invés do rand, por ser mais rápido, moderno e seguro
                // Também existe o random_int que criptografa os números aleatórios de forma segura, porém é lenta
                
                echo "<p>O valor gerado foi <strong>". $num ."</strong></p>";
            ?>
            
            <button name="btn" onclick="javascript:document.location.reload()">&#x1F504 Gerar número</button>
    </section>
</body>
</html>