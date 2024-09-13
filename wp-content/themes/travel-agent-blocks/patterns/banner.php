<?php
/**
 * Title: Banner
 * Slug: travel-agent-blocks/banner
 * Categories: travel-agent-blocks, banner
 */
?>

<!-- wp:group {"className":"bannerimage","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group bannerimage" style="margin-top:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":53,"dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":650,"minHeightUnit":"px","isDark":false,"align":"full","className":"banner-image-cover","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover alignfull is-light banner-image-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-53" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"top","width":"70%","className":"banner-content-block wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-top banner-content-block wow zoomIn" style="flex-basis:70%"><!-- wp:spacer {"height":"123px","className":"banner-main-spacer"} -->
<div style="height:123px" aria-hidden="true" class="wp-block-spacer banner-main-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"none","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<h6 class="wp-block-heading has-text-align-left has-white-color-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:500;text-transform:none"><?php esc_html_e("Let's Make Your best trip Ever!",'travel-agent-blocks'); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"className":"wp-block-heading has-text-align-left has-outfit-font-family","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"500"}},"textColor":"white-color"} -->
<h2 class="wp-block-heading has-text-align-left has-outfit-font-family has-white-color-color has-text-color has-link-color" style="font-size:50px;font-style:normal;font-weight:500"><?php esc_html_e('Your Personal Travel Experts','travel-agent-blocks'); ?><br><?php esc_html_e('Explore More, Worry Less','travel-agent-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"18px"} -->
<div style="height:18px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:0"><!-- wp:button {"backgroundColor":"primary","className":"has-source-sans-3-font-family","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","fontSize":"14px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontFamily":"outfit"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-outfit-font-family" style="font-size:14px;font-style:normal;font-weight:500;text-transform:none"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More','travel-agent-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"18px"} -->
<div style="height:18px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"30%","className":"banner-content-block-2"} -->
<div class="wp-block-column is-vertically-aligned-top banner-content-block-2" style="flex-basis:30%"><!-- wp:social-links {"size":"has-normal-icon-size","className":"banner-social","layout":{"type":"flex","justifyContent":"right","orientation":"vertical"}} -->
<ul class="wp-block-social-links has-normal-icon-size banner-social"><!-- wp:social-link {"url":"$","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"banner-search-outer","layout":{"type":"constrained","contentSize":"20%","justifyContent":"right"}} -->
<div class="wp-block-group banner-search-outer"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"16px"}},"textColor":"white-color"} -->
<p class="has-text-align-center has-white-color-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e('Discover Your Travel','travel-agent-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search here...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"banner-search","style":{"border":{"radius":"30px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"base","textColor":"primary","borderColor":"border-color"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->