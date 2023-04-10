<?php get_header(); ?>


<!-- on affiche le nom dans l'objet qui est la cible de notre requête + on bloque la saisie html via le dashbord wp pour que l'admin ne puisse pas modif si on ne connais pas son niv -->
<h1><?= esc_html(get_queried_object()->name); ?></h1>
<!-- on récupère la descr  -->
<p>
    <?= esc_html(get_queried_object()->description); ?>
</p>




<!-- on indique que l'on souhaite utiliser la taxonomie "sport" -->
<?php $sports = get_terms(['taxonomy' => 'sport']); ?>
<ul class="nav nav-pills my-4">
    <!-- on dit que pour chaque sport on souhaite afficher un li -->
    <?php foreach ($sports as $sport) : ?>
        <li class="nav-item">
            <!-- redirection des liens au clic -->
            <a href="<?= get_term_link($sport) ?>" class="nav-link <?= is_tax('sport', $sport->term_id) ? 'active' : '' ?>"><?= $sport->name ?></a>
        </li>
    <?php endforeach; ?>
</ul>

<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <!-- on appelle notre template post.php  -->
                <?php get_template_part('parts/card', 'post'); ?>
            </div>
        <?php endwhile ?>

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
    <p>Aucun article</p>
<?php endif; ?>

<?php get_footer() ?>