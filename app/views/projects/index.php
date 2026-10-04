<?php

/** @var array $projects */

?>

<?php foreach ($projects as $project): ?>

    <?php
    $url = 'projects/' .
        $project['id'] . '/' .
        \Core\Helpers\slugify($project['titre']) .
        '.html';
    ?>

    <article class="ct-card">

        <div class="row">

            <div class="col-md-4">

                <a href="<?php echo $url; ?>">

                    <img
                        class="img-fluid mb-3 mb-md-0"
                        src="images/<?php echo $project['image']; ?>"
                        alt="<?php echo $project['titre']; ?>"
                    >

                </a>

            </div>


            <div class="col-md-8">

                <h3>

                    <a href="<?php echo $url; ?>">
                        <?php echo $project['titre']; ?>
                    </a>

                </h3>


                <p class="ct-byline">

                    par
                    <a href="#">
                        <?php echo $project['pseudo']; ?>
                    </a>

                    ·

                    <?php echo \Core\Helpers\dateFormator($project['dateCreation']); ?>

                </p>


                <p>
                    <?php echo \Core\Helpers\truncate($project['resume'], 100); ?>
                </p>


                <a
                    class="ct-btn ct-btn--primary ct-btn--sm"
                    href="<?php echo $url; ?>"
                >
                    Voir le projet
                </a>

            </div>

        </div>

    </article>

<?php endforeach; ?>

<!-- Pagination : 10 projets par page -->
<nav aria-label="Navigation entre les pages de projets">

    <ul
        class="pagination ct-pagination"
        style="justify-content: center"
    >

        <li
            class="page-item
            <?php if ($page <= 1): ?>
                disabled
            <?php endif; ?>"
        >
            <a
                class="page-link"
                href="projects?page=<?php echo $page - 1; ?>"
            >
                Précédent
            </a>
        </li>


        <?php for ($i = 1; $i <= $totalPages; $i++): ?>

            <li
                class="page-item
                <?php if ($i == $page): ?>
                    active
                <?php endif; ?>"
            >
                <a
                    class="page-link"
                    href="projects?page=<?php echo $i; ?>"
                >
                    <?php echo $i; ?>
                </a>
            </li>

        <?php endfor; ?>


        <li
            class="page-item
            <?php if ($page >= $totalPages): ?>
                disabled
            <?php endif; ?>"
        >
            <a
                class="page-link"
                href="projects?page=<?php echo $page + 1; ?>"
            >
                Suivant
            </a>
        </li>

    </ul>

</nav>