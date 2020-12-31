<?php
/**
 * Wisdom Theme Customizer
 *
 * @package Wisdom
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wisdom_trust_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// HOMEPAGE PANEL

	$wp_customize->add_panel('home_page', array(
		'title' => 'Homepage',
		'priority' => 10,
		'capability' => 'edit_theme_options',
	));

	// important message section

	$wp_customize->add_section('message_page_home', array(
		'title'=> 'Message Section',
		'description'=> __("Important Message Section Customizer"),
		'panel' => 'home_page',
	));	


	// BANNER Section

	$wp_customize->add_section('banner_page_home', array(
		'title'=> 'Banner Section',
		'description'=> __("Home Section Customizer"),
		'panel' => 'home_page',
	));	

		// MISSION STATEMENT section

	$wp_customize->add_section('mission_page_home', array(
		'title'=> 'Our Mission Section',
		'description'=> __("Mission Section Customizer"),
		'panel' => 'home_page',
	));	

	
	// WHAT WE DO section

	$wp_customize->add_section('what_we_do_page_home', array(
		'title'=> 'What We Do Section',
		'description'=> __("What we do Section Customizer"),
		'panel' => 'home_page',
	));	

	
	// VOLUNTEER section

	$wp_customize->add_section('volunteer_page_home', array(
		'title'=> 'Volunteer Section',
		'description'=> __("Volunteer Section Customizer"),
		'panel' => 'home_page',
	));	

		
	// WISDOM section

	$wp_customize->add_section('wisdom_page_home', array(
		'title'=> 'Wisdom Section',
		'description'=> __("Wisdom Section Customizer"),
		'panel' => 'home_page',
	));	

		
	// RECENT ARTICLES section

	$wp_customize->add_section('articles_page_home', array(
		'title'=> 'Articles Section',
		'description'=> __("Articles Section Customizer"),
		'panel' => 'home_page',
	));	


		
	// SIGN UP NOW section

	$wp_customize->add_section('signup_page_home', array(
		'title'=> 'Sign Up Section',
		'description'=> __("Sign Up Section Customizer"),
		'panel' => 'home_page',
	));	


	// important message top section
	$wp_customize->add_setting('important_message', array(
		'default' => __('IMPORTANT MESSAGE - GET YOUR WISDOM CREDITS NOW!'),
	));

	$wp_customize->add_control('important_message', array(
		'label' => 'Message',
		'section' => 'message_page_home',
		'priority'=> 1,
	));
	
	// landing page header/banner section

	// banner image

	$wp_customize->add_setting('landing_image', array(
		'default' => get_bloginfo('template_url') . '/assets/images/header-children.jpg',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'landing_image', array(
		'label'=> 'Background Image',
		'section' => 'banner_page_home',
		'priority' => 2,
	)));

	// banner heading
	$wp_customize->add_setting('landing_small_header', array(
		'default' => __('Have an impact on the future of our planet.'),
	));

	$wp_customize->add_control('landing_small_header', array(
		'label' => 'Heading',
		'section' => 'banner_page_home',
		'priority'=> 3,
	));

	// banner description

	$wp_customize->add_setting('landing_text_area', array(
			'default' => __('We raise awareness about the important issues affecting the future of our planet – poverty, environment & health, and make donations to support the work of other charities & good causes worldwide..'),
	));

	$wp_customize->add_control('landing_text_area', array(
		'label' => 'Description',
		'section' => 'banner_page_home',
		'priority' => 4,
		'type' => 'textarea'
	));

	// landing page mission statement section

	// mission statement heading

	$wp_customize->add_setting('mission_small_header', array(
		'default' => __('Our Mission'),
	));

	$wp_customize->add_control('mission_small_header', array(
		'label' => 'Heading',
		'section' => 'mission_page_home',
		'priority'=> 5,
	));

	// mission statement description 1

	$wp_customize->add_setting('misson_small_description_primary', array(
		'default' => __('The Wisdom Trust raises awareness about the important issues impacting the future of our planet – from poverty, to environmental and health issues.'),
	));

	$wp_customize->add_control('misson_small_description_primary', array(
		'label' => 'Primary Description',
		'section' => 'mission_page_home',
		'priority'=> 6,
		'type' => 'textarea'
	));

	// mission statement description 2

	$wp_customize->add_setting('misson_small_description_secondary', array(
		'default' => __('We make donations to support the work of other charities, good causes and not-for-profit initiatives both in the UK and around the world, and work with others to promote friendship, goodwill and mutual understanding across all borders.'),
	));

	$wp_customize->add_control('misson_small_description_secondary', array(
		'label' => 'Secondary Description',
		'section' => 'mission_page_home',
		'priority'=> 7,
		'type' => 'textarea'
	));


	// mission statement link
	$wp_customize->add_setting('mission_dropdown', array(
		'default' => 'Learn More',
	));

	$wp_customize->add_control('mission_dropdown', array(
		'label' => 'Select Your Link',
		'priority' => 8,
		'section' => 'mission_page_home',
		'type' => 'select',
		'choices' => array(
			'mission' => 'mission-statement',
			'about' => 'about-us',
			'charities' => 'charities',
			'volunteering' => 'volunteering',
			'support your cause' => 'support-your-cause',
			'grants' => 'grants',
			'news' => 'news',
			'wisdom trust grants' => 'wisdom-trust-grants',
			'supporting positive change' => 'supporting-positive-change',
			'your wisdom trust grand fund' => 'your-wisdom-trust-grand-fund',
			'wisdom trust ambassadors' => 'wisdom-trust-ambassadors',
			'community outreach' => 'community-out-reach',
			'wisdom library' => 'wisdom-library',
			'library of wisdom' => 'library-of-wisdom',
			'inspiration zone' => 'inspiration-zone',
			'empowerment zone' => 'empowerment-zone',
			'learning zone' => 'learning zone',
			'thrifty tips and special offers' => 'thrifty-tips-and-special-offers',
			'how we can help you' => 'how-we-can-help-you',
			'what we do' => 'what-we-do',
			'how you can help us' => 'how-you-can-help-us',
			'volunteers' => 'volunteers',
			'wisdom' => 'wisdom',
			'support' => 'support',
			'register' => 'register',
		),
	));


	// landing page what we do section


	// WHAT WE DO heading

	$wp_customize->add_setting('what_we_do_small_header', array(
		'default' => __('What we do'),
	));

	$wp_customize->add_control('what_we_do_small_header', array(
		'label' => 'Heading',
		'section' => 'what_we_do_page_home',
		'priority'=> 9,
	));
	

	// WHAT WE DO ROW 1


	// What we do ROW 1 IMAGE

	$wp_customize->add_setting('what_we_do_image', array(
		'default' => get_bloginfo('template_url') . '/assets/images/support-help.jpeg',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'what_we_do_image', array(
		'label'=> 'Image 1',
		'section' => 'what_we_do_page_home',
		'priority' => 10,
	)));

	// what we do ROW 1 SUB HEADING


	$wp_customize->add_setting('what_we_do_sub_header', array(
		'default' => __('What we do'),
	));

	$wp_customize->add_control('what_we_do_sub_header', array(
		'label' => 'Sub Heading 1',
		'section' => 'what_we_do_page_home',
		'priority'=> 11,
	));
	
	// WHAT WE DO ROW 1 DESCRIPTION

	$wp_customize->add_setting('what_we_do_small_description', array(
		'default' => __('We make donations to support the work of other charities, good causes and not-for-profit initiatives both in the UK and around the world, and work with others to promote friendship, goodwill and mutual understanding across all borders.'),
	));

	$wp_customize->add_control('what_we_do_small_description', array(
		'label' => 'Secondary Description 1',
		'section' => 'what_we_do_page_home',
		'priority'=> 12,
		'type' => 'textarea'
	));

	// WHAT WE DO ROW 1 LINKS

	$wp_customize->add_setting('what_we_do_dropdown', array(
		'default' => 'Learn More',
	));

	$wp_customize->add_control('what_we_do_dropdown', array(
		'label' => 'Select Your Link 1',
		'priority' => 13,
		'section' => 'what_we_do_page_home',
		'type' => 'select',
		'choices' => array(
				'mission' => 'mission-statement',
			'about' => 'about-us',
			'charities' => 'charities',
			'volunteering' => 'volunteering',
			'support your cause' => 'support-your-cause',
			'grants' => 'grants',
			'news' => 'news',
			'wisdom trust grants' => 'wisdom-trust-grants',
			'supporting positive change' => 'supporting-positive-change',
			'your wisdom trust grand fund' => 'your-wisdom-trust-grand-fund',
			'wisdom trust ambassadors' => 'wisdom-trust-ambassadors',
			'community outreach' => 'community-out-reach',
			'wisdom library' => 'wisdom-library',
			'library of wisdom' => 'library-of-wisdom',
			'inspiration zone' => 'inspiration-zone',
			'empowerment zone' => 'empowerment-zone',
			'learning zone' => 'learning zone',
			'thrifty tips and special offers' => 'thrifty-tips-and-special-offers',
			'how we can help you' => 'how-we-can-help-you',
			'what we do' => 'what-we-do',
			'how you can help us' => 'how-you-can-help-us',
			'volunteers' => 'volunteers',
			'wisdom' => 'wisdom',
			'support' => 'support',
			'register' => 'register',
		),
	));


	// WHAT WE DO ROW 2


	
	$wp_customize->add_setting('what_we_do_image_2', array(
		'default' => get_bloginfo('template_url') . '/assets/images/support-help.jpeg',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'what_we_do_image_2', array(
		'label'=> 'Image 2',
		'section' => 'what_we_do_page_home',
		'priority' => 14,
	)));

	// what we do ROW 2 SUB HEADING


	$wp_customize->add_setting('what_we_do_sub_header_2', array(
		'default' => __('How we can help you'),
	));

	$wp_customize->add_control('what_we_do_sub_header_2', array(
		'label' => 'Sub Heading 2',
		'section' => 'what_we_do_page_home',
		'priority'=> 15,
	));
	
	// WHAT WE DO ROW 2 DESCRIPTION

	$wp_customize->add_setting('what_we_do_small_description_2', array(
		'default' => __('Our projects cover a whole range of exciting activities, including online learning, support for other causes, help for communities and grants for individuals. Here are just seven ways we believe The Wisdom Trust could help you.'),
	));

	$wp_customize->add_control('what_we_do_small_description_2', array(
		'label' => 'Secondary Description 2',
		'section' => 'what_we_do_page_home',
		'priority'=> 16,
		'type' => 'textarea'
	));

	// WHAT WE DO ROW 2 LINKS

	$wp_customize->add_setting('what_we_do_dropdown_2', array(
		'default' => 'Learn More',
	));

	$wp_customize->add_control('what_we_do_dropdown_2', array(
		'label' => 'Select Your Link 2',
		'priority' => 17,
		'section' => 'what_we_do_page_home',
		'type' => 'select',
		'choices' => array(
			'mission' => 'mission-statement',
			'about' => 'about-us',
			'charities' => 'charities',
			'volunteering' => 'volunteering',
			'support your cause' => 'support-your-cause',
			'grants' => 'grants',
			'news' => 'news',
			'wisdom trust grants' => 'wisdom-trust-grants',
			'supporting positive change' => 'supporting-positive-change',
			'your wisdom trust grand fund' => 'your-wisdom-trust-grand-fund',
			'wisdom trust ambassadors' => 'wisdom-trust-ambassadors',
			'community outreach' => 'community-out-reach',
			'wisdom library' => 'wisdom-library',
			'library of wisdom' => 'library-of-wisdom',
			'inspiration zone' => 'inspiration-zone',
			'empowerment zone' => 'empowerment-zone',
			'learning zone' => 'learning zone',
			'thrifty tips and special offers' => 'thrifty-tips-and-special-offers',
				'how we can help you' => 'how-we-can-help-you',
			'what we do' => 'what-we-do',
			'how you can help us' => 'how-you-can-help-us',
			'volunteers' => 'volunteers',
			'wisdom' => 'wisdom',
			'support' => 'support',
			'register' => 'register',
		),
	));




	// WHAT WE DO ROW 3

	$wp_customize->add_setting('what_we_do_image_3', array(
		'default' => get_bloginfo('template_url') . '/assets/images/header-children.jpg',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'what_we_do_image_3', array(
		'label'=> 'Image 3',
		'section' => 'what_we_do_page_home',
		'priority' => 18,
	)));

	// what we do ROW 3 SUB HEADING


	$wp_customize->add_setting('what_we_do_sub_header_3', array(
		'default' => __('How you can help us'),
	));

	$wp_customize->add_control('what_we_do_sub_header_3', array(
		'label' => 'Sub Heading 3',
		'section' => 'what_we_do_page_home',
		'priority'=> 19,
	));
	
	// WHAT WE DO ROW 3 DESCRIPTION

	$wp_customize->add_setting('what_we_do_small_description_3', array(
		'default' => __('We view The Wisdom Trust as a partnership where everyone can benefit by helping each other. Whether its volunteering, being a leader in your community or inspiring others, there are so many ways you could help The Wisdom Trust.'),
	));

	$wp_customize->add_control('what_we_do_small_description_3', array(
		'label' => 'Secondary Description 3',
		'section' => 'what_we_do_page_home',
		'priority'=> 20,
		'type' => 'textarea'
	));

	// WHAT WE DO ROW 3 LINKS

	$wp_customize->add_setting('what_we_do_dropdown_3', array(
		'default' => 'Learn More',
	));

	$wp_customize->add_control('what_we_do_dropdown_3', array(
		'label' => 'Select Your Link 3',
		'priority' => 21,
		'section' => 'what_we_do_page_home',
		'type' => 'select',
		'choices' => array(
				'mission' => 'mission-statement',
			'about' => 'about-us',
			'charities' => 'charities',
			'volunteering' => 'volunteering',
			'support your cause' => 'support-your-cause',
			'grants' => 'grants',
			'news' => 'news',
			'wisdom trust grants' => 'wisdom-trust-grants',
			'supporting positive change' => 'supporting-positive-change',
			'your wisdom trust grand fund' => 'your-wisdom-trust-grand-fund',
			'wisdom trust ambassadors' => 'wisdom-trust-ambassadors',
			'community outreach' => 'community-out-reach',
			'wisdom library' => 'wisdom-library',
			'library of wisdom' => 'library-of-wisdom',
			'inspiration zone' => 'inspiration-zone',
			'empowerment zone' => 'empowerment-zone',
			'learning zone' => 'learning zone',
			'thrifty tips and special offers' => 'thrifty-tips-and-special-offers',
				'how we can help you' => 'how-we-can-help-you',
			'what we do' => 'what-we-do',
			'how you can help us' => 'how-you-can-help-us',
			'volunteers' => 'volunteers',
			'wisdom' => 'wisdom',
			'support' => 'support',
			'register' => 'register',
		),
	));

	// VOLUNTEER SECTION

		// Volunteer heading

	$wp_customize->add_setting('volunteer_small_header', array(
		'default' => __('Volunteer'),
	));

	$wp_customize->add_control('volunteer_small_header', array(
		'label' => 'Heading',
		'section' => 'volunteer_page_home',
		'priority'=> 22,
	));


	// Volunteer sub heading


	$wp_customize->add_setting('volunteer_sub_header', array(
		'default' => __('How you can help us'),
	));

	$wp_customize->add_control('volunteer_sub_header', array(
		'label' => 'Volunteer Sub Heading',
		'section' => 'volunteer_page_home',
		'priority'=> 23,
	));


	// Volunteer description

	$wp_customize->add_setting('volunteer_description', array(
		'default' => __('As well as running projects to support charitable organisations, individuals and even whole communities, we also want to unleash the huge potential of a large army of volunteers in order to help make a difference around the world.  If you have any particular skills or experience – however small – then you have the power to change other people’s lives in a very positive way. Do a little – help a lot!'),
	));

	$wp_customize->add_control('volunteer_description', array(
		'label' => 'Volunteer Description',
		'section' => 'volunteer_page_home',
		'priority'=> 24,
		'type' => 'textarea'
	));


	// Volunteer link

	$wp_customize->add_setting('volunteer_dropdown', array(
		'default' => 'Learn More',
	));

	$wp_customize->add_control('volunteer_dropdown', array(
		'label' => 'Select Your Link',
		'priority' => 25,
		'section' => 'volunteer_page_home',
		'type' => 'select',
		'choices' => array(
			'mission' => 'mission-statement',
			'about' => 'about-us',
			'charities' => 'charities',
			'volunteering' => 'volunteering',
			'support your cause' => 'support-your-cause',
			'grants' => 'grants',
			'news' => 'news',
			'wisdom trust grants' => 'wisdom-trust-grants',
			'supporting positive change' => 'supporting-positive-change',
			'your wisdom trust grand fund' => 'your-wisdom-trust-grand-fund',
			'wisdom trust ambassadors' => 'wisdom-trust-ambassadors',
			'community outreach' => 'community-out-reach',
			'wisdom library' => 'wisdom-library',
			'library of wisdom' => 'library-of-wisdom',
			'inspiration zone' => 'inspiration-zone',
			'empowerment zone' => 'empowerment-zone',
			'learning zone' => 'learning zone',
			'thrifty tips and special offers' => 'thrifty-tips-and-special-offers',
				'how we can help you' => 'how-we-can-help-you',
			'what we do' => 'what-we-do',
			'how you can help us' => 'how-you-can-help-us',
			'volunteers' => 'volunteers',
			'wisdom' => 'wisdom',
			'support' => 'support',
			'register' => 'register',
		),
	));


	// Volunteer steps


	// Volunteer steps heading 1

	$wp_customize->add_setting('volunteer_steps_heading_1', array(
		'default' => __('Volunteering with the wisdom'),
	));

	$wp_customize->add_control('volunteer_steps_heading_1', array(
		'label' => 'Volunteer Steps Heading 1',
		'section' => 'volunteer_page_home',
		'priority'=> 26,
	));


		// Volunteer steps description  1

	$wp_customize->add_setting('volunteer_steps_description_1', array(
		'default' => __('Whether it’s working on our website, organising events, marketing, social media, compliance or fundraising, anyone can volunteer their time to help The Wisdom Trust.'),
	));

	$wp_customize->add_control('volunteer_steps_description_1', array(
		'label' => 'Volunteer Steps Description 1',
		'section' => 'volunteer_page_home',
		'priority'=> 27,
		'type' => 'textarea'
	));




	// Volunteer steps heading 2

	$wp_customize->add_setting('volunteer_steps_heading_2', array(
		'default' => __('Volunteering With Our Partner Organisations'),
	));

	$wp_customize->add_control('volunteer_steps_heading_2', array(
		'label' => 'Volunteer Steps Heading 2',
		'section' => 'volunteer_page_home',
		'priority'=> 28,
	));



			// Volunteer steps description  2

	$wp_customize->add_setting('volunteer_steps_description_2', array(
		'default' => __('Whether it’s working on our website, organising events, marketing, social media, compliance or fundraising, anyone can volunteer their time to help The Wisdom Trust.'),
	));

	$wp_customize->add_control('volunteer_steps_description_2', array(
		'label' => 'Volunteer Steps Description 2',
		'section' => 'volunteer_page_home',
		'priority'=> 29,
		'type' => 'textarea'
	));



		// Volunteer steps heading 3

	$wp_customize->add_setting('volunteer_steps_heading_3', array(
		'default' => __('Wisdom Trust Ambassadors'),
	));

	$wp_customize->add_control('volunteer_steps_heading_3', array(
		'label' => 'Volunteer Steps Heading 3',
		'section' => 'volunteer_page_home',
		'priority'=> 30,
	));



			// Volunteer steps description  3

	$wp_customize->add_setting('volunteer_steps_description_3', array(
		'default' => __('Our ‘Experts On-The-Ground’ – Wisdom Trust Ambassadors work in local communities all over the world, co-ordinating local initiatives and bringing a ray of hope to those in need.'),
	));

	$wp_customize->add_control('volunteer_steps_description_3', array(
		'label' => 'Volunteer Steps Description 3',
		'section' => 'volunteer_page_home',
		'priority'=> 31,
		'type' => 'textarea'
	));



	// Recent articles 

	// RECENT ARTICLES HEADING

	$wp_customize->add_setting('articles_heading', array(
		'default' => __('Recent Articles'),
	));

	$wp_customize->add_control('articles_heading', array(
		'label' => 'Recent Articles',
		'section' => 'articles_page_home',
		'priority'=> 32,
	));


	// WISDOM SECTION

	
	$wp_customize->add_setting('wisdom_heading', array(
		'default' => __('Wisdom'),
	));

	$wp_customize->add_control('wisdom_heading', array(
		'label' => 'Heading',
		'section' => 'wisdom_page_home',
		'priority'=> 33,
	));



	// Wisdom steps sub heading 1

	$wp_customize->add_setting('wisdom_sub_heading_1', array(
		'default' => __('Wisdom'),
	));

	$wp_customize->add_control('wisdom_sub_heading_1', array(
		'label' => 'Wisdom Sub Heading 1',
		'section' => 'wisdom_page_home',
		'priority'=> 34,
	));


	// Wisdom steps description 1

	$wp_customize->add_setting('wisdom_steps_description_1', array(
		'default' => __('We recognise the importance of sharing wisdom across communities and cultures as well as supporting equality of learning opportunities to help improve the lives of under privileged groups and society as a whole. Our Wisdom Trust values of collaboration, friendship & environmental sustainability are core to this mission.'),
	));

	$wp_customize->add_control('wisdom_steps_description_1', array(
		'label' => 'Volunteer Steps Description 1',
		'section' => 'wisdom_page_home',
		'priority'=> 35,
		'type' => 'textarea'
	));
	

	// wisdom steps link 1


	$wp_customize->add_setting('wisdom_dropdown_1', array(
		'default' => 'Learn More',
	));

	$wp_customize->add_control('wisdom_dropdown_1', array(
		'label' => 'Select Your Link 1',
		'priority' => 36,
		'section' => 'wisdom_page_home',
		'type' => 'select',
		'choices' => array(
			'mission' => 'mission-statement',
			'about' => 'about-us',
			'charities' => 'charities',
			'volunteering' => 'volunteering',
			'support your cause' => 'support-your-cause',
			'grants' => 'grants',
			'news' => 'news',
			'wisdom trust grants' => 'wisdom-trust-grants',
			'supporting positive change' => 'supporting-positive-change',
			'your wisdom trust grand fund' => 'your-wisdom-trust-grand-fund',
			'wisdom trust ambassadors' => 'wisdom-trust-ambassadors',
			'community outreach' => 'community-out-reach',
			'wisdom library' => 'wisdom-library',
			'library of wisdom' => 'library-of-wisdom',
			'inspiration zone' => 'inspiration-zone',
			'empowerment zone' => 'empowerment-zone',
			'learning zone' => 'learning zone',
			'thrifty tips and special offers' => 'thrifty-tips-and-special-offers',
				'how we can help you' => 'how-we-can-help-you',
			'what we do' => 'what-we-do',
			'how you can help us' => 'how-you-can-help-us',
			'volunteers' => 'volunteers',
			'wisdom' => 'wisdom',
			'support' => 'support',
			'register' => 'register',
		),
	));



	
	// Wisdom steps sub heading 2

	$wp_customize->add_setting('wisdom_sub_heading_2', array(
		'default' => __('Support'),
	));

	$wp_customize->add_control('wisdom_sub_heading_2', array(
		'label' => 'Wisdom Sub Heading 2',
		'section' => 'wisdom_page_home',
		'priority'=> 37,
	));


	// Wisdom steps description 2

	$wp_customize->add_setting('wisdom_steps_description_2', array(
		'default' => __('Our goal is to support people, causes and global communities – firstly through grants to help individuals make positive changes in their lives; and secondly through regular donations from our fund to support the work of charities and not for profit good causes, all over the world – as voted for by the people using our website.'),
	));

	$wp_customize->add_control('wisdom_steps_description_2', array(
		'label' => 'Volunteer Steps Description 2',
		'section' => 'wisdom_page_home',
		'priority'=> 38,
		'type' => 'textarea'
	));
	

	// wisdom steps link 2


	$wp_customize->add_setting('wisdom_dropdown_2', array(
		'default' => 'Learn More',
	));

	$wp_customize->add_control('wisdom_dropdown_2', array(
		'label' => 'Select Your Link 2',
		'priority' => 39,
		'section' => 'wisdom_page_home',
		'type' => 'select',
		'choices' => array(
				'mission' => 'mission-statement',
			'about' => 'about-us',
			'charities' => 'charities',
			'volunteering' => 'volunteering',
			'support your cause' => 'support-your-cause',
			'grants' => 'grants',
			'news' => 'news',
			'wisdom trust grants' => 'wisdom-trust-grants',
			'supporting positive change' => 'supporting-positive-change',
			'your wisdom trust grand fund' => 'your-wisdom-trust-grand-fund',
			'wisdom trust ambassadors' => 'wisdom-trust-ambassadors',
			'community outreach' => 'community-out-reach',
			'wisdom library' => 'wisdom-library',
			'library of wisdom' => 'library-of-wisdom',
			'inspiration zone' => 'inspiration-zone',
			'empowerment zone' => 'empowerment-zone',
			'learning zone' => 'learning zone',
			'thrifty tips and special offers' => 'thrifty-tips-and-special-offers',
				'how we can help you' => 'how-we-can-help-you',
			'what we do' => 'what-we-do',
			'how you can help us' => 'how-you-can-help-us',
			'volunteers' => 'volunteers',
			'wisdom' => 'wisdom',
			'support' => 'support',
			'register' => 'register',
		),
	));



		
	// Wisdom steps sub heading 3

	$wp_customize->add_setting('wisdom_sub_heading_3', array(
		'default' => __('Friendship'),
	));

	$wp_customize->add_control('wisdom_sub_heading_3', array(
		'label' => 'Wisdom Sub Heading 3',
		'section' => 'wisdom_page_home',
		'priority'=> 40,
	));


	// Wisdom steps description 3

	$wp_customize->add_setting('wisdom_steps_description_3', array(
		'default' => __('We understand the transformative power that individuals can have in combating disadvantage when they have the support and friendship of those who share in a common goal. We are determined to do everything we can to overcome inequality, discrimination and exploitation, wherever we find it.'),
	));

	$wp_customize->add_control('wisdom_steps_description_3', array(
		'label' => 'Volunteer Steps Description 3',
		'section' => 'wisdom_page_home',
		'priority'=> 41,
		'type' => 'textarea'
	));
	

	// wisdom steps link 3


	$wp_customize->add_setting('wisdom_dropdown_3', array(
		'default' => 'Learn More',
	));

	$wp_customize->add_control('wisdom_dropdown_3', array(
		'label' => 'Select Your Link 3',
		'priority' => 42,
		'section' => 'wisdom_page_home',
		'type' => 'select',
		'choices' => array(
			'mission' => 'mission-statement',
			'about' => 'about-us',
			'charities' => 'charities',
			'volunteering' => 'volunteering',
			'support your cause' => 'support-your-cause',
			'grants' => 'grants',
			'news' => 'news',
			'wisdom trust grants' => 'wisdom-trust-grants',
			'supporting positive change' => 'supporting-positive-change',
			'your wisdom trust grand fund' => 'your-wisdom-trust-grand-fund',
			'wisdom trust ambassadors' => 'wisdom-trust-ambassadors',
			'community outreach' => 'community-out-reach',
			'wisdom library' => 'wisdom-library',
			'library of wisdom' => 'library-of-wisdom',
			'inspiration zone' => 'inspiration-zone',
			'empowerment zone' => 'empowerment-zone',
			'learning zone' => 'learning zone',
			'thrifty tips and special offers' => 'thrifty-tips-and-special-offers',
				'how we can help you' => 'how-we-can-help-you',
			'what we do' => 'what-we-do',
			'how you can help us' => 'how-you-can-help-us',
			'volunteers' => 'volunteers',
			'wisdom' => 'wisdom',
			'support' => 'support',
			'register' => 'register',
		),
	));



	

	// Sign up 

	// sign up heading

	$wp_customize->add_setting('signup_heading', array(
		'default' => __('Helping you to live with a bit more wisdom.'),
	));

	$wp_customize->add_control('signup_heading', array(
		'label' => 'Sign Up Heading',
		'section' => 'signup_page_home',
		'priority'=> 43,
	));


		// sign up description

	$wp_customize->add_setting('signup_description', array(
		'default' => __('Learn || Inspire || Volunteer || Empower'),
	));

	$wp_customize->add_control('signup_description', array(
		'label' => 'Sign Up Description',
		'section' => 'signup_page_home',
		'priority'=> 44,
		'type' => 'textarea'
	));



	$wp_customize->add_setting('signup_dropdown', array(
		'default' => 'Learn More',
	));

	$wp_customize->add_control('signup_dropdown', array(
		'label' => 'Select Your Link',
		'priority' => 45,
		'section' => 'signup_page_home',
		'type' => 'select',
		'choices' => array(
			'mission' => 'mission-statement',
			'about' => 'about-us',
			'charities' => 'charities',
			'volunteering' => 'volunteering',
			'support your cause' => 'support-your-cause',
			'grants' => 'grants',
			'news' => 'news',
			'wisdom trust grants' => 'wisdom-trust-grants',
			'supporting positive change' => 'supporting-positive-change',
			'your wisdom trust grand fund' => 'your-wisdom-trust-grand-fund',
			'wisdom trust ambassadors' => 'wisdom-trust-ambassadors',
			'community outreach' => 'community-out-reach',
			'wisdom library' => 'wisdom-library',
			'library of wisdom' => 'library-of-wisdom',
			'inspiration zone' => 'inspiration-zone',
			'empowerment zone' => 'empowerment-zone',
			'learning zone' => 'learning zone',
			'thrifty tips and special offers' => 'thrifty-tips-and-special-offers',
				'how we can help you' => 'how-we-can-help-you',
			'what we do' => 'what-we-do',
			'how you can help us' => 'how-you-can-help-us',
			'volunteers' => 'volunteers',
			'wisdom' => 'wisdom',
			'support' => 'support',
			'register' => 'register',
		),
	));







	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'wisdom_trust_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'wisdom_trust_customize_partial_blogdescription',
			)
		);
	}
}

add_action( 'customize_register', 'wisdom_trust_customize_register' );




/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wisdom_trust_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wisdom_trust_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wisdom_trust_customize_preview_js() {
	wp_enqueue_script( 'wisdom-trust-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'wisdom_trust_customize_preview_js' );
