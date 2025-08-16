<?php

$valorInput = readline('Informe um valor: ');
$campoNull = "";

if($valorInput === $campoNull){ //PODERIA PARA VALIDAR SE É "NÃO IDÊNTICO" COLOCAR '!=='. NESSE CASO QUE EU FIZ, FIZ COMO VALIDANDO SE "É IDÊNTICO".
    echo "O campo não foi preenchido... Informe um valor!";
}
?>