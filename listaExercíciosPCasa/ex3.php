<?php
$nivel = readline("Informe o seu nível no jogo: ");
$temItem = readline("Você tem a 'Chave de Pedra'? ");

if($nivel >= 30 && $temItem == 'sim'){
    echo "Entrada permitida";
}else{
    echo "Entrada negada";
}

?>