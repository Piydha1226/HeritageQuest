<?php
/**
 * Title: Banner
 * Slug: shopgrove/banner
 * Categories: shopgrove
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg","id":2660,"dimRatio":0,"overlayColor":"excerpt-link-color","isUserOverlayColor":true,"minHeight":90,"minHeightUnit":"vh","contentPosition":"center center","tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<main class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20);min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-excerpt-link-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2660" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Welcome To ShopeGrove', 'shopgrove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"62px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"className":"o-typing-delay-100ms banner-heading","fontFamily":"body"} -->
<h2 class="wp-block-heading o-typing-delay-100ms banner-heading has-body-font-family" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);font-size:62px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Beauty Beyond Borders: Exploring', 'shopgrove' ); ?> <strong><o-anim-typing><?php echo esc_html__( 'Global Fashion', 'shopgrove' ); ?></o-anim-typing></strong> <?php echo esc_html__( 'Inspirations', 'shopgrove' ); ?> </h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Shop Now', 'shopgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->

