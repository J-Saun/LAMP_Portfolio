<?php

//if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

while ( have_posts() ) {
	the_post();

	global $post, $product;

	if ( ! function_exists( 'siteorigin_north_woocommerce_quick_view_class' ) ) {
		/**
		 * Adds the product-quick-view class to the quick view post.
		 */
		function siteorigin_north_woocommerce_quick_view_class( $classes ) {
			$classes[] = 'product-quick-view';

			return $classes;
		}
	}
	add_filter( 'post_class', 'siteorigin_north_woocommerce_quick_view_class' );

	?>
	<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="product-content-wrapper">
			<div class="product-image-wrapper">

				<?php do_action( 'siteorigin_north_woocommerce_quick_view_images' ); ?>

			</div>

			<div class="product-info-wrapper">

				<span class="quickview-close-icon">X</span>

				<a href="<?php the_permalink(); ?>">
					<?php
					do_action( 'siteorigin_north_woocommerce_quick_view_title' );
	?>
				</a>

				<?php do_action( 'siteorigin_north_woocommerce_quick_view_content' ); ?>

			</div>

		</div>

	</div>

<?php }
