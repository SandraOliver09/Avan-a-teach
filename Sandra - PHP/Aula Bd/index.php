<?php
$servidor='localhost';
$usuario = "root";
$senha ="";
$banco = "escola";

// conectando ao banco de dados

$conexão = mysqli_connect($servidor,$usuario,$senha,$banco);

if($conexão == false){
    echo "Erro na conexão";

}else{
    echo "conectado com sucesso";
}

?>


<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Aula BD </title>
</head>
<body>
    <h1> Primeiro Banco de Dados </h1>
    <form method="POST">
        <label> nome:</label>
            <input type="text" name="nome">
            <br><br>
            <label> idade:</label>
            <input type="number" name = "idade">
             <br><br>
            <button type = "submit">Enviar </button>
        
    </form>
    <?php
        if(isset($_POST["nome"])){
            $nome =$_POST ["nome"];
            $idade =$_POST["idade"];
            echo" Meu nome é $nome e eu tenho $idade anos";
            $slq="INSERT INTO alunos (nome,idade) VALUES ('$nome', '$idade')";

            mysqli_query($conexão, $slq);
            echo"\n Aluno Cadastro com Sucesso";

        }
        
    ?>

</body>
</html>