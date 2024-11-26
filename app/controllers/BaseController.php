<?php

namespace App\Controllers\BaseController;

abstract class BaseController
{
    // Variable to hold the dynamic data fetched from the database
    protected $data = [];

    // Abstract method to fetch data (must be implemented by child classes)
    abstract protected function fetchData();

    // Renders the view dynamically based on the current controller
    protected function renderView($viewName, $pageTitle)
    {
        global $title, $content;

        // Set the page title
        $title = $pageTitle;

        // Use the data in the view
        extract($this->data);

        // Render the view
        ob_start();
        include "../app/views/$viewName.php";
        $content = ob_get_clean();
    }

    // Common method for the indexAction, can be called from child controllers
    public function indexAction()
    {
        // Fetch the data (each child controller must implement `fetchData`)
        $this->fetchData();

        // Determine the controller name dynamically
        $controllerName = strtolower(explode('Controller', basename(str_replace('\\', '/', __CLASS__)))[0]);

        // Render the index view dynamically based on the controller name
        $this->renderView("$controllerName/index", "All $controllerName");
    }
}
