<?php

interface IbirdsFly
{
    public function CanFly();
}

interface IbirdsRun
{
    public function CanRun();
}

interface IbirdsPredator
{
    public function GetPredator();
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

    public function GetName()
    {
        return $this->name;
    }

    public function GetWeight()
    {
        return "Вес прицы - " . $this->weight . "КГ";
    }

    public function GetColor()
    {
        return "Цвет птицы - " . $this->color;
    }

    abstract public function getSound();

}

class HomeBirds extends AbstractBirds implements IbirdsRun
{

    public function CanRun()
    {
        return "Эта птица умеет бегать";
    }

    public function GetSound()
    {
        return "Птица издает звуки - " . $this->sound;
    }

}

class NaturBirds extends AbstractBirds implements IbirdsFly , IbirdsPredator
{

    public function GetPredator()
    {
        return "Эта птица является хищником";
    }

    public function GetSound()
    {
        return "В природе имеет свойственный только ей звук - " . $this->sound . $this->sound. $this->sound;
    }

    public function CanFly(): string
    {
        return "Эта птица умеет летать";
    }
}


$duck = new HomeBirds("Утка", 4, "Черный", "Кря-кря");
$vorona = new NaturBirds("Ворона", 3, "Черный", "Кар - кар бля");
$eagle = new NaturBirds("Орёл", 5, "Коричневый", "Вжууууух");
$chick = new HomeBirds("Курица", 3, "Красный", "Кукареку");

$eagle->GetName();


