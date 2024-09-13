<?php
/**
 * Title: Top Categories
 * Slug: shopgrove/top-categories
 * Categories: shopgrove
 * Keywords: top-categories
 */
$pluginsList = get_option( 'active_plugins' );
$shopgrove_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $shopgrove_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:group {"metadata":{"name":"top-category"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","className":"animated fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-left has-body-font-family" style="font-size:42px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Top', 'shopgrove' ); ?> <strong><?php echo esc_html__( 'Categories', 'shopgrove' ); ?></strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html__( 'Duis leo. Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Pellentesque commodo eros a enim. Aliquam erat volutpat.', 'shopgrove' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-category {"dimRatio":70,"editMode":false,"focalPoint":{"x":0.52,"y":0.38},"imageFit":"cover","overlayColor":"#350b35","textColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"border":{"radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Shop now', 'shopgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-category {"dimRatio":70,"editMode":false,"focalPoint":{"x":0.52,"y":0.38},"imageFit":"cover","overlayColor":"#011c1b","textColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"border":{"radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Shop now', 'shopgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-category {"dimRatio":70,"editMode":false,"focalPoint":{"x":0.52,"y":0.38},"imageFit":"cover","overlayColor":"#000","textColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"border":{"radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Shop now', 'shopgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-category {"dimRatio":70,"editMode":false,"focalPoint":{"x":0.52,"y":0.38},"imageFit":"cover","overlayGradient":"linear-gradient(180deg,rgb(0,0,0) 0%,rgb(37,27,27) 50%,rgb(84,22,22) 100%)","textColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"border":{"radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#outerwear/" style="padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Shop now', 'shopgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php } else{?>
    <!-- wp:group {"metadata":{"name":"top-category"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","className":"animated fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-left has-body-font-family" style="font-size:42px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Top', 'shopgrove' ); ?> <strong><?php echo esc_html__( 'Categories', 'shopgrove' ); ?></strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html__( 'Duis leo. Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Pellentesque commodo eros a enim. Aliquam erat volutpat.', 'shopgrove' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"background":"#6d506d"},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:8px;background-color:#6d506d;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|link-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"25px"}},"textColor":"link-color"} -->
<h2 class="wp-block-heading has-text-align-center has-link-color-color has-text-color has-link-color" style="font-size:25px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Accessories', 'shopgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Shop now', 'shopgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"background":"#6d506d"},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:8px;background-color:#6d506d;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|link-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"25px"}},"textColor":"link-color"} -->
<h2 class="wp-block-heading has-text-align-center has-link-color-color has-text-color has-link-color" style="font-size:25px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Accessories', 'shopgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Shop now', 'shopgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"background":"#6d506d"},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:8px;background-color:#6d506d;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|link-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"25px"}},"textColor":"link-color"} -->
<h2 class="wp-block-heading has-text-align-center has-link-color-color has-text-color has-link-color" style="font-size:25px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Accessories', 'shopgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Shop now', 'shopgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"background":"#6d506d"},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:8px;background-color:#6d506d;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|link-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"25px"}},"textColor":"link-color"} -->
<h2 class="wp-block-heading has-text-align-center has-link-color-color has-text-color has-link-color" style="font-size:25px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Accessories', 'shopgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Shop now', 'shopgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php  }; ?> 