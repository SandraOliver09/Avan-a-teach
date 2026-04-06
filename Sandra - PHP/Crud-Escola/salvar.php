<?php

include("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$curso = $_POST["curso"];

echo $nome;
echo $email;
echo $curso;

$sql = "INSERT INTO alunos (nome, email, curso) VALUES ('$nome', '$email', '$curso')";

mysqli_query($conexao, $sql);

header("Location: index.php");

?>