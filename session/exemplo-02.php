<?php

require_once("config.php");

//apaga a session
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];