<?php
/**
* The sidebar containing the main widget area
*/
?>

<div id="sidebox">
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <section id="Search" class="widget" role="complementary" aria-label="firstsidebar">
            <h3 class="widget-title  text-capitalize"><?php esc_html_e( 'Search', 'tanawul-bakery' ); ?></h3>
            <?php get_search_form(); ?>
        </section>
        <section id="archives" class="widget" role="complementary" aria-label="secondsidebar">
            <h3 class="widget-title text-capitalize"><?php esc_html_e( 'Archives', 'tanawul-bakery' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </section>
        <section id="meta" class="widget" role="complementary" aria-label="thirdsidebar">
            <h3 class="widget-title text-capitalize"><?php esc_html_e( 'Meta', 'tanawul-bakery' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </section>
    <?php endif; ?>
</div>

