<?php /* Template Name: Wisdom About Page */ ?>


<?php get_header(); ?>

<main>
    <div class="container">
    <h1><?php the_title(); ?></h1>
        <?php get_template_part( 'template-parts/content', 'about' ); ?>
    </div>
</main>

<?php get_footer(); ?>