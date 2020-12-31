<div class="carousel">
    <div class="slideshow-container">
        <!-- slideshow -->
        <div class="mySlides fade">
            <!-- <div class="numbertext">1 / 3</div> -->
            <div class="banner-image">  
                <img src="<?php echo get_theme_mod('landing_image', get_bloginfo('template_url') . '/assets/images/header-children.jpg'); ?>" style="width:100%">
            </div>
            <div class="banner-text">
                <h1><?php echo get_theme_mod('landing_small_header', 'Have an impact on the future of our planet.'); ?></h1>
                <p><?php echo get_theme_mod('landing_text_area', 'We raise awareness about the important issues affecting the future of our planet – poverty, environment & health, and make donations to support the work of other charities & good causes worldwide.'); ?></p>
            </div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div>
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
</div>