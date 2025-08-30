<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numero">Digite um número</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="fibonacci">Enviar</button>

    </form>

    <?php

    $sequencia = [];

    $sequencia[0] = 0;
    $sequencia[1] = 1;
    $sequencia[2] = 1;

    $i = 1;
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['fibonacci'])) {

                $numero = $_POST['numero'];

                echo "<h1>A sequência de Fibonacci até o número $numero é:</h1>";

                echo "<h2>0</h2>";

                echo "<h2>1</h2>";

                do {

                    $i = $i + 1;

                    $sequencia[$i] = $sequencia[$i-1] + $sequencia[$i-2];

                    $resultado = $sequencia[$i];

                    if($resultado < $numero) {

                        echo "<h2>$resultado</h2>";

                    }

                } while ($sequencia[$i] < $numero);

            };
        
        };

    ?>

</body>
</html>