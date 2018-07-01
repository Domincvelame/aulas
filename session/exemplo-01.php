<?php
//por padrão o php n inicia a session entao vc tem q dar este comando para inicaiar
session_start();

//session é como se fosse u array superglobal $_GET
$_SESSION["nome"] = "dom";