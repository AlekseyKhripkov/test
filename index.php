<?php

class Human
{
    private $name;
    private $surname;
    private $patronymic;
    private $data;
    private $rodstv = [];

    public function __construct($name, $suname, $patronymic, $date, $rodstv = [])
    {
        $this->name = $name;
        $this->surname = $suname;
        $this->patronymic = $patronymic;
        $this->data = $date;
        $this->rodstv = $rodstv;
    }


    public function getName()
    {
        return $this->surname . " " . substr($this->name, 0, 1) . "." . substr($this->patronymic, 0, 1) . ".";
    }



    private function isEqual ($a){
        if($this->name == $a->name){
            return true;
        }
        else{
            return false;
        }
    }





    public function addRelatives($a)
    {
        for ($i = 0; $i < count($this->rodstv); $i++) {
            if ($this->rodstv [$i]->isEqual($a)) {
                return;
            }
        }
        $this->rodstv[] = $a;
        $a->addRelatives($this);
    }

    public function getRelatives()
    {
        for($i = 0; $i < count($this->rodstv); $i++)
        {
           echo $this->rodstv[$i]->getName();
        }

    }

}

$petrov = new Human("Aleksey", "Petrov", "Sergeevich", new DateTime ('1991-01-24'));
$ivanov = new Human("Vasiliy" , "Ivanov" , "Alekseevich" , new DateTime(1980-12-11));
$sidorov = new Human("Ivan", "Sidorov" , "Petrovich" , new DateTime(1970-05-28));
$sokolov = new Human("Petr" , "Sokolov" , "Ivanovich" , new DateTime(1992-07-24));
$perepechka = new Human("Sergey" , "Perepechka" , "Egorovich" , new DateTime(2009-06-21));


$petrov->addRelatives($ivanov);
$petrov->addRelatives($sidorov);
$petrov->addRelatives($sokolov);




$petrov->getRelatives();