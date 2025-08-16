<?php
$statusConta = readline("Sua conta está ativa ou desativa? ");
$dataUltLog = readline("Há quantos dias você não faz login? ");

if($statusConta == 'desativa' || $dataUltLog > 90){
    echo "Usuário bloqueado";
}

?>