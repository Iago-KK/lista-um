<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poder de voto</title>
</head>
<body>

    <form method="POST" action="">

        <label for="idade">Digite a sua idade</label>
        <input type="number" id="idade" name="idade" required>

        <label for="nome">Digite o seu nome</label>
        <input type="string" id="nome" name="nome" required>

        <button type="submit" name="voto">Enviar</button>

    </form>

    <?php
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['voto'])) {

                $idade = $_POST['idade'];

                $nome = $_POST['nome'];

                if((($idade >= 16) && ($idade < 18)) || ($idade >= 70)) {

                    echo "<p>A pessoa $nome pode votar, mas não é obrigatório</p>";

                } else if($idade < 16) {

                    echo "<p>A pessoa $nome não pode votar ainda</p>";

                } else {

                    echo "<p>A pessoa $nome pode votar, e é obrigatório</p>";

                }

            };
        
        };

    ?>

</body>
</html>