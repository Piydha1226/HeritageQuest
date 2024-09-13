<?php
/**
 * Travel Agent Blocks: Customizer
 *
 * @subpackage Travel Agent Blocks
 * @since 1.0
 */

function travel_agent_blockss_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('travel_agent_blockss_pro', array(
        'title'    => __('TRAVEL AGENT BLOCKS PREMIUM', 'travel-agent-blocks'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('travel_agent_blockss_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Travel_Agent_Blocks_Pro_Control($wp_customize, 'travel_agent_blockss_pro', array(
        'label'    => __('TRAVEL AGENT BLOCKS PREMIUM', 'travel-agent-blocks'),
        'section'  => 'travel_agent_blockss_pro',
        'settings' => 'travel_agent_blockss_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'travel_agent_blockss_customize_register' );


define('TRAVEL_AGENT_BLOCKS_PRO_LINK',__('https://www.ovationthemes.com/products/travel-agent-wordpress-theme','travel-agent-blocks'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Travel_Agent_Blocks_Pro_Control')):
    class Travel_Agent_Blocks_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( TRAVEL_AGENT_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE TRAVEL AGENT PREMIUM','travel-agent-blocks');?> </a>
	        </div>
            <div class="col-md">
                <img class="travel_agent_blockss_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
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
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( TRAVEL_AGENT_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE TRAVEL AGENT PREMIUM','travel-agent-blocks');?> </a>
            </div>
        </label>
    <?php } }
endif;