<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius para Fahrenheit</title>
</head>
<body>

    <form method="POST" action="">

        <label for="celsius">Digite uma temperatura em Celsius</label>
        <input type="float" id="celsius" name="celsius" required>

        <button type="submit" name="cel_fah">Enviar</button>

    </form>

    <?php
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['cel_fah'])) {

                $celsius = $_POST['celsius'];

                $fahrenheit = ($celsius * 1.8) + 32;

                echo "$celsius C° é igual a $fahrenheit F°";

            };
        
        };

    ?>

</body>
</html>