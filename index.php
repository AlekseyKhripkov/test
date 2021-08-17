<?php

class Human
{
    private string $name;
    private string $surname;
    private string $patronymic;
    private DateTime $date;
    private array $relatives = [];

    public function __construct(
        string $name,
        string $surname,
        string $patronymic,
        DateTime $date
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->date = $date;
    }

    public function getName(): string
    {
        return $this->surname . " " . substr($this->name, 0, 1) . "." . substr($this->patronymic, 0, 1) . ".";
    }

    public function addRelatives(Human $a): void
    {
        for ($i = 0; $i < count($this->relatives); $i++) {
            if ($this->relatives[$i]->isEqual($a)) {
                return;
            }
        }
        $this->relatives[] = $a;
        $a->addRelatives($this);
    }

    public function getRelatives(): array
    {
        return $this->relatives;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function isAdult(): bool
    {
        $now = new DateTime(); // текущее время
        $dateDiff = $this->date->diff($now); // рзаница текущей даты и даты обьекта

        return $dateDiff->y > 18;
    }

    private function isEqual(Human $a): bool
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



echo "123";

//$petrov->addRelatives($ivanov);
//$petrov->addRelatives($sidorov);
//$petrov->addRelatives($sokolov);
//
//
//$relatives = $petrov->getRelatives();
//$isAdultRelatives = [];
//$isNotAdultRelatives = [];
//foreach ($relatives as $relative) {
//    if ($relative->isAdult()) {
//        $isAdultRelatives[] = $relative;
//    } else {
//        $isNotAdultRelatives[] = $relative;
//    }
//}
//
//echo "Старые родственники: \n";
//foreach ($isAdultRelatives as $relative) {
//    echo $relative->getName() . "\n";
//}
//
//echo "\n\n";
//
//echo "Молодые родственники: \n";
//foreach ($isNotAdultRelatives as $relative) {
//    echo $relative->getName() . "\n";
//}