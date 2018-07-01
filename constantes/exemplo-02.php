<?php

//se quiser deixar case insensitive é so usar o true dps do ],true
//define cria um array constante. temos que passar o nome da constante, preferencialmente em maiusculo e SEM ESPAÇOS
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

print_r (BANCO_DE_DADOS);

//mostra a versão do PHP :echo PHP_VERSION;
?>
