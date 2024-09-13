<?php
/**
 * Title: Header
 * Slug: travel-agent-blocks/header
 * Categories: travel-agent-blocks, header
 */
?>

<!-- wp:group {"className":"menu-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group menu-header has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","className":"inner-menu-header"} -->
<div class="wp-block-columns are-vertically-aligned-center inner-menu-header"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"logo-block"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block" style="flex-basis:20%"><!-- wp:group {"className":"logodiv","textColor":"primary","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group logodiv has-primary-color has-text-color"><!-- wp:site-logo {"width":43,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"capitalize","fontSize":"20px"}},"textColor":"secondary","fontFamily":"outfit"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"info-block"} -->
<div class="wp-block-column is-vertically-aligned-center info-block" style="flex-basis:30%"><!-- wp:group {"className":"info-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group info-row"><!-- wp:image {"id":54,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"right"} -->
<figure class="wp-block-image alignright size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/location.png'); ?>" alt="" class="wp-image-54" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:500"><?php esc_html_e('Address','travel-agent-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"14px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:14px;font-style:normal;font-weight:500"><?php esc_html_e('4545 LaJolla Village,San Diego, California','travel-agent-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%","className":"nav-block","style":{"spacing":{"padding":{"left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center nav-block" style="padding-left:0;flex-basis:35%"><!-- wp:navigation {"textColor":"secondary","overlayBackgroundColor":"base","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize","letterSpacing":"1px","fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Buy Now","type":"link","opensInNewTab":true,"url":"https://www.ovationthemes.com/products/travel-agent-wordpress-theme","kind":"custom","className":"buynow"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%","className":"button-block"} -->
<div class="wp-block-column is-vertically-aligned-center button-block" style="flex-basis:15%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"has-source-sans-3-font-family","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","fontSize":"14px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontFamily":"outfit"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-outfit-font-family" style="font-size:14px;font-style:normal;font-weight:500;text-transform:none"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Register','travel-agent-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->