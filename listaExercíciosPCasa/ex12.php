<?php
$tipoUser = readline("Você é professor? ");
$permissaoEspecial = true;

if($tipoUser == 'professor' || $permissaoEspecial == true){
    echo "Você pode pegar emprestado um livro raro";
}

?>