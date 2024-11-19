<?php

use \App\Controllers\RecipesController;

switch ($_GET['recipes']):
    case 'show':
        RecipesController::showAction($_GET['id']);
        break;
endswitch;
