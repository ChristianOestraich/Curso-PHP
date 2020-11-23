<?php

abstract class Animal
{

    public function falar()
    {
        return "Som";
    }
    public function mover()
    {
        return "Anda";
    }
}

class Cachorro extends Animal
{

    public function falar()
    {
        return "Late";
    }
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "----------------------------------<br/>";

class Gato extends Animal
{
    public function falar()
    {
        return "Mia";
    }
}

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "----------------------------------<br/>";

class Passaro extends Animal
{
    public function falar()
    {
        return "Canta";
    }
    public function mover()
    {
        return "Voa e " . parent::mover();
    }
}

$canario = new Passaro();

echo $canario->falar() . "<br/>";
echo $canario->mover() . "<br/>";

echo "----------------------------------<br/>";