<?php

interface Ibirds
{
    public function canFly();
    public function setFly($fly);
}



abstract class birds
{
    protected string $name;
    protected int $weight;
    protected string $color;
    protected string $sound;
    protected string $fly;

    public function __construct($name , $weight , $color, $sound)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
        $this->sound = $sound;

    }

    public function getName()
    {
        return "Название прицы - " . $this->name;
    }

    public function getWeight()
    {
        return "Вес прицы - " . $this->weight . "КГ";
    }

    public function getColor()
    {
        return "Цвет прицы - " . $this->color;
    }

    abstract public function getSound();

}

class homeBirds extends birds implements Ibirds
{

    public function getSound()
    {
        return "Птица издает звуки - " . $this->sound;
    }

    public function setFly($fly)
    {
       $this->fly = $fly;
    }

    public function canFly(): string
    {
        return "Умение летать - " . $this->fly;
    }
}

class naturBirds extends birds implements Ibirds
{

    public function getSound()
    {
        return "Птица издает звуки - " . $this->sound;
    }

    public function setFly($fly)
    {
        $this->fly = $fly;
    }

    public function canFly(): string
    {
        return "Умение летать - " . $this->fly;
    }
}

$chick = new homeBirds("Курица", 2, "Красный", "Кукареку");
$duck = new homeBirds("Утка", 4, "Черный", "Кря-кря");
$vorona = new naturBirds("Ворона", 3, "Черный", "Кар - кар бля");
$eagle = new naturBirds("Орёл", 5, "Коричневый", "Вжууууух");

$chick->setFly("НЕТ");
$duck->setFly("ДА");
$vorona->setFly("ДА");
$eagle->setFly("ДА");

echo $chick->getName();
echo "\n";
echo $chick->getWeight();
echo "\n";
echo $chick->getColor();
echo "\n";
echo $chick->canFly();
echo "\n";
echo $chick->getSound();
echo "\n";
echo "\n";
echo "\n";
echo $duck->getName();
echo "\n";
echo $duck->getWeight();
echo "\n";
echo $duck->getColor();
echo "\n";
echo $duck->canFly();
echo "\n";
echo $duck->getSound();
echo "\n";
echo "\n";
echo "\n";
echo $vorona->getName();
echo "\n";
echo $vorona->getWeight();
echo "\n";
echo $vorona->getColor();
echo "\n";
echo $vorona->canFly();
echo "\n";
echo $vorona->getSound();
echo "\n";
echo "\n";
echo "\n";
echo $eagle->getName();
echo "\n";
echo $eagle->getWeight();
echo "\n";
echo $eagle->getColor();
echo "\n";
echo $eagle->canFly();
echo "\n";
echo $eagle->getSound();
