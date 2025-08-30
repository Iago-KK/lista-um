<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numero">Digite um número</label>
        <input type="number" id="numero" name="numero" required>

        <br>

        <button type="submit" name="verificar_par_impar">Verificar</button>

    </form>

    <?php
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['verificar_par_impar'])) {

                $numero = $_POST['numero'];

                if ($numero % 2 == 0) {

                    echo "O número $numero é <strong>PAR</strong>.";

                } else {

                    echo "O número $numero é <strong>ÍMPAR</strong>.";

                }

            };

        };

    ?>

</body>
</html>