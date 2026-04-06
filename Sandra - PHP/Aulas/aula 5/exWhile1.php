<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <h1> exercicio while 02 </h1>
    <h1> while 02 </h1>

    <form method="post">

    <label> digite um numero para contagem crescente: </label>
    <br><br>

    <input type="number" name="numero">
    <button type= "submit">contar</button>
    </form>
    <!-- Criando o codigo  PHP -->
     <?php
     if(isset( $_POST["numero"]));
     {
        $numero_digitado= $_POST["numero"];
        $contador = 0;

        while( $contador <= $numero_digitado)
            {
            echo $contador . "<br>";
            $contador++;

            }
     }
     ?>
</body>
</html>