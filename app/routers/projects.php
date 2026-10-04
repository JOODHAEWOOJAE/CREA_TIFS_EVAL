<?php

use \App\Controllers\ProjectsController;

include_once '../app/controllers/projectsController.php';

switch ($_GET['projects']):

    // ROUTE PROJECTS.SHOW
    // PATTERN: /projects/id/slug.html
    // CTRL: projectsController
    // ACTION: show

    case 'show':
        ProjectsController\showAction($connexion, $_GET['id']);
        break;

    default:
        ProjectsController\indexAction($connexion);
        break;
endswitch;