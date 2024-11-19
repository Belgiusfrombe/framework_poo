<?php

namespace App\Models;

use \PDO , \Core\DB;

abstract class recipesModel
{
    public static function findAll(): array
    {
        $sql = "SELECT *
            FROM recipes
            ORDER BY created_at DESC
            LIMIT 10;";
        return DB::getConnexion()->query($sql)->fetchAll(PDO::FETCH_CLASS, Recipe::class);
    }

    public static function findOneById(int $id): object
    {
        $sql = "SELECT *
                FROM recipes
                WHERE id = :id;";

        $rs = DB::getConnexion()->prepare($sql);
        $rs->bindValue(":id", $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchObject(Recipe::class);
    }

    public  static function createOne(PDO $connexion, array $data): bool
    {

    }

    public static function updateOneById(PDO $connexion, int $id, array $data): bool
    {

    }

    public static function deleteOneById(PDO $connexion, int $id): bool {

}

}
