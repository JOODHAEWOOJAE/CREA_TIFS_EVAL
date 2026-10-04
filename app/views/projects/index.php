<?php

/** @var array $projects */

?>

<?php foreach ($projects as $project): ?>

    <article class="ct-card">

        <div class="row">

            <div class="col-md-4">

                <a href="#">

                    <img
                        class="img-fluid mb-3 mb-md-0"
                        src="images/<?php echo $project['image']; ?>"
                        alt="<?php echo $project['titre']; ?>"
                    >

                </a>

            </div>


            <div class="col-md-8">

                <h3>

                    <a href="#">
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
                    href="#"
                >
                    Voir le projet
                </a>

            </div>

        </div>

    </article>

<?php endforeach; ?>