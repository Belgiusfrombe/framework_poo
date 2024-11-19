<?php

use \App\Controllers\RecipesController;

switch ($_GET['recipes']):
    case 'show':
        RecipesController::showAction($connexion, $_GET['id']);
        break;
endswitch;
