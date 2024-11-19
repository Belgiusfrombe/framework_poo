<?php

if (isset($_GET['recipes'])):
    require_once '../app/routers/recipes.php';

else:
    // ROUTE PAR DÉFAUT: liste des recipes
    // PATTERN: /
    // CTRL: RecipesController
    // ACTION: index

    \App\Controllers\RecipesController::indexAction($connexion);
endif;
