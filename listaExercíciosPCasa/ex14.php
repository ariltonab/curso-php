<?php
$cupom = readline("Informe o 1º digito do CEP da sua residência: ");
$pesoTot = rereadline("Informe o seu peso (em Kg): ");

if($cupom == 0 && $pesoTot < 5){
    echo "Cupom de 'Frete grátis' válido";
}

?>