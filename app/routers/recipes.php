<?php

use \App\Controllers\RecipesController;

include_once '../app/controllers/recipesController.php';

switch ($_GET['recipes']):
    case 'recipes':
        RecipesController\showAction($connexion, $_GET['id']);
        break;
    default:
        RecipesController\indexAction($connexion);
endswitch;
