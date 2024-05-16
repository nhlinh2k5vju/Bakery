<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'tanawul_bakery_hide_show_scroll',false) != '' || get_theme_mod( 'tanawul_bakery_enable_disable_scrolltop',false) != '') { ?>
    <?php $tanawul_bakery_theme_lay = get_theme_mod( 'tanawul_bakery_footer_options','Right');
        if($tanawul_bakery_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('tanawul_bakery_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tanawul-bakery' ); ?></span></a>
        <?php }else if($tanawul_bakery_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('tanawul_bakery_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tanawul-bakery' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('tanawul_bakery_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tanawul-bakery' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<span><?php tanawul_bakery_credit(); ?> <?php echo esc_html(get_theme_mod('tanawul_bakery_footer_text',__('By ThemesEye','tanawul-bakery'))); ?> </span>
	<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','tanawul-bakery') ?></span>
</div>