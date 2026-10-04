<?php

use \App\Controllers\ProjectsController;

include_once '../app/controllers/projectsController.php';

switch ($_GET['projects']):
    default:
        ProjectsController\indexAction($connexion);
        break;
endswitch;