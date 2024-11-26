<?php


namespace Core;


use \PDO;


abstract class Manager
{
    protected static $_table_name;
    protected static $_model;

    private static function init()
    {
        // Dynamique pour chaque classe fille grâce à `static::`
        static::$_table_name = strtolower(str_replace('Manager', '', basename(str_replace('\\', '/', static::class))));
        static::$_model = '\\App\\Models\\' . ucfirst(substr(static::$_table_name, 0, -1));
    }


    public static function findAll(): array
    {
        static::init();
        $sql = "SELECT * FROM "
            . static::$_table_name
            . " ORDER BY created_at DESC LIMIT 10;";
        return DB::getConnexion()->query($sql)->fetchAll(PDO::FETCH_CLASS, static::$_model);
    }


    public static function findOneById(int $id): object
    {
        static::init();
        $sql = "SELECT *
                FROM recipes 
                WHERE id = :id;";


        $rs = DB::getConnexion()->prepare($sql);
        $rs->bindValue(":id", $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchObject(static::$_model);
    }

        public  static function createOne(array $data): bool
    {

    }

    public static function updateOneById(int $id, array $data): bool
    {

    }

    public static function deleteOneById(int $id): bool
    {
    }
}
