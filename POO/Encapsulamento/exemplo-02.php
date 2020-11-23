<?php

class Pessoas
{

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123546";

    public function verDados()
    {

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

class Programador extends Pessoas
{
    public function verDados()
    {
        echo get_class($this). "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

$objeto = new Programador();

$objeto->verDados();
