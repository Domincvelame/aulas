<?php

function ola(){

    //poderia colocar o comando "echo" no lugar do return porem nao teria liberdade de emular o valor, ex: colocar em um banco de dados etc.
    return "Olá Mundo!<br>";

}

echo ola();
$teste =  strlen(ola());

echo $teste;