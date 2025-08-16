<?php

$logado = readline("Está logado? ");
$conta = readline("Sua conta está ativa ou suspensa? ");

if($logado == 'sim' && $conta !== 'suspensa'){
    echo "Você pode postar comentários";
}

?>