<?php
    /**
     * Template part for displaying Homepage
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Wisdom
     */
    
    ?>
<div class="container">
    <section class="our-mission">
        <h2><?php echo get_theme_mod('mission_small_header', 'Our Mission'); ?></h2>
        <div class="mission-statement">
            <h3><?php echo get_theme_mod('misson_small_description_primary', 'The Wisdom Trust raises awareness about the important issues impacting the future of our planet – from poverty, to environmental and health issues.'); ?></h3>
            <p><?php echo get_theme_mod('misson_small_description_secondary', 'We make donations to support the work of other charities, good causes and not-for-profit initiatives both in the UK and around the world, and work with others to promote friendship, goodwill and mutual understanding across all borders.'); ?></p>
            <a href="<?php echo get_site_url() . '/' . get_theme_mod('mission_dropdown', 'mission-statement'); ?>" class="button --button-secondary">Learn More</a>
        </div>
    </section>
    <section class="ways-you-can-help full-width">
        <div class="container">
            <h2><?php echo get_theme_mod('what_we_do_small_header', 'What we do'); ?></h2>
            <div class="ways-of-help">
                <div class="what-we-do">
                    <div class="content-img-1">   
                        <img src="<?php echo get_theme_mod('what_we_do_image', get_bloginfo('template_url') . '/assets/images/support-help.jpeg'); ?>">
                    </div>
                    <div class="help-description">
                        <h3><?php echo get_theme_mod('what_we_do_sub_header', 'What we do'); ?></h3>
                        <p><?php echo get_theme_mod('what_we_do_small_description', 'We make donations to support the work of other charities, good causes and not-for-profit initiatives both in the UK and around the world, and work with others to promote friendship, goodwill and mutual understanding across all borders.')?></p>
                        <a href="<?php echo get_site_url() . '/' . get_theme_mod('what_we_do_dropdown', 'what-we-do'); ?>">Read More</a>
                    </div>
                </div>
                <div class="how-we-can-help">
                    <div class="content-img-2"> 
                        <img src="<?php echo get_theme_mod('what_we_do_image_2', get_bloginfo('template_url') . '/assets/images/alexandr-podvalny-221893-unsplash.jpg'); ?>">
                    </div>
                    <div class="help-description">
                        <h3><?php echo get_theme_mod('what_we_do_sub_header_2', 'How we can help you'); ?></h3>
                        <p><?php echo get_theme_mod('what_we_do_small_description_2', 'Our projects cover a whole range of exciting activities, including online learning, support for other causes, help for communities and grants for individuals. Here are just seven ways we believe The Wisdom Trust could help you.'); ?></p>
                        <a href="<?php echo get_site_url() . '/' . get_theme_mod('what_we_do_dropdown_2', 'how-we-can-help-you'); ?>">Read More</a>
                    </div>
                </div>
                <div class="how-you-can-help">
                    <div class="content-img-3">   
                        <img src="<?php echo get_theme_mod('what_we_do_image_3', get_bloginfo('template_url') . '/assets/images/header-children.jpg'); ?>">
                    </div>
                    <div class="help-description">
                        <h3><?php echo get_theme_mod('what_we_do_sub_header_3', 'How you can help us'); ?></h3>
                        <p><?php echo get_theme_mod('what_we_do_small_description_3', 'We view The Wisdom Trust as a partnership where everyone can benefit by helping each other. Whether its volunteering, being a leader in your community or inspiring others, there are so many ways you could help The Wisdom Trust.'); ?></p>
                        <a href="<?php echo get_site_url() . '/' . get_theme_mod('what_we_do_dropdown_3', 'how-you-can-help-us'); ?>">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="volunteer full-width">
        <div class="container">
            <h2><?php echo get_theme_mod('volunteer_small_header', 'Volunteer'); ?></h2>
            <div class="volunteer-description">
                <h3><?php echo get_theme_mod('volunteer_sub_header', 'Do a little - help a lot!'); ?></h3>
                <p><?php echo get_theme_mod('volunteer_description', 'As well as running projects to support charitable organisations, individuals and even whole communities, we also want to unleash the huge potential of a large army of volunteers in order to help make a difference around the world.  If you have any particular skills or experience – however small – then you have the power to change other people’s lives in a very positive way. Do a little – help a lot!'); ?></p>
                <a href="<?php echo get_site_url() . '/' . get_theme_mod('volunteer_dropdown', 'volunteers'); ?>" class="button --button-secondary">Learn More</a>
            </div>
            <div class="volunteer-steps full-width">
                <div class="container">
                    <div class="wisdom-volunteer">
                        <h3><?php echo get_theme_mod('volunteer_steps_heading_1', 'Volunteering with the wisdom'); ?></h3>
                        <p><?php echo get_theme_mod('volunteer_steps_description_1', 'Whether it’s working on our website, organising events, marketing, social media, compliance or fundraising, anyone can volunteer their time to help The Wisdom Trust.')?></p>
                    </div>
                    <div class="partner-volunteer">
                        <h3><?php echo get_theme_mod('volunteer_steps_heading_2', 'Volunteering With Our Partner Organisations'); ?></h3>
                        <p><?php echo get_theme_mod('volunteer_steps_description_2', 'Charities, good causes & other not-for-profit initiatives who register with us, can offer all sorts of volunteering roles on our website, to interest our members – free of charge.'); ?></p>
                    </div>
                    <div class="trust-ambassadors">
                        <h3><?php echo get_theme_mod('volunteer_steps_heading_3', 'Wisdom Trust Ambassadors'); ?></h3>
                        <p><?php echo get_theme_mod('volunteer_steps_description_3', 'Our ‘Experts On-The-Ground’ – Wisdom Trust Ambassadors work in local communities all over the world, co-ordinating local initiatives and bringing a ray of hope to those in need.'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wisdom">
        <div class="wisdom-container">
              <h2><?php echo get_theme_mod('wisdom_heading', 'Wisdom'); ?></h2>
            <div class="wisdomSlider fade">
                <div class="text">
                    <h3><?php echo get_theme_mod('wisdom_sub_heading_1', 'Wisdom'); ?></h3>
                    <p><?php echo get_theme_mod('wisdom_steps_description_1', 'We recognise the importance of sharing wisdom across communities and cultures as well as supporting equality of learning opportunities to help improve the lives of under privileged groups and society as a whole. Our Wisdom Trust values of collaboration, friendship & environmental sustainability are core to this mission.'); ?></p>
                    <a href="<?php echo get_site_url() . '/' . get_theme_mod('wisdom_dropdown_1', 'wisdom'); ?>" class="button --button-secondary">Learn More</a>
                </div>
            </div>
            <div class="wisdomSlider fade">
                <div class="text">
                    <h3><?php echo get_theme_mod('wisdom_sub_heading_2', 'Support'); ?></h3>
                    <p><?php echo get_theme_mod('wisdom_steps_description_2', 'Our goal is to support people, causes and global communities – firstly through grants to help individuals make positive changes in their lives; and secondly through regular donations from our fund to support the work of charities and not for profit good causes, all over the world – as voted for by the people using our website.'); ?></p>
                    <a href="<?php echo get_site_url() . '/' . get_theme_mod('wisdom_dropdown_2', 'support'); ?>" class="button --button-secondary">Learn More</a>
                </div>
            </div>
            <div class="wisdomSlider fade">
                <div class="text">
                    <h3><?php echo get_theme_mod('wisdom_sub_heading_3', 'Friendship'); ?></h3>
                    <p><?php echo get_theme_mod('wisdom_steps_description_3', 'We understand the transformative power that individuals can have in combating disadvantage when they have the support and friendship of those who share in a common goal. We are determined to do everything we can to overcome inequality, discrimination and exploitation, wherever we find it.'); ?></p>
                    <a href="<?php echo get_site_url() . '/' . get_theme_mod('wisdom_dropdown_3', 'friendship'); ?>" class="button --button-secondary">Learn More</a>
                </div>
            </div>
            <br>
            <div class="wdots">
                <span class="wdot"></span> 
                <span class="wdot"></span> 
                <span class="wdot"></span> 
            </div>
        </div>
        <!-- <a href="#" class="button --button-secondary">Learn More</a> -->
    </section>
    <section class="sign-up-now full-width">
        <div class="container">
            <div class="description">
                <h3><?php echo get_theme_mod('signup_heading', 'Helping you to live with a bit more wisdom.')?></h3>
                <p><?php echo get_theme_mod('signup_description', 'Learn || Inspire || Volunteer || Empower'); ?></p>
                <a href="<?php echo get_site_url() . '/' . get_theme_mod('signup_dropdown', 'register'); ?>" class="button --button-secondary">Sign up now</a>
            </div>
        </div>
    </section>
    <section class="recent-articles full-width">
        <div class="container">
            <h2><?php echo get_theme_mod('articles_heading', 'Recent Articles'); ?></h2>
            <!-- BLOG CONTENT -->
            <?php 
                $the_query = new WP_Query( 'posts_per_page=4' ); ?>   
            <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?>
            <article>
                <div class="blog-image">
                    <?php if(has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                    <?php endif; ?>
                </div>
                <div class="blog-content">
                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span>Posted Date : <?php echo get_the_date(); ?> </span>
                    <a href="<?php the_permalink(); ?>">  <?php the_excerpt(); ?></a>
                </div>
            </article>
            <?php 
                endwhile;
                wp_reset_postdata();
                ?>
        </div>
    </section>
    <!-- SOCIAL gallery -->
    <?php echo do_shortcode('[insta-gallery id="1"]'); ?>
</div>