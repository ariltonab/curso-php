<?php

$nomeUsuario = readline("Informe o nome do seu usuário: ");
$userConvidado = "convidado";
//$userConvidado2 = "Convidado";

//OBS: NÃO CONSEGUI INCLUIR O "Convidado" para ser 'barrado', assim como ocorre com o 'convidado'
/*if(($nomeUsuario == $userConvidado) && ($nomeUsuario == $userConvidado2)){
    echo " Nome de usuário inválido";
}else{
    echo "Nome de usuário válido";
}
*/
if($nomeUsuario == $userConvidado){
    echo " Nome de usuário inválido";
}else{
    echo "Nome de usuário válido";
}

?>