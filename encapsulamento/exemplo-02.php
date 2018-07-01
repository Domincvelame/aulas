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

//Herança//privado *private* nao herda, logo nao aparece
class Programador extends Pessoa{

    public function verDados(){
        
        echo get_class($this);//serve para ver de que classe esta vindo os dados

        echo $this->nome ."<br/>";
        echo $this->idade ."<br/>";
        echo $this->senha ."<br/>";
    }
}

$objeto =  new Programador();

//echo $objeto->nome."<br/>";
//echo $objeto->senha."<br/>";

$objeto->verDados();//metodo publico e dentro da classe, logo podemos 
//acessar os dados