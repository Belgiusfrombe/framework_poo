<?php

require_once "../vendor/autoload.php";
require_once '../app/config/params.php';

\Core\App::start();

require_once '../app/routers/index.php';
require_once '../app/views/templates/index.php';

\Core\App::stop();
