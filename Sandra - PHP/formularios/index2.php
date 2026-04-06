<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  
    <title>  Verifica a idade exercicio 3</title>
</head>
<body>
    <h2> Verificacao de Idade </h2>
    <form method ="POST" action="">
        <label>Digite sua idade:</label><br>
        <input type="number" name="idade">
        <button type="submit"> Enviar</button>

    </form>
    <?php
    if(isset($_POST["idade"])){
        $idade = $_POST["idade"];
        echo "Sua idade é $idade";
        if ($idade <= 18){
            echo "é maior de idade";

        }else{
            echo "é menor de idade";
        }
    }
    ?>
   
    
</body>
</html>