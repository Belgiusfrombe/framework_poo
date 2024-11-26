<?php

namespace App\Models;

use \PDO , \Core\DB;

abstract class RecipesManager extends \Core\Manager
{
//     public static function findAll(): array
//     {
//         $sql = "SELECT *
//             FROM recipes
//             ORDER BY created_at DESC
//             LIMIT 10;";
//         return DB::getConnexion()->query($sql)->fetchAll(PDO::FETCH_CLASS, Recipe::class);
//     }

//     public static function findOneById(int $id): object
//     {
//         $sql = "SELECT *
//                 FROM recipes
//                 WHERE id = :id;";

//         $rs = DB::getConnexion()->prepare($sql);
//         $rs->bindValue(":id", $id, PDO::PARAM_INT);
//         $rs->execute();
//         return $rs->fetchObject(Recipe::class);
//     }

//     public  static function createOne(array $data): bool
//     {

//     }

//     public static function updateOneById(int $id, array $data): bool
//     {

//     }

//     public static function deleteOneById(int $id): bool {

// }

}
