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


    // ROUTE PROJECTS.ADDFORM
    // PATTERN: /projects/add/form.html
    // CTRL: projectsController
    // ACTION: addForm
    case 'add-form':
        ProjectsController\addFormAction($connexion);
        break;


    // ROUTE PROJECTS.INSERT
    // PATTERN: /projects/add/insert.html
    // CTRL: projectsController
    // ACTION: insert
    case 'insert':
        ProjectsController\insertAction(
            $connexion,
            $_POST,
            $_FILES['image']
        );
        break;


    default:
        ProjectsController\indexAction($connexion);
        break;

endswitch;