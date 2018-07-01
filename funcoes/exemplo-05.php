<?php 
/*
$a = 10;

function trocaValor($a){

    $a+= 50;
    return $a;
}


echo trocaValor($a);

echo "<br/>";

//o que acontece com o valor $a nao é fixo, o valor continua o mesmo se nao chamarmos a funçã..
//o que fica na função, fica na função
echo $a;

*/

$a = 10;

//variavel é uma coisa, parametro de função é outra
function trocaValor($b){

    $b+= 50;
    return $b;
}

echo trocaValor($a);

echo "<br/>";

echo $a;

echo "<br>";

////////// passagem de parametro por referencia

//& significa que é uma passagem de parametro por referencia entao o valor da variavel vai mudar fora do escopo da função
function trocaValor2 (&$c){

    $c+= 100;
    return $c;
}

echo trocaValor2($a);

echo "<br>";

echo $a;