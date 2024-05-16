<?php
/**
 * Displays top navigation
 */
?>

<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/headingdesign1.png');?>" class="header-updesign" alt="<?php esc_attr_e( 'Header Design 1','tanawul-bakery' );?>">
<div class="header-menu p-2">
	<div class="row m-0">
		<div class="col-lg-5 col-md-5 align-self-center">
			<nav id="site-navigation" class="main-navigation" role="navigation" >
				<?php wp_nav_menu( array(
					'theme_location' => 'left-menu',
				) ); ?>				
			</nav>
		</div>
		<div class="col-lg-2 col-md-2 main-logo align-self-center">
			<div class="<?php if(has_custom_logo()) { ?>logo-img logo<?php } else { ?>logo-text p-4 mx-auto text-center"<?php } ?>">
		     	<?php if ( has_custom_logo() ) : ?>
		            <div class="site-logo"><?php the_custom_logo(); ?></div>
		        <?php endif; ?>
	            <?php $blog_info = get_bloginfo( 'name' ); ?>
	            <?php if ( ! empty( $blog_info ) ) : ?>
		          	<?php if( get_theme_mod('tanawul_bakery_show_site_title',true) != ''){ ?>
			            <?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title m-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			            <?php else : ?>
							<p class="site-title m-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			            <?php endif; ?>
			        <?php }?>
	          	<?php endif; ?>
	          	<?php
	          	$description = get_bloginfo( 'description', 'display' );
          		if ( $description || is_customize_preview() ) :
	            ?>
		            <?php if( get_theme_mod('tanawul_bakery_show_tagline',false) != ''){ ?>
			          <p class="site-description m-0">
			            <?php echo esc_html($description); ?>
			          </p>
		          	<?php }?>
		        <?php endif; ?>
		    </div>
		</div>
		<div class="col-lg-5 col-md-5 align-self-center">
			<nav id="site-navigation" class="main-navigation" role="navigation" >
				<?php wp_nav_menu( array(
					'theme_location' => 'right-menu',
				) ); ?>				
			</nav>
		</div>
	</div>
</div>
<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/headingdesign2.png');?>" class="header-downdesign" alt="<?php esc_attr_e( 'Header Design 2','tanawul-bakery' );?>">