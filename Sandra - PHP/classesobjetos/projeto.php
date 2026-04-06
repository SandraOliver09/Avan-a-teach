<?php

class IMC{
    public $nome;
    public $altura;
    public $peso;

    //Calculando o IMC
    public function calcularIMC(){
        return $this->peso / ( $this->altura * $this->altura );
    }

    public function classificacaoIMC(){

        $imc = $this->calcularIMC();

        if( $imc <= 18.5){
            return "Muito MAGRA";
        } else if ( $imc <= 25 ){
            return "NORMALZÃO";
        } else if( $imc <= 30){
            return "Pré Obesidade";
        } else if ( $imc <= 40) {
            return "Obesa";
        } else {
            return "Obesidade Extrema";
        }
    }

}


?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> Calculadora IMC </title>
</head>
<body>
    <h1> Calcular IMC </h1>
    <!-- Criando um Formulario -->
     <form method="post">
        <label> Nome: </label>
        <input type="text" name="nome"><br><br>

        <label> Peso ( kg ) </label>
        <input type="number"  name="peso"><br><br>

        <label> Altura ( m ) </label>
        <input type="number"  name="altura"><br><br>

        <button type="submit"> Calcular </button>

     </form>
    <?php
        if( isset($_POST["nome"]) ){
            $pessoa = new IMC();

            $pessoa->nome = $_POST["nome"];
            $pessoa->peso = $_POST["peso"];
            $pessoa->altura = $_POST["altura"];

            $resultadoIMC = $pessoa->calcularIMC();

            echo "<h2> Resultado </h2> <br>";
            echo "Nome: " . $pessoa->nome . "<br>";
            echo "IMC: " . $resultadoIMC  . "<br>";
            echo "Classificação: " . $pessoa->classificacaoIMC();
        }

    ?>
    
</body>
</html>
