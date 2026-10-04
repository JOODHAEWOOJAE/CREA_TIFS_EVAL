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
    \App\Controllers\ProjectsController\indexAction($connexion);
endif;