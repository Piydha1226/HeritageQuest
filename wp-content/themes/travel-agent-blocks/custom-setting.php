<?php 

function travel_agent_blocks_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'travel-agent-blocks-theme-settings', // Menu slug
        'travel_agent_blocks_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'travel_agent_blocks_add_admin_menu' );

function travel_agent_blocks_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'travel-agent-blocks' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'travel_agent_blocks_settings_group' );
            do_settings_sections( 'travel-agent-blocks-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function travel_agent_blocks_register_settings() {
    register_setting( 'travel_agent_blocks_settings_group', 'travel_agent_blocks_enable_animations' );

    add_settings_section(
        'travel_agent_blocks_settings_section',
        __( 'Animation Settings', 'travel-agent-blocks' ),
        null,
        'travel-agent-blocks-theme-settings'
    );

    add_settings_field(
        'travel_agent_blocks_enable_animations',
        __( 'Enable Animations', 'travel-agent-blocks' ),
        'travel_agent_blocks_enable_animations_callback',
        'travel-agent-blocks-theme-settings',
        'travel_agent_blocks_settings_section'
    );
}
add_action( 'admin_init', 'travel_agent_blocks_register_settings' );

function travel_agent_blocks_enable_animations_callback() {
    $checked = get_option( 'travel_agent_blocks_enable_animations', true );
    ?>
    <input type="checkbox" name="travel_agent_blocks_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

