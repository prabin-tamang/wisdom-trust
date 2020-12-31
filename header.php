<?php
    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package Wisdom
     */
    
    ?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="\wp-content\themes\wisdom-trust\assets\favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="\wp-content\themes\wisdom-trust\assets\favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="\wp-content\themes\wisdom-trust\assets\favicon/favicon-16x16.png">
        <link rel="manifest" href="\wp-content\themes\wisdom-trust\assets\favicon/site.webmanifest">
        <link rel="mask-icon" href="\wp-content\themes\wisdom-trust\assets\favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#ffffff">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('overflow'); ?>>
        <?php wp_body_open(); ?>
        <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wisdom-trust' ); ?></a>
        <header id="masthead" class="site-header">
            <!-- HEADER START -->
            <div class="header-notification-bar full-width">

            <div class="container">   
               
   <div class="contact-details">
                    <ul>
                        <li>Location, London, UK</li>
                        <li>+7475865467</li>
                        <li>info@thewisdomtrust.org</li>
                    </ul>
                </div>

                <p class="important-message"><?php echo get_theme_mod('important_message','IMPORTANT MESSAGE - GET YOUR WISDOM CREDITS NOW!')?></p>

                   <div class="social-icons">
                <a href="https://www.facebook.com/thewisdomtrust" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28px" height="28px">
                        <g id="surface416438">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(20%,20%,20%);fill-opacity:1;" d="M 17 3 L 7 3 C 4.789062 3 3 4.789062 3 7 L 3 17 C 3 19.210938 4.789062 21 7 21 L 12.621094 21 L 12.621094 14.039062 L 10.277344 14.039062 L 10.277344 11.3125 L 12.621094 11.3125 L 12.621094 9.308594 C 12.621094 6.984375 14.042969 5.71875 16.117188 5.71875 C 16.816406 5.714844 17.511719 5.753906 18.207031 5.824219 L 18.207031 8.253906 L 16.78125 8.253906 C 15.648438 8.253906 15.429688 8.785156 15.429688 9.574219 L 15.429688 11.308594 L 18.128906 11.308594 L 17.777344 14.035156 L 15.414062 14.035156 L 15.414062 21 L 17 21 C 19.210938 21 21 19.210938 21 17 L 21 7 C 21 4.789062 19.210938 3 17 3 Z M 17 3 "/>
                        </g>
                    </svg>
                </a>
                <a href="https://twitter.com/TheWisdomTrust" target="_blank">
         
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28px" height="28px">
                <g id="surface493758">
                <path style=" stroke:none;fill-rule:nonzero;fill:rgb(20%,20%,20%);fill-opacity:1;" d="M 17 3 L 7 3 C 4.789062 3 3 4.789062 3 7 L 3 17 C 3 19.210938 4.789062 21 7 21 L 17 21 C 19.210938 21 21 19.210938 21 17 L 21 7 C 21 4.789062 19.210938 3 17 3 Z M 17.050781 9.515625 C 17.050781 9.601562 17.050781 9.683594 17.050781 9.855469 C 17.050781 13.113281 14.5625 16.886719 10.019531 16.886719 C 8.648438 16.886719 7.363281 16.457031 6.25 15.773438 C 6.421875 15.773438 6.679688 15.773438 6.851562 15.773438 C 7.964844 15.773438 9.078125 15.34375 9.9375 14.742188 C 8.820312 14.742188 7.964844 13.972656 7.621094 13.027344 C 7.792969 13.027344 7.964844 13.113281 8.050781 13.113281 C 8.308594 13.113281 8.480469 13.113281 8.738281 13.027344 C 7.621094 12.773438 6.765625 11.828125 6.765625 10.628906 C 7.109375 10.800781 7.453125 10.886719 7.878906 10.972656 C 7.195312 10.371094 6.765625 9.6875 6.765625 8.828125 C 6.765625 8.398438 6.851562 7.972656 7.109375 7.628906 C 8.308594 9.085938 10.109375 10.113281 12.164062 10.199219 C 12.164062 10.027344 12.078125 9.855469 12.078125 9.601562 C 12.078125 8.230469 13.195312 7.113281 14.566406 7.113281 C 15.253906 7.113281 15.9375 7.371094 16.367188 7.886719 C 16.964844 7.800781 17.480469 7.542969 17.910156 7.285156 C 17.738281 7.886719 17.308594 8.3125 16.796875 8.65625 C 17.308594 8.570312 17.738281 8.484375 18.253906 8.226562 C 17.90625 8.742188 17.480469 9.171875 17.050781 9.515625 Z M 17.050781 9.515625 "/>
                </g>
                </svg>

                </a>
                <a href="https://www.instagram.com/the_wisdom_trust/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28px" height="28px">
                        <g id="surface329108">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(20%,20%,20%);fill-opacity:1;" d="M 8.25 2.5 C 5.078125 2.5 2.5 5.078125 2.5 8.25 L 2.5 15.75 C 2.5 18.921875 5.078125 21.5 8.25 21.5 L 15.75 21.5 C 18.921875 21.5 21.5 18.921875 21.5 15.75 L 21.5 8.25 C 21.5 5.078125 18.921875 2.5 15.75 2.5 Z M 17 6 C 17.550781 6 18 6.449219 18 7 C 18 7.550781 17.550781 8 17 8 C 16.449219 8 16 7.550781 16 7 C 16 6.449219 16.449219 6 17 6 Z M 12 7 C 14.757812 7 17 9.242188 17 12 C 17 14.757812 14.757812 17 12 17 C 9.242188 17 7 14.757812 7 12 C 7 9.242188 9.242188 7 12 7 Z M 12 8.5 C 10.066406 8.5 8.5 10.066406 8.5 12 C 8.5 13.933594 10.066406 15.5 12 15.5 C 13.933594 15.5 15.5 13.933594 15.5 12 C 15.5 10.066406 13.933594 8.5 12 8.5 Z M 12 8.5 "/>
                        </g>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/thewisdomtrust/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28px" height="28px">
                        <g id="surface331340">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(20%,20%,20%);fill-opacity:1;" d="M 19 3 L 5 3 C 3.894531 3 3 3.894531 3 5 L 3 19 C 3 20.105469 3.894531 21 5 21 L 19 21 C 20.105469 21 21 20.105469 21 19 L 21 5 C 21 3.894531 20.105469 3 19 3 Z M 9 17 L 6.476562 17 L 6.476562 10 L 9 10 Z M 7.695312 8.71875 C 6.921875 8.71875 6.40625 8.203125 6.40625 7.515625 C 6.40625 6.832031 6.921875 6.316406 7.777344 6.316406 C 8.550781 6.316406 9.066406 6.832031 9.066406 7.515625 C 9.066406 8.203125 8.550781 8.71875 7.695312 8.71875 Z M 18 17 L 15.558594 17 L 15.558594 13.175781 C 15.558594 12.117188 14.90625 11.871094 14.664062 11.871094 C 14.417969 11.871094 13.605469 12.035156 13.605469 13.175781 C 13.605469 13.335938 13.605469 17 13.605469 17 L 11.082031 17 L 11.082031 10 L 13.605469 10 L 13.605469 10.976562 C 13.929688 10.40625 14.582031 10 15.800781 10 C 17.023438 10 18 10.976562 18 13.175781 Z M 18 17 "/>
                        </g>
                    </svg>
                </a>
              
            </div>
        </div>
            </div>
            <div class="navigation-bar">
                <div class="full-width">
                    <div class="mobile-nav">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24px" height="24px">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                        </svg>
                    </div>
                    <!-- site logo -->
                    <div class="site-logo">
                        <a href="/"><img src="/wp-content/themes/wisdom-trust/assets/images/logo.png"></a>
                    </div>
                    <nav id="site-navigation" class="main-navigation">
                        <a href="/"><img src="/wp-content/themes/wisdom-trust/assets/images/logo.png"></a>
                        <?php
                            wp_nav_menu(
                            	array(
                            		'theme_location' => 'menu-1',
                            		'menu_id'        => 'primary-menu',
                            		'container' => false
                            	)
                            );
                            ?>
                    </nav>
                    <!-- #site-navigation -->
                    <div id="search">
                        <form action="/" method="get">
                            <button type="submit" class="searchBtn">
                                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="24px" height="24px">
                                    <path d="M 20.5 6 C 12.509634 6 6 12.50964 6 20.5 C 6 28.49036 12.509634 35 20.5 35 C 23.956359 35 27.133709 33.779044 29.628906 31.75 L 39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453 L 31.75 29.628906 C 33.779044 27.133709 35 23.956357 35 20.5 C 35 12.50964 28.490366 6 20.5 6 z M 20.5 9 C 26.869047 9 32 14.130957 32 20.5 C 32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016 C 26.405717 30.776199 23.602614 32 20.5 32 C 14.130953 32 9 26.869043 9 20.5 C 9 14.130957 14.130953 9 20.5 9 z"/>
                                </svg>
                            </button>
                            <input type="text" name="s" placeholder="Search..." id="search" value="<?php the_search_query(); ?>">
                        </form>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <?php if( is_front_page() ) { ?>
            <?php get_template_part( 'template-parts/content', 'banner' ); ?>
            <?php } ?>	
        </header>
        <!-- #masthead -->