<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numero">Digite um número</label>
        <input type="number" id="numero" name="numero" required>

        <br>

        <button type="submit" name="fatorial">Enviar</button>

    </form>

    <?php

    $valor = 1;
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['fatorial'])) {

                $numero = $_POST['numero'];

                echo "<h1>$numero! é:</h1>";

                for ($i = 1; $i <= $numero; $i++) {

                    $valor = $valor * $i;

                };

                echo "<h2>$valor</h2> <br>";

            };
        
        };

    ?>

</body>
</html>