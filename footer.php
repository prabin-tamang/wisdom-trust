<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package Wisdom
     */
    
    ?>
<footer id="colophon" class="site-footer">
    <div class="site-info full-width">
        <div class="container">
            <div class="company-info">
                <h3>The Wisdom Trust</h3>
                <p>© <?php echo date('Y'); ?> The Wisdom Trust. Charity registration number: 1112323.  </p>
            </div>
            <div class="site-map">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-2',
                            'menu_id'        => 'secondary-menu',
                            'container' => false
                        )
                    );
                    ?>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com/thewisdomtrust" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28px" height="28px">
                        <g id="surface416438">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 17 3 L 7 3 C 4.789062 3 3 4.789062 3 7 L 3 17 C 3 19.210938 4.789062 21 7 21 L 12.621094 21 L 12.621094 14.039062 L 10.277344 14.039062 L 10.277344 11.3125 L 12.621094 11.3125 L 12.621094 9.308594 C 12.621094 6.984375 14.042969 5.71875 16.117188 5.71875 C 16.816406 5.714844 17.511719 5.753906 18.207031 5.824219 L 18.207031 8.253906 L 16.78125 8.253906 C 15.648438 8.253906 15.429688 8.785156 15.429688 9.574219 L 15.429688 11.308594 L 18.128906 11.308594 L 17.777344 14.035156 L 15.414062 14.035156 L 15.414062 21 L 17 21 C 19.210938 21 21 19.210938 21 17 L 21 7 C 21 4.789062 19.210938 3 17 3 Z M 17 3 "/>
                        </g>
                    </svg>
                </a>
                <a href="https://twitter.com/TheWisdomTrust" target="_blank">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28px" height="28px">
                <g id="surface493758">
                <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 17 3 L 7 3 C 4.789062 3 3 4.789062 3 7 L 3 17 C 3 19.210938 4.789062 21 7 21 L 17 21 C 19.210938 21 21 19.210938 21 17 L 21 7 C 21 4.789062 19.210938 3 17 3 Z M 17.050781 9.515625 C 17.050781 9.601562 17.050781 9.683594 17.050781 9.855469 C 17.050781 13.113281 14.5625 16.886719 10.019531 16.886719 C 8.648438 16.886719 7.363281 16.457031 6.25 15.773438 C 6.421875 15.773438 6.679688 15.773438 6.851562 15.773438 C 7.964844 15.773438 9.078125 15.34375 9.9375 14.742188 C 8.820312 14.742188 7.964844 13.972656 7.621094 13.027344 C 7.792969 13.027344 7.964844 13.113281 8.050781 13.113281 C 8.308594 13.113281 8.480469 13.113281 8.738281 13.027344 C 7.621094 12.773438 6.765625 11.828125 6.765625 10.628906 C 7.109375 10.800781 7.453125 10.886719 7.878906 10.972656 C 7.195312 10.371094 6.765625 9.6875 6.765625 8.828125 C 6.765625 8.398438 6.851562 7.972656 7.109375 7.628906 C 8.308594 9.085938 10.109375 10.113281 12.164062 10.199219 C 12.164062 10.027344 12.078125 9.855469 12.078125 9.601562 C 12.078125 8.230469 13.195312 7.113281 14.566406 7.113281 C 15.253906 7.113281 15.9375 7.371094 16.367188 7.886719 C 16.964844 7.800781 17.480469 7.542969 17.910156 7.285156 C 17.738281 7.886719 17.308594 8.3125 16.796875 8.65625 C 17.308594 8.570312 17.738281 8.484375 18.253906 8.226562 C 17.90625 8.742188 17.480469 9.171875 17.050781 9.515625 Z M 17.050781 9.515625 "/>
                </g>
                </svg>

                </a>
                <a href="https://www.instagram.com/the_wisdom_trust/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28px" height="28px">
                        <g id="surface329108">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 8.25 2.5 C 5.078125 2.5 2.5 5.078125 2.5 8.25 L 2.5 15.75 C 2.5 18.921875 5.078125 21.5 8.25 21.5 L 15.75 21.5 C 18.921875 21.5 21.5 18.921875 21.5 15.75 L 21.5 8.25 C 21.5 5.078125 18.921875 2.5 15.75 2.5 Z M 17 6 C 17.550781 6 18 6.449219 18 7 C 18 7.550781 17.550781 8 17 8 C 16.449219 8 16 7.550781 16 7 C 16 6.449219 16.449219 6 17 6 Z M 12 7 C 14.757812 7 17 9.242188 17 12 C 17 14.757812 14.757812 17 12 17 C 9.242188 17 7 14.757812 7 12 C 7 9.242188 9.242188 7 12 7 Z M 12 8.5 C 10.066406 8.5 8.5 10.066406 8.5 12 C 8.5 13.933594 10.066406 15.5 12 15.5 C 13.933594 15.5 15.5 13.933594 15.5 12 C 15.5 10.066406 13.933594 8.5 12 8.5 Z M 12 8.5 "/>
                        </g>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/thewisdomtrust/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28px" height="28px">
                        <g id="surface331340">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 19 3 L 5 3 C 3.894531 3 3 3.894531 3 5 L 3 19 C 3 20.105469 3.894531 21 5 21 L 19 21 C 20.105469 21 21 20.105469 21 19 L 21 5 C 21 3.894531 20.105469 3 19 3 Z M 9 17 L 6.476562 17 L 6.476562 10 L 9 10 Z M 7.695312 8.71875 C 6.921875 8.71875 6.40625 8.203125 6.40625 7.515625 C 6.40625 6.832031 6.921875 6.316406 7.777344 6.316406 C 8.550781 6.316406 9.066406 6.832031 9.066406 7.515625 C 9.066406 8.203125 8.550781 8.71875 7.695312 8.71875 Z M 18 17 L 15.558594 17 L 15.558594 13.175781 C 15.558594 12.117188 14.90625 11.871094 14.664062 11.871094 C 14.417969 11.871094 13.605469 12.035156 13.605469 13.175781 C 13.605469 13.335938 13.605469 17 13.605469 17 L 11.082031 17 L 11.082031 10 L 13.605469 10 L 13.605469 10.976562 C 13.929688 10.40625 14.582031 10 15.800781 10 C 17.023438 10 18 10.976562 18 13.175781 Z M 18 17 "/>
                        </g>
                    </svg>
                </a>
                <a href="https://www.youtube.com/user/WisdomTrustTV" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28px" height="28px">
                        <g id="surface402462">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 5.679688 2 L 7.160156 7.34375 L 7.160156 9.90625 L 8.441406 9.90625 L 8.441406 7.34375 L 9.9375 2 L 8.644531 2 L 8.109375 4.433594 C 7.957031 5.140625 7.863281 5.644531 7.820312 5.949219 L 7.78125 5.949219 C 7.714844 5.527344 7.621094 5.019531 7.488281 4.421875 L 6.972656 2 Z M 11.433594 4.015625 C 10.996094 4.015625 10.648438 4.101562 10.382812 4.277344 C 10.113281 4.449219 9.917969 4.722656 9.792969 5.097656 C 9.667969 5.476562 9.605469 5.976562 9.605469 6.597656 L 9.605469 7.4375 C 9.605469 8.050781 9.65625 8.546875 9.769531 8.914062 C 9.878906 9.285156 10.0625 9.558594 10.324219 9.738281 C 10.585938 9.914062 10.945312 10 11.402344 10 C 11.847656 10 12.203125 9.914062 12.464844 9.742188 C 12.722656 9.566406 12.910156 9.296875 13.027344 8.921875 C 13.144531 8.546875 13.203125 8.054688 13.203125 7.4375 L 13.203125 6.597656 C 13.203125 5.976562 13.140625 5.480469 13.023438 5.105469 C 12.90625 4.734375 12.714844 4.457031 12.457031 4.28125 C 12.199219 4.105469 11.859375 4.019531 11.433594 4.019531 Z M 13.878906 4.128906 L 13.878906 8.445312 C 13.878906 8.980469 13.96875 9.371094 14.148438 9.625 C 14.332031 9.875 14.613281 10 14.996094 10 C 15.550781 10 15.964844 9.734375 16.242188 9.199219 L 16.269531 9.199219 L 16.382812 9.90625 L 17.402344 9.90625 L 17.402344 4.132812 L 16.101562 4.132812 L 16.101562 8.71875 C 16.050781 8.824219 15.976562 8.914062 15.871094 8.984375 C 15.765625 9.050781 15.660156 9.085938 15.546875 9.085938 C 15.414062 9.085938 15.320312 9.03125 15.265625 8.921875 C 15.207031 8.8125 15.175781 8.628906 15.175781 8.371094 L 15.175781 4.132812 Z M 11.402344 4.910156 C 11.585938 4.910156 11.714844 5.007812 11.785156 5.199219 C 11.855469 5.390625 11.894531 5.695312 11.894531 6.109375 L 11.894531 7.910156 C 11.894531 8.335938 11.855469 8.644531 11.785156 8.832031 C 11.714844 9.019531 11.585938 9.113281 11.40625 9.117188 C 11.222656 9.117188 11.097656 9.019531 11.027344 8.832031 C 10.957031 8.644531 10.925781 8.335938 10.925781 7.910156 L 10.925781 6.109375 C 10.925781 5.695312 10.960938 5.390625 11.03125 5.199219 C 11.101562 5.007812 11.226562 4.910156 11.402344 4.910156 Z M 5 11 C 3.898438 11 3 11.898438 3 13 L 3 20 C 3 21.101562 3.898438 22 5 22 L 19 22 C 20.101562 22 21 21.101562 21 20 L 21 13 C 21 11.898438 20.101562 11 19 11 Z M 12.046875 13 L 13.105469 13 L 13.105469 15.566406 L 13.113281 15.566406 C 13.207031 15.382812 13.34375 15.234375 13.519531 15.117188 C 13.695312 15.003906 13.882812 14.949219 14.085938 14.949219 C 14.347656 14.949219 14.550781 15.019531 14.695312 15.15625 C 14.84375 15.292969 14.953125 15.515625 15.019531 15.824219 C 15.085938 16.132812 15.117188 16.558594 15.117188 17.105469 L 15.117188 17.875 L 15.121094 17.875 C 15.121094 18.605469 15.03125 19.136719 14.855469 19.480469 C 14.679688 19.820312 14.40625 19.992188 14.039062 19.992188 C 13.832031 19.992188 13.644531 19.945312 13.472656 19.847656 C 13.300781 19.753906 13.175781 19.625 13.089844 19.457031 L 13.066406 19.457031 L 12.957031 19.917969 L 12.050781 19.917969 Z M 5.484375 13.246094 L 8.738281 13.246094 L 8.738281 14.132812 L 7.648438 14.132812 L 7.648438 19.917969 L 6.574219 19.917969 L 6.574219 14.132812 L 5.484375 14.132812 Z M 17.097656 14.953125 C 17.472656 14.953125 17.761719 15.019531 17.964844 15.160156 C 18.164062 15.296875 18.308594 15.511719 18.390625 15.804688 C 18.472656 16.09375 18.515625 16.496094 18.515625 17.011719 L 18.515625 17.847656 L 16.675781 17.847656 L 16.675781 18.09375 C 16.675781 18.410156 16.6875 18.644531 16.707031 18.796875 C 16.722656 18.953125 16.761719 19.070312 16.820312 19.140625 C 16.878906 19.210938 16.96875 19.25 17.089844 19.25 C 17.253906 19.25 17.367188 19.183594 17.429688 19.058594 C 17.488281 18.929688 17.523438 18.71875 17.527344 18.421875 L 18.476562 18.476562 C 18.480469 18.519531 18.484375 18.578125 18.484375 18.652344 C 18.484375 19.101562 18.359375 19.441406 18.109375 19.660156 C 17.863281 19.886719 17.515625 19.996094 17.066406 19.996094 C 16.527344 19.996094 16.144531 19.824219 15.925781 19.488281 C 15.710938 19.148438 15.601562 18.625 15.601562 17.914062 L 15.601562 17.0625 C 15.601562 16.328125 15.714844 15.792969 15.9375 15.457031 C 16.164062 15.121094 16.550781 14.953125 17.097656 14.953125 Z M 8.410156 15.042969 L 9.507812 15.042969 L 9.507812 18.625 C 9.507812 18.84375 9.535156 18.996094 9.582031 19.089844 C 9.628906 19.183594 9.707031 19.230469 9.820312 19.230469 C 9.914062 19.230469 10.007812 19.199219 10.09375 19.140625 C 10.183594 19.082031 10.246094 19.007812 10.289062 18.917969 L 10.289062 15.042969 L 11.386719 15.042969 L 11.386719 19.917969 L 10.527344 19.917969 L 10.433594 19.324219 L 10.40625 19.324219 C 10.175781 19.773438 9.824219 20 9.355469 20 C 9.035156 20 8.796875 19.894531 8.640625 19.683594 C 8.488281 19.46875 8.410156 19.136719 8.410156 18.6875 Z M 17.074219 15.691406 C 16.957031 15.691406 16.871094 15.730469 16.8125 15.796875 C 16.757812 15.867188 16.722656 15.980469 16.703125 16.132812 C 16.683594 16.289062 16.675781 16.527344 16.675781 16.84375 L 16.675781 17.195312 L 17.476562 17.195312 L 17.476562 16.84375 C 17.476562 16.53125 17.46875 16.296875 17.445312 16.132812 C 17.425781 15.972656 17.386719 15.859375 17.332031 15.792969 C 17.277344 15.726562 17.191406 15.691406 17.074219 15.691406 Z M 13.59375 15.730469 C 13.484375 15.730469 13.390625 15.769531 13.300781 15.855469 C 13.207031 15.941406 13.144531 16.050781 13.109375 16.183594 L 13.109375 18.949219 C 13.15625 19.035156 13.21875 19.097656 13.296875 19.140625 C 13.371094 19.183594 13.453125 19.203125 13.546875 19.203125 C 13.660156 19.203125 13.753906 19.164062 13.824219 19.078125 C 13.890625 18.992188 13.941406 18.851562 13.972656 18.648438 C 14 18.449219 14.015625 18.167969 14.015625 17.8125 L 14.015625 17.1875 C 14.015625 16.804688 14.003906 16.507812 13.980469 16.300781 C 13.953125 16.097656 13.910156 15.945312 13.851562 15.859375 C 13.789062 15.773438 13.703125 15.730469 13.59375 15.730469 Z M 13.59375 15.730469 "/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- .site-info -->
</footer>
<!-- #colophon -->
<!-- FOOTER END -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>