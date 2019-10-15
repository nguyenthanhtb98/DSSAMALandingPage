<?php
/**
 * IT Company Theme Customizer
 * @package IT Company
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function it_company_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'it_company_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'it-company' ),
	    'description' => __( 'Description of what this panel does.', 'it-company' ),
	) );

	// font array
	$font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'it_company_typography', array(
    	'title'      => __( 'Typography', 'it-company' ),
		'priority'   => 30,
		'panel' => 'it_company_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'it_company_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'it_company_paragraph_color', array(
		'label' => __('Paragraph Color', 'it-company'),
		'section' => 'it_company_typography',
		'settings' => 'it_company_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('it_company_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'it_company_paragraph_font_family', array(
	    'section'  => 'it_company_typography',
	    'label'    => __( 'Paragraph Fonts','it-company'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('it_company_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('it_company_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','it-company'),
		'section'	=> 'it_company_typography',
		'setting'	=> 'it_company_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'it_company_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'it_company_atag_color', array(
		'label' => __('"a" Tag Color', 'it-company'),
		'section' => 'it_company_typography',
		'settings' => 'it_company_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('it_company_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'it_company_atag_font_family', array(
	    'section'  => 'it_company_typography',
	    'label'    => __( '"a" Tag Fonts','it-company'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'it_company_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'it_company_li_color', array(
		'label' => __('"li" Tag Color', 'it-company'),
		'section' => 'it_company_typography',
		'settings' => 'it_company_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('it_company_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'it_company_li_font_family', array(
	    'section'  => 'it_company_typography',
	    'label'    => __( '"li" Tag Fonts','it-company'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'it_company_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'it_company_h1_color', array(
		'label' => __('H1 Color', 'it-company'),
		'section' => 'it_company_typography',
		'settings' => 'it_company_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('it_company_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'it_company_h1_font_family', array(
	    'section'  => 'it_company_typography',
	    'label'    => __( 'H1 Fonts','it-company'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('it_company_h1_font_size',array(
		'default'	=> '50px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('it_company_h1_font_size',array(
		'label'	=> __('H1 Font Size','it-company'),
		'section'	=> 'it_company_typography',
		'setting'	=> 'it_company_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'it_company_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'it_company_h2_color', array(
		'label' => __('h2 Color', 'it-company'),
		'section' => 'it_company_typography',
		'settings' => 'it_company_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('it_company_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'it_company_h2_font_family', array(
	    'section'  => 'it_company_typography',
	    'label'    => __( 'h2 Fonts','it-company'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('it_company_h2_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('it_company_h2_font_size',array(
		'label'	=> __('h2 Font Size','it-company'),
		'section'	=> 'it_company_typography',
		'setting'	=> 'it_company_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'it_company_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'it_company_h3_color', array(
		'label' => __('h3 Color', 'it-company'),
		'section' => 'it_company_typography',
		'settings' => 'it_company_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('it_company_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'it_company_h3_font_family', array(
	    'section'  => 'it_company_typography',
	    'label'    => __( 'h3 Fonts','it-company'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('it_company_h3_font_size',array(
		'default'	=> '36px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('it_company_h3_font_size',array(
		'label'	=> __('h3 Font Size','it-company'),
		'section'	=> 'it_company_typography',
		'setting'	=> 'it_company_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'it_company_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'it_company_h4_color', array(
		'label' => __('h4 Color', 'it-company'),
		'section' => 'it_company_typography',
		'settings' => 'it_company_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('it_company_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'it_company_h4_font_family', array(
	    'section'  => 'it_company_typography',
	    'label'    => __( 'h4 Fonts','it-company'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('it_company_h4_font_size',array(
		'default'	=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('it_company_h4_font_size',array(
		'label'	=> __('h4 Font Size','it-company'),
		'section'	=> 'it_company_typography',
		'setting'	=> 'it_company_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'it_company_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'it_company_h5_color', array(
		'label' => __('h5 Color', 'it-company'),
		'section' => 'it_company_typography',
		'settings' => 'it_company_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('it_company_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'it_company_h5_font_family', array(
	    'section'  => 'it_company_typography',
	    'label'    => __( 'h5 Fonts','it-company'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('it_company_h5_font_size',array(
		'default'	=> '25px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('it_company_h5_font_size',array(
		'label'	=> __('h5 Font Size','it-company'),
		'section'	=> 'it_company_typography',
		'setting'	=> 'it_company_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'it_company_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'it_company_h6_color', array(
		'label' => __('h6 Color', 'it-company'),
		'section' => 'it_company_typography',
		'settings' => 'it_company_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('it_company_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'it_company_h6_font_family', array(
	    'section'  => 'it_company_typography',
	    'label'    => __( 'h6 Fonts','it-company'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('it_company_h6_font_size',array(
		'default'	=> '18px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('it_company_h6_font_size',array(
		'label'	=> __('h6 Font Size','it-company'),
		'section'	=> 'it_company_typography',
		'setting'	=> 'it_company_h6_font_size',
		'type'	=> 'text'
	));

	//layout setting
	$wp_customize->add_section( 'it_company_theme_layout', array(
    	'title'      => __( 'Layout Settings', 'it-company' ),
		'priority'   => null,
		'panel' => 'it_company_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('it_company_layout',array(
	        'default' => __( 'Right Sidebar', 'it-company' ),
	        'sanitize_callback' => 'it_company_sanitize_choices'	        
	    )
    );
	$wp_customize->add_control('it_company_layout',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'it-company' ),
	        'section' => 'it_company_theme_layout',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','it-company'),
	            'Right Sidebar' => __('Right Sidebar','it-company'),
	            'One Column' => __('One Column','it-company'),
	            'Three Columns' => __('Three Columns','it-company'),
	            'Four Columns' => __('Four Columns','it-company'),
	            'Grid Layout' => __('Grid Layout','it-company')
	        ),
	    )
    );

	//Topbar section
	$wp_customize->add_section('it_company_topbar_icon',array(
		'title'	=> __('Topbar Section','it-company'),
		'description'	=> __('Add Header Content here','it-company'),
		'priority'	=> null,
		'panel' => 'it_company_panel_id',
	));

	$wp_customize->add_setting('it_company_question',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('it_company_question',array(
		'label'	=> __('Add Text','it-company'),
		'section'	=> 'it_company_topbar_icon',
		'setting'	=> 'it_company_question',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('it_company_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('it_company_email',array(
		'label'	=> __('Add Email Address','it-company'),
		'section'	=> 'it_company_topbar_icon',
		'setting'	=> 'it_company_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('it_company_call_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('it_company_call_number',array(
		'label'	=> __('Add Contact Number','it-company'),
		'section'	=> 'it_company_topbar_icon',
		'setting'	=> 'it_company_call_number',
		'type'		=> 'text'
	));

		$wp_customize->add_setting('it_company_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('it_company_facebook',array(
		'label'	=> __('Add Facebook link','it-company'),
		'section'	=> 'it_company_topbar_icon',
		'setting'	=> 'it_company_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('it_company_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('it_company_twitter',array(
		'label'	=> __('Add Twitter link','it-company'),
		'section'	=> 'it_company_topbar_icon',
		'setting'	=> 'it_company_twitter',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('it_company_googleplus',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('it_company_googleplus',array(
		'label'	=> __('Add Google Plus link','it-company'),
		'section'	=> 'it_company_topbar_icon',
		'setting'	=> 'it_company_googleplus',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('it_company_linkedin',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('it_company_linkedin',array(
		'label'	=> __('Add Linkedin link','it-company'),
		'section'	=> 'it_company_topbar_icon',
		'setting'	=> 'it_company_linkedin',
		'type'	=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'it_company_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'it-company' ),
		'priority'   => null,
		'panel' => 'it_company_panel_id'
	) );

	$wp_customize->add_setting('it_company_slider_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('it_company_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','it-company'),
       'section' => 'it_company_slider_section',
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'it_company_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'it_company_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'it_company_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'it-company' ),
			'section'  => 'it_company_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//About Us Section
	$wp_customize->add_section('it_company_about',array(
		'title'	=> __('About Us','it-company'),
		'description'	=> __('Add About Us sections below.','it-company'),
		'panel' => 'it_company_panel_id',
	));

	$wp_customize->add_setting('it_company_page_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('it_company_page_title',array(
		'label'	=> __('Section Title','it-company'),
		'section'	=> 'it_company_about',
		'type'		=> 'text'
	));

	// category left
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

    $wp_customize->add_setting( 'it_company_category', array(
      'default'           => '',
      'sanitize_callback' => 'it_company_sanitize_choices'
    ));
    $wp_customize->add_control('it_company_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','it-company'),
		'section' => 'it_company_about',
	));

	$post_list = get_posts();
 	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
	$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('it_company_about_setting',array(
		'sanitize_callback' => 'it_company_sanitize_choices',
	));

	$wp_customize->add_control('it_company_about_setting',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','it-company'),
		'section' => 'it_company_about',
	));

	// category right
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post1[]= 'select';
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cat_post1[$category->slug] = $category->name;
	}

	$wp_customize->add_setting( 'it_company_category1', array(
      'default'           => '',
      'sanitize_callback' => 'it_company_sanitize_choices'
    ));
    $wp_customize->add_control('it_company_category1',array(
		'type'    => 'select',
		'choices' => $cat_post1,
		'label' => __('Select Category to display Latest Post','it-company'),
		'section' => 'it_company_about',
	));

	//footer text
	$wp_customize->add_section('it_company_footer_section',array(
		'title'	=> __('Footer Text','it-company'),
		'description'	=> __('Add some text for footer like copyright etc.','it-company'),
		'panel' => 'it_company_panel_id'
	));
	
	$wp_customize->add_setting('it_company_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('it_company_text',array(
		'label'	=> __('Copyright Text','it-company'),
		'section'	=> 'it_company_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'it_company_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class IT_Company_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'IT_Company_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(new IT_Company_Customize_Section_Pro($manager,'example_1',array(
			'priority'   => 9,
			'title'    => esc_html__( 'IT Company Pro', 'it-company' ),
			'pro_text' => esc_html__( 'Go Pro', 'it-company' ),
			'pro_url'  => esc_url('https://www.themesglance.com/themes/it-company-wordpress-theme/')
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'it-company-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'it-company-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
IT_Company_Customize::get_instance();