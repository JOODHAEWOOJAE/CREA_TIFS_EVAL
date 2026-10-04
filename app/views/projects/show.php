<?php

/** @var array $project */

    $editUrl = 'projects/' .
    $project['id'] . '/' .
    \Core\Helpers\slugify($project['titre']) .
    '/edit/form.html';

    $deleteUrl = 'projects/delete/' .
    $project['id'] . '/' .
    \Core\Helpers\slugify($project['titre']) .
    '.html';

?>

<h1><?php echo $project['titre']; ?></h1>

<p class="ct-byline">
    par
    <a href="#">
        <?php echo $project['pseudo']; ?>
    </a>

    ·

    <?php echo \Core\Helpers\dateFormator($project['dateCreation']); ?>
</p>


<div class="mb-4">

    <a
        href="<?php echo $editUrl; ?>"
        class="ct-btn ct-btn--primary"
    >
        Éditer le projet
    </a>

    <a
        href="<?php echo $deleteUrl; ?>"
        class="ct-btn ct-btn--danger"
        onclick="return confirm('Supprimer définitivement ce projet ?');"
    >
        Supprimer le projet
    </a>

</div>


<article class="ct-card">

    <div class="row">

        <div class="col-md-6">

            <img
                class="img-fluid mb-3 mb-md-0"
                src="images/<?php echo $project['image']; ?>"
                alt="<?php echo $project['titre']; ?>"
            >

        </div>


        <div class="col-md-6">

            <p class="lead" style="font-weight: 600">
                <?php echo $project['resume']; ?>
            </p>

            <hr>

            <p>
                <?php echo $project['texte']; ?>
            </p>

        </div>

    </div>

</article>