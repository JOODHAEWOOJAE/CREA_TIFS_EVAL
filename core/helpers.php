<?php

namespace Core\Helpers;

function dateFormator(string $date, string $format = "d/m/Y"): string
{
    return date($format, strtotime($date));
}

function slugify(string $text): string
{
    // Mettre la chaîne en minuscules
    $text = strtolower($text);

    // Remplacer les caractères accentués
    $text = str_replace(
        ['é', 'è', 'ê', 'à', 'ç', 'â'],
        ['e', 'e', 'e', 'a', 'c', 'a'],
        $text
    );

    // Remplacer les caractères demandés par un tiret
    $text = str_replace(
        [' ', '.', '!', '?', "'", ';'],
        '-',
        $text
    );

    return $text;
}

function truncate(string $text, int $x): string
{
    // Si le texte est plus court ou égal à x caractères
    if (strlen($text) <= $x):
        return $text;
    endif;

    // Couper le texte à x caractères
    $text = substr($text, 0, $x);

    // Chercher le dernier espace
    $lastSpace = strrpos($text, ' ');

    // Couper au dernier espace
    $text = substr($text, 0, $lastSpace);

    // Supprimer un éventuel signe de ponctuation à la fin
    $text = rtrim($text, '.,;:!?');

    return $text . '...';
}