<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos números entre</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numeroUm">Digite o primeiro número</label>
        <input type="number" id="numeroUm" name="numeroUm" required>

        <br>

        <label for="numeroDois">Digite o segundo número</label>
        <input type="number" id="numeroDois" name="numeroDois" required>

        <br>

        <button type="submit" name="entre">Enviar</button>

    </form>

    <?php

    $soma = 0;

    $somaEntre = 0;
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['entre'])) {

                $numeroUm = $_POST['numeroUm'];

                $numeroDois = $_POST['numeroDois'];

                if($numeroUm > $numeroDois) {

                    for ($i = $numeroDois; $i <= $numeroUm; $i++) {

                        $soma = $soma + 1;

                        $somaEntre = $somaEntre + $i;

                    };

                } else {

                    for ($i = $numeroUm; $i <= $numeroDois; $i++) {

                        $soma = $soma + 1;

                        $somaEntre = $somaEntre + $i;

                    };

                };

                $soma = $soma - 2;

                if($soma != 1){

                    echo "<p>Existem $soma números entre $numeroUm e $numeroDois</p>";

                    } else {

                        echo "<p>Existem $soma número entre $numeroUm e $numeroDois</p>";

                    }

                $somaFinal = $somaEntre - ($numeroDois + $numeroUm);

                echo "<p>A soma desses números é: $somaFinal</p>";
                
            };
        
        };

    ?>

</body>
</html>