<?php
/**
 * Travel Agent Blocks: Block Patterns
 *
 * @since Travel Agent Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Travel Agent Blocks 1.0
 *
 * @return void
 */
function travel_agent_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'travel-agent-blocks'    => array( 'label' => __( 'Travel Agent Blocks', 'travel-agent-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'travel_agent_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'travel_agent_blocks_register_block_patterns', 9 );
