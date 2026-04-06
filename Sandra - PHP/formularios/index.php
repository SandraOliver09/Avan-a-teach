<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Formulario - exercicio 01 </title>
</head>
<body>

    <form method="POST">
        <label> Digite seu nome </label>
             <input type="text" name="nome">
             <button type="submit"> Enviar </button>
    
    </form>
    <?php
    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        echo "Meu nome é:" .$nome;

    }

    ?>

</body>
</html>

