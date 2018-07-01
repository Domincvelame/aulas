<?php

namespace Cliente;

// \ vai na raiz
class Cadastro extends \Cadastro {

    public function registrarVenda(){

        echo "foi registrada uma venda para o cliente ".$this->getNome();
    }
}