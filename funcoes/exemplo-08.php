
<?php

$vendedores[] = [
    'nome_cargo'=>'Vendedor',
    'name' => 'Dominic 1',
    'idade' => '19',
    'date' => '2003-06-26'
];

$vendedores[] = [
    'nome_cargo'=>'Vendedor',
    'name' => 'Dominic 2',
    'idade' => '19',
    'date' => '2003-06-26'
];

$vendedores[] = [
    'nome_cargo'=>'Vendedor',
    'name' => 'Dominic 3',
    'idade' => '19',
    'date' => '2003-06-26'
];



echo "<pre>";

$hierarquia = array(    
    array(
        'nome_cargo' => 'CEO',
        'subordinados'=> array(
            array(
                'nome_cargo'=>'Diretor comercial',
                'subordinados' => array(
                    array(
                        'nome_cargo'=> 'Gerente de Vendas',
                        'subordinados' => $vendedores
                    )
                )
                
            ), array(
                'nome_cargo'=>'Direto Financeiro',
                'subordinados'=> array(
                    'nome_cargo'=>'Gerente de contas a pagar',
                    'subordinados'=> array(
                        array(
                            'nome_cargo'=>'Supervisor de contas a',
                            'name' => 'Dominic',
                            'idade' => '19',
                            'date' => '2003-06-26'
                        )
                        

                    )
                )
            )

        )

    )
);



//print_r($hierarquia);

$json =  json_encode($hierarquia);
$json =  json_decode($json);

print_r($json);
echo "<hr>";

foreach ($hierarquia as $key1 => $value1) {
    //print_r($value1);
    foreach ($value1 as $key2 => $value2) {
        //print_r($value2['nome_cargo']);
        foreach ($value2 as $key3 => $value3) {
            echo 'Cargo '.$key3.': '.$value3['nome_cargo'].'<p>';
        }
    }
}


echo "</pre>";