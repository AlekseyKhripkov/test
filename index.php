<?php

class Singleton
{
    private static ?Singleton $singleton = null;

    private function __construct()
    {
    }

    public static function getSingleton(): Singleton
    {
        if (self::$singleton == null) {
            self::$singleton = new Singleton();
        }

        return self::$singleton;
    }

    private function __clone()
    {
    }
}




$singleton = Singleton::getSingleton();

$singleton = Singleton::getSingleton();