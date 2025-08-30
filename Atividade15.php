<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>

    <form method="POST" action="">

        <label for="altura">Digite a altura (em metros)</label>
        <input type="float" id="altura" name="altura" required>

        <label for="peso">Digite o peso (em kilogramas)</label>
        <input type="float" id="peso" name="peso" required>

        <button type="submit" name="imc">Enviar</button>

    </form>

    <?php
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['imc'])) {

                $altura = $_POST['altura'];

                $peso = $_POST['peso'];

                $IMC = $peso / ($altura * $altura);

                echo "<p>IMC = $IMC</p>";

                if($IMC < 18.5) {

                    echo "<p>Classificação: magreza</p>";

                } else if(($IMC >= 18.5) && ($IMC < 25)) {

                    echo "<p>Classificação: normal</p>";

                } else if(($IMC >= 25) && ($IMC < 30)) {

                    echo "<p>Classificação: sobrepeso</p>";

                } else if(($IMC >= 30) && ($IMC < 40)) {

                    echo "<p>Classificação: obesidade</p>";

                } else if($IMC >= 40) {

                    echo "<p>Classificação: obesidade grave</p>";

                };

            };
        
        };

    ?>

</body>
</html>