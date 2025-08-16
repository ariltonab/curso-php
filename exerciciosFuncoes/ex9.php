<?php

function converterRealParaDolar($valorEmReal, $cotacaoDolar){
    $resultado = $valorEmReal / $cotacaoDolar;
    echo "R$$valorEmReal equivalem a $resultado dólares.";
}

$valorEmReall = readline("Informe o valor em real: ");
$cotacaoDolarr = readline("Informe o valor da cotação do Dólar atual: ");

converterRealParaDolar($valorEmReall, $cotacaoDolarr);

?>