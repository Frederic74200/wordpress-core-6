<?php
// Inclure l'en-tête du thème
get_header(); ?>
<h1><?php wp_title(); ?></h1>

<?php
// Vérifier s'il y a des articles à afficher
if (have_posts()) :
    // Boucle pour parcourir les articles
    while (have_posts()) : the_post(); ?>

        <article class="post">
            <h2><?php the_title(); ?></h2>

            <p class="post__meta">
                Publié le <?php the_time(get_option('date_format')); ?>
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>

            <?php the_excerpt(); ?>

            <p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
        </article> <?php endwhile;
            else : ?>

    <p>Aucun article trouvé.</p> <?php endif; ?>
<?php
// Inclure le pied de page du thème
get_footer(); ?>