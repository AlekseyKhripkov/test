<?php

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