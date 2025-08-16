<?php
$qtdEstoque = readline("Informe a quantidade de estoque: ");
$status = readline("Informe o status desse produto: ");

if($qtdEstoque < 10 && $status !== 'descontinuado' ){
    echo "Notificação enviada";
}

?>