<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Pares Entre</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numero">Digite um número</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="entre">Enviar</button>

    </form>

    <?php

    $soma = 0;
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['entre'])) {

                $numero = $_POST['numero'];

                for ($i = 1; $i <= $numero; $i++) {

                    if(($i % 2) == 0) {

                        $soma = $soma + 1;

                    }

                };

                if($soma != 1) {
                
                echo "<h1>Existem $soma números pares entre 1 e $numero</h1>";

                } else {

                    echo "<h1>Existem $soma números par entre 1 e $numero</h1>";

                };

            };
        
        };

    ?>

</body>
</html>