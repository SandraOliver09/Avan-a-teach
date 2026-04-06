!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EXEMPLO SWITCH</title>
</head>
<body>
    <!-- NESSE CÓDIGO VOCÊ PRECISA DIGITAR ALGUM NUMERO -->
    <h1> Switch 01 </h1>
    <form method="post">
        <label > Digite um numero de (1 a 7):</label>
        <br><br>

        <input type="text" name="numero">
        <button type="submit">enviar</button>
        <?php
        //comentario em php(caso queira adicionar)
        if (isset( $_POST["numero"]))
        {

            $numero = $_POST["numero"];

            switch( $numero)
            {
                case 1:
                    echo"você digitou o numero 01 domingo";
                    break;
                case 2:
                        echo "você digitou o numero 02 segunda- feira";
                        break;
                case 3:
                        echo"você digitou o numero 03 terça - feira";
                        break;

                case 4:
                        echo "você digitou o numero 04 quarta - feira";
                        break;
                        case 5:
                        echo "você digitou o numero 05 quinta - feira";
                        break;
                        case 6:
                        echo "você digitou o numero 06 sexta -  feira";
                        break;
                        case 7:
                        echo "você digitou o numero 07 sábado";
                        break;
                        default:
                        echo"você digitou um numero invalido";



            }

            }
        ?>

    </form>
</body>
</html>