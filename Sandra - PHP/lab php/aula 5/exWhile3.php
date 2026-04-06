<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exemplo 3</title>
</head>
<body>
     <h1> digite o valor para saber a tabuada </h1>
     <!--criando formulario -->
    
    <form method="post">

    <input type="number" name="numero">
    <br><br>
    <button type= "submit">Gerar tabuada</button>
    </form>

    <!--  PHP -->
     <?php
     if(isset( $_POST["numero"]));
     {
        $numero_digitado= $_POST["numero"];
        $contador = 0;


// criar uma tabuada -
        while( $contador <= 10)
            {
            echo "$numero_digitado x $contador = "  . ($numero_digitado * $contador) . "<br>";
            $contador++;
            //

            }
     }
     ?>
</body>
</html>
    
</body>
</html>