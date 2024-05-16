<?php
/**
 * Custom header implementation
 */

function tanawul_bakery_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'tanawul_bakery_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1055,
		'height'                 => 305,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'tanawul_bakery_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'tanawul_bakery_custom_header_setup' );

if ( ! function_exists( 'tanawul_bakery_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see tanawul_bakery_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'tanawul_bakery_header_style' );
function tanawul_bakery_header_style() {

	if ( get_header_image() ) :
	$tanawul_bakery_custom_css = "
        #masthead {
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'tanawul-bakery-basic-style', $tanawul_bakery_custom_css );
	endif;
}
endif;