<?php
/**
 * Title: Featured Products
 * Slug: shopgrove/featured-products
 * Categories: shopgrove
 * Keywords: featured-products
 */
$pluginsList = get_option( 'active_plugins' );
$shopgrove_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $shopgrove_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:group {"metadata":{"name":"featured-product"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"className":"animated fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-left has-body-font-family" style="font-size:36px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Featured', 'shopgrove' ); ?> <strong><?php echo esc_html__( 'Products', 'shopgrove' ); ?></strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html__( 'Duis leo. Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Pellentesque commodo eros a enim. Aliquam erat volutpat.', 'shopgrove' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:query {"queryId":10,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"typography":{"fontSize":"13px"}},"className":"products-block-post-template","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"border":{"radius":"8px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px","top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast","fontFamily":"body","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"elements":{"link":{"color":{"text":"#fabc01"}}},"color":{"text":"#fabc01"}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"contrast-3","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-outline","backgroundColor":"base-2","textColor":"primary","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"4px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } else { ?>
    <!-- wp:group {"metadata":{"name":"featured-product"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"className":"animated fadeInUp","layout":{"type":"constrained"}} -->
    <div class="wp-block-group animated fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":""}} -->
    <div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"body"} -->
    <h2 class="wp-block-heading has-text-align-left has-body-font-family" style="font-size:36px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Featured', 'shopgrove' ); ?> <strong><?php echo esc_html__( 'Products', 'shopgrove' ); ?></strong></h2>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
    <p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html__( 'Duis leo. Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Pellentesque commodo eros a enim. Aliquam erat volutpat.', 'shopgrove' ); ?></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":3886,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"8px"}}} -->
    <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="placeholder" class="wp-image-3886" style="border-radius:8px"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="font-size:18px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Beanie', 'shopgrove' ); ?></h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#fabc01"},"elements":{"link":{"color":{"text":"#fabc01"}}}},"fontSize":"medium"} -->
    <p class="has-text-align-center has-text-color has-link-color has-medium-font-size" style="color:#fabc01"><?php echo esc_html__( '★★★★★', 'shopgrove' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
    <p class="has-text-align-center has-contrast-3-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:500;line-height:1.5"><?php echo esc_html__( '$ 15', 'shopgrove' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"base-2","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-base-2-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Add to cart', 'shopgrove' ); ?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":3886,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"8px"}}} -->
    <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="placeholder" class="wp-image-3886" style="border-radius:8px"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="font-size:18px;font-style:normal;font-weight:600">Beanie</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#fabc01"},"elements":{"link":{"color":{"text":"#fabc01"}}}},"fontSize":"medium"} -->
    <p class="has-text-align-center has-text-color has-link-color has-medium-font-size" style="color:#fabc01"><?php echo esc_html__( '★★★★★', 'shopgrove' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
    <p class="has-text-align-center has-contrast-3-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:500;line-height:1.5"><?php echo esc_html__( '$ 15', 'shopgrove' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"base-2","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-base-2-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Add to cart', 'shopgrove' ); ?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":3886,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"8px"}}} -->
    <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="placeholder" class="wp-image-3886" style="border-radius:8px"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="font-size:18px;font-style:normal;font-weight:600">Beanie</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#fabc01"},"elements":{"link":{"color":{"text":"#fabc01"}}}},"fontSize":"medium"} -->
    <p class="has-text-align-center has-text-color has-link-color has-medium-font-size" style="color:#fabc01"><?php echo esc_html__( '★★★★★', 'shopgrove' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
    <p class="has-text-align-center has-contrast-3-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:500;line-height:1.5"><?php echo esc_html__( '$ 15', 'shopgrove' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"base-2","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-base-2-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Add to cart', 'shopgrove' ); ?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":3886,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"8px"}}} -->
    <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-3886" style="border-radius:8px"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="font-size:18px;font-style:normal;font-weight:600">Beanie</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#fabc01"},"elements":{"link":{"color":{"text":"#fabc01"}}}},"fontSize":"medium"} -->
    <p class="has-text-align-center has-text-color has-link-color has-medium-font-size" style="color:#fabc01"><?php echo esc_html__( '★★★★★', 'shopgrove' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
    <p class="has-text-align-center has-contrast-3-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:500;line-height:1.5"><?php echo esc_html__( '$ 15', 'shopgrove' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"base-2","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-base-2-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Add to cart', 'shopgrove' ); ?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
<?php }?>



