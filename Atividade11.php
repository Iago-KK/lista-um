<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>
<body>

    <form method="POST" action="">

        <label for="palavra">Digite uma palavra</label>
        <input type="string" id="palavra" name="palavra" required>

        <button type="submit" name="palindromo">Enviar</button>

    </form>

    <?php
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['palindromo'])) {

                $palavra = $_POST['palavra'];

                $arvalap = strrev($palavra);

                if($arvalap === $palavra) {

                    echo "A palavra $palavra é um palíndromo";

                } else {

                    echo "A palavra $palavra não é um palíndromo";

                }

            };
        
        };

    ?>

</body>
</html>