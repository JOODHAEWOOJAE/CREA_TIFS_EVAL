<?php

namespace App\Controllers\ProjectsController;

use \PDO;
use \App\Models\ProjectsModel;

// Afficher la liste des projets
function indexAction(PDO $connexion)
{
    include_once '../app/models/projectsModel.php';

    $projects = ProjectsModel\findAll($connexion);

    global $content, $title, $showHero;

    $title = "Les projets";
    $showHero = true;

    ob_start();

    include '../app/views/projects/index.php';

    $content = ob_get_clean();
}

// Afficher le détail d'un projet
function showAction(PDO $connexion, int $id)
{
    include_once '../app/models/projectsModel.php';

    $project = ProjectsModel\findOneById($connexion, $id);

    global $content, $title, $showHero;

    $title = $project['titre'];
    $showHero = false;

    ob_start();

    include '../app/views/projects/show.php';

    $content = ob_get_clean();
}