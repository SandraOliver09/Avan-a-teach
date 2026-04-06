<?php
//1 - ) Crie um programa em PHP que use um for para mostrar os números de 1 A 10 . 
 for ($i= 1; $i<= 10; $i++){

    echo "$i<br>";
 }
    echo "<br><br>";
    
    //2 - ) Crie um programa que mostre os números de 10 ATÉ 1 , usando WHILE.  
    $num=10;

    while($num>=1){

    echo "$num<br>";
    $num--;

    }
    echo "<br><br>";

    // 3 - ) Use um for para mostrar apenas os NUMEROS PARES DE 0 A 20 .

    for($i=0;$i<=20;$i++){
      if($i%2==0){
         echo "$i <br>";
      }
    }
    echo "<br><br>";
    //4 - ) Use um WHILE para mostrar apenas os NUMEROS IMPARES DE 10 A 100. 

    $valor =10;
    while($valor<=100){
      if($valor % 2 == 0){
         echo "$valor<br>";
         
      }
      $valor++;

    }
    echo"<br> <br>";

    //5 - ) Crie uma variável $numero e mostre a tabuada dela de 0 A 10 UTILIZANDO FOR.

    $numero = 5;

    for($i=0;$i<=10;$i++){
      $resultado = $numero*$i;
      echo"$numero x $i =$resultado<br>";
    }

      //  6 - ) Crie um programa que calcule a SOMA DE TODOS OS NUMEROS DE 1 ATÉ 100  usando for.

      $soma = 0;
      for($i=0;$i<=100;$i++){
         $soma+=$i;
         echo" A soma dos dois numeros de 1 - 100 é: $soma <br>";
         


      }
    
?>
