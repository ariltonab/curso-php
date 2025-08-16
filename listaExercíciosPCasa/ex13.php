<?php
$descAplicado = readline("Informe o dedesconto aplicado (em %): ");
$qtdEstoque = readline("Informe a quantidade em estoque desse produto: ");

if($descAplicado >= 40 || $qtdEstoque < 5){
    echo "O produto deverá ser exibido na seção 'Ofertas Relâmpago";
}

?>