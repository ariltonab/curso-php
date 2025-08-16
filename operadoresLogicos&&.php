<?php

$idade = readline('Informe sua idade');
$habilitacao = readline('Tem habilitção?');

//&&: ambos precisam ser verdadeiras(os)
if($idade >=18 && $habilitacao == 'sim'){
    echo "Pode dirigir";
}else{
    echo "Não pode dirigir";
}





?>