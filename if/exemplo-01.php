<?php
$qualASuaIdade = 19;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade <= $idadeCrianca ) {

    echo "é criança";
}

elseif ($qualASuaIdade < $idadeMaior){

    echo "Adolescente";
}

elseif($qualASuaIdade >= $idadeMaior ){
    echo "adulto";
}

else{
    echo "Idoso";
}

exit;
//Operador ternário usado em condições simples. "?" significa então e o ":" significa caso contrário.
echo ($qualASuaIdade < $idadeMaior)? "é criança": ('é adulto');

