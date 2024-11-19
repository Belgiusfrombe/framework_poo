<?php


namespace Core;

use \PDO, \PDOException;

abstract class DB
{
    private static $_connexion = null;

    public static function getConnexion()
    {
        try {
            SELF::$_connexion =  new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD);
            return SELF::$_connexion;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public static function killConnexion()
    {
        SELF::$_connexion = null;
    }
}
