<?php


namespace App\Models;


use \PDO;


abstract class recipesModel
{
    public static function findAll(PDO $connexion): array
    {
        $sql = "SELECT *
            FROM recipes
            ORDER BY created_at DESC
            LIMIT 10;";
        return $connexion->query($sql)->fetchAll(PDO::FETCH_CLASS, Recipe::class);
    }

    public static function findOneById(PDO $connexion, int $id): object
    {
        $sql = "SELECT *
            FROM recipes
            WHERE id = :id;";

        $rs = $connexion->prepare($sql);
        $rs->bindValue(':id', $id, PDO::PARAM_INT);
        $rs->execute();

        return $rs->fetch(PDO::FETCH_CLASS, Recipe::class);
    }

}
