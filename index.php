<?php

class Human
{
    private string $name;
    private string $surname;
    private string $patronymic;
    private DateTime $date;
    private array $relatives = [];
    private string $growth;
    private string $nationality;
    private string $city;
    public array $arrayGrowth = [];

    public function __construct(
        string $name,
        string $surname,
        string $patronymic,
        DateTime $date,
        string $nationality,
        string $city,
        string $growth
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->date = $date;
        $this->nationality = $nationality;
        $this->city = $city;
        $this->growth = $growth;
    }


    public function getSelf()
    {
        return $this->surname . "\n" .
            $this->name . "\n" .
            $this->patronymic . "\n" .
            $this->nationality . "\n" .
            $this->city . "\n" .
            "Является взрослым:" . $this->getAge()
            ;

    }


    public function getNationality(): string
    {
        if ($this->nationality == "Russia"){
            return "Русский";
        }
        else{
            return "Не русский";
        }
    }

    public function getNeighbor(Human $a): string
    {
        if($this->city == $a->city){
            return $a->getName() . " - " . "Проживает рядом с Вами";
        }
        else{
            return "Слишком далеко";
        }
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

    public function getAge(): string
    {
        if($this->isAdult())
        {
          return "Да";
}
        else{
            return "Нет";
        }
    }

    public function getgrowth()
    {
     return $this->growth;
    }

    private function isEqual(Human $a): bool
    {
        if($this->name == $a->name){
            return true;
        }

        return false;
    }
}

$petrov = new Human("Alex", "Petrov", "Sergeevich", new DateTime ('2007-01-24'), "Russia", "Moscow", 175);
$ivanov = new Human("Vasiliy" , "Ivanov" , "Alekseevich" , new DateTime(1980-12-11), "Tatarin", "ST. Petersburg", 205);
$sidorov = new Human("Ivan", "Sidorov" , "Petrovich" , new DateTime(1970-05-28), "Chukcha", "Moscow", 155);
$sokolov = new Human("Petr" , "Sokolov" , "Ivanovich" , new DateTime(1992-07-24), "Tatarin", "ST. Petersburg", 160);
$perepechka = new Human("Sergey" , "Perepechka" , "Egorovich" , new DateTime(2009-06-21), "Poljak", "Moscow", 181);


$array = [];
$array[$petrov->getName()] = $petrov->getgrowth();
$array[$ivanov->getName()] = $ivanov->getgrowth();
$array[$sidorov->getName()] = $sidorov->getgrowth();
$array[$sokolov->getName()] = $sokolov->getgrowth();
$array[$perepechka->getName()] = $perepechka->getgrowth();



//for ($i = 0; $i<count($array); $i++){
//    for ($y = ($i + 1); $y < count($array); $y++){
//        if($array[$i] > $array[$y]){
//            $c = $array[$i];
//            $array[$i] = $array[$y];
//            $array[$y] = $c;
//        }
//    }
//}

//foreach ($array as $name1 => $growth1){
//    foreach ($array as $name2 => $growth2){
//        if($growth1 > $growth2){
//            $c = $growth1;
//            $growth1 = $growth2;
//            $growth2 = $c;
//        }
//    }
//}

arsort($array);

print_r($array);


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

//$array = [];
//$array["a"] = 123;
//$array["Fio"] = "жажда";
//$array["15"] = true;
//
//print_r($array);