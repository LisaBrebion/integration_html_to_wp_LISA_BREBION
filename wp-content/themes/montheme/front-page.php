<!-- -----------------------------page accueil-------------------  --><!-- on définit notre page d'accueil qui présente également les articles blog et le portfolio créations (cf reglage -> lecture -> page statique : page d'accueil :accueil et page des articles : blog ) -->
<?php get_header(); ?>
<section id="hero-section">
    <div class="container">
        <div class="row align-items-center align-items-lg-start flex-column flex-lg-row-reverse mt-lg-5 pt-lg-3">
            <div class="col-10 text-center col-sm-12 my-4 col-lg-4">
                <div class="hero-img-wrapper d-none d-lg-block">
                    <img id="wp-icon" class="hero-icon" src="assets/img/wp-icon.svg" alt="" aria-hidden="true">
                    <img id="bs-icon" class="hero-icon" src="assets/img/bs-icon.svg" alt="" aria-hidden="true">
                    <img id="html5-icon" class="hero-icon" src="assets/img/html5-icon.svg" alt="" aria-hidden="true">
                </div>
                <img src="assets/img/hero-img-lg.svg" alt="WordPress HTML5 et Bootstrapp" id="hero-img" class=" d-lg-none img-fluid">
            </div>
            <div class="col-10 col-sm-12 col-lg-8 text-lg-start">
                <p class="subtitle-h1">WP From Noob to Ninja</p>
                <h2 class="display-3 text-uppercase fw-800">Intégrer un template HTML sur WordPress</h2>
                <p class="lead">Ceci est la front page du thème, soit la page d'accueil, si vous avez défini une
                    page d'accueil statique dans les paramètres de lecture de WordPress.</p>
                </p>
                <p class="fw-bold">Ce template est basé sur Bootstrap 5.</p>
                <div class="row">
                    <div class="col mt-2">
                        <a href="<?= bloginfo('url') . '/blog'; ?>" class="btn btn-primary btn-lg">BLOG</a>
                        <a href="<?= bloginfo('url') . '/portfolio'; ?>" class="ms-3 btn btn-outline-secondary disabled position-relative btn-lg">PORTFOLIO
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                SEE !</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</section>

<!-- Last posts section -->
<section id="last-posts-section" class="mt-5 mt-sm-0">
    <div class="container">

        <!-- Title -->
        <div class="row justify-content-center justify-content-xl-start mt-5 pt-2 pt-lg-4">
            <div class="col-10 col-sm-12 col-xl-8">
                <h2 class="mb-0 fw-bold">Derniers articles de blog</h2>
                <p class="subtitle-h2">Commencez par faire un tour par là</p>
            </div>

            <!-- Home blog link -->
            <div class="col-4 d-none d-xl-flex justify-content-end">
                <a href="#!" class="big-link">Voir plus d'articles<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

        <!-- *************************cards  -->

        <!-- Cards -->
        <div class="row justify-content-center mt-3">
            <div class="col-10 col-sm-12">

                <div class="row">

                    <?php
                    $args = [
                        'numberposts' => 3,
                    ];

                    $recent_posts = wp_get_recent_posts($args, OBJECT);

                    foreach ($recent_posts as $post) :
                    ?>
                        <!-- Card 1 -->
                        <div class="col-12 col-lg-6 col-xl-4">
                            <div class="card shadow">
                                <a href="<?php the_permalink(); ?>">
                                    <header class="card-header-top position-relative" style="background-image-url('<?= the_post_thumbnail('portfolio-thrum'); ?>') ">
                                        <div class="overlay"></div>
                                        <div class="card-title-wrapper p-3">
                                            <h3 class="h4 card-title"><?= the_title(); ?></h3>
                                        </div>
                                    </header>
                                </a>

                                <div class="card-body">
                                    <h4 class="h5 fw-bold mt-1"><?php the_field('article_subtitle'); ?></h4>
                                    <p class="card-text"><?= wp_trim_words(get_the_excerpt(), 30); ?></p>
                                    <div class="card-metas">
                                        <p class="mb-0"><span class="text-grey font-secondary me-1">Catégorie :</span><a href="<?= the_permalink(); ?>"><?= the_category('/', ''); ?></a>
                                        </p>
                                        <p><span class="text-gray font-secondary me-1">Publié le :</span>
                                            <span class="text-gray">
                                                <?= get_the_date('d-m-Y'); ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <footer class="footer-card bottom position-relative">
                                    <a href="<?php the_permalink($post); ?>" class="d-flex py-3 justify-content-center align-items-center btn btn-primary btn-card"> Lire la suite <i class="bi bi-arrow-right text-white"></i>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
</section>

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
                            'numberposts' => 3,
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
<?php
get_footer();
?>