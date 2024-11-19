<?php

namespace App\Models;

use \PDO , \Core\DB;

abstract class UserManager
{
    public static function findOneById(int $id): user
    {
        $sql = "SELECT *
                FROM users
                WHERE id = :id;";

        $rs = DB::getConnexion()->prepare($sql);
        $rs->bindValue(":id", $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchObject(User::class);
    }
}