<?php

namespace Core;

use \PDO, \PDOException;

abstract class DB
{
    private static $_connexion = null;

    public static function getConnexion()
    {
        if (SELF::$_connexion === null) {
            try {
                SELF::$_connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD);
            }
            catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
        return SELF::$_connexion;
    }

    public static function killConnexion()
    {
        SELF::$_connexion = null;
    }
}
