<?php

namespace App\Controllers;

use \PDO;
use \App\Models\RecipesModel;

abstract class RecipesController
{

    public static function indexAction(PDO $connexion)
    {
        $recipes = RecipesModel::findAll($connexion);

        global $title, $content;
        $title = "All recipes";
        ob_start();
        include '../app/views/recipes/index.php';
        $content = ob_get_clean();
    }

    public static function showAction(PDO $connexion, int $id)
    {
        $recipe = RecipesModel::findOneById($connexion, $id);

        global $title, $content;
        $title = $recipe->name;
        ob_start();
        include '../app/views/recipes/show.php';
        $content = ob_get_clean();
    }
}
