<?php

add_action( 'admin_menu', 'tanawul_bakery_gettingstarted' );
function tanawul_bakery_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'tanawul-bakery'), esc_html__('About Theme', 'tanawul-bakery'), 'edit_theme_options', 'tanawul-bakery-guide-page', 'tanawul_bakery_guide');   
}

function tanawul_bakery_admin_theme_style() {
   wp_enqueue_style('tanawul-bakery-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'tanawul_bakery_admin_theme_style');

function tanawul_bakery_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Tanawul Bakery Theme', 'tanawul-bakery' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'tanawul-bakery' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=tanawul-bakery-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'tanawul-bakery' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'tanawul_bakery_notice');


/**
 * Theme Info Page
 */
function tanawul_bakery_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'tanawul-bakery' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Tanawul Bakery Theme', 'tanawul-bakery' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'tanawul-bakery' ); ?></strong></p>
							<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button role="tab" class="tablinks" onclick="tanawul_bakery_open(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="tanawul_bakery_open(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Tanawul Bakery Lite Theme', 'tanawul-bakery' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img role="img" role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <div class="table-image">
								<table class="tablebox">
									<thead>
										<tr>
											<th><?php esc_html_e('Setup', 'tanawul-bakery'); ?></th>
											<th><?php esc_html_e('Click Here', 'tanawul-bakery'); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php esc_html_e('Logo', 'tanawul-bakery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Click', 'tanawul-bakery'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Menus', 'tanawul-bakery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Click', 'tanawul-bakery'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Top Header', 'tanawul-bakery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tanawul_bakery_contact_details') ); ?>" target="_blank"><?php esc_html_e('Click', 'tanawul-bakery'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Slider', 'tanawul-bakery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tanawul_bakery_slider') ); ?>" target="_blank"><?php esc_html_e('Click', 'tanawul-bakery'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Post Settings', 'tanawul-bakery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tanawul_bakery_blog_post') ); ?>" target="_blank"><?php esc_html_e('Click', 'tanawul-bakery'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Footer', 'tanawul-bakery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tanawul_bakery_footer') ); ?>" target="_blank"><?php esc_html_e('Click', 'tanawul-bakery'); ?></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ol>
								<li><?php esc_html_e( 'Start','tanawul-bakery'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','tanawul-bakery'); ?></a> <?php esc_html_e( 'your website.','tanawul-bakery'); ?> </li>
								<li><?php esc_html_e( 'Tanawul Bakery','tanawul-bakery'); ?> <a target="_blank" href="<?php echo esc_url( TANAWUL_BAKERY_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','tanawul-bakery'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','tanawul-bakery'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( TANAWUL_BAKERY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'tanawul-bakery'); ?></a>
							<a href="<?php echo esc_url( TANAWUL_BAKERY_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'tanawul-bakery'); ?></a>
							<a href="<?php echo esc_url( TANAWUL_BAKERY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'tanawul-bakery'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','tanawul-bakery'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'If you are a bakery owner, far away people will come to you for mouth-watering treats because the temptation of taste related to tongue remains and if you are interested in attracting customers for your pastries, cakes and delicious biscuits, you need to create a professional website and for this bakery WordPress theme will play an important role. Making a top-notch bakery website might be a challenging task but this bakery theme makes things quite easy. It is accompanied by a mesmerizing design and the layout is easily adaptable on-screen. There is no need to worry in the area of resizing as well as errors related to the compatibility. Bakery WordPress theme works in an excellent manner on different operating systems, web browsers as well as devices. It is accompanied by a stylish gallery option and the website owners have the choice to upload photos. You will have amazing pictures in full-screen format.', 'tanawul-bakery' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','tanawul-bakery'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Documention','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','tanawul-bakery'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','tanawul-bakery'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','tanawul-bakery'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( TANAWUL_BAKERY_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','tanawul-bakery'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( TANAWUL_BAKERY_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','tanawul-bakery'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','tanawul-bakery'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','tanawul-bakery'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','tanawul-bakery'); ?></a> <?php esc_html_e( 'your website.','tanawul-bakery'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','tanawul-bakery'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( TANAWUL_BAKERY_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','tanawul-bakery'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( TANAWUL_BAKERY_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','tanawul-bakery'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','tanawul-bakery'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( TANAWUL_BAKERY_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'tanawul-bakery'); ?></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
}?>