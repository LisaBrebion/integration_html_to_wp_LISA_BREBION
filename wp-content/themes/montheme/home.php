   <?php get_header(); ?>
   <!-- ***************************page article - blog******************** -->
   <main class="pb-5">


       <!-- ********************************************* -->
       <!-- Hero section -->
       <section id="a-propos">
           <div class="container">
               <div class="row align-items-center align-items-lg-start flex-column flex-lg-row-reverse mt-lg-5 pt-lg-3">
                   <div class="col-10 text-center col-sm-12 my-4 col-lg-4">
                       <!-- <i class="bi bi-flower1" style="font-size: 15rem"></i> -->
                   </div>
                   <div class="col-10 col-sm-12 col-lg-8 text-lg-start">
                       <p class="subtitle-h1">Mon journal de bord</p>
                       <h2 class="display-3 text-uppercase fw-800">Blog</h2>
                       <p class="lead">Pour des points bonus, je crée des articles de blog sur le déroulement de ce projet.</p>
                       </p>
                       <p class="fw-bold">Cette page doit être la page <code>home.php</code>.</p>
                       <div class="row">
                           <div class="col-12">
                               <a href="<?= bloginfo('url') . '/portfolio'; ?>" class="btn btn-outline-primary">Découvrir <i class="ms-1 bi bi-arrow-down-short ms-1"></i></a>
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
                       <h2 class="mb-0 fw-bold">Tous les articles</h2>
                       <p class="subtitle-h2">Du plus ancient au plus récent</p>
                   </div>

               </div>

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
                                       <a href="<?php the_permalink($post); ?>">
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
                                           <a href="<?php the_permalink(); ?>" class="d-flex py-3 justify-content-center align-items-center btn btn-primary btn-card"> Lire la suite <i class="bi bi-arrow-right text-white"></i>
                                           </a>
                                       </footer>
                                   </div>
                               </div>
                           <?php endforeach; ?>
                       </div>
       </section>
   </main>
   <?php
    get_footer();
    ?>