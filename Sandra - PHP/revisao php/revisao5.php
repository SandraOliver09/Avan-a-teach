<?php

//1 - ) Crie um programa em PHP que receba um número de e mostre o dia correspondente.

$dias =  1;

switch($dias){
    case 1:
    echo" domingo";
    break;
    case 2:
        echo" segunda";
     break;

    case 3:
        echo "terça";
    break;

    case 4:
        echo"quarta";
    break;

    case 5:
       echo"quinta";
    break;

    case 6:
        echo"sexta";
     break;

    case 7;
        
    echo"sábado";
    break;

    default:
    echo" Invalida";
    }


    echo "<br> <br>";

 // 2 - ) Crie um sistema onde:
  $lista_usuario = 1;

  switch ($lista_usuario){
    case 1:
     echo"Cadastrar usuário";
    break;

    case 2:
     echo" Editar usuário";
    break;

    case 3:
     echo"Excluir usuário";
    break;

    case 4:
     echo"Listar usuários";
     break;

     default:
     echo"Invalido";
    }

  echo "<br> <br>";

     // 3 - ) Crie um programa que receba uma : A - F

     $notas = "B";
    
switch ($notas){

    case "A":
          echo" Excelente";
     break;

    case "B":
            echo"Bom";
     break;

    case "C":
          echo" Regular";
    break;

    case "D":
          echo" Ruim";
    break;

    case "F":
          echo" Reprovado";
   break;
   
     }

echo "<br> <br>";

 // 4 - ) Crie um programa que receba:

 $turno = "M";

 switch ($turno){

    case "M":
        echo" manha";
    break;

    case "T":
            echo"tarde";
    break;

    case "N":
       echo" Noite";
    break;
 }

echo "<br> <br>";
?>
