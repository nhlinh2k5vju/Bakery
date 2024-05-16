<?php
/**
 * The template for displaying all pages
 */
get_header(); ?>


<?php do_action( 'tanawul_bakery_page_header' ); ?>

<main id="main" role="main">	
	<div class="container">
		<?php $tanawul_bakery_theme_lay = get_theme_mod( 'tanawul_bakery_page_sidebar_option','One Column');
    	if($tanawul_bakery_theme_lay == 'One Column'){ ?>
    		<div class="pages-te">
    			<?php if (get_theme_mod('tanawul_bakery_single_page_breadcrumb',true) != ''){ ?>
                	<div class="breadcrumb">
                      <?php tanawul_bakery_the_breadcrumb(); ?>
                  	</div>
            	<?php }?>
				<?php
					while ( have_posts() ) : the_post();?>
			            <?php the_post_thumbnail(); ?>
						<h1><?php the_title();?></h1>
						<div class="text"><p><?php the_content(); ?></p></div>
						
						<?php
							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tanawul-bakery' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tanawul-bakery' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
					        // If comments are open or we have at least one comment, load up the comment template.
					        if ( comments_open() || get_comments_number() ) {
					            comments_template();
					        }
					    ?>

					<?php endwhile; // End of the loop.

				wp_reset_postdata(); ?>
			</div>

		<?php }else if($tanawul_bakery_theme_lay == 'Right Sidebar'){ ?>
        	<div class="row">
        		<div class="pages-te col-lg-8 col-md-8">
        			<?php if (get_theme_mod('tanawul_bakery_single_page_breadcrumb',true) != ''){ ?>
	                	<div class="breadcrumb">
	                      <?php tanawul_bakery_the_breadcrumb(); ?>
	                  	</div>
            		<?php }?>
            		<?php
						while ( have_posts() ) : the_post();?>
				            <?php the_post_thumbnail(); ?>
							<h1><?php the_title();?></h1>
							<div class="text"><p><?php the_content(); ?></p></div>
							
							<?php
								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tanawul-bakery' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tanawul-bakery' ) . ' </span>%',
									'separator'   => '<span class="screen-reader-text">, </span>',
								) );
						        // If comments are open or we have at least one comment, load up the comment template.
						        if ( comments_open() || get_comments_number() ) {
						            comments_template();
						        }
						    ?>

						<?php endwhile; // End of the loop.

					wp_reset_postdata(); ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			</div>
		<?php }else if($tanawul_bakery_theme_lay == 'Left Sidebar'){ ?>
        	<div class="row">
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
        		<div class="pages-te col-lg-8 col-md-8">
        			<?php if (get_theme_mod('tanawul_bakery_single_page_breadcrumb',true) != ''){ ?>
	                	<div class="breadcrumb">
	                      <?php tanawul_bakery_the_breadcrumb(); ?>
	                  	</div>
            		<?php }?>
            		<?php
						while ( have_posts() ) : the_post();?>
				            <?php the_post_thumbnail(); ?>
							<h1><?php the_title();?></h1>
							<div class="text"><p><?php the_content(); ?></p></div>
							
							<?php
								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tanawul-bakery' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tanawul-bakery' ) . ' </span>%',
									'separator'   => '<span class="screen-reader-text">, </span>',
								) );
						        // If comments are open or we have at least one comment, load up the comment template.
						        if ( comments_open() || get_comments_number() ) {
						            comments_template();
						        }
						    ?>

						<?php endwhile; // End of the loop.

					wp_reset_postdata(); ?>
				</div>
			</div>
		<?php }else {?>
			<div class="row">
        		<div class="pages-te col-lg-8 col-md-8">
        			<?php if (get_theme_mod('tanawul_bakery_single_page_breadcrumb',true) != ''){ ?>
	                	<div class="breadcrumb">
	                      <?php tanawul_bakery_the_breadcrumb(); ?>
	                  	</div>
            		<?php }?>
            		<?php
					while ( have_posts() ) : the_post();?>
			            <?php the_post_thumbnail(); ?>
						<h1><?php the_title();?></h1>
						<div class="text"><p><?php the_content(); ?></p></div>
						
						<?php
							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tanawul-bakery' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tanawul-bakery' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
					        // If comments are open or we have at least one comment, load up the comment template.
					        if ( comments_open() || get_comments_number() ) {
					            comments_template();
					        }
					    ?>

					<?php endwhile; // End of the loop.

					wp_reset_postdata(); ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			</div>
		<?php } ?>
	</div>
</main>

<?php do_action( 'tanawul_bakery_page_footer' ); ?>

<?php get_footer();
