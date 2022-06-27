<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

defined( 'CHLD_THM_CFG_IGNORE_PARENT' ) or define( 'CHLD_THM_CFG_IGNORE_PARENT', TRUE );

// END ENQUEUE PARENT ACTION

// END ENQUEUE PARENT ACTION

remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
function my_deregister_styles_and_scripts() {
    wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
}
function my_deregister_scripts() {
    wp_deregister_script( 'wp-embed' );
}

add_filter('wpcf7_autop_or_not', '__return_false');
add_action( 'wp_print_styles', 'my_deregister_styles_and_scripts', 100 );
add_action( 'wp_footer', 'my_deregister_scripts', 100 );

add_action( 'init', 'true_jquery_register' );
 
function true_jquery_register() {
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( '/wp-content/themes/sputnik/assets/js/jquery.min.js' ), false, null, true);
		wp_enqueue_script( 'jquery' );
	}
}


function sctipt_and_style() {
	wp_enqueue_style( 'normalize-css', '/wp-content/themes/sputnik/assets/css/normalize.css' , array(), '1.00', 'all' );	
	wp_enqueue_style( 'swiper-css', '/wp-content/themes/sputnik/assets/css/swiper-bundle.min.css' , array(), '', 'all' );	
	wp_enqueue_script( 'jqueryui-js', '/wp-content/themes/sputnik/assets/js/jquery-ui.min.js' , array('jquery'), '', true );		
	wp_enqueue_script( 'swiper-js', '/wp-content/themes/sputnik/assets/js/main.js' , array('jquery'), '1.09', true );		
	wp_enqueue_script( 'main-js', '/wp-content/themes/sputnik/assets/js/swiper-bundle.min.js' , array('swiper-js'), '1.00', true );		
} 

add_action( 'wp_enqueue_scripts', 'sctipt_and_style' ); 

function wpschool_redirect_attachment_page() {
    if ( is_attachment() ) {
        global $post;
        if ( $post && $post->post_parent ) {
            wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
            exit;
        } else {
            wp_redirect( esc_url( home_url( '/' ) ), 301 );
            exit;
        }
    }
}
add_action( 'template_redirect', 'wpschool_redirect_attachment_page' ); 

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->item_class)) {
        $classes[] = $args->item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


function mytheme_customize_register( $wp_customize ) {
	/*
Добавляем секцию в настройки темы
*/
	$wp_customize->add_section(
		// ID
		'data_site_section',
		// Arguments array
		array(
			'title' => 'Глобальные настройки сайта',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_setting(
		// ID
		'link_google_play',
		// Arguments array
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		// ID
		'link_google_play',
		// Arguments array
		array(
			'type' => 'text',
			'label' => "Ссылка на Google Play",
			'section' => 'data_site_section',
			// This last one must match setting ID from above
			'settings' => 'link_google_play'
		)
	);
	$wp_customize->add_setting(
		// ID
		'link_app_store',
		// Arguments array
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		// ID
		'link_app_store',
		// Arguments array
		array(
			'type' => 'text',
			'label' => "Ссылка на App Store",
			'section' => 'data_site_section',
			// This last one must match setting ID from above
			'settings' => 'link_app_store'
		)
	);
	$wp_customize->add_setting(
		// ID
		'link_app_gallery',
		// Arguments array
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		// ID
		'link_app_gallery',
		// Arguments array
		array(
			'type' => 'text',
			'label' => "Ссылка на App Gallery",
			'section' => 'data_site_section',
			// This last one must match setting ID from above
			'settings' => 'link_app_gallery'
		)
	);
	$wp_customize->add_setting(
		// ID
		'link_download',
		// Arguments array
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		// ID
		'link_download',
		// Arguments array
		array(
			'type' => 'text',
			'label' => "Ссылка на кнопке в шапке",
			'section' => 'data_site_section',
			// This last one must match setting ID from above
			'settings' => 'link_download'
		)
	);
}
add_action( 'customize_register', 'mytheme_customize_register' );

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'QR Код',
		'menu_title' => 'QR Код',
		'menu_slug' => 'theme_settings',
	));
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Основные настройки',
        'menu_title' => 'Настройки темы',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));
}
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );