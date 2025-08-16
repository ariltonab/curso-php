<?php

function AnoNascimento($idade, $anoAtual){

    $resultado = $anoAtual - $idade;
    echo "Você nasceu no ano de $resultado".PHP_EOL;
}

$idd = readline("Informe a sua idade: ");
$aAt = readline("Informe o ano atual: ");

AnoNascimento($idd, $aAt);

?>