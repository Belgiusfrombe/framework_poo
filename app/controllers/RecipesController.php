<?php
namespace App\Controllers;

use \PDO;
use \App\Models\RecipesModel;

// Abstract -> Sert à ne pas rendre utilisable le RecipeControllers ne peut pas faire d'occurence de cette classe
abstract class RecipesController
{
    public static function indexAction(PDO $connexion)
    {
        $recipes = \App\Models\RecipesModel::findAll($connexion);

        global $title, $content;
        ob_start();
        include '../app/views/recipes/index.php';
        $content = ob_get_clean();
    }
}