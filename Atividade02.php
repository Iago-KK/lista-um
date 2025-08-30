<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>

    <form method="POST" action="">

        <label for="numero">Digite um número</label>
        <input type="number" id="numero" name="numero" required>

        <br>

        <button type="submit" name="tabuada">Enviar</button>

    </form>

    <?php
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['tabuada'])) {

                $numero = $_POST['numero'];



                $Um = $numero;
                $Dois = $numero * 2;
                $Tres = $numero * 3;
                $Quatro = $numero * 4;
                $Cinco = $numero * 5;
                $Seis = $numero * 6;
                $Sete = $numero * 7;
                $Oito = $numero * 8;
                $Nove = $numero * 9;
                $Dez = $numero * 10;



                echo "
        
                <h1>Tabuada de $numero:</h1>
                <h2>01: $Um</h2>
                <h2>02: $Dois</h2>
                <h2>03: $Tres</h2>
                <h2>04: $Quatro</h2>
                <h2>05: $Cinco</h2>
                <h2>06: $Seis</h2>
                <h2>07: $Sete</h2>
                <h2>08: $Oito</h2>
                <h2>09: $Nove</h2>
                <h2>10: $Dez</h2>
        
                ";




            };
        
        };

        

    ?>

</body>
</html>