<?php

include("conexao.php");

$id = $_GET["id"];

$resultado = mysqli_query( $conexao, "SELECT * FROM alunos WHERE id=$id ");

$aluno = mysqli_fetch_assoc( $resultado );

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="container mt-5">
    <h1 class=" text-primary mb-5"> Editar Aluno </h1>

    <form action="atualizar.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">

        <label> Digite o seu Nome: </label>
        <input type="text" name="nome" class="form-control" value="<?php echo $aluno['nome']; ?>">
        <br><br>

        <label> Digite o seu Email: </label>
        <input type="text" name="email" class="form-control" value="<?php echo $aluno['email']; ?>">
        <br><br>

        <label> Digite o seu Curso: </label>
        <input type="text" name="curso" class="form-control" value="<?php echo $aluno['curso']; ?>">
        <br><br>

        <button class="btn btn-primary"> Atualizar </button>
        <a href="index.php" class="btn btn-secondary"> Voltar </a>

    </form>
    
</body>
</html>