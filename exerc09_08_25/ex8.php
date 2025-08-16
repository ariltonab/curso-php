<?php

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", 
    "Junho", "Julho", "Agosto","Setembro", "Outubro", 
    "Novembro", "Dezembro"
];

for ($i = 0; $i < 12; $i++) {
    echo $meses[$i] . PHP_EOL; //o loop vai do 0 até o 11 
    //(12 elementos) ent qnd estiver em cada uma das '12 rodadas' 
    //ele vai mostrar na tela 'em qual ele está' naquele momento...
}

?>