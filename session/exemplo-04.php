<?php
//estou determinando uma section na qual tenho 2 valores fixos para acessos distintos
session_id('jrde1pdipkccdkdtdr6fi954p0');

require_once("config.php");

session_regenerate_id();

//força que crie uma nova seção 
echo session_id();

var_dump($_SESSION);
