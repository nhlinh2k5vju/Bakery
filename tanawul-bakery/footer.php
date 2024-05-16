<?php
/**
 * The template for displaying the footer
 */

?>

<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/design1.png');?>" class="footer-design" alt="<?php esc_attr_e( 'Footer Design','tanawul-bakery' );?>">
<footer id="colophon" class="site-footer " role="contentinfo">
	<div class="container">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' );?>
	</div>
</footer>
<div class="copyright">
	<div class="container">
		<?php get_template_part( 'template-parts/footer/site', 'info' );?>
	</div>
</div>
	
<?php wp_footer(); ?>

</body>
</html>