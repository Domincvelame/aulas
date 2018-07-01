<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Dominic","idade":16}]';

//transforma em um array [somente com true, caso contrário transforma em objeto]
$data = json_decode($json, true);

var_dump($data);
?>