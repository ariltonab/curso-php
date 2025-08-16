<?php

$valrCompra = readline("Informe o valor da compra: ");
$cliente = readline("Você é membro premium? "); //não é a melhor pergunta mas serve 
//para esse exercício.

if($valrCompra > 250.00 && $cliente === 'membro premium'){
    echo "Você recebeu um desconto especial por cumprir com os requsiitos.";
}
  
?>