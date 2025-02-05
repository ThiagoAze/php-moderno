<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal
        // $n = 010;
        // echo "O valor é $n"

        // $v = 300;
        // var_dump($v)

        // $num = (int) 3e2; // 3 x 10² coerção
        // // echo "O valor é $num";
        // var_dump($num)

        //O valor false é nada, o valor true é 1
        // $casado = false; 
        // //var_dump($casado);
        // print ("O valor para casado é $casado")

        // $vet = [5, 4.5, "João", 3, true];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>