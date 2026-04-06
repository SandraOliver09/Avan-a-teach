<?php 
    include("conexao.php"); 

    //Criando uma Lista
    $alunos = [];

    //Buscando os Dados do BD (banco de dados)
    $result = mysqli_query($conexao, "Select * FROM alunos");

    while( $linha = mysqli_fetch_assoc($result)) {
        $alunos[] = $linha;
    }

    
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title> Crud Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class=" text-center ">

    <div class="container mt-5">
        <h1 class="mb-5 text-warning"> LISTA DE ALUNOS </h1>
        <a href="criar.php" class="btn btn-outline-warning mb-3"> Novo Aluno </a>
        <table class="table table-bordered table-striped">
            <thead class="table-warning">
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> Email </th>
                    <th> Planos </th>
                    <th> Telefone </th>
                    <th> Unidade </th>
                    <th> Ações </th>
                </tr>
            </thead>

            <tbody> 
                <?php foreach($alunos as $aluno): ?>
                    <tr>
                        <td> <?php echo $aluno['id']; ?> </td>
                        <td> <?php echo $aluno['nome']; ?> </td>
                        <td> <?php echo $aluno['email']; ?> </td>
                        <td> <?php echo $aluno['curso']; ?></td>
                        <td>
                            <a href="excluir.php?id=<?php echo $aluno['id'];?>" class="btn btn-danger btn-sm"> Excluir </a>
                            <a href="editar.php?id=<?php echo $aluno['id'];?>" class="btn btn-success btn-sm"> editar </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>
    








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>