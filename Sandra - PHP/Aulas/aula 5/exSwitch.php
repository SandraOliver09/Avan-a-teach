<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EXEMPLO SWITCH</title>
</head>
<body>
    <h1> Switch 01 </h1>
    <form method="post">
        <label > Digite um numero de (1 a 3):</label>
        <br><br>

        <input type="text" name="numero">
        <button type="submit">enviar</button>
        <?php
        if (isset( $_POST["numero"]))
        {

            $numero = $_POST["numero"];

            switch( $numero)
            {
                case 1:
                    echo"você digitou o numero 01";
                    break;
                case 2:
                        echo "você digitou o numero 02";
                        break;
                case 3:
                        echo"você digitou o numero 3";
                        break;
                        default:
                        echo"você digitou um numero invalido";



            }

            }
        ?>

    </form>
</body>
</html>