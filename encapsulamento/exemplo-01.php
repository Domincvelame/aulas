<?php

class Pessoa{

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;//herdeiros podem acessar
    private $senha = "123456";//so a propria classe pode acessar

    public function verDados(){

        echo $this->nome ."<br/>";
        echo $this->idade ."<br/>";
        echo $this->senha ."<br/>";
    }
}

$objeto - new Pessoa();

//echo $objeto->nome."<br/>";
//echo $objeto->senha."<br/>";

$objeto->verDados();//metodo publico e dentro da classe, logo podemos 
//acessar os