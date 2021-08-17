<?php

class Human
{
    private $name;
    private $surname;
    private $patronymic;
    private $date;
    private $relatives = [];

    public function __construct($name, $surname, $patronymic, $date, $relatives = [])
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->date = $date;
        $this->relatives = $relatives;
    }

    public function getName()
    {
        return $this->surname . " " . substr($this->name, 0, 1) . "." . substr($this->patronymic, 0, 1) . ".";
    }

    public function addRelatives($a)
    {
        for ($i = 0; $i < count($this->relatives); $i++) {
            if ($this->relatives[$i]->isEqual($a)) {
                return;
            }
        }
        $this->relatives[] = $a;
        $a->addRelatives($this);
    }

    public function getRelatives()
    {
        return $this->relatives;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function isAdult()
    {
        $now = new DateTime(); // текущее время
        $dateDiff = $this->date->diff($now); // рзаница текущей даты и даты обьекта

        return $dateDiff->y > 18;
    }

    private function isEqual ($a)
    {
        if($this->name == $a->name){
            return true;
        }

        return false;
    }
}

$petrov = new Human("Aleksey", "Petrov", "Sergeevich", new DateTime ('2007-01-24'));


$ivanov = new Human("Vasiliy" , "Ivanov" , "Alekseevich" , new DateTime(1980-12-11));
$sidorov = new Human("Ivan", "Sidorov" , "Petrovich" , new DateTime(1970-05-28));
$sokolov = new Human("Petr" , "Sokolov" , "Ivanovich" , new DateTime(1992-07-24));
$perepechka = new Human("Sergey" , "Perepechka" , "Egorovich" , new DateTime(2009-06-21));


$petrov->addRelatives($ivanov);
$petrov->addRelatives($sidorov);
$petrov->addRelatives($sokolov);


$relatives = $petrov->getRelatives();
$isAdultRelatives = [];
$isNotAdultRelatives = [];
foreach ($relatives as $relative) {
    if ($relative->isAdult()) {
        $isAdultRelatives[] = $relative;
    } else {
        $isNotAdultRelatives[] = $relative;
    }
}

echo "Старые родственники: \n";
foreach ($isAdultRelatives as $relative) {
    echo $relative->getName() . "\n";
}

echo "\n\n";

echo "Молодые родственники: \n";
foreach ($isNotAdultRelatives as $relative) {
    echo $relative->getName() . "\n";
}