<?php

// explicando os coockies
setcookie("usuario", "Sandra",time () + 3600);
setcookie("senha", "batata123",time() + 3600);

// Lendo os dados do coockie
echo $_COOCKIE ["usuario"];
echo "<br>";
echo $_COOCKIE["senha"];

//excluido os cookies 
setcookie("usuario","",time() -3600);
setcookie("senha","",time() -3600);

?>
