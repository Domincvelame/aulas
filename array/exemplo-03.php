<?php

$pessoas = array();


//adiciona mais arrays dentro de um array. sintaxe: $array_push(o array que vc vai adicionar outros arrays, o array que vc vai adicionar no mesmo
array_push($pessoas, array(
    'nome'=> 'João',
    'idade' => 20 ));

array_push($pessoas, array(
    'nome'=> 'Dominic',
    'idade' => 16));

    print_r ($pessoas);
    
    echo "<hr/>";
    //print_r ($pessoas [0]['nome']);
    print_r ( $pessoas [1]['idade']);
?>
