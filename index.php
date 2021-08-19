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



$a = 0;
$b = 1;

foreach ($array as $name1 => $growth1){
    $a = $a + 1;
    $b = 1;
    foreach ($array as $name2 => $growth2){

        if($b > $a){
            if($growth2 > $growth1){
                $c = $growth1;
                $array[$name1] = $growth2;
                $array[$name2] = $c;
            }
        }
        $b = $b + 1;
    }
}


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

//$array = [];
//$array[32] = 123;
//$array["blabla"] = 1768;
//$array[true] = true;
//$array[34] = 673;
//$array[5] = "blabla";
//$array["privet"] = "aga";
//$array[546] = "dada";
//$array["red"] = "red";
//$array["green"] = "green";
//$array["ok"] = 6879;
//$array["ppc"] = true;
//$array[567] = "qwerty";
//$array["moscow"] = 777;
//$array["rostov"] = 161;
//$array["krasnodar"] = 123;
//$array[123] = "krasnodar";
//$array[97] = "moscow";
//$array[161] = "rostov";
//$array["do it"] = "do it";
//$array[143] = 987;
//$array["array"] = [1 , 3 , 5];
//
//unset($array[97]);
//
//print_r($array);




//$array7 = [6 , 8 , 9, 65];
//$array8 = [5 , 4 , 3, 3];
//$array9 = [11 , 22 , 56, 6];
//for ($i = 0; $i < count($array7); $i++){
//    echo $array7[$i] . "\n";
//}
//for ($i = 0; $i < count($array8); $i++){
//    echo $array8[$i] . "\n";
//}
//for ($i = 0; $i < count($array9); $i++){
//    echo $array9[$i] . "\n";
//}
