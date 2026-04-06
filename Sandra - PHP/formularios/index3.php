<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  formulario exercicio 4 </title>
</head>
<body>
    <form  method="POST">
        <label> Digite um Nome: </label>
        <input type="text" name="nome" >
        <button type="submit"> Enviar</button>


    </form>
    <?php
    $lista =["Ana", "Pedro","Maria"];

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];

        echo $nome;

        if(in_array($nome,$lista)){
            echo "Nome encontrado";

        }else{
            echo "Nome não Econtrado";
        }
    }
    ?>
    
</body>
</html>