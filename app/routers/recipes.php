<?php

use \App\Controllers\RecipesController;

include_once '../app/controllers/recipesController.php';

switch ($_GET['recipes']):
    case 'show':
        \App\Controllers\RecipesController::showAction($connexion, $_GET['id']);
    break;
endswitch;
