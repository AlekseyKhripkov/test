<?php

interface Ibirds
{
    public function canFly();
    public function setFly($fly);
}



abstract class AbstractBirds
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
        return "Название птицы - " . $this->name;
    }

    public function getWeight()
    {
        return "Вес прицы - " . $this->weight . "КГ";
    }

    public function getColor()
    {
        return "Цвет птицы - " . $this->color;
    }

    abstract public function getSound();

}

class HomeBirds extends AbstractBirds implements Ibirds
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

class NaturBirds extends AbstractBirds implements Ibirds
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

$chick = new HomeBirds("Курица", 2, "Красный", "Кукареку");
$duck = new HomeBirds("Утка", 4, "Черный", "Кря-кря");
$vorona = new NaturBirds("Ворона", 3, "Черный", "Кар - кар бля");
$eagle = new NaturBirds("Орёл", 5, "Коричневый", "Вжууууух");

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
