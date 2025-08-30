<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Amigo</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numeroUm">Digite o número 1</label>
        <input type="number" id="numeroUm" name="numeroUm" required>

        <br>

        <label for="numeroDois">Digite o número 2</label>
        <input type="number" id="numeroDois" name="numeroDois" required>

        <br>

        <button type="submit" name="amigo">Enviar</button>

    </form>

    <?php
    
        $ajudanteDivisoresUm = [];
        $ajudanteDivisoresDois = [];

        $ajudanteComparaUm = [];
        $ajudanteComparaDois = [];
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['amigo'])) {

                $numeroUm = $_POST['numeroUm'];

                for ($i = 1; $i <= $numeroUm; $i++) {

                    $ajudanteDivisoresUm[$i] = $numeroUm / $i;

                    if (is_int($ajudanteDivisoresUm[$i]) == true) {

                        $ajudanteComparaUm[$i] = $ajudanteDivisoresUm[$i];

                    };

                };

                $numeroDois = $_POST['numeroDois'];

                for ($ii = 1; $ii <= $numeroDois; $ii++) {

                    $ajudanteDivisoresDois[$ii] = $numeroDois / $ii;

                    if (is_int($ajudanteDivisoresDois[$ii]) == true) {

                        $ajudanteComparaDois[$ii] = $ajudanteDivisoresDois[$ii];

                    };

                };

                $umCompara = (array_sum($ajudanteComparaUm)) - $numeroUm;

                $doisCompara = (array_sum($ajudanteComparaDois)) - $numeroDois;

                if (($umCompara == $numeroDois) && ($doisCompara == $numeroUm)) {

                    echo "<h1>Os números $numeroUm e $numeroDois são amigos</h1>";

                } else {

                    echo "<h1>Os números $numeroUm e $numeroDois não são amigos</h1>";

                };

            };

        
        };

    ?>

</body>
</html>