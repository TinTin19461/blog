<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Blogistic
 */

use Blogistic\CustomizerDefault as BIT;
/**
 * Set up the WordPress core custom header feature.
 *
 * @uses blogistic_header_style()
 */
function blogistic_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'blogistic_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => 'ffffff',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'blogistic_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'blogistic_custom_header_setup' );

if ( ! function_exists( 'blogistic_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see blogistic_custom_header_setup().
	 */
	function blogistic_header_style() {
		$header_text_color = BIT\blogistic_get_customizer_option( 'header_textcolor' );
		$header_hover_textcolor = BIT\blogistic_get_customizer_option( 'site_title_hover_textcolor' );
		$site_description_color = BIT\blogistic_get_customizer_option( 'site_description_color' );

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
			// If the user has set a custom color for the text use that.
		else :
			?>
			.blogistic-light-mode .site-header .site-title a {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
			.blogistic-light-mode .site-header .site-description {
				color: <?php echo esc_attr( $site_description_color ); ?>;
			}
			.blogistic-light-mode .site-header .site-title a:hover {
				color: <?php echo esc_attr( $header_hover_textcolor ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;