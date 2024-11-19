<?php


namespace App\Controllers;


use \PDO;
use \App\Models\RecipesModel;


abstract class RecipesController
{


    public static function indexAction()
    {
        $recipes = RecipesModel::findAll();


        global $title, $content;
        $title = "All recipes";
        ob_start();
        include '../app/views/recipes/index.php';
        $content = ob_get_clean();
    }


    public static function showAction(int $id)
    {
        $recipe = RecipesModel::findOneById($id);


        global $title, $content;
        $title = $recipe->name;
        ob_start();
        include '../app/views/recipes/show.php';
        $content = ob_get_clean();
    }
}
