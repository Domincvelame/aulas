<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("dominic");
$cad->setEmail("dominic@gmail.com");
$cad->setSenha("aaa2222");

$cad->registrarVenda();

//faz com que use a classe Cadstro que esta dentro da pasta cliente



?>
