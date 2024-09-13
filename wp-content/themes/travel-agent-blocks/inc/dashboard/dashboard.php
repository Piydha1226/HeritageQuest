<?php

add_action( 'admin_menu', 'travel_agent_blockss_gettingstarted' );
function travel_agent_blockss_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'travel-agent-blocks'), esc_html__('Begin Installation', 'travel-agent-blocks'), 'edit_theme_options', 'travel-agent-blocks-guide-page', 'travel_agent_blockss_guide');
}

function travel_agent_blockss_admin_theme_style() {
   wp_enqueue_style('travel-agent-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'travel_agent_blockss_admin_theme_style');

if ( ! defined( 'TRAVEL_AGENT_BLOCKS_SUPPORT' ) ) {
define('TRAVEL_AGENT_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/travel-agent-blocks/','travel-agent-blocks'));
}
if ( ! defined( 'TRAVEL_AGENT_BLOCKS_REVIEW' ) ) {
define('TRAVEL_AGENT_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/travel-agent-blocks/reviews/','travel-agent-blocks'));
}
if ( ! defined( 'TRAVEL_AGENT_BLOCKS_LIVE_DEMO' ) ) {
define('TRAVEL_AGENT_BLOCKS_LIVE_DEMO',__('https://trial.ovationthemes.com/travel-agent-blocks-pro/','travel-agent-blocks'));
}
if ( ! defined( 'TRAVEL_AGENT_BLOCKS_BUY_PRO' ) ) {
define('TRAVEL_AGENT_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/products/travel-agent-wordpress-theme','travel-agent-blocks'));
}
if ( ! defined( 'TRAVEL_AGENT_BLOCKS_PRO_DOC' ) ) {
define('TRAVEL_AGENT_BLOCKS_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-travel-agent-blocks-pro-doc/','travel-agent-blocks'));
}
if ( ! defined( 'TRAVEL_AGENT_BLOCKS_FREE_DOC' ) ) {
define('TRAVEL_AGENT_BLOCKS_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-travel-agent-blocks-free-doc/','travel-agent-blocks'));
}
if ( ! defined( 'TRAVEL_AGENT_BLOCKS_THEME_NAME' ) ) {
define('TRAVEL_AGENT_BLOCKS_THEME_NAME',__('Premium Travel Agent Blocks Theme','travel-agent-blocks'));
}

/**
 * Theme Info Page
 */
function travel_agent_blockss_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'travel-agent-blocks'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( TRAVEL_AGENT_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'travel-agent-blocks'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( TRAVEL_AGENT_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'travel-agent-blocks'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','travel-agent-blocks'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','travel-agent-blocks'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','travel-agent-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','travel-agent-blocks'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','travel-agent-blocks'); ?></h4>
					<p><?php esc_html_e('To check your website click here','travel-agent-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','travel-agent-blocks'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','travel-agent-blocks'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','travel-agent-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( TRAVEL_AGENT_BLOCKS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','travel-agent-blocks'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(TRAVEL_AGENT_BLOCKS_THEME_NAME); ?></h3>
				<img class="travel_agent_blockss_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( TRAVEL_AGENT_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'travel-agent-blocks'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( TRAVEL_AGENT_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'travel-agent-blocks'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( TRAVEL_AGENT_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'travel-agent-blocks'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'travel-agent-blocks');?> </li>                 
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'travel-agent-blocks');?> </li>
					<li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'travel-agent-blocks');?> </li>
               <li class="upsell-travel_agent_blockss"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'travel-agent-blocks');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>