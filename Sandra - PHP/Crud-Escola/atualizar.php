<?php
include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$curso = $_POST['curso'];

echo $id;
echo $nome;
echo $email;
echo $curso;

$sql = "UPDATE alunos 
        SET nome='$nome', email='$email', curso='$curso' 
        WHERE id =$id";

mysqli_query($conexao, $sql);

echo "teste";
header("Location: index.php ");





?>