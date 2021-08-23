<?php

include_once "AbstractBirds.php";
include "IBirdsRun.php";

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
