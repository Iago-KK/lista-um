<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo ou Negativo ou Zero</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numero">Digite um número</label>
        <input type="number" id="numero" name="numero" required>

        <br>

        <button type="submit" name="pos">Enviar</button>

    </form>

    <?php
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['pos'])) {

                $numero = $_POST['numero'];


                if($numero == 0) {

                    echo "O número $numero é, de fato, 0";

                } else {

                    if($numero > 0) {

                        echo "O número $numero é positivo";

                    } else {

                        echo "O número $numero é negativo";

                    }

                }



            };
        
        };

    ?>

</body>
</html>