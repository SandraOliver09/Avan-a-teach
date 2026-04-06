<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar Números - exercicio 2 </title>
</head>
<body>
     <h2>Calculadora Simples</h2>
    
    <!-- Formulário que envia os dados para a mesma página -->
    <form method="POST" action="">
        <label>Número 1:</label><br>
        <input type="number" name="num1" required><br><br>
        
        <label>Número 2:</label><br>
        <input type="number" name="num2" required><br><br>
        
        <input type="submit" name="somar" value="Somar">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if (isset($_POST['somar'])) {
        // Recebe os valores do formulário e converte para número
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        
        // Realiza a soma
        $resultado = $n1 + $n2;
        
        // Mostra o resultado
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
    
</body>
</html>

