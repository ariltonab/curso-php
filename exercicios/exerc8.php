<?php

$valorImovel = 500000.00;
$valorBasicoDaParcela = ($valorImovel / 100);
echo "Valor da parcela (sem juros): " . $valorBasicoDaParcela.PHP_EOL;
//$juros = 0.05;
$valorJurosParcela = ($valorBasicoDaParcela) * 0.05;
$valorTotalComJuros = $valorBasicoDaParcela + $valorJurosParcela;

echo "Valor da parcela (com juros): " . $valorTotalComJuros;
?>
