<?php
 // Route pas defaut: Liste des recipes
 // Pattern: /
 // CTRL: RecipesController

// Méthodes 1
if(isset($_GET['recipes'])):
    \App\Controllers\RecipesController::showAction($connexion);
else :
    \App\Controllers\RecipesController::indexAction($connexion);
endif;