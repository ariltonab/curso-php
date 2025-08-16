<?php
$senhaCerta = 12345;
$senhaInformada;

do{
    $senhaInformada = readline("Informe a senha: ");
}while($senhaCerta != $senhaInformada);

?>