<?php get_header() ?>

<h1>Voir l'ensemble de mes créations </h1>
<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <!-- on appelle notre template post.php  -->
                <?php get_template_part('parts/post'); ?>
            </div>
        <?php endwhile; ?>
    </div>

    <!-- on met en place notre pagination pour pouvoir faire défiler les pages /// possibilité d'utiliser egalement the_posts_pagination(); // next_posts_link(); et previous_posts_link(); // ou encore  next_post_link();previous_posts_link(); pour afficher le nom des articles au défilement de la pagination -->

    <?php montheme_pagination(); ?>
    <!-- <nav aria-label="Page navigation example"> -->
    <!-- <ul class="pagination"> -->
    <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
    <!-- </ul> -->
    <!-- </nav> -->

<?php else : ?>
    <p>Aucune création disponible</p>
<?php endif; ?>

<?php get_footer() ?>