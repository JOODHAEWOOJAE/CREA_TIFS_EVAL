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

    // ROUTE PROJECTS.EDITFORM
    // PATTERN: /projects/id/slug/edit/form.html
    // CTRL: projectsController
    // ACTION: editForm
    case 'edit-form':
        ProjectsController\editFormAction(
            $connexion,
            $_GET['id']
        );  
        break;

    // ROUTE PROJECTS.UPDATE
    // PATTERN: /projects/id/slug/edit/update.html
    // CTRL: projectsController
    // ACTION: update
    case 'update':
        ProjectsController\updateAction(
            $connexion,
            $_GET['id'],
            $_POST,
            $_FILES['image']
        );
        break;

    // ROUTE PROJECTS.DELETE
    // PATTERN: /projects/delete/id/slug.html
    // CTRL: projectsController
    // ACTION: delete
    case 'delete':
        ProjectsController\deleteAction(
            $connexion,
            $_GET['id']
        );
        break;

    default:
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

        ProjectsController\indexAction(
            $connexion,
            $page
        );
        break;

endswitch;