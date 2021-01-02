<?php
    /**
     * Template part for displaying page content in blog
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Wisdom
     */
    
    ?>
<h1><?php wp_title(''); ?></h1>
<div class="blog">
    <?php
        if(have_posts() ): while( have_posts() ): the_post(); ?>
    <article class="blog-post-content">
        <div class="blog-image">
            <?php if(has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
            <?php endif; ?>
            <div class="blog-content-wrap">
            <div class="blog-content">
                <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span> <?php echo get_the_date(); ?> </span>
                <a href="<?php the_permalink(); ?>">  <?php the_excerpt(); ?></a>
                 <a href="<?php the_permalink(); ?>" class="blog-link">READ THE STORY</a>
            </div>
        </div>
        </div>
    </article>
    <?php endwhile; else: endif; ?>
</div>