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

// Afficher le formulaire d'ajout d'un projet
function addFormAction(PDO $connexion)
{
    global $content, $title, $showHero;

    $title = "Ajouter un projet";
    $showHero = false;

    ob_start();

    include '../app/views/projects/addForm.php';

    $content = ob_get_clean();
}

// Ajouter un projet dans la base de données
function insertAction(PDO $connexion, array $projectData, array $imageData)
{
    include_once '../app/models/projectsModel.php';

    $imageName = $imageData['name'];

    // Enregistrer l'image dans le dossier images
    if ($imageName != ''):
        move_uploaded_file(
            $imageData['tmp_name'],
            '../public/images/' . $imageName
        );
    endif;

    $projectData['image'] = $imageName;

    ProjectsModel\insertOne($connexion, $projectData);

    header('location: ' . PUBLIC_BASE_URL);
}