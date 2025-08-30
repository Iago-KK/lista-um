<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano Bissexto</title>
</head>
<body>

    <form method="POST" action="">

        <label for="ano">Digite um ano</label>
        <input type="number" id="ano" name="ano" required>

        <button type="submit" name="bissexto">Enviar</button>

    </form>

    <?php
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['bissexto'])) {

                $ano = $_POST['ano'];

                if(($ano % 4) == 0){

                    echo "O ano $ano é bissexto.";

                } else {

                    echo "O ano $ano não é bissexto.";

                }

            };
        
        };

    ?>

</body>
</html>