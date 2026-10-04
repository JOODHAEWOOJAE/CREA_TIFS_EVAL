<?php

namespace App\Models\ProjectsModel;

use \PDO;

// Récupérer les 10 derniers projets
function findAll(PDO $connexion, int $limit = 10): array
{
    $sql = "SELECT projets.*, creatifs.pseudo
            FROM projets
            JOIN creatifs
            ON projets.creatif = creatifs.id
            ORDER BY projets.dateCreation DESC
            LIMIT :limit;";

    $rs = $connexion->prepare($sql);

    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);

    $rs->execute();

    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

// Récupérer un projet par son id
function findOneById(PDO $connexion, int $id): array
{
    $sql = "SELECT projets.*, creatifs.pseudo
            FROM projets
            JOIN creatifs
            ON projets.creatif = creatifs.id
            WHERE projets.id = :id;";

    $rs = $connexion->prepare($sql);

    $rs->bindValue(':id', $id, PDO::PARAM_INT);

    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);
}

// Ajouter un projet
function insertOne(PDO $connexion, array $projectData): bool
{
    $sql = "INSERT INTO projets
            (titre, resume, texte, dateCreation, image, creatif)
            VALUES
            (:titre, :resume, :texte, NOW(), :image, :creatif);";

    $rs = $connexion->prepare($sql);

    $rs->bindValue(':titre', $projectData['title'], PDO::PARAM_STR);
    $rs->bindValue(':resume', $projectData['resume'], PDO::PARAM_STR);
    $rs->bindValue(':texte', $projectData['text'], PDO::PARAM_STR);
    $rs->bindValue(':image', $projectData['image'], PDO::PARAM_STR);
    $rs->bindValue(':creatif', $projectData['category_id'], PDO::PARAM_INT);

    return $rs->execute();
}

// Modifier un projet
function updateOneById(
    PDO $connexion,
    int $id,
    array $projectData
): bool
{
    $sql = "UPDATE projets
            SET titre = :titre,
                resume = :resume,
                texte = :texte,
                image = :image,
                creatif = :creatif
            WHERE id = :id;";

    $rs = $connexion->prepare($sql);

    $rs->bindValue(':titre', $projectData['title'], PDO::PARAM_STR);
    $rs->bindValue(':resume', $projectData['resume'], PDO::PARAM_STR);
    $rs->bindValue(':texte', $projectData['text'], PDO::PARAM_STR);
    $rs->bindValue(':image', $projectData['image'], PDO::PARAM_STR);
    $rs->bindValue(':creatif', $projectData['category_id'], PDO::PARAM_INT);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);

    return $rs->execute();
}