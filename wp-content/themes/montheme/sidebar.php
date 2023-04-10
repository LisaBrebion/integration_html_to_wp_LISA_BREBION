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
                                Soon !</span></a>
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

        <!-- Cards -->
        <div class="row justify-content-center mt-3">
            <div class="col-10 col-sm-12">

                <div class="row">

                    <!-- Card 1 -->
                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="card shadow">
                            <header class="card-header-top position-relative">
                                <div class="overlay"></div>
                                <div class="card-title-wrapper p-3">
                                    <h3 class="h4 card-title">Bien débuter</h3>
                                </div>

                            </header>
                            <div class="card-body">
                                <h4 class="h5 fw-bold mt-1">Paramétrer son projet</h4>
                                <p class="card-text">Découvrez dans cet article, comment bien débuter le
                                    templating sur WP : les outils et les plugins qui vont vous faciliter la
                                    vie.</p>
                                <div class="card-metas">
                                    <p class="mb-0"><span class="text-gray font-secondary me-1">Catégorie
                                            :</span><a href="#!">WordPress</a>
                                    </p>
                                    <p><span class="text-gray font-secondary me-1">Publié le :</span><span class="text-gray">09/02/2023</span>
                                    </p>
                                </div>
                            </div>
                            <footer class="footer-card-bottom position-relative">
                                <a href="#" class="d-flex py-3 justify-content-center align-items-center btn btn-primary btn-card">Lire
                                    la suite<i class="ms-3 bi bi-arrow-right text-white"></i></a>
                            </footer>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-lg-6 col-xl-4 mt-3 mt-lg-0">
                        <div class="card shadow">
                            <header class="card-header-top position-relative">
                                <div class="overlay"></div>
                                <div class="card-title-wrapper p-3">
                                    <h3 class="h4 card-title">Le template hierarchy</h3>
                                </div>

                            </header>
                            <div class="card-body">
                                <h4 class="h5 fw-bold mt-1">Le système de template</h4>
                                <p class="card-text">Découvrez dans cet article, comment WP utilise les
                                    documents présents dans sa racine, et affiche le bon template.</p>
                                <div class="card-metas">
                                    <p class="mb-0"><span class="text-gray font-secondary me-1">Catégorie
                                            :</span><a href="#!">WordPress</a>
                                    </p>
                                    <p><span class="text-gray font-secondary me-1">Publié le :</span><span class="text-gray">09/02/2023</span>
                                    </p>
                                </div>
                            </div>
                            <footer class="footer-card-bottom position-relative">
                                <a href="#" class="d-flex py-3 justify-content-center align-items-center btn btn-primary btn-card">Lire
                                    la suite<i class="ms-3 bi bi-arrow-right text-white"></i></a>
                            </footer>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-12 col-lg-6 col-xl-4 mt-3 mt-xl-0">
                        <div class="card shadow">
                            <header class="card-header-top position-relative">
                                <div class="overlay"></div>
                                <div class="card-title-wrapper p-3">
                                    <h3 class="h4 card-title">WordPress Loop</h3>
                                </div>

                            </header>
                            <div class="card-body">
                                <h4 class="h5 fw-bold mt-1">La Boucle</h4>
                                <p class="card-text">Découvrez dans cet article, comment WordPress utilise son
                                    système de boucle pour afficher les bons éléments.</p>
                                <div class="card-metas">
                                    <p class="mb-0"><span class="text-gray font-secondary me-1">Catégorie
                                            :</span><a href="#!">WordPress</a>
                                    </p>
                                    <p><span class="text-gray font-secondary me-1">Publié le :</span><span class="text-gray">09/02/2023</span>
                                    </p>
                                </div>
                            </div>
                            <footer class="footer-card-bottom position-relative">
                                <a href="#" class="d-flex py-3 justify-content-center align-items-center btn btn-primary btn-card">Lire
                                    la suite<i class="ms-3 bi bi-arrow-right text-white"></i></a>
                            </footer>
                        </div>
                    </div>

                    <!-- Display between lg and xl-->
                    <div class="col-6 d-none d-lg-flex d-xl-none justify-content-center align-items-center">
                        <img src="assets/img/hero-img-lg.svg" alt="" aria-hidden="true" id="img-deco">
                    </div>
                </div>

            </div>
        </div>
    </div>


</section>