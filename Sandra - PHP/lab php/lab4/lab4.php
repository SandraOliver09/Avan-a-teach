<?php
// loop externo: pecorrer os numeros da taboada(2-9)

for($taboada =2;$taboada<=9;$taboada++){

    // Exibe o numero de taboada seguindo de traço 
    echo $taboada."-";
    // loop interno: calcular e exibir os resultados (1-10)

    for($multiplicador =1;$multiplicador<=10;$multiplicador++){

        $resultado = $taboada * $multiplicador;

        echo $resultado."";
    }
    echo "<br>";

}

?>