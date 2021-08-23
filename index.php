<?php

include "HomeBirds.php";
include "NatureBirds.php";


$duck = new HomeBirds("Утка", 4, "Черный", "Кря-кря");
$vorona = new NatureBirds("Ворона", 3, "Черный", "Кар - кар бля");
$eagle = new NatureBirds("Орёл", 5, "Коричневый", "Вжууууух");
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
