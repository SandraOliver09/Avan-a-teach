<?php
//-------------------------- EX 1 ---------------
$nota =10;
$frequencia =25;

if ( $nota >= 7 && $frequencia >= 3){

    echo "Aluno aprovado";

}else{
    echo "Aluno reprovado";
  
}
 echo "<br> <br>";

//-------exer2----


$tem_ingresso = true;
$esta_lista_vip = false;


if($tem_ingresso == true || $esta_lista_vip == true){

    echo "Entrada Permitida";

}else{
    echo" Entrada negada";

}
 echo "<br> <br>";

// ---------------------- EX 3 -------------
$login = "adm";
$senha = "1234";

if($login == "adm" && $senha == "1234"){
    echo" O login é igual adm permite acesso";
    
}else{
    echo" Senha incorreta";
}
echo "<br> <br>";
    //------------- EX 4 -----------------

    $Estudante = true;
    $idade= 60; // ou valor diferente

    if($Estudante || $idade >= 60){
        echo "Tem desconto";

    }else{
        echo" Não tem desconto";

    }
    echo "<br> <br>";

?>