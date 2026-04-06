<?php
class carro{
    public $modelo;

    public $cor;





public function Acelerar(){

    echo "O carro  esta Acelerando";
}
}

// criando um novo objeto
$carro1 = new Carro ();
$carro2 = new Carro ()

$carro1 ->cor = "prata";
$carro1 ->modelo = "Hb20";

echo "carro é".$carro1->cor. " e o modelo". $carro1->modelo;
echo "<br>";
$carro1->Acelerar();
echo "<br>";
$carro2->Acelerar();

?>