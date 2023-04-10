<?php get_header(); ?>
<div class="pb-5">
    <section id="single">
        <!-- titre  -->
        <div class="container-fluid px=0">
            <div id="img-single-top" class="row px-0 mx-0" style="background-image:url(<?= the_post_thumbnail(); ?>)">
                <div class="overlay"></div>
                <div class="d-flex justify-content-center align-item-center">
                    <h1><?php the_title(); ?></h1>
                    <p class="h4 text-white mt-3"><?php the_field('article_subtitle'); ?></p>
                </div>
            </div>
        </div>

        <!-- content  -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-12 col-lg-8 mt-4 id=" post-excerpt-wrapper">
                    <?php the_excerpt(); ?>
                </div>
                <div class="col-10 col-sm-12 col-lg-8 mt-4" id="post-content-wrapper"> <?php the_content(); ?></div>
            </div>
        </div>



    </section>

</div>

<?php get_footer(); ?>