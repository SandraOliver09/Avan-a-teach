<?php
echo "<br> <br>";
// Crie duas variáveis e mostre: EXERCICIO 1
$num1 = 20;
$num2 = 8;

echo" A soma é:" . $num1 + $num2."<br>";
echo" A subtracao é:" . $num1 - $num2."<br>";
echo" A multiplicacao é:" . $num1 * $num2 ."<br>";
echo" A divisao é:" . $num1 / $num2."<br>";
echo" A modulo é:" . $num1 % $num2."<br>";

echo "<br> <br>";
//----EXERCICIO 2-  Crie uma Constante com o ANO_NASCIMENTO, uma variavel com o ano_atual e uma variavel com a sua idade.   ---

const ANO_NASCIMENTO = 1990;
$ano_atual= 2026;
$idade= $ano_atual -ANO_NASCIMENTO;

//mostrar na tela

echo" Eu nasci no ano". ANO_NASCIMENTO. " e estamos no ". $ano_atual . "portanto tenho ".$idade. "anos"."<br>";

echo "<br> <br>";

// EXERC 3  Crie uma variável $contador com valor inicia de 0

$contador= 0;
echo" valor inicialdo contador é :" .$contador."<br>";

$contador++;
$contador++;
$contador++;

echo"valor final do contador:" .$contador."<br><br>";

// EXERC 4 Exercício 2 – Decrementando Crie uma variável $vidas com valor .

$vida= 5;

echo" valor da vida inicail é:" . $vida."<br>";
$vida--;
$vida--;

echo" valor da vida final é:" . $vida . "<br>";

?>