<?php

class Singleton
{
    private static ?Singleton $singleton = null;
    private $name;
    private $surname;
    private $patronymic;
    public $rezult;

    private function __construct($name , $surname , $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;

    }

    public static function getSingleton($name , $surname , $patronomic): Singleton
    {
        if (self::$singleton == null) {
            self::$singleton = new Singleton($name , $surname , $patronomic);
        }

        return self::$singleton;
    }

    private function __clone()
    {
    }
     public static function getRelult ()
     {
         $rezult = self::$singleton;
         return $rezult;
     }

}

Singleton::getSingleton("Алексей" , "Сергеевич" , "Хрипков");




//print_r(Singleton::getSingleton("dvsvsv" , "sdvdsv" , "sdvdsvsdv"));


//print_r(Singleton::getRelult());


