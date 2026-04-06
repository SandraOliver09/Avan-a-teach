<php
$estadocivil = array(
'Solteiro',
'Namorando',
'Noivo',
'Casado',
'Separado',
'Divorciado',
'Viúvo'

);

?>
<select name="estadocivil">
    <option value='solteiro'>Solteiro</option>

</select>
<?php
// criaçao de produto array

$produto = array(
    'tenis' => 525.00,
    'oculos' => 410.50,
    'camiseta polo' => 135.30,
    'calça jeans' => 120.50,
    'blusa veans' => 100

);

echo "<h3> array original:</h3>";
echo "<pre>";
    print_r($produto);

    foreach($produto as $nome => & $preco){
        $preco = $preco*1.10;
    }
    unset ($preco);

    echo "<h3> array com preco alterado 10% </h3>";
    echo "<pre>";
        print_r($produto);
        echo "<pre>";


echo "</pre>";
?>