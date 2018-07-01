<?php 

abstract class Animal//abstract nao deixa pegar direto da classe animal so de um extends da mesma
{

    public function falar(){

        return "Som";
    }

    public function mover(){

        return "anda";
    }
}

class Cachorro extends Animal//herança
{

    public function falar(){

        return  "uhu porra";
    }
}

class Gato extends Animal{

    public function falar(){

        return  "mia";
    }
}

class Passaro extends Animal{

    public function falar(){

        return "cANTA";
    }

    
    public function mover(){

        return "Voa e ". parent::mover();//parent pega o metodo pai e o retorna
    }
}


$pluto = new Cachorro;//instanciando a classe
echo $pluto->falar(). "<br/> ";
echo $pluto->mover()."<br/> ";

echo "................";
echo "<br/> ";

$garfield = new Gato;
echo $garfield->falar(). "<br/>";
echo $garfield->mover(); "<br/>";

echo "................";
echo "<br/> ";

$passaro = new Passaro;
echo $passaro->falar(). "<br/> ";
echo $passaro->mover()."<br/> ";


