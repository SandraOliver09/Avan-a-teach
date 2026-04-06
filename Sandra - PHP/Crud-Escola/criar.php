<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Cadastrar Aluno </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class=" container mt-5 ">
    <h2 class="text-primary mb-5"> Cadastrar Alunos </h2>
    <form action="salvar.php" method="post">
        <label> Digite o seu nome: </label>
        <input type="text" name="nome" class="form-control" >
        <br><br>

        <label> Digite o seu Email: </label>
        <input type="text" name="email" class="form-control">
        <br><br>

        <label> Digite o seu Telefone: </label>
        <input type="text" number="Telefone" class="form-control">
        <br><br>

        <button class=" btn  btn-primary"> Salvar </button>
        <a href="index.php" class="btn btn-danger"> Voltar </a>

    </form>
    
</body>
</html>