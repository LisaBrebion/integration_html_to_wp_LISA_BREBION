<?php get_header(); ?>
<!-- page portfolio ********************************** -->


<!-- onglet/section créations portfolio ************* -->
<section id="last-portfolios-section" class="mt-5 mt-sm-0">
    <div class="container">

        <!-- titre************ -->
        <div class="row justify-content-center justify-content-xl-start mt-5 pt-2 pt-lg-4">
            <div class="col-10 col-sm-12 col-xl-8">
                <h2 class="mb-0 fw-bold"> Dernières créations</h2>
                <p class="subtitle-h2"> Réalisations personnelles & professionnelles</p>
            </div>

            <!-- home portfolio link  -->
            <div class="col-4 d-none d-xl-flex justify-content-end">
                <a href="<?= bloginfo('url') . '/portfolio'; ?>" class="big-link"> Voir plus de créations <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
        <!-- Cards------  -->
        <div class="row justify-content-center mt-3">
            <div class="col-10 col-sm-12">
                <div class="row">
                    <div class="col-12 grid-portfolio">
                        <?php
                        $args = [
                            'numberposts' => 6,
                            'post_status' => 'publish',
                            'post_type' => 'Creation',
                            'order' => 'ASC'
                        ];

                        $posts = get_posts($args);

                        foreach ($posts as $post) :
                        ?>

                            <!-- ----------------------affichage portfolio créas-----------------  -->
                            <div class="grid-item">
                                <div class="overlay">
                                    <h3 class="h4 text-uppercase text-white"><?= the_title(); ?></h3>
                                    <a href="<?= the_permalink(); ?>" class="btn btn-outline-light mt-2">Voir plus</a>
                                </div>
                                <?= the_post_thumbnail('portfolio-thrum'); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>