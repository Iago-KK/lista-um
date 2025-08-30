<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior Número Entre 3</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numeroUm">Digite o primeiro número</label>
        <input type="number" id="numeroUm" name="numeroUm" required>

        <br>

        <label for="numeroDois">Digite o segundo número</label>
        <input type="number" id="numeroDois" name="numeroDois" required>

        <br>

        <label for="numeroTres">Digite o terceiro número</label>
        <input type="number" id="numeroTres" name="numeroTres" required>

        <br>

        <button type="submit" name="verificar_par_impar">Enviar</button>

    </form>

    <?php
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['verificar_par_impar'])) {

                $numeroUm = $_POST['numeroUm'];

                $numeroDois = $_POST['numeroDois'];

                $numeroTres = $_POST['numeroTres'];

                if(($numeroUm > $numeroDois) && ($numeroUm > $numeroTres)) {

                    echo "O número $numeroUm é o maior número";

                }

                if(($numeroDois > $numeroUm) && ($numeroDois > $numeroTres)) {

                    echo "O número $numeroDois é o maior número";

                }

                if(($numeroTres > $numeroDois) && ($numeroTres > $numeroUm)) {

                    echo "O número $numeroTres é o maior número";

                }

                if(($numeroUm == $numeroDois) && ($numeroUm == $numeroTres)) {

                    echo "Os três número são iguais"; 

                }

            };
        
        };

    ?>

</body>
</html>