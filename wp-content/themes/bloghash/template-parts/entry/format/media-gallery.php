<?php
/**
 * Template part for displaying gallery format entry.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Bloghash
 * @author      Peregrine Themes
 * @since       1.0.0
 */

/**
 * Do not allow direct script access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( post_password_required() ) {
	return;
}

get_template_part( 'template-parts/entry/format/media' );
