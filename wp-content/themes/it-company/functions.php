<?php
/**
 * IT Company functions and definitions
 * @package IT Company
 */

/* Breadcrumb Begin */
function it_company_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}

/* Theme Setup */
if ( ! function_exists( 'it_company_setup' ) ) :

function it_company_setup() {

	$GLOBALS['content_width'] = apply_filters( 'it_company_content_width', 640 );
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('it-company-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'it-company' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', it_company_font_url() ) );

	// Theme Activation Notice
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'it_company_activation_notice' );
	}
}
endif;
add_action( 'after_setup_theme', 'it_company_setup' );

// Notice after Theme Activation
function it_company_activation_notice() {
	echo '<div class="notice notice-success is-dismissible welcome">';
		echo '<h3>'. esc_html__( 'Greetings from Themeglance!!', 'it-company' ) .'</h3>';
		echo '<p>'. esc_html__( 'A heartful thank you for choosing Themeglance. We promise to deliver only the best to you. Please proceed towards welcome section to get started.', 'it-company' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=it_company_guide' ) ) .'" class="button button-primary">'. esc_html__( 'About Theme', 'it-company' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function it_company_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'it-company' ),
		'description'   => __( 'Appears on blog page sidebar', 'it-company' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'it-company' ),
		'description'   => __( 'Appears on page sidebar', 'it-company' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'it-company' ),
		'description'   => __( 'Appears on page sidebar', 'it-company' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'it-company' ),
		'description'   => __( 'Appears on footer', 'it-company' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'it-company' ),
		'description'   => __( 'Appears on footer', 'it-company' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'it-company' ),
		'description'   => __( 'Appears on footer', 'it-company' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'it-company' ),
		'description'   => __( 'Appears on footer', 'it-company' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'it_company_widgets_init' );

/* Theme Font URL */
function it_company_font_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Kalam:300,400,700';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';
	$font_family[] = 'Noto Sans:400,400i,700,700i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/*radio button sanitization*/
 function it_company_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function it_company_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'it_company_loop_columns');
	if (!function_exists('it_company_loop_columns')) {
	function it_company_loop_columns() {
		return 3; // 3 products per row
	}
}

/* Theme enqueue scripts */
function it_company_scripts() {
	wp_enqueue_style( 'it-company-font', it_company_font_url(), array() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'it-company-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'it-company-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );
	// Paragraph
	    $it_company_paragraph_color = get_theme_mod('it_company_paragraph_color', '');
	    $it_company_paragraph_font_family = get_theme_mod('it_company_paragraph_font_family', '');
	    $it_company_paragraph_font_size = get_theme_mod('it_company_paragraph_font_size', '');
	// "a" tag
		$it_company_atag_color = get_theme_mod('it_company_atag_color', '');
	    $it_company_atag_font_family = get_theme_mod('it_company_atag_font_family', '');
	// "li" tag
		$it_company_li_color = get_theme_mod('it_company_li_color', '');
	    $it_company_li_font_family = get_theme_mod('it_company_li_font_family', '');
	// H1
		$it_company_h1_color = get_theme_mod('it_company_h1_color', '');
	    $it_company_h1_font_family = get_theme_mod('it_company_h1_font_family', '');
	    $it_company_h1_font_size = get_theme_mod('it_company_h1_font_size', '');
	// H2
		$it_company_h2_color = get_theme_mod('it_company_h2_color', '');
	    $it_company_h2_font_family = get_theme_mod('it_company_h2_font_family', '');
	    $it_company_h2_font_size = get_theme_mod('it_company_h2_font_size', '');
	// H3
		$it_company_h3_color = get_theme_mod('it_company_h3_color', '');
	    $it_company_h3_font_family = get_theme_mod('it_company_h3_font_family', '');
	    $it_company_h3_font_size = get_theme_mod('it_company_h3_font_size', '');
	// H4
		$it_company_h4_color = get_theme_mod('it_company_h4_color', '');
	    $it_company_h4_font_family = get_theme_mod('it_company_h4_font_family', '');
	    $it_company_h4_font_size = get_theme_mod('it_company_h4_font_size', '');
	// H5
		$it_company_h5_color = get_theme_mod('it_company_h5_color', '');
	    $it_company_h5_font_family = get_theme_mod('it_company_h5_font_family', '');
	    $it_company_h5_font_size = get_theme_mod('it_company_h5_font_size', '');
	// H6
		$it_company_h6_color = get_theme_mod('it_company_h6_color', '');
	    $it_company_h6_font_family = get_theme_mod('it_company_h6_font_family', '');
	    $it_company_h6_font_size = get_theme_mod('it_company_h6_font_size', '');

		$custom_css ='
			p,span{
			    color:'.esc_html($it_company_paragraph_color).'!important;
			    font-family: '.esc_html($it_company_paragraph_font_family).';
			    font-size: '.esc_html($it_company_paragraph_font_size).';
			}
			a{
			    color:'.esc_html($it_company_atag_color).'!important;
			    font-family: '.esc_html($it_company_atag_font_family).';
			}
			li{
			    color:'.esc_html($it_company_li_color).'!important;
			    font-family: '.esc_html($it_company_li_font_family).';
			}
			h1{
			    color:'.esc_html($it_company_h1_color).'!important;
			    font-family: '.esc_html($it_company_h1_font_family).'!important;
			    font-size: '.esc_html($it_company_h1_font_size).'!important;
			}
			h2{
			    color:'.esc_html($it_company_h2_color).'!important;
			    font-family: '.esc_html($it_company_h2_font_family).'!important;
			    font-size: '.esc_html($it_company_h2_font_size).'!important;
			}
			h3{
			    color:'.esc_html($it_company_h3_color).'!important;
			    font-family: '.esc_html($it_company_h3_font_family).'!important;
			    font-size: '.esc_html($it_company_h3_font_size).'!important;
			}
			h4{
			    color:'.esc_html($it_company_h4_color).'!important;
			    font-family: '.esc_html($it_company_h4_font_family).'!important;
			    font-size: '.esc_html($it_company_h4_font_size).'!important;
			}
			h5{
			    color:'.esc_html($it_company_h5_color).'!important;
			    font-family: '.esc_html($it_company_h5_font_family).'!important;
			    font-size: '.esc_html($it_company_h5_font_size).'!important;
			}
			h6{
			    color:'.esc_html($it_company_h6_color).'!important;
			    font-family: '.esc_html($it_company_h6_font_family).'!important;
			    font-size: '.esc_html($it_company_h6_font_size).'!important;
			}
			';
			
	wp_add_inline_style( 'it-company-basic-style',$custom_css );
	
	wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_script( 'it-company-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('it-company-ie', get_template_directory_uri().'/css/ie.css', array('it-company-basic-style'));
	wp_style_add_data( 'it-company-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'it_company_scripts' );

/* Theme Credit link */
define('IT_COMPANY_THEMESGLANCE_PRO_THEME_URL','https://www.themesglance.com/themes/it-company-wordpress-theme/','it-company');
define('IT_COMPANY_THEMESGLANCE_THEME_DOC','https://www.themesglance.com/demo/docs/it-company-pro/','it-company');
define('IT_COMPANY_THEMESGLANCE_LIVE_DEMO','https://themesglance.com/it-company-pro/','it-company');
define('IT_COMPANY_THEMESGLANCE_FREE_THEME_DOC','https://www.themesglance.com/demo/docs/free-it-company/','it-company');
define('IT_COMPANY_THEMESGLANCE_SUPPORT','https://wordpress.org/support/theme/it-company/','it-company');
define('IT_COMPANY_THEMESGLANCE_REVIEW','https://wordpress.org/support/theme/it-company/reviews/','it-company');
define('IT_COMPANY_SITE_URL','https://www.themesglance.com/themes/free-it-company-wordpress-theme/','it-company');

function it_company_credit_link() {
    echo "<a href=".esc_url(IT_COMPANY_SITE_URL)." target='_blank'>".esc_html__('IT Company WordPress Theme','it-company')."</a>";
}

function it_company_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Implement the Get Started. */
require get_template_directory() . '/inc/getting-started/getting-started.php';