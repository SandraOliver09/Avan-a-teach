<?php
// --- PROCESSAMENTO APENAS PARA EXIBIÇÃO (SEM BANCO DE DADOS) ---
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capturamos o nome apenas para mostrar no alerta
    $nome = htmlspecialchars($_POST['nome']);
    
    // Simulação de sucesso
    echo "<script>
            alert('Dados de [$nome] enviados com sucesso! (Simulação)');
            window.location.href='index.php';
          </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos - Bootstrap</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body { background-color: #f8f9fa; padding-top: 50px; }
        .form-container { max-width: 600px; margin: auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { color: #438bc5; margin-bottom: 30px; font-weight: 400; text-align: center; }
        .col-form-label { font-weight: bold; font-size: 1.1rem; }
        .btn-inserir { background-color: #438bc5; border: none; padding: 10px 30px; }
        .btn-fechar { background-color: #d9534f; border: none; padding: 10px 30px; }
        .w-md { max-width: 250px; }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2>Cadastro de Alunos em PHP</h2>
        
        <form action="" method="POST">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nome:</label>
                <div class="col-sm-9">
                    <input type="text" name="nome" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Municipio:</label>
                <div class="col-sm-9">
                    <select name="municipio" class="form-select w-md">
                        <option value=""></option>
                        <option value="Sao Paulo">São Paulo</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Contato:</label>
                <div class="col-sm-9">
                    <input type="text" id="contato" name="contato" class="form-control w-md" placeholder="(00) 00000-0000">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">CPF:</label>
                <div class="col-sm-9">
                    <input type="text" id="cpf" name="cpf" class="form-control w-md" placeholder="000.000.000-00">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">RG:</label>
                <div class="col-sm-9">
                    <input type="text" name="rg" class="form-control w-md">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email:</label>
                <div class="col-sm-9">
                    <input type="email" name="email" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">DtNascimento:</label>
                <div class="col-sm-9">
                    <input type="date" name="data_nascimento" class="form-control w-md">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-primary btn-inserir">Inserir</button>
                    <button type="reset" class="btn btn-danger btn-fechar">Fechar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function(){
        $('#contato').mask('(11) 99252-8646');
        $('#cpf').mask('012.035.112-00');
    });
</script>

</body>
</html>