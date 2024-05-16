<?php
/**
 * The header for our theme 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>	
	<?php if(get_theme_mod('tanawul_bakery_loader_setting',false) != '' || get_theme_mod('tanawul_bakery_enable_disable_preloader',false) != ''){ ?>
	    <div id="pre-loader">
			<div class='demo'>
				<?php $tanawul_bakery_theme_lay = get_theme_mod( 'tanawul_bakery_preloader_types','Default');
				if($tanawul_bakery_theme_lay == 'Default'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
				<?php }elseif($tanawul_bakery_theme_lay == 'Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
				<?php }elseif($tanawul_bakery_theme_lay == 'Two Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
				<?php } ?>
			</div>
	    </div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'tanawul-bakery' ); ?></a>
	<div id="page" class="site">
		<header id="masthead" class="site-header pb-5" role="banner">
			<div class="container">
				<?php if( get_theme_mod('tanawul_bakery_show_hide_topbar',false) != '' || get_theme_mod('tanawul_bakery_enable_disable_topbar',false) != ''){ ?>
					<div class="topbar pt-2">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="contact-detail">
									<div class="row">
										<div class="col-lg-4 col-md-6">
											<?php if( get_theme_mod( 'tanawul_bakery_contact_number','' ) != '') { ?>
								                <a class="call" href="tel:<?php echo esc_attr( get_theme_mod('tanawul_bakery_contact_number','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('tanawul_bakery_phone_icon_changer','fa fa-phone')); ?> me-1 my-lg-0 my-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('tanawul_bakery_contact_number','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tanawul_bakery_contact_number','' )); ?></span></a>
								            <?php } ?>
								        </div>
								        <div class="col-lg-8 col-md-6">
											<?php if( get_theme_mod( 'tanawul_bakery_email_address','' ) != '') { ?>
								                <a class="email" href="mailto:<?php echo esc_attr( get_theme_mod('tanawul_bakery_email_address','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('tanawul_bakery_email_icon_changer','fa fa-envelope')); ?> me-1 my-lg-0 my-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('tanawul_bakery_email_address','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('tanawul_bakery_email_address','') ); ?></span></a>
								            <?php } ?>
								        </div>
							        </div>
						        </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="social-icon text-md-end text-center">
									<?php if( get_theme_mod( 'tanawul_bakery_facebook_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'tanawul_bakery_facebook_url','' ) ); ?>" target="_blank" ><i class="<?php echo esc_attr(get_theme_mod('tanawul_bakery_facebook_icon_changer','fab fa-facebook-f')); ?>" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','tanawul-bakery' );?></span></a>
									<?php } ?>
									<?php if( get_theme_mod( 'tanawul_bakery_twitter_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'tanawul_bakery_twitter_url','' ) ); ?>" target="_blank"><i class="<?php echo esc_attr(get_theme_mod('tanawul_bakery_twitter_icon_changer','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','tanawul-bakery' );?></span></a>
									<?php } ?>
									<?php if( get_theme_mod( 'tanawul_bakery_youtube_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'tanawul_bakery_youtube_url','' ) ); ?>" target="_blank" ><i class="<?php echo esc_attr(get_theme_mod('tanawul_bakery_youtube_icon_changer','fab fa-youtube')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','tanawul-bakery' );?></span></a>
									<?php } ?>
									<?php if( get_theme_mod( 'tanawul_bakery_linkedin_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'tanawul_bakery_linkedin_url','' ) ); ?>" target="_blank" ><i class="<?php echo esc_attr(get_theme_mod('tanawul_bakery_linkedin_icon_changer','fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','tanawul-bakery' );?></span></a>
									<?php } ?>
									<?php if( get_theme_mod( 'tanawul_bakery_instagram_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'tanawul_bakery_instagram_url','' ) ); ?>" target="_blank" ><i class="<?php echo esc_attr(get_theme_mod('tanawul_bakery_instagram_icon_changer','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','tanawul-bakery' );?></span></a>
									<?php } ?>
									<?php if(class_exists('woocommerce')){ ?>
									    <span class="cart_icon text-center position-relative">
									        <a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-basket ms-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Shopping-basket','tanawul-bakery' );?></span></a>
								            <li class="cart_box">
								              <span class="cart-value"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span>
								            </li>
									    </span>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="main-header">
					<div class="navigation-top">
						<div class="responsive">
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'tanawul-bakery' ); ?>">
								<button role="tab" class="menu-toggle p-3 mx-auto" aria-controls="top-menu" aria-expanded="false">
									<?php
										esc_html_e( 'Menus', 'tanawul-bakery' );
									?>
								</button>
								<?php wp_nav_menu( array(
									'theme_location' => 'responsive-menu',
									'menu_id'        => 'top-menu',
								) ); ?>
							</nav>
						</div>
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div>
				</div>
			</div>
		</header>
	</div>

	<div class="site-content-contain">
		<div id="content">