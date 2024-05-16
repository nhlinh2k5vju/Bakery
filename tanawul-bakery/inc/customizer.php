<?php
/**
 * Tanawul Bakery: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function tanawul_bakery_custom_controls() {

	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-control.php' );
}

add_action( 'customize_register', 'tanawul_bakery_custom_controls' );

function tanawul_bakery_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_panel( 'tanawul_bakery_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'tanawul-bakery' ),
	    'description' => __( 'Description of what this panel does.', 'tanawul-bakery' ),
	) );

	// font array
	$tanawul_bakery_font_array = array(
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
        'Varela' => 'Varela', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );
    
	//Typography
	$wp_customize->add_section( 'tanawul_bakery_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'tanawul-bakery' ),
		'panel' => 'tanawul_bakery_panel_id'
	) );

	// This is Body Color setting
	$wp_customize->add_setting( 'tanawul_bakery_body_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_body_color', array(
		'label' => __('Body Color', 'tanawul-bakery'),
		'section' => 'tanawul_bakery_typography',
		'settings' => 'tanawul_bakery_body_color',
	)));

	//This is Body FontFamily  setting
	$wp_customize->add_setting('tanawul_bakery_body_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control(
		'tanawul_bakery_body_font_family', array(
		'section'  => 'tanawul_bakery_typography',
		'label'    => __( 'Body Fonts','tanawul-bakery'),
		'type'     => 'select',
		'choices'  => $tanawul_bakery_font_array,
	));

    //This is Body Fontsize setting
	$wp_customize->add_setting('tanawul_bakery_body_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_body_font_size',array(
		'label'	=> __('Body Font Size','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_typography',
		'setting'	=> 'tanawul_bakery_body_font_size',
		'type'	=> 'text'
	));
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'tanawul_bakery_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_paragraph_color', array(
		'label' => __('Paragraph Color', 'tanawul-bakery'),
		'section' => 'tanawul_bakery_typography',
		'settings' => 'tanawul_bakery_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('tanawul_bakery_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tanawul_bakery_paragraph_font_family', array(
	    'section'  => 'tanawul_bakery_typography',
	    'label'    => __( 'Paragraph Fonts','tanawul-bakery'),
	    'type'     => 'select',
	    'choices'  => $tanawul_bakery_font_array,
	));

	$wp_customize->add_setting('tanawul_bakery_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_typography',
		'setting'	=> 'tanawul_bakery_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tanawul_bakery_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_atag_color', array(
		'label' => __('"a" Tag Color', 'tanawul-bakery'),
		'section' => 'tanawul_bakery_typography',
		'settings' => 'tanawul_bakery_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('tanawul_bakery_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tanawul_bakery_atag_font_family', array(
	    'section'  => 'tanawul_bakery_typography',
	    'label'    => __( '"a" Tag Fonts','tanawul-bakery'),
	    'type'     => 'select',
	    'choices'  => $tanawul_bakery_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tanawul_bakery_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_li_color', array(
		'label' => __('"li" Tag Color', 'tanawul-bakery'),
		'section' => 'tanawul_bakery_typography',
		'settings' => 'tanawul_bakery_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('tanawul_bakery_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tanawul_bakery_li_font_family', array(
	    'section'  => 'tanawul_bakery_typography',
	    'label'    => __( '"li" Tag Fonts','tanawul-bakery'),
	    'type'     => 'select',
	    'choices'  => $tanawul_bakery_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'tanawul_bakery_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_h1_color', array(
		'label' => __('H1 Color', 'tanawul-bakery'),
		'section' => 'tanawul_bakery_typography',
		'settings' => 'tanawul_bakery_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('tanawul_bakery_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tanawul_bakery_h1_font_family', array(
	    'section'  => 'tanawul_bakery_typography',
	    'label'    => __( 'H1 Fonts','tanawul-bakery'),
	    'type'     => 'select',
	    'choices'  => $tanawul_bakery_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('tanawul_bakery_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_h1_font_size',array(
		'label'	=> __('H1 Font Size','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_typography',
		'setting'	=> 'tanawul_bakery_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'tanawul_bakery_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_h2_color', array(
		'label' => __('h2 Color', 'tanawul-bakery'),
		'section' => 'tanawul_bakery_typography',
		'settings' => 'tanawul_bakery_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('tanawul_bakery_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tanawul_bakery_h2_font_family', array(
	    'section'  => 'tanawul_bakery_typography',
	    'label'    => __( 'h2 Fonts','tanawul-bakery'),
	    'type'     => 'select',
	    'choices'  => $tanawul_bakery_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('tanawul_bakery_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_h2_font_size',array(
		'label'	=> __('h2 Font Size','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_typography',
		'setting'	=> 'tanawul_bakery_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'tanawul_bakery_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_h3_color', array(
		'label' => __('h3 Color', 'tanawul-bakery'),
		'section' => 'tanawul_bakery_typography',
		'settings' => 'tanawul_bakery_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('tanawul_bakery_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tanawul_bakery_h3_font_family', array(
	    'section'  => 'tanawul_bakery_typography',
	    'label'    => __( 'h3 Fonts','tanawul-bakery'),
	    'type'     => 'select',
	    'choices'  => $tanawul_bakery_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('tanawul_bakery_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_h3_font_size',array(
		'label'	=> __('h3 Font Size','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_typography',
		'setting'	=> 'tanawul_bakery_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'tanawul_bakery_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_h4_color', array(
		'label' => __('h4 Color', 'tanawul-bakery'),
		'section' => 'tanawul_bakery_typography',
		'settings' => 'tanawul_bakery_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('tanawul_bakery_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tanawul_bakery_h4_font_family', array(
	    'section'  => 'tanawul_bakery_typography',
	    'label'    => __( 'h4 Fonts','tanawul-bakery'),
	    'type'     => 'select',
	    'choices'  => $tanawul_bakery_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('tanawul_bakery_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_h4_font_size',array(
		'label'	=> __('h4 Font Size','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_typography',
		'setting'	=> 'tanawul_bakery_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'tanawul_bakery_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_h5_color', array(
		'label' => __('h5 Color', 'tanawul-bakery'),
		'section' => 'tanawul_bakery_typography',
		'settings' => 'tanawul_bakery_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('tanawul_bakery_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tanawul_bakery_h5_font_family', array(
	    'section'  => 'tanawul_bakery_typography',
	    'label'    => __( 'h5 Fonts','tanawul-bakery'),
	    'type'     => 'select',
	    'choices'  => $tanawul_bakery_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('tanawul_bakery_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_h5_font_size',array(
		'label'	=> __('h5 Font Size','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_typography',
		'setting'	=> 'tanawul_bakery_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'tanawul_bakery_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_h6_color', array(
		'label' => __('h6 Color', 'tanawul-bakery'),
		'section' => 'tanawul_bakery_typography',
		'settings' => 'tanawul_bakery_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('tanawul_bakery_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tanawul_bakery_h6_font_family', array(
	    'section'  => 'tanawul_bakery_typography',
	    'label'    => __( 'h6 Fonts','tanawul-bakery'),
	    'type'     => 'select',
	    'choices'  => $tanawul_bakery_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('tanawul_bakery_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_h6_font_size',array(
		'label'	=> __('h6 Font Size','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_typography',
		'setting'	=> 'tanawul_bakery_h6_font_size',
		'type'	=> 'text'
	)); 

	// background skin mode
	$wp_customize->add_setting('tanawul_bakery_background_image_type',array(
        'default' => 'Transparent',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','tanawul-bakery'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','tanawul-bakery'),
            'Background' => __('Background','tanawul-bakery'),
        ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'tanawul_bakery_theme_color_option', array( 
		'panel' => 'tanawul_bakery_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'tanawul-bakery' ) 
	));

  	$wp_customize->add_setting( 'tanawul_bakery_theme_color_first', array(
	    'default' => '#fa605a',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_theme_color_first', array(
  		'label' => __('First Color Option', 'tanawul-bakery'),
	    'description' => __('One can change complete theme color on just one click.', 'tanawul-bakery'),
	    'section' => 'tanawul_bakery_theme_color_option',
	    'settings' => 'tanawul_bakery_theme_color_first',
  	)));

  	$wp_customize->add_setting( 'tanawul_bakery_theme_color_second', array(
	    'default' => '#1a7e83',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_theme_color_second', array(
  		'label' => __('Second Color Option', 'tanawul-bakery'),
	    'description' => __('One can change complete theme color on just one click.', 'tanawul-bakery'),
	    'section' => 'tanawul_bakery_theme_color_option',
	    'settings' => 'tanawul_bakery_theme_color_second',
  	)));

  	// woocommerce Options
	$wp_customize->add_section( 'tanawul_bakery_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'tanawul-bakery' ),
		'panel' => 'woocommerce'
	) );

	$wp_customize->add_setting('tanawul_bakery_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','tanawul-bakery'),
       'section' => 'tanawul_bakery_shop_page_options',
    ));

    $wp_customize->add_setting('tanawul_bakery_shop_products_border',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','tanawul-bakery'),
       'section' => 'tanawul_bakery_shop_page_options',
    ));

    $wp_customize->add_setting('tanawul_bakery_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop Page Sidebar','tanawul-bakery'),
       'section' => 'tanawul_bakery_shop_page_options',
    ));

    $wp_customize->add_setting('tanawul_bakery_single_product_sidebar',array(
        'default' => true,
        'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
	));
	$wp_customize->add_control('tanawul_bakery_single_product_sidebar',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Single Product Sidebar','tanawul-bakery'),
      	'section' => 'tanawul_bakery_shop_page_options',
	));

	// shop page sidebar alignment
	$wp_customize->add_setting('tanawul_bakery_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'tanawul_bakery_sanitize_choices',
	));
	$wp_customize->add_control('tanawul_bakery_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page Layout', 'tanawul-bakery'),
		'section'        => 'tanawul_bakery_shop_page_options',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'tanawul-bakery'),
			'Right Sidebar' => __('Right Sidebar', 'tanawul-bakery'),
		),
	));

	$wp_customize->add_setting( 'tanawul_bakery_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'tanawul_bakery_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tanawul_bakery_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'tanawul-bakery' ),
		'section'  => 'tanawul_bakery_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('tanawul_bakery_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));	
	$wp_customize->add_control('tanawul_bakery_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tanawul_bakery_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control( 'tanawul_bakery_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','tanawul-bakery' ),
		'section' => 'tanawul_bakery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tanawul_bakery_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control( 'tanawul_bakery_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','tanawul-bakery' ),
		'section' => 'tanawul_bakery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tanawul_bakery_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','tanawul-bakery' ),
		'section' => 'tanawul_bakery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tanawul_bakery_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','tanawul-bakery' ),
		'section' => 'tanawul_bakery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tanawul_bakery_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','tanawul-bakery' ),
		'section' => 'tanawul_bakery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'tanawul_bakery_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','tanawul-bakery' ),
		'section' => 'tanawul_bakery_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'tanawul_bakery_shop_button_border_radius',array(
		'default' => 25,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','tanawul-bakery' ),
		'section' => 'tanawul_bakery_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('tanawul_bakery_position_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_position_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','tanawul-bakery'),
        'section' => 'tanawul_bakery_shop_page_options',
        'choices' => array(
            'Right' => __('Right','tanawul-bakery'),
            'Left' => __('Left','tanawul-bakery'),
        ),
	) );

	$wp_customize->add_setting( 'tanawul_bakery_border_radius_product_sale_text',array(
		'default' => 50,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_border_radius_product_sale_text', array(
        'label'  => __('Product Sale Border Radius','tanawul-bakery'),
        'section'  => 'tanawul_bakery_shop_page_options',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('tanawul_bakery_product_sale_text_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float'
	));
	$wp_customize->add_control('tanawul_bakery_product_sale_text_size',array(
		'label'	=> __('Product Sale Text Size','tanawul-bakery'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tanawul_bakery_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'tanawul_bakery_top_bottom_product_sale_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_top_bottom_product_sale_padding',array(
		'label' => esc_html__( 'Top / Bottom Product Sale Padding','tanawul-bakery' ),
		'section' => 'tanawul_bakery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'tanawul_bakery_left_right_product_sale_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_left_right_product_sale_padding',array(
		'label' => esc_html__( 'Left / Right Product Sale Padding','tanawul-bakery' ),
		'section' => 'tanawul_bakery_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

  	//Layout Settings
	$wp_customize->add_section( 'tanawul_bakery_width_layout', array(
    	'title'      => __( 'Layout Settings', 'tanawul-bakery' ),
		'panel' => 'tanawul_bakery_panel_id'
	) );

	$wp_customize->add_setting( 'tanawul_bakery_single_page_breadcrumb',array(
		'default' => true,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
	  ) );
	  $wp_customize->add_control('tanawul_bakery_single_page_breadcrumb',array(
	  	'type' => 'checkbox',
	    'label' => __( 'Show / Hide Single Page Breadcrumb','tanawul-bakery'),
	    'section' => 'tanawul_bakery_width_layout'
	  ));

	$wp_customize->add_setting('tanawul_bakery_loader_setting',array(
       'default' => false,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','tanawul-bakery'),
       'section' => 'tanawul_bakery_width_layout'
    ));

    $wp_customize->add_setting('tanawul_bakery_preloader_types',array(
        'default' => 'Default',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','tanawul-bakery'),
        'section' => 'tanawul_bakery_width_layout',
        'choices' => array(
            'Default' => __('Default','tanawul-bakery'),
            'Circle' => __('Circle','tanawul-bakery'),
            'Two Circle' => __('Two Circle','tanawul-bakery')
        ),
	) );

    $wp_customize->add_setting( 'tanawul_bakery_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'tanawul-bakery'),
	    'section' => 'tanawul_bakery_width_layout',
	    'settings' => 'tanawul_bakery_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'tanawul_bakery_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'tanawul-bakery'),
	    'section' => 'tanawul_bakery_width_layout',
	    'settings' => 'tanawul_bakery_loader_background_color',
  	)));

	$wp_customize->add_setting('tanawul_bakery_theme_options',array(
    'default' => 'Default',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','tanawul-bakery'),
        'description' => __('Here you can change the Width layout. ','tanawul-bakery'),
        'section' => 'tanawul_bakery_width_layout',
        'choices' => array(
            'Default' => __('Default','tanawul-bakery'),
            'Wide Layout' => __('Wide Layout','tanawul-bakery'),
            'Box Layout' => __('Box Layout','tanawul-bakery'),
        ),
	) );

	$wp_customize->add_setting('tanawul_bakery_shop_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_choices'
    ));
    $wp_customize->add_control('tanawul_bakery_shop_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','tanawul-bakery'),
       'choices' => array(
            'Yes' => __('Yes','tanawul-bakery'),
            'No' => __('No','tanawul-bakery'),
        ),
       'section' => 'tanawul_bakery_shop_page_options',
    ));

    $wp_customize->add_setting( 'tanawul_bakery_post_image_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	) );
	$wp_customize->add_control( 'tanawul_bakery_post_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','tanawul-bakery' ),
		'section'     => 'tanawul_bakery_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

    $wp_customize->add_setting( 'tanawul_bakery_featured_image_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'tanawul_bakery_sanitize_number_range',
	));
	$wp_customize->add_control('tanawul_bakery_featured_image_box_shadow',array(
		'label' => esc_html__( 'Featured Image Shadow','tanawul-bakery' ),
		'section' => 'tanawul_bakery_width_layout',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	// Button Settings
	$wp_customize->add_section( 'tanawul_bakery_button_option', array(
		'title' =>  __( 'Button', 'tanawul-bakery' ),
		'panel' => 'tanawul_bakery_panel_id',
	));

	$wp_customize->add_setting('tanawul_bakery_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','tanawul-bakery'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tanawul_bakery_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tanawul_bakery_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_left_right_padding',array(
		'label'	=> __('Left and Right Padding','tanawul-bakery'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tanawul_bakery_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'tanawul_bakery_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	) );
	$wp_customize->add_control( 'tanawul_bakery_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','tanawul-bakery' ),
		'section'     => 'tanawul_bakery_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Sidebar Layout Settings
	$wp_customize->add_section( 'tanawul_bakery_general_option', array(
    	'title'      => __('Sidebar Settings', 'tanawul-bakery' ),
		'panel' => 'tanawul_bakery_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('tanawul_bakery_layout_settings',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','tanawul-bakery'),
        'section' => 'tanawul_bakery_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','tanawul-bakery'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','tanawul-bakery'),
            'Right Sidebar' => __('Right Sidebar','tanawul-bakery'),
            'One Column' => __('Full Column','tanawul-bakery'),
            'Grid Layout' => __('Grid Layout','tanawul-bakery')
        ),
	) );

	$wp_customize->add_setting('tanawul_bakery_page_sidebar_option',array(
        'default' => 'One Column',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','tanawul-bakery'),
        'section' => 'tanawul_bakery_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','tanawul-bakery'),
            'Right Sidebar' => __('Right Sidebar','tanawul-bakery'),
            'One Column' => __('Full Column','tanawul-bakery')
        ),
	) );

	//Topbar section
	$wp_customize->add_section('tanawul_bakery_contact_details',array(
		'title'	=> __('Topbar Section','tanawul-bakery'),
		'description'	=> __('Add Header Content here','tanawul-bakery'),
		'priority'	=> null,
		'panel' => 'tanawul_bakery_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'tanawul_bakery_show_hide_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ) );
    $wp_customize->add_control('tanawul_bakery_show_hide_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Top Header','tanawul-bakery' ),
        'section' => 'tanawul_bakery_contact_details'
    ));

	$wp_customize->add_setting('tanawul_bakery_contact_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_phone_number'
	));
	$wp_customize->add_control('tanawul_bakery_contact_number',array(
		'label'	=> __('Add Phone Number','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_contact_details',
		'setting'	=> 'tanawul_bakery_contact_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tanawul_bakery_phone_icon_changer',array(
		'default'	=> 'fa fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_phone_icon_changer',array(
		'label'	=> __('Phone Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tanawul_bakery_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('tanawul_bakery_email_address',array(
		'label'	=> __('Add Email Address','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_contact_details',
		'setting'	=> 'tanawul_bakery_email_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tanawul_bakery_email_icon_changer',array(
		'default'	=> 'fa fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_email_icon_changer',array(
		'label'	=> __('Email Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tanawul_bakery_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tanawul_bakery_facebook_url',array(
		'label'	=> __('Add Facebook link','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_contact_details',
		'setting'	=> 'tanawul_bakery_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tanawul_bakery_facebook_icon_changer',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_facebook_icon_changer',array(
		'label'	=> __('Facebook Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tanawul_bakery_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tanawul_bakery_twitter_url',array(
		'label'	=> __('Add Twitter link','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_contact_details',
		'setting'	=> 'tanawul_bakery_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tanawul_bakery_twitter_icon_changer',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_twitter_icon_changer',array(
		'label'	=> __('Twitter Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tanawul_bakery_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tanawul_bakery_youtube_url',array(
		'label'	=> __('Add Youtube link','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_contact_details',
		'setting'	=> 'tanawul_bakery_youtube_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tanawul_bakery_youtube_icon_changer',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_youtube_icon_changer',array(
		'label'	=> __('Youtube Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tanawul_bakery_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('tanawul_bakery_linkedin_url',array(
		'label'	=> __('Add Linkedin link','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_contact_details',
		'setting'	=> 'tanawul_bakery_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tanawul_bakery_linkedin_icon_changer',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_linkedin_icon_changer',array(
		'label'	=> __('Linkedin Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tanawul_bakery_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('tanawul_bakery_instagram_url',array(
		'label'	=> __('Add Instagram link','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_contact_details',
		'setting'	=> 'tanawul_bakery_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tanawul_bakery_instagram_icon_changer',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_instagram_icon_changer',array(
		'label'	=> __('Instagram Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_contact_details',
		'type'		=> 'icon'
	)));

	// navigation menu 
	$wp_customize->add_section( 'tanawul_bakery_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'tanawul-bakery' ),
		'priority'   => null,
		'panel' => 'tanawul_bakery_panel_id'
	) );

	$wp_customize->add_setting('tanawul_bakery_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tanawul_bakery_menu_color', array(
		'label'    => __('Menu Color', 'tanawul-bakery'),
		'section'  => 'tanawul_bakery_navigation_menu',
		'settings' => 'tanawul_bakery_menu_color',
	)));

	$wp_customize->add_setting('tanawul_bakery_sub_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tanawul_bakery_sub_menu_color', array(
		'label'    => __('Submenu Color', 'tanawul-bakery'),
		'section'  => 'tanawul_bakery_navigation_menu',
		'settings' => 'tanawul_bakery_sub_menu_color',
	)));

	$wp_customize->add_setting('tanawul_bakery_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tanawul_bakery_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'tanawul-bakery'),
		'section'  => 'tanawul_bakery_navigation_menu',
		'settings' => 'tanawul_bakery_menu_hover_color',
	)));

	$wp_customize->add_setting('tanawul_bakery_sub_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tanawul_bakery_sub_menu_hover_color', array(
		'label'    => __('Submenu Hover Color', 'tanawul-bakery'),
		'section'  => 'tanawul_bakery_navigation_menu',
		'settings' => 'tanawul_bakery_sub_menu_hover_color',
	)));

	$wp_customize->add_setting('tanawul_bakery_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','tanawul-bakery'),
		'section'=> 'tanawul_bakery_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('tanawul_bakery_menu_text_tranform',array(
        'default' => 'Default',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
    ));
    $wp_customize->add_control('tanawul_bakery_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','tanawul-bakery'),
        'section' => 'tanawul_bakery_navigation_menu',
        'choices' => array(
            'Default' => __('Default','tanawul-bakery'),
            'Uppercase' => __('Uppercase','tanawul-bakery'),
        ),
	) );

	$wp_customize->add_setting('tanawul_bakery_menu_font_weight',array(
        'default' => 'Default',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
    ));
    $wp_customize->add_control('tanawul_bakery_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','tanawul-bakery'),
        'section' => 'tanawul_bakery_navigation_menu',
        'choices' => array(
            'Default' => __('Default','tanawul-bakery'),
            'Normal' => __('Normal','tanawul-bakery'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'tanawul_bakery_slider' , array(
    	'title'      => __( 'Slider Settings', 'tanawul-bakery' ),
		'priority'   => null,
		'panel' => 'tanawul_bakery_panel_id'
	) );

	$wp_customize->add_setting('tanawul_bakery_slider_arrows',array(
        'default' => false,
        'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
	));
	$wp_customize->add_control('tanawul_bakery_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','tanawul-bakery'),
      	'section' => 'tanawul_bakery_slider',
	));

	$wp_customize->add_setting('tanawul_bakery_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','tanawul-bakery'),
       'section' => 'tanawul_bakery_slider'
    ));

    $wp_customize->add_setting('tanawul_bakery_slider_content',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_slider_content',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','tanawul-bakery'),
       'section' => 'tanawul_bakery_slider'
    ));

    $wp_customize->add_setting('tanawul_bakery_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','tanawul-bakery'),
       'section' => 'tanawul_bakery_slider'
    ));

    $wp_customize->add_setting('tanawul_bakery_slider_width_options',array(
    	'default' => 'Full Width',
     	'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_slider_width_options',array(
		'type' => 'select',
		'label' => __('Slider Width Layout','tanawul-bakery'),
		'description' => __('Here you can change the Slider Width. ','tanawul-bakery'),
		'section' => 'tanawul_bakery_slider',
		'choices' => array(
		   'Full Width' => __('Full Width','tanawul-bakery'),
		   'Container Width' => __('Container Width','tanawul-bakery'),
		),
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'tanawul_bakery_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'tanawul_bakery_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'tanawul_bakery_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'tanawul-bakery' ),
			'section'  => 'tanawul_bakery_slider',
			'type'     => 'dropdown-pages'
		) );
		
	}

	$wp_customize->add_setting( 'tanawul_bakery_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'tanawul_bakery_sanitize_number_range',
	));
	$wp_customize->add_control( 'tanawul_bakery_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','tanawul-bakery' ),
		'section' => 'tanawul_bakery_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('tanawul_bakery_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_slider_height_option',array(
		'label'	=> __('Slider Height Option','tanawul-bakery'),
		'section'=> 'tanawul_bakery_slider',
		'type'=> 'number'
	));

    $wp_customize->add_setting('tanawul_bakery_slider_content_option',array(
    'default' => 'Left',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','tanawul-bakery'),
        'section' => 'tanawul_bakery_slider',
        'choices' => array(
            'Center' => __('Center','tanawul-bakery'),
            'Left' => __('Left','tanawul-bakery'),
            'Right' => __('Right','tanawul-bakery'),
        ),
	) );

	$wp_customize->add_setting('tanawul_bakery_slider_button_text',array(
		'default'=> __('Read More','tanawul-bakery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_slider_button_text',array(
		'label'	=> __('Slider Button Text','tanawul-bakery'),
		'section'=> 'tanawul_bakery_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tanawul_bakery_slider_button_text_url',array(
		'default'=> __('','tanawul-bakery'),
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('tanawul_bakery_slider_button_text_url',array(
		'label'	=> __('Slider Button Url','tanawul-bakery'),
		'section'=> 'tanawul_bakery_slider',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'tanawul_bakery_slider_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'tanawul_bakery_sanitize_number_range',
	) );
	$wp_customize->add_control( 'tanawul_bakery_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','tanawul-bakery' ),
		'section'     => 'tanawul_bakery_slider',
		'type'        => 'range',
		'settings'    => 'tanawul_bakery_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('tanawul_bakery_slider_opacity_color',array(
      'default'              => 0.6,
      'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control( 'tanawul_bakery_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','tanawul-bakery' ),
	'section'     => 'tanawul_bakery_slider',
	'type'        => 'select',
	'settings'    => 'tanawul_bakery_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','tanawul-bakery'),
      '0.1' =>  esc_attr('0.1','tanawul-bakery'),
      '0.2' =>  esc_attr('0.2','tanawul-bakery'),
      '0.3' =>  esc_attr('0.3','tanawul-bakery'),
      '0.4' =>  esc_attr('0.4','tanawul-bakery'),
      '0.5' =>  esc_attr('0.5','tanawul-bakery'),
      '0.6' =>  esc_attr('0.6','tanawul-bakery'),
      '0.7' =>  esc_attr('0.7','tanawul-bakery'),
      '0.8' =>  esc_attr('0.8','tanawul-bakery'),
      '0.9' =>  esc_attr('0.9','tanawul-bakery')
	),
	));

	$wp_customize->add_setting('tanawul_bakery_padding_top_bottom_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_padding_top_bottom_slider_content',array(
		'label'	=> __('Top Bottom Slider Content Padding','tanawul-bakery'),
		'section'=> 'tanawul_bakery_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('tanawul_bakery_padding_left_right_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_padding_left_right_slider_content',array(
		'label'	=> __('Left Right Slider Content Padding','tanawul-bakery'),
		'section'=> 'tanawul_bakery_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	//What We Offer
	$wp_customize->add_section('tanawul_bakery_we_offer',array(
		'title'	=> __('What We Offer Section','tanawul-bakery'),
		'description'	=> __('Add What We Offer sections below.','tanawul-bakery'),
		'panel' => 'tanawul_bakery_panel_id',
	));
	
	$wp_customize->add_setting('tanawul_bakery_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tanawul_bakery_text',array(
		'label'	=> __('Add Text','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_we_offer',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tanawul_bakery_we_offer_title',array( 
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tanawul_bakery_we_offer_title',array(
		'label'	=> __('Section Title','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_we_offer',
		'type'		=> 'text'
	));

	$categories = get_categories();
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';	
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('tanawul_bakery_we_offer_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'tanawul_bakery_sanitize_choices',
	));
	$wp_customize->add_control('tanawul_bakery_we_offer_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display Latest Post','tanawul-bakery'),
		'section' => 'tanawul_bakery_we_offer',
	));

	$wp_customize->add_setting('tanawul_bakery_show_slider_image_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_show_slider_image_overlay',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Image Overlay Slider','tanawul-bakery'),
       'section' => 'tanawul_bakery_slider'
    ));

    $wp_customize->add_setting('tanawul_bakery_color_slider_image_overlay', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tanawul_bakery_color_slider_image_overlay', array(
		'label'    => __('Image Overlay Slider Color', 'tanawul-bakery'),
		'section'  => 'tanawul_bakery_slider',
		'settings' => 'tanawul_bakery_color_slider_image_overlay',
	)));

	//no Result Setting
	$wp_customize->add_section('tanawul_bakery_no_result_setting',array(
		'title'	=> __('No Results Settings','tanawul-bakery'),
		'panel' => 'tanawul_bakery_panel_id',
	));	

	$wp_customize->add_setting('tanawul_bakery_no_search_result_title',array(
		'default'=> __('Nothing Found','tanawul-bakery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_no_search_result_title',array(
		'label'	=> __('No Search Results Title','tanawul-bakery'),
		'section'=> 'tanawul_bakery_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tanawul_bakery_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','tanawul-bakery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_no_search_result_content',array(
		'label'	=> __('No Search Results Content','tanawul-bakery'),
		'section'=> 'tanawul_bakery_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('tanawul_bakery_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','tanawul-bakery'),
		'panel' => 'tanawul_bakery_panel_id',
	));	

	$wp_customize->add_setting('tanawul_bakery_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','tanawul-bakery'),
		'section'=> 'tanawul_bakery_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tanawul_bakery_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','tanawul-bakery'),
		'section'=> 'tanawul_bakery_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('tanawul_bakery_mobile_media',array(
		'title'	=> __('Mobile Media Settings','tanawul-bakery'),
		'panel' => 'tanawul_bakery_panel_id',
	));

	$wp_customize->add_setting('tanawul_bakery_enable_disable_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_enable_disable_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','tanawul-bakery'),
       'section' => 'tanawul_bakery_mobile_media'
    ));

	$wp_customize->add_setting('tanawul_bakery_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','tanawul-bakery'),
       'section' => 'tanawul_bakery_mobile_media'
    ));

	$wp_customize->add_setting('tanawul_bakery_enable_disable_topbar',array(
       'default' => false,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_enable_disable_topbar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Top Header','tanawul-bakery'),
       'section' => 'tanawul_bakery_mobile_media'
    ));

    $wp_customize->add_setting('tanawul_bakery_enable_disable_slider',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','tanawul-bakery'),
       'section' => 'tanawul_bakery_mobile_media'
    ));

    $wp_customize->add_setting('tanawul_bakery_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','tanawul-bakery'),
       'section' => 'tanawul_bakery_mobile_media'
    ));

    $wp_customize->add_setting('tanawul_bakery_enable_disable_scrolltop',array(
       'default' => false,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','tanawul-bakery'),
       'section' => 'tanawul_bakery_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('tanawul_bakery_blog_post',array(
		'title'	=> __('Post Settings','tanawul-bakery'),
		'panel' => 'tanawul_bakery_panel_id',
	));	

	$wp_customize->add_setting('tanawul_bakery_caps_enable',array(
        'default' => false,
        'sanitize_callback' => 'tanawul_bakery_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'tanawul_bakery_caps_enable',array(
		'label' => esc_html__('Initial Cap (First Big Letter)', 'tanawul-bakery'),
		'type' => 'checkbox',
		'section' => 'tanawul_bakery_blog_post',
	));

	$wp_customize->add_setting('tanawul_bakery_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','tanawul-bakery'),
       'section' => 'tanawul_bakery_blog_post'
    ));

    $wp_customize->add_setting('tanawul_bakery_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_post_date_icon_changer',array(
		'label'	=> __('Post Date Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('tanawul_bakery_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','tanawul-bakery'),
       'section' => 'tanawul_bakery_blog_post'
    ));

    $wp_customize->add_setting('tanawul_bakery_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_post_author_icon_changer',array(
		'label'	=> __('Post Author Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('tanawul_bakery_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','tanawul-bakery'),
       'section' => 'tanawul_bakery_blog_post'
    ));

    $wp_customize->add_setting('tanawul_bakery_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_post_comment_icon_changer',array(
		'label'	=> __('Post Comments Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('tanawul_bakery_blog_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_blog_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Post Image','tanawul-bakery'),
       'section' => 'tanawul_bakery_blog_post'
    ));

    $wp_customize->add_setting( 'tanawul_bakery_blog_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	) );
	$wp_customize->add_control( 'tanawul_bakery_blog_post_img_border_radius', array(
		'label'       => esc_html__( 'Post Image Border Radius','tanawul-bakery' ),
		'section'     => 'tanawul_bakery_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'tanawul_bakery_blog_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_blog_post_img_box_shadow',array(
		'label' => esc_html__( 'Post Image Shadow','tanawul-bakery' ),
		'section' => 'tanawul_bakery_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

    $wp_customize->add_setting( 'tanawul_bakery_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tanawul_bakery_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','tanawul-bakery' ),
		'section'     => 'tanawul_bakery_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','tanawul-bakery'),
		'type'        => 'text',
		'settings'    => 'tanawul_bakery_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('tanawul_bakery_blog_post_layout',array(
        'default' => 'Default',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
    ));
    $wp_customize->add_control('tanawul_bakery_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','tanawul-bakery'),
        'section' => 'tanawul_bakery_blog_post',
        'choices' => array(
            'Default' => __('Default','tanawul-bakery'),
            'Center' => __('Center','tanawul-bakery'),
            'Image and Content' => __('Image and Content','tanawul-bakery'),
        ),
	) );

	$wp_customize->add_setting('tanawul_bakery_post_break_block_setting',array(
        'default' => 'Into Blocks',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_post_break_block_setting',array(
        'type' => 'radio',
        'label' => __('Display Blog Page posts','tanawul-bakery'),
        'section' => 'tanawul_bakery_blog_post',
        'choices' => array(
            'Into Blocks' => __('Into Blocks','tanawul-bakery'),
            'Without Blocks' => __('Without Blocks','tanawul-bakery'),
        ),
	) );

	$wp_customize->add_setting('tanawul_bakery_post_image_dimention',array(
       'default' => 'Default',
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_choices'
    ));
    $wp_customize->add_control('tanawul_bakery_post_image_dimention',array(
       'type' => 'radio',
       'label'	=> __('Post Featured Image Dimention','tanawul-bakery'),
       'choices' => array(
            'Default' => __('Default','tanawul-bakery'),
            'Custom Image Size' => __('Custom Image Size','tanawul-bakery'),
        ),
      	'section'	=> 'tanawul_bakery_blog_post'
    ));

    $wp_customize->add_setting( 'tanawul_bakery_post_featured_image_width',array(
		'default' => '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_number_range'
	));
	$wp_customize->add_control('tanawul_bakery_post_featured_image_width',	array(
		'label' => esc_html__( 'Blog Post Custom Width','tanawul-bakery' ),
		'section' => 'tanawul_bakery_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'type' => 'range',
		'active_callback' => 'tanawul_bakery_enable_image_dimention'
	));

	$wp_customize->add_setting( 'tanawul_bakery_post_featured_image_height',array(
		'default' => '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_number_range'
	));
	$wp_customize->add_control('tanawul_bakery_post_featured_image_height',	array(
		'label' => esc_html__( 'Blog Post Custom Height','tanawul-bakery' ),
		'section' => 'tanawul_bakery_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'type' => 'range',
		'active_callback' => 'tanawul_bakery_enable_image_dimention'
	));

	$wp_customize->add_setting('tanawul_bakery_blog_description',array(
    	'default'   => 'Post Excerpt',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','tanawul-bakery'),
        'section' => 'tanawul_bakery_blog_post',
        'choices' => array(
            'None' => __('None','tanawul-bakery'),
            'Post Excerpt' => __('Post Excerpt','tanawul-bakery'),
            'Post Content' => __('Post Content','tanawul-bakery'),
        ),
	) );

    $wp_customize->add_setting( 'tanawul_bakery_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	) );
	$wp_customize->add_control( 'tanawul_bakery_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','tanawul-bakery' ),
		'section'     => 'tanawul_bakery_blog_post',
		'type'        => 'number',
		'settings'    => 'tanawul_bakery_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'tanawul_bakery_post_excerpt_suffix', array(
		'default'   => __('{...}','tanawul-bakery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tanawul_bakery_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','tanawul-bakery' ),
		'section'     => 'tanawul_bakery_blog_post',
		'type'        => 'text',
		'settings'    => 'tanawul_bakery_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('tanawul_bakery_button_text',array(
		'default'=> __('Read More','tanawul-bakery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_button_text',array(
		'label'	=> __('Add Button Text','tanawul-bakery'),
		'section'=> 'tanawul_bakery_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tanawul_bakery_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','tanawul-bakery'),
       'section' => 'tanawul_bakery_blog_post'
    ));

	$wp_customize->add_setting( 'tanawul_bakery_pagination_option', array(
        'default'			=> 'Default',
        'sanitize_callback'	=> 'tanawul_bakery_sanitize_choices'
    ));
    $wp_customize->add_control( 'tanawul_bakery_pagination_option', array(
        'section' => 'tanawul_bakery_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'tanawul-bakery' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'tanawul-bakery' ),
            'next-prev' => __( 'Next / Previous', 'tanawul-bakery' ),
    )));

	// Single post setting
	
    $wp_customize->add_section('tanawul_bakery_single_post_section',array(
		'title'	=> __('Single Post Settings','tanawul-bakery'),
		'panel' => 'tanawul_bakery_panel_id',
	));

	$wp_customize->add_setting('tanawul_bakery_single_post_breadcrumb',array(
		'default' => false,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
	));
	$wp_customize->add_control('tanawul_bakery_single_post_breadcrumb',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Breadcrumb','tanawul-bakery'),
		'section' => 'tanawul_bakery_single_post_section',
	));

	$wp_customize->add_setting('tanawul_bakery_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','tanawul-bakery'),
       'section' => 'tanawul_bakery_single_post_section'
    ));

    $wp_customize->add_setting('tanawul_bakery_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','tanawul-bakery'),
       'section' => 'tanawul_bakery_single_post_section'
    ));

    $wp_customize->add_setting( 'tanawul_bakery_single_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	) );
	$wp_customize->add_control( 'tanawul_bakery_single_post_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','tanawul-bakery' ),
		'section'     => 'tanawul_bakery_single_post_section',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'tanawul_bakery_single_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_single_post_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','tanawul-bakery' ),
		'section' => 'tanawul_bakery_single_post_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

    $wp_customize->add_setting('tanawul_bakery_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','tanawul-bakery'),
       'section' => 'tanawul_bakery_single_post_section'
    ));

	$wp_customize->add_setting('tanawul_bakery_single_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
     	$wp_customize,'tanawul_bakery_single_post_date_icon_changer',array(
		'label'	=> __('Single Post Date Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_single_post_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('tanawul_bakery_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','tanawul-bakery'),
       'section' => 'tanawul_bakery_single_post_section'
    ));

	$wp_customize->add_setting('tanawul_bakery_single_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_single_post_author_icon_changer',array(
		'label'	=> __('Single Post Author Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_single_post_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('tanawul_bakery_single_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','tanawul-bakery'),
       'section' => 'tanawul_bakery_single_post_section'
    ));

	$wp_customize->add_setting('tanawul_bakery_single_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_single_post_comment_icon_changer',array(
		'label'	=> __('Single Post Comment Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_single_post_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('tanawul_bakery_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));

    $wp_customize->add_control('tanawul_bakery_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','tanawul-bakery'),
       'section' => 'tanawul_bakery_single_post_section'
    ));

    $wp_customize->add_setting('tanawul_bakery_prev_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('tanawul_bakery_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','tanawul-bakery'),
       'section' => 'tanawul_bakery_single_post_section'
    ));

    $wp_customize->add_setting('tanawul_bakery_next_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('tanawul_bakery_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','tanawul-bakery'),
       'section' => 'tanawul_bakery_single_post_section'
    ));

    $wp_customize->add_setting('tanawul_bakery_show_hide_single_post_categories',array(
		'default' => true,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
 	));
 	$wp_customize->add_control('tanawul_bakery_show_hide_single_post_categories',array(
		'type' => 'checkbox',
		'label' => __('Single Post Categories','tanawul-bakery'),
		'section' => 'tanawul_bakery_single_post_section'
	));

	$wp_customize->add_setting('tanawul_bakery_post_comment_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
	));
	$wp_customize->add_control('tanawul_bakery_post_comment_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Post Comment','tanawul-bakery'),
		'section' => 'tanawul_bakery_single_post_section',
	));

    $wp_customize->add_setting( 'tanawul_bakery_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tanawul_bakery_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','tanawul-bakery' ),
		'section'     => 'tanawul_bakery_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','tanawul-bakery'),
		'type'        => 'text',
		'settings'    => 'tanawul_bakery_seperator_metabox',
	) );

	$wp_customize->add_setting('tanawul_bakery_comment_form_heading',array(
       'default' => __('Leave a Reply','tanawul-bakery'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('tanawul_bakery_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','tanawul-bakery'),
       'section' => 'tanawul_bakery_single_post_section'
    ));

    $wp_customize->add_setting('tanawul_bakery_comment_button_text',array(
       'default' => __('Post Comment','tanawul-bakery'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('tanawul_bakery_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','tanawul-bakery'),
       'section' => 'tanawul_bakery_single_post_section'
    ));

    $wp_customize->add_setting( 'tanawul_bakery_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'tanawul_bakery_sanitize_number_range',
	));
	$wp_customize->add_control('tanawul_bakery_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','tanawul-bakery' ),
		'section' => 'tanawul_bakery_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

	
    // related post setting
    $wp_customize->add_section('tanawul_bakery_related_post_section',array(
		'title'	=> __('Related Post Settings','tanawul-bakery'),
		'panel' => 'tanawul_bakery_panel_id',
	));	

	$wp_customize->add_setting('tanawul_bakery_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control('tanawul_bakery_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','tanawul-bakery'),
       'section' => 'tanawul_bakery_related_post_section',
    ));

	$wp_customize->add_setting( 'tanawul_bakery_show_related_post', array(
        'default' => 'By Categories',
        'sanitize_callback'	=> 'tanawul_bakery_sanitize_choices'
    ));
    $wp_customize->add_control( 'tanawul_bakery_show_related_post', array(
        'section' => 'tanawul_bakery_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'tanawul-bakery' ),
        'choices' => array(
            'categories'  => __('By Categories', 'tanawul-bakery'),
            'tags' => __( 'By Tags', 'tanawul-bakery' ),
    )));

    $wp_customize->add_setting('tanawul_bakery_change_related_post_title',array(
		'default'=> __('Related Posts','tanawul-bakery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tanawul_bakery_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','tanawul-bakery'),
		'section'=> 'tanawul_bakery_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('tanawul_bakery_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','tanawul-bakery'),
		'section'=> 'tanawul_bakery_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));
	
	$wp_customize->add_setting( 'tanawul_bakery_related_post_excerpt_number',array(
		'default' =>20,
		'sanitize_callback' => 'tanawul_bakery_sanitize_number_range'
	));

	$wp_customize->add_control( 'tanawul_bakery_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Content Limit','tanawul-bakery' ),
		'section' => 'tanawul_bakery_related_post_section',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	//Footer
	$wp_customize->add_section( 'tanawul_bakery_footer' , array(
    	'title'      => __( 'Footer Section', 'tanawul-bakery' ),
		'priority'   => null,
		'panel' => 'tanawul_bakery_panel_id'
	) );

	$wp_customize->add_setting('tanawul_bakery_show_hide_footer',array(
		'default' => true,
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
	));
	$wp_customize->add_control('tanawul_bakery_show_hide_footer',array(
     	'type' => 'checkbox',
      'label' => __('Enable / Disable Footer','tanawul-bakery'),
      'section' => 'tanawul_bakery_footer',
	));

	$wp_customize->add_setting('tanawul_bakery_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices',
    ));
    $wp_customize->add_control('tanawul_bakery_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'tanawul-bakery'),
        'section'     => 'tanawul_bakery_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'tanawul-bakery'),
        'choices' => array(
            '1'     => __('One', 'tanawul-bakery'),
            '2'     => __('Two', 'tanawul-bakery'),
            '3'     => __('Three', 'tanawul-bakery'),
            '4'     => __('Four', 'tanawul-bakery')
        ),
    ));

    $wp_customize->add_setting( 'tanawul_bakery_footer_widget_background', array(
	    'default' => '#1a7e83',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tanawul_bakery_footer_widget_background', array(
  		'label' => __('Footer Widget Background','tanawul-bakery'),
	    'section' => 'tanawul_bakery_footer',
  	)));

  	$wp_customize->add_setting('tanawul_bakery_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'tanawul_bakery_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','tanawul-bakery'),
        'section' => 'tanawul_bakery_footer'
	)));

	$wp_customize->add_setting('tanawul_bakery_img_footer',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_img_footer',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','tanawul-bakery'),
		'choices' => array(
            'fixed' => __('fixed','tanawul-bakery'),
            'scroll' => __('scroll','tanawul-bakery'),
        ),
		'section'=> 'tanawul_bakery_footer',
	));

	$wp_customize->add_setting('tanawul_bakery_footer_img_position',array(
		'default' => 'center center',
		'transport' => 'refresh',
		'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));

	$wp_customize->add_control('tanawul_bakery_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','tanawul-bakery'),
		'section' => 'tanawul_bakery_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'tanawul-bakery' ),
			'center top'   => esc_html__( 'Top', 'tanawul-bakery' ),
			'right top'   => esc_html__( 'Top Right', 'tanawul-bakery' ),
			'left center'   => esc_html__( 'Left', 'tanawul-bakery' ),
			'center center'   => esc_html__( 'Center', 'tanawul-bakery' ),
			'right center'   => esc_html__( 'Right', 'tanawul-bakery' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'tanawul-bakery' ),
			'center bottom'   => esc_html__( 'Bottom', 'tanawul-bakery' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'tanawul-bakery' ),
		),
	));

	$wp_customize->add_setting('tanawul_bakery_hide_show_scroll',array(
        'default' => false,
        'sanitize_callback'	=> 'tanawul_bakery_sanitize_checkbox'
	));
	$wp_customize->add_control('tanawul_bakery_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','tanawul-bakery'),
      	'section' => 'tanawul_bakery_footer',
	));

	$wp_customize->add_setting('tanawul_bakery_scroll_icon_changer',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tanawul_Bakery_Icon_Changer(
        $wp_customize,'tanawul_bakery_scroll_icon_changer',array(
		'label'	=> __('Scroll To Top Icon','tanawul-bakery'),
		'transport' => 'refresh',
		'section'	=> 'tanawul_bakery_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tanawul_bakery_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'tanawul_bakery_sanitize_choices'
	));
	$wp_customize->add_control('tanawul_bakery_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','tanawul-bakery'),
        'description' => __('Here you can change the Footer layout. ','tanawul-bakery'),
        'section' => 'tanawul_bakery_footer',
        'choices' => array(
            'Left align' => __('Left align','tanawul-bakery'),
            'Right align' => __('Right align','tanawul-bakery'),
            'Center align' => __('Center align','tanawul-bakery'),
        ),
	) );

	$wp_customize->add_setting('tanawul_bakery_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'    => 'tanawul_bakery_sanitize_number_range',
	));
	$wp_customize->add_control('tanawul_bakery_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','tanawul-bakery'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tanawul_bakery_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('tanawul_bakery_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','tanawul-bakery'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tanawul_bakery_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tanawul_bakery_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','tanawul-bakery'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tanawul_bakery_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'tanawul_bakery_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	) );
	$wp_customize->add_control( 'tanawul_bakery_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','tanawul-bakery' ),
		'section'     => 'tanawul_bakery_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('tanawul_bakery_scroll_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tanawul_bakery_scroll_background_color', array(
		'label'    => __('Scroll To Top Background Color', 'tanawul-bakery'),
		'section'  => 'tanawul_bakery_footer',
	)));

	$wp_customize->add_setting('tanawul_bakery_scroll_icon_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tanawul_bakery_scroll_icon_color', array(
		'label'    => __('Scroll To Top Color', 'tanawul-bakery'),
		'section'  => 'tanawul_bakery_footer',
	)));

	$wp_customize->add_setting('tanawul_bakery_scroll_background_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tanawul_bakery_scroll_background_hover_color', array(
		'label'    => __('Scroll To Top Background Hover Color', 'tanawul-bakery'),
		'section'  => 'tanawul_bakery_footer',
	)));

	$wp_customize->add_setting('tanawul_bakery_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tanawul_bakery_footer_text',array(
		'label'	=> __('Add Copyright Text','tanawul-bakery'),
		'section'	=> 'tanawul_bakery_footer',
		'setting'	=> 'tanawul_bakery_footer_text',
		'type'		=> 'text'
	));

    $wp_customize->add_setting('tanawul_bakery_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','tanawul-bakery'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tanawul_bakery_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tanawul_bakery_copyright_background_color', array(
		'default'           => '#fa605a',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tanawul_bakery_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'tanawul-bakery'),
		'section'  => 'tanawul_bakery_footer',
	)));

	$wp_customize->add_setting('tanawul_bakery_copyright_text_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tanawul_bakery_copyright_text_color', array(
		'label'    => __('Copyright text Color', 'tanawul-bakery'),
		'section'  => 'tanawul_bakery_footer',
	)));

	$wp_customize->add_setting('tanawul_bakery_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'tanawul_bakery_sanitize_float',
	));
	$wp_customize->add_control('tanawul_bakery_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','tanawul-bakery'),
		'section'=> 'tanawul_bakery_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'tanawul_bakery_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'tanawul_bakery_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'tanawul_bakery_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Tanawul Bakery 1.0
 * @see tanawul-bakery_customize_register()
 *
 * @return void
 */
function tanawul_bakery_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Tanawul Bakery 1.0
 * @see tanawul-bakery_customize_register()
 *
 * @return void
 */
function tanawul_bakery_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function tanawul_bakery_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Tanawul_Bakery_Customize {

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
		$manager->register_section_type( 'Tanawul_Bakery_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Tanawul_Bakery_Customize_Section_Pro(
				$manager,
				'tanawul_bakery_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Tanawul Bakery Pro', 'tanawul-bakery' ),
					'pro_text' => esc_html__( 'Go Pro', 'tanawul-bakery' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/bakery-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'tanawul-bakery-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'tanawul-bakery-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Tanawul_Bakery_Customize::get_instance();