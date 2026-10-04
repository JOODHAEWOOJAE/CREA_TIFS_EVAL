<?php

/** @var array $project */

$slug = \Core\Helpers\slugify($project['titre']);

?>

<!-- Formulaire de modification d'un projet -->

<h1 class="mb-4">Modifier un projet</h1>

<form
    action="projects/<?php echo $project['id']; ?>/<?php echo $slug; ?>/edit/update.html"
    method="post"
    enctype="multipart/form-data"
    class="ct-form-card"
>

    <label for="title">Titre du projet</label>

    <input
        type="text"
        name="title"
        id="title"
        class="form-control"
        value="<?php echo $project['titre']; ?>"
    >


    <label for="resume">Résumé</label>

    <textarea
        id="resume"
        name="resume"
        class="form-control"
        rows="2"
        maxlength="255"
    ><?php echo $project['resume']; ?></textarea>


    <label for="text">Description</label>

    <textarea
        id="text"
        name="text"
        class="form-control"
        rows="5"
    ><?php echo $project['texte']; ?></textarea>


    <label for="creatif-file">Photo du résultat</label>

    <div class="ct-dropzone">

        ✂️ Choisissez une nouvelle image si nécessaire

        <input
            type="file"
            class="form-control-file"
            id="creatif-file"
            name="image"
        >

    </div>


    <input
        type="hidden"
        name="current_image"
        value="<?php echo $project['image']; ?>"
    >


    <label for="category">Créa'tif</label>

    <select
        id="category"
        name="category_id"
        class="form-control"
    >

        <option
            value="1"
            <?php if ($project['creatif'] == 1): ?>
                selected
            <?php endif; ?>
        >
            Mister Univ'Hair
        </option>

        <option
            value="2"
            <?php if ($project['creatif'] == 2): ?>
                selected
            <?php endif; ?>
        >
            Leerdam'Hair
        </option>

        <option
            value="3"
            <?php if ($project['creatif'] == 3): ?>
                selected
            <?php endif; ?>
        >
            Séda'Tifs
        </option>

        <option
            value="4"
            <?php if ($project['creatif'] == 4): ?>
                selected
            <?php endif; ?>
        >
            Jupil'Hair
        </option>

    </select>


    <label>
        Tags

        <span
            style="font-weight: 400; font-size: 0.8rem; color: #4a3a5a"
        >
            (facultatif)
        </span>

    </label>


    <div class="ct-tag-choice">

        <label>
            <input type="checkbox" name="tags[]" value="1">
            Vintage
        </label>

        <label>
            <input type="checkbox" name="tags[]" value="2">
            Alimentation
        </label>

        <label>
            <input type="checkbox" name="tags[]" value="3">
            Géométrie
        </label>

        <label>
            <input type="checkbox" name="tags[]" value="4">
            Couleur
        </label>

        <label>
            <input type="checkbox" name="tags[]" value="5">
            Figuratif
        </label>

        <label>
            <input type="checkbox" name="tags[]" value="6">
            Baptême
        </label>

        <label>
            <input type="checkbox" name="tags[]" value="7">
            Abstract
        </label>

        <label>
            <input type="checkbox" name="tags[]" value="8">
            Inclassable
        </label>

    </div>


    <div>

        <input
            class="ct-btn ct-btn--primary"
            type="submit"
            value="Enregistrer"
        >

        <input
            class="ct-btn ct-btn--ghost"
            type="reset"
            value="Réinitialiser"
        >

    </div>

</form>