<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numero">Digite um número</label>
        <input type="number" id="numero" name="numero" required>

        <br>

        <button type="submit" name="divisor">Enviar</button>

    </form>

    <?php

    $ajudanteDivisores = [];
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['divisor'])) {

                

                $numero = $_POST['numero'];

                echo "<h1>Os divisores de $numero são:</h1>";

                for ($i = 1; $i <= $numero; $i++) {

                    $ajudanteDivisores[$i] = $numero / $i;

                    if ( is_int($ajudanteDivisores[$i]) == true) {

                        echo "<h2>$i</h2>";

                    };

                };

            };
        
        };

    ?>

</body>
</html>