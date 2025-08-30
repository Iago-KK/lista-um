<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia válido</title>
</head>
<body>

    <form method="POST" action="">

        <label for="dia">Digite um dia</label>
        <input type="number" id="dia" name="dia" required>

        <br>

        <label for="mes">Digite um mês</label>
        <input type="number" id="mes" name="mes" required>

        <br>

        <label for="ano">Digite um ano</label>
        <input type="number" id="ano" name="ano" required>

        <br>

        <button type="submit" name="dataValida">Enviar</button>

    </form>

    <?php

    //Eu não sabia sobre a existência da função "checkdate" :(
    
                function TrintaEUM($dia) {

                    echo "Data Válida";

                };

                function Trinta($dia) {

                    if($dia < 31) {

                        echo "Data Válida";

                    } else {

                        echo "Data Inválida";

                    };

                };

                function Fevereiro($dia, $bissexto) {

                    if($dia < 30) {

                        if($bissexto === true) {

                            if($dia < 30) {

                                echo "Data Válida";

                            } else {

                                echo "Data Inválida";

                            };

                        } else if($dia < 29) {

                            echo "Data Válida";

                        } else {

                            echo "Data Inválida";

                        };

                    } else {

                        echo "Data Inválida";

                    };

                };


    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['dataValida'])) {

                $dia = $_POST['dia'];
                $mes = $_POST['mes'];
                $ano = $_POST['ano'];
                
                if(($ano % 4) == 0){

                    $bissexto = true;

                } else {

                    $bissexto = false;

                }



                if(($dia >= 1) && ($dia <= 31)) {

                    

                    if(($mes >= 1) && ($mes <= 12)) {



                        switch($mes) {

                            case 1:

                                TrintaEUm($dia);

                                break;

                            case 3:

                                TrintaEUm($dia);

                                break;

                            case 5:

                                TrintaEUm($dia);

                                break;

                            case 7:

                                TrintaEUm($dia);

                                break;

                            case 8:

                                TrintaEUm($dia);

                                break;

                            case 10:

                                TrintaEUm($dia);

                                break;

                            case 12:

                                TrintaEUm($dia);

                                break;
                            


                            case 4:

                                Trinta($dia);

                                break;

                            case 6:

                                Trinta($dia);

                                break;

                            case 9:

                                Trinta($dia);

                                break;

                            case 11:

                                Trinta($dia);

                                break;



                            case 2:

                                Fevereiro($dia, $bissexto);

                                break;

                        };
                        



                    } else {

                        echo "Data Inválida";

                    };

                } else {

                    echo "Data Inválida";

                }

            };
        
        };


    

    ?>

</body>
</html>