<?php

/** @var array $projects */
?>

<div class="container">
    <h1>Les projets</h1>

    <?php foreach ($projects as $project): ?>

        <article>
            <h2><?php echo $project['titre']; ?></h2>

            <p><?php echo $project['resume']; ?></p>
        </article>

    <?php endforeach; ?>

</div>