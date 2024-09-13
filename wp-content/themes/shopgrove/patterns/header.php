<?php
/**
 * Title: Header
 * Slug: shopgrove/header
 * Categories: header, shopgrove
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"metadata":{"name":"top-bar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":2682,"width":"20px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/check.png" alt="" class="wp-image-2682" style="width:20px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|link-color"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300"}},"textColor":"link-color","fontFamily":"body"} -->
<p class="has-link-color-color has-text-color has-link-color has-body-font-family" style="font-size:15px;font-style:normal;font-weight:300"><?php echo esc_html__( 'Free shipping on all orders over $50', 'shopgrove' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"textColor":"link-color","overlayBackgroundColor":"base","overlayTextColor":"contrast","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"15px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"search-bar"},"align":"wide","style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:18px;padding-right:var(--wp--preset--spacing--20);padding-bottom:18px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"32px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontFamily":"body"} /--></div>
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Product","width":450,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","style":{"border":{"width":"0px","style":"none"}}} /-->

<!-- wp:group {"align":"wide","className":"inner-content-has-bg","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","orientation":"horizontal"}} -->
<div class="wp-block-group alignwide inner-content-has-bg"><?php $pluginsList = get_option( 'active_plugins' );
$shopgrove_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $shopgrove_plugin , $pluginsList);
if ( $results )  { ?> <!-- wp:woocommerce/mini-cart {"priceColor":{"color":"#029fae","name":"Primary","slug":"primary","class":"has-primary-product-count-color"},"iconColor":{"color":"#029fae","name":"Primary","slug":"primary","class":"has-primary-icon-color"},"productCountColor":{"color":"#029fae","name":"Primary","slug":"primary","class":"has-primary-product-count-color"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /--> <?php } ?>

<!-- wp:image {"id":2666,"width":"21px","height":"21px","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#029fae","#ffffff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/heart.png" alt="" class="wp-image-2666" style="object-fit:cover;width:21px;height:21px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2668,"width":"21px","height":"21px","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#029fae","#ffffff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/user.png" alt="" class="wp-image-2668" style="object-fit:cover;width:21px;height:21px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"navigation-bar"},"align":"wide","style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" id="sticky-header" style="margin-top:0;margin-bottom:0;padding-top:18px;padding-right:var(--wp--preset--spacing--20);padding-bottom:18px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"always","icon":"menu","overlayBackgroundColor":"primary","overlayTextColor":"base-2","className":"slider-menu ","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->

<!-- wp:navigation {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"6px","bottom":"6px"},"blockGap":"10px"},"border":{"radius":"6px","color":"#e7e7e7","width":"1px"}},"backgroundColor":"accent-7","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","orientation":"horizontal"}} -->
<div class="wp-block-group alignwide has-border-color has-accent-7-background-color has-background" style="border-color:#e7e7e7;border-width:1px;border-radius:6px;padding-top:6px;padding-right:var(--wp--preset--spacing--10);padding-bottom:6px;padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"id":2681,"width":"18px","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":["#029fae","#ffffff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/phone-call.png" alt="" class="wp-image-2681" style="width:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( '(123)-123456-123', 'shopgrove' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->


