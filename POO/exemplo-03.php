<?php

class Endereco{
    
    private $logradouro;
    private $numero;
    private $cidade;

    //metodo magico(construtor)

    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    //transforma o objeto em string
    public function __toString(){
        
        return $this->logradouro.",".$this->numero."," .$this->cidade;
    }

}

$meuEndereco = new Endereco("Rua Santa Catarina", "97", "Sapeaçu-ba");

echo $meuEndereco;

