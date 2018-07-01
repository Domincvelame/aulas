<?php

$pessoas = array();



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

    //converte para JSON
    echo json_encode($pessoas);
?>
