<?php
// Méthodes 1
if(isset($_GET['recipes'])):
    require_once '../app/routers/recipes.php';
    \App\Controllers\RecipesController::showAction($connexion);
else :
    // Route pas defaut: Liste des recipes
    // Pattern: /
    // CTRL: RecipesController
    \App\Controllers\RecipesController::indexAction($connexion);
endif;