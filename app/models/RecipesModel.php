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
}
