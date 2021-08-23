<?php

include_once "AbstractBirds.php";
include "IBirdsFly.php";
include "IBirdsPredator.php";

class NatureBirds extends AbstractBirds implements IBirdsFly , IBirdsPredator
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
