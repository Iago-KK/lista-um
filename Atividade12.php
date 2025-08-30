<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantidade de vogais</title>
</head>

<body>

    <form method="POST" action="">

        <label for="palavra">Digite uma palavra</label>
        <input type="string" id="palavra" name="palavra" required>

        <button type="submit" name="vogais">Enviar</button>

    </form>

    <?php

    $vogais = 0;

    $checarVogal = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['vogais'])) {

            $palavra = strtolower(trim($_POST['palavra']));

            $quantidadeLetras = strlen($palavra);

            $letras = str_split($palavra);
            $vetor = ['a', 'e', 'i', 'o', 'u'];

            for ($i = 0; $i <= ($quantidadeLetras - 1); $i++) {

                for ($j = 0; $j <= (count($vetor) - 1); $j++) {

                    if ($letras[$i] === $vetor[$j]) {

                        $vogais = $vogais + 1;

                    };

                };

            };

            if ($vogais == 0) {

                echo "A palavra ''$palavra'' não possui vogais";
            } else {

                if($vogais != 1) {

                    echo "A palavra ''$palavra'' possui $vogais vogais";

                } else {

                    echo "A palavra ''$palavra'' possui $vogais vogal";

                };

            };
        };
    };

    ?>

</body>

</html>