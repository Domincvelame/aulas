<?php
//int ... transforma todos os valores da var em inteiros
//:string delcara o valor do return, podendo altera-lo
function soma(int ...$valores):string{

    //array_sum faz as somas dos arrays
    return array_sum($valores);
}

//perceba que os valores x.0... sao ignorados e realizam a operação so com os valores inteiros
var_dump(soma (2, 2)) ;

echo "<br>";

echo soma (2.7, 2.8);
