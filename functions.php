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
 * Add a random palette class on every visit.
 *
 * Runs client-side at wp_body_open so full-page caching can't pin a single
 * palette for every visitor; without JavaScript the default palette applies.
 *
 * @since I’m H25 1.0.2
 *
 * @return void
 */
function im_h25_random_palette_script() {
	?>
	<script>
	( function () {
		var palettes = [ 'palette-orange', 'palette-yellow', 'palette-pink', 'palette-blue' ];
		document.body.classList.add( palettes[ Math.floor( Math.random() * palettes.length ) ] );
	} )();
	</script>
	<?php
}
add_action( 'wp_body_open', 'im_h25_random_palette_script' );

/**
 * Relabel the Categories dropdown placeholder, server-side and translatable.
 *
 * @since I’m H25 1.0.2
 *
 * @param string $block_content Rendered block HTML.
 * @return string
 */
function im_h25_categories_dropdown_label( $block_content ) {
	return str_replace(
		'>' . esc_html__( 'Select Category' ) . '<',
		'>' . esc_html__( 'Read by Category', 'im-h25' ) . '<',
		$block_content
	);
}
add_filter( 'render_block_core/categories', 'im_h25_categories_dropdown_label' );
