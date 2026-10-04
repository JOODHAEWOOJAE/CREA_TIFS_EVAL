<?php

// ROUTES PROJECTS
// PATTERN: /projects/...
// URL: ?projects=...
// ROUTER projects
if (isset($_GET['projects'])):
    include_once '../app/routers/projects.php';

// ROUTE PAR DÉFAUT: Les 10 derniers projets
// PATTERN: /
// CTRL: projectsController
// ACTION: index
else:
    include_once '../app/controllers/projectsController.php';

    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

    \App\Controllers\ProjectsController\indexAction(
        $connexion,
        $page
    );
endif;