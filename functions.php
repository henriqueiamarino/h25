<?php
/**
 * I’m H25 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package I’m H25
 * @since I’m H25 1.0
 */

if ( ! function_exists( 'im_h25_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since I’m H25 1.0
	 *
	 * @return void
	 */
	function im_h25_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'im-h25' );
	}

endif;

add_action( 'after_setup_theme', 'im_h25_support' );

if ( ! function_exists( 'im_h25_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since I’m H25 1.0
	 *
	 * @return void
	 */
	function im_h25_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'im-h25-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'im-h25-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'im_h25_styles' );

/**
 * Add a random palette class on every page load.
 */
function hventicinque_random_palette( $classes ) {

	$palettes = array(
		'palette-orange',
		'palette-yellow',
		'palette-pink',
		'palette-blue',
	);

	$classes[] = $palettes[ array_rand( $palettes ) ];

	return $classes;
}
add_filter( 'body_class', 'hventicinque_random_palette' );

/**
 * Change default "Select Category" text in Categories dropdown block.
 * Outputs a small inline script in the footer.
 */
function hventicinque_dropdown_label_js() {
	if ( is_admin() ) {
		return;
	}
	?>
	<script>
	(function() {
		function updateCategoryPlaceholder() {
			document.querySelectorAll('.wp-block-categories-dropdown select').forEach(function(select) {
				var first = select.querySelector('option[value="-1"]');
				if (first) {
					first.textContent = 'Read by Category';
				}
			});
		}

		if (document.readyState === 'loading') {
			document.addEventListener('DOMContentLoaded', updateCategoryPlaceholder);
		} else {
			updateCategoryPlaceholder();
		}
	})();
	</script>
	<?php
}
add_action( 'wp_footer', 'hventicinque_dropdown_label_js' );