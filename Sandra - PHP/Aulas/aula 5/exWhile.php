
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DocExemplo while</title>
</head>
<body>
    <h1> while 01 </h1>

    <h2> contagem regressiva </h2>
    <form method="post">

    <label> digite um numero para contagem regressiva: </label>
    <br><br>

    <input type="number" name="numero">
    <button type= "submit">"iniciar</button>
    </form>
    <!-- Iniciandoo PHP| ctrl + ; | -->
     <?php
     if(isset( $_POST["numero"]));
     {
        $numero = $_POST["numero"];
        while( $numero >= 0)
            {
            echo $numero . "<br>";
            // Diminuindo o valor da variavel $numero
            $numero++;

            }
     }
     ?>
</body>
</html>