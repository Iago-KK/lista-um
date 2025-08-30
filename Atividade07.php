<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Perfeito</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numero">Digite um número</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="perfeito">Enviar</button>

    </form>

    <?php

    $ajudanteDivisores = [];

    $ajudanteCompara = [];
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['perfeito'])) {

                $numero = $_POST['numero'];

                for ($i = 1; $i <= $numero; $i++) {

                    $ajudanteDivisores[$i] = $numero / $i;

                    if (is_int($ajudanteDivisores[$i]) == true) {

                        $ajudanteCompara[$i] = $ajudanteDivisores[$i];

                    };

                };

            };

            $soma = (array_sum($ajudanteCompara)) - $numero;

            if($soma == $numero) {

                echo "<h1>O número $numero é perfeito</1>";

            } else {

                echo "<h1>O número $numero não é perfeito</1>";

            };
        
        };

    ?>

</body>
</html>