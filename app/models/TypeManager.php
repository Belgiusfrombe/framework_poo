<?php

namespace App\Models;

use \PDO , \Core\DB;

abstract class TypeManager
{
    public static function findOneById(int $id): Type
    {
        $sql = "SELECT *
                FROM types_of_recipes
                WHERE id = :id;";

        $rs = DB::getConnexion()->prepare($sql);
        $rs->bindValue(":id", $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchObject(Type::class);
    }
}