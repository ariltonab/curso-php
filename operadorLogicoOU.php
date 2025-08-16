<?php
$idade = readline('Informe sua idade: ');
$responsavel = readline('Está com o responsável? ');

//|| somente um precisa estar certo/ser verdade (true)
if($idade >=16 || $responsavel == 'sim'){
    echo "Pode entrar";
}else{
    echo "Não pode entrar";
}



?>