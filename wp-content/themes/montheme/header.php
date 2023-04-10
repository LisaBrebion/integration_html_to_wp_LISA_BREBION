<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>WP - From Noob to Ninja</title>

    <!-- Main style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- G fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Urbanist:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BS icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">



</head>

<body id="top">


    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start bg-offcanvas text-white" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header flex-column mt-3">

            <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" class="btn btn-close-offcanvas text-white" aria-label="Close"><i class="bi bi-x-lg fs-4"></i></button>

            <img src="<?= get_template_directory_uri() . 'assets/img/skull-wp-light.svg' ?>" alt="Logo-Skull-WP" id="logo-offcanvas">
            <div class="title-container position-relative mt-3">
                <h1 class="offcanvas-title text-center" id="offcanvasMenuLabel"><?= bloginfo("name"); ?><br> <span class="fs-5 fw-light"><?= bloginfo("description"); ?></span> </h1>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <span class="deco d-flex justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="pe-1 bi bi-star-fill text-dark" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ps-0 bi bi-star-fill text-dark" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ps-1 bi bi-star-fill text-dark" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </span>
                        <p class="lead pt-4">Découvrez comment passer d'une maquette statique, à un prototype pleinement
                            fonctionnel grâce au moteur du plus fameux des CMS.
                        </p>
                        <h2 class="fs-6 pt-3 pb-4 fw-normal">Devenez un expert de la création de thèmes !</h2>
                        <a href="https://github.com/El-Cassegrain/integration-html-to-wp-v2" class="btn btn-primary" id="btn-depot" target="_blank">Dépot GitHub du
                            projet<i class="ms-3 bi bi-github"></i></a>

                        <footer>
                            <div id="copyright" class="position-absolute w-100 bottom-0 start-50 translate-middle">©
                                Copyright 2023 |<span class="ms-1 d-inline-flex align-items-center"><a href="https://etienneleriche.fr/" target="_blank" class="text-light">Etienne
                                        Leriche</a></span>
                            </div>
                        </footer>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header id="main-header" class="position-fixed top-0 w-100">

        <!-- Navbar expand lg -->
        <nav class="navbar navbar-expand-lg bg-header shadow-sm border-bottom">
            <div class="container position-relative">

                <!-- Display Offcanvas -->
                <button class="btn ps-0" id="offcanvas-open-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"><i class="bi bi-text-left fs-4"></i></button>

                <a class="navbar-brand d-inline-flex align-items-center" href="#"><i class="me-2 bi bi-wordpress fs-3"></i><?php bloginfo('name'); ?></a>

                <!-- Mobile toggle menu until lg -->
                <div class="menu-tog-wrapper">
                    <div class="d-lg-none menu-tog">
                        <span></span>
                        <span></span>
                    </div>
                </div>


                <!-- Main nav -->
                <div class="collapse navbar-collapse pt-md-1" id="navbarSupportedContent">
                    <!-- on affiche/appelle l'affichage de notre menu / on lui précise que dans le theme location que l'on a crée, on souhaite utilisé c'est le menu qu'on a nommé "header" / " on paramètre "container a false pour enelver la div crée automatiquement avec les class de wordpress / on paramètre nos "li" et rajoute la class de bootstrap pour aligner en flex et enlever les puces -->
                    <?php wp_nav_menu([
                        'theme_location' => 'header',
                        'container' => false,
                        'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0'
                    ]); ?>
                    <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active px-3" aria-current="page" href="index.html">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="a-propos.html">À propos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link px-3" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 disabled" href="#!">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 me-3" href="credits.html">Crédits</a>
                        </li>
                    </ul> -->
                    <!-- Button trigger modal -->
                    <a class="btn btn-outline-dark" href="<?= bloginfo('url') . '/contact'; ?>"><i class="bi bi-envelope-fill me-2"></i>Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Mobile menu -->
    <div class="wrapper">
        <svg class="transition" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="path" stroke="#101621" fill="#FF5722" stroke-width="3px" vector-effect="non-scaling-stroke" d="M 0 100 L 0 100 100 100 100 100 C 50 100, 50 100, 0 100"></path>
            <animateMotion dur="10s" repeatCount="indefinite">
                <mpath xlink:href="#path" />
            </animateMotion>
        </svg>

    </div>