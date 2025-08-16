<?php
echo "SISTEMA DE APROVAÇÃO DE CRÉDITO";
$scoreCred = readline("Informe o seu score: ");
$rendaMes = readline("Informe a sua renda mensal: ");

IF($scoreCred > 600 || $rendaMes > 4000){
    echo "Você cumpriu com os primeiros requisitos.";
}

?>
