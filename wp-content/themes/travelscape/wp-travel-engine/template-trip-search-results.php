<?php
use WPTravelEngine\Modules\TripSearch;
/**
 * Trip Results Template.
 */
get_header();
global $post;
$image_id = get_post_thumbnail_id( $post->ID ); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
if ( $image_id ) {			
	$image_url = wp_get_attachment_url($image_id);			
} else {
	$image_url = '';
}		
?>			
	<div class="wte-page-header travescape-wte-page-header"  style="background-image: url('<?php echo esc_url($image_url); ?>');">
		<div class="container">
				<div class="row">													
					<?php echo apply_filters( 'wte-trip-search-page-title', sprintf( '<h1 class="page-title">%1$s</h1>', get_the_title() ) );  ?>
			</div>						
		</div>
	</div>	
	
		<div class="container">
				<div class="row">						
				<div class="page-content">					
						<?php
						$content = apply_filters( 'the_content', $post->post_content );
						echo $content;
						?>					
				</div>					
				<div class="wp-travel-engine-archive-outer-wrap">					
		<?php
			/**
			 * wp_travel_engine_archive_sidebar hook
			 *
			 * @hooked wte_advanced_search_archive_sidebar
			 */
			do_action( 'wp_travel_engine_archive_sidebar' );
		?>
				<div class="wp-travel-engine-archive-repeater-wrap">									
					<?php
						// $view_mode = wp_travel_engine_get_archive_view_mode();
						// $orderby   = isset( $_GET['wte_orderby'] ) && ! empty( $_GET['wte_orderby'] ) ? $_GET['wte_orderby'] : '';
						\Wp_Travel_Engine_Archive_Hooks::archive_filters_sub_options();
					?>
						<div class="wte-category-outer-wrap">
							<?php
							$j          = 1;
							$view_mode  = wp_travel_engine_get_archive_view_mode();
							$classes    = apply_filters( 'wte_advanced_search_trip_results_grid_classes', 'col-2 category-grid' );
							$view_class = 'grid' === $view_mode ? $classes : 'category-list';

							echo '<div class="category-main-wrap ' . esc_attr( $view_class ) . '">';
							$query          = new \WP_Query( TripSearch::get_query_args() );
							$user_wishlists = wptravelengine_user_wishlists();

							while ( $query->have_posts() ) {
								$query->the_post();
								$details                   = wte_get_trip_details( get_the_ID() );
								$details['j']              = $j;
								$details['user_wishlists'] = $user_wishlists;

								wte_get_template( 'content-' . $view_mode . '.php', $details );
								$j++;
							}
								wp_reset_postdata();
							echo '</div>';

							$total_pages = $query->max_num_pages;
							$big         = 999999999; // need an unlikely integer

							if ( $total_pages > 1 ) {
								$current_page = max( 1, get_query_var( 'paged' ) );
								echo '<div class="trip-pagination pagination">';
								echo '<div class="nav-links">';
								echo paginate_links(
									array(
										'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format'             => '?paged=%#%',
										'current'            => $current_page,
										'total'              => $total_pages,
										'prev_text'          => __( 'Previous', 'travelscape' ),
										'next_text'          => __( 'Next', 'travelscape' ),
										'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'travelscape' ) . ' </span>',
									)
								);// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								echo '</div>';
								echo '</div>';
							}
							?>
						</div>
						<div id="loader" style="display: none">
							<div class="table">
								<div class="table-grid">
									<div class="table-cell">
										<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<?php
						$nonce = wp_create_nonce( 'wte_show_ajax_result' );// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
						?>
						<input type="hidden" name="search-nonce" id="search-nonce" value="<?php echo esc_attr( $nonce ); ?>">
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();