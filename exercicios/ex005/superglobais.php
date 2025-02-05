<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                //Criando um cookie para durar 1 hora (3600 segundos)
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                // Criando uma sessão
                session_start();
                $_SESSION['teste'] = "Funcionou!";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);
                
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);
                
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);
                
                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);
                
                // Variaveis de ambiente (Não mostrado em formato vetor)
                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                
                // Somente assim é possível visualizar
                // foreach(getenv() as $c => $v){
                //     echo "<br> $c -> $v";
                // }
                    
                // Variaveis de servidor
                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);
                
                // Mostra todos as outras váriveis
                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);

            ?>
        </pre>
    </main>
</body>
</html>