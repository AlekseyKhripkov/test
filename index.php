<?php

interface IbirdsFly
{
    public function canFly();
}

interface IbirdsRun
{
    public function canRun();
}

interface IbirdsPredator
{
    public function getPredator();
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

class HomeBirds extends AbstractBirds implements IbirdsRun
{

    public function canRun()
    {
        return "Эта птица умеет бегать";
    }

    public function getSound()
    {
        return "Птица издает звуки - " . $this->sound;
    }

}

class NaturBirds extends AbstractBirds implements IbirdsFly , IbirdsPredator
{

    public function getPredator()
    {
        return "Эта птица является хищником";
    }

    public function getSound()
    {
        return "В природе имеет свойственный только ей звук - " . $this->sound . " " . $this->sound . " " . $this->sound;
    }

    public function canFly()
    {
        return "Эта птица умеет летать";
    }
}


$duck = new HomeBirds("Утка", 4, "Черный", "Кря-кря");
$vorona = new NaturBirds("Ворона", 3, "Черный", "Кар - кар бля");
$eagle = new NaturBirds("Орёл", 5, "Коричневый", "Вжууууух");
$chick = new HomeBirds("Курица", 3, "Красный", "Кукареку");

echo $duck->getName();
echo "\n";
echo $duck->getWeight();
echo "\n";
echo $duck->getColor();
echo "\n";
echo $duck->getSound();
echo "\n";
echo $duck->canRun();
echo "\n";
echo "\n";
echo "\n";
echo $vorona->getName();
echo "\n";
echo $vorona->getWeight();
echo "\n";
echo $vorona->getColor();
echo "\n";
echo $vorona->getSound();
echo "\n";
echo $vorona->canFly();
echo "\n";
echo "\n";
echo "\n";
echo $eagle->getName();
echo "\n";
echo $eagle->getWeight();
echo "\n";
echo $eagle->getColor();
echo "\n";
echo $eagle->getSound();
echo "\n";
echo $eagle->canFly();
echo "\n";
echo $eagle->getPredator();
echo "\n";
echo "\n";
echo "\n";
echo $chick->getName();
echo "\n";
echo $chick->getWeight();
echo "\n";
echo $chick->getColor();
echo "\n";
echo $chick->getSound();
echo "\n";
echo $chick->canRun();
