<?php
    /**
     * Template part for displaying posts
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Wisdom
     */
    
    ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php wisdom_trust_post_thumbnail(); ?>
    <div class="article-content">
        <header class="entry-header">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php
                    wisdom_trust_posted_on();
                    wisdom_trust_posted_by();
                    ?>
            </div>
            <!-- .entry-meta -->
            <?php endif; ?>
        </header>
        <!-- .entry-header -->
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
        <!-- .entry-summary -->
    </div>
</article>
<!-- #post-<?php the_ID(); ?> -->