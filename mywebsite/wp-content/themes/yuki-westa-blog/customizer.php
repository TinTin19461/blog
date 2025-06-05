<?php
/**
 * Theme customizer options
 *
 * @package Yuki Westa Blog
 */

if ( ! function_exists( 'yuki_westa_blog_return_yes' ) ) {
	function yuki_westa_blog_return_yes() {
		return 'yes';
	}
}

if ( ! function_exists( 'yuki_westa_blog_return_no' ) ) {
	function yuki_westa_blog_return_no() {
		return 'no';
	}
}

if ( ! function_exists( 'yuki_westa_blog_base_100_background' ) ) {
	function yuki_westa_blog_base_100_background() {
		return [
			'type'  => 'color',
			'color' => 'var(--yuki-base-100)',
		];
	}
}

if ( ! function_exists( 'yuki_westa_blog_base_color_background' ) ) {
	function yuki_westa_blog_base_color_background() {
		return [
			'type'  => 'color',
			'color' => 'var(--yuki-base-color)',
		];
	}
}

if ( ! function_exists( 'yuki_westa_blog_border_none' ) ) {
	function yuki_westa_blog_border_none() {
		return [
			'style'   => 'none',
			'width'   => 1,
			'color'   => 'var(--yuki-base-300)',
			'hover'   => '',
			'inherit' => false,
		];
	}
}

//
// Header & footer background
//
add_filter( 'yuki_header_top_bar_row_background_default_value', 'yuki_westa_blog_base_color_background' );
add_filter( 'yuki_header_primary_navbar_row_background_default_value', 'yuki_westa_blog_base_color_background' );
add_filter( 'yuki_header_bottom_row_row_background_default_value', 'yuki_westa_blog_base_color_background' );

add_filter( 'yuki_footer_top_row_background_default_value', 'yuki_westa_blog_base_color_background' );
add_filter( 'yuki_footer_middle_row_background_default_value', 'yuki_westa_blog_base_color_background' );
add_filter( 'yuki_footer_bottom_row_background_default_value', 'yuki_westa_blog_base_color_background' );

//
// Content spacing
//
if ( ! function_exists( 'yuki_westa_blog_content_spacing' ) ) {
	/**
	 * Change default content spacing for homepage and archive
	 *
	 * @return string
	 */
	function yuki_westa_blog_content_spacing() {
		return '24px';
	}
}
add_filter( 'yuki_homepage_content_spacing_default_value', 'yuki_westa_blog_content_spacing' );
add_filter( 'yuki_archive_content_spacing_default_value', 'yuki_westa_blog_content_spacing' );

//
// Canvas area
//
if ( ! function_exists( 'yuki_westa_blog_canvas_drawer_placement' ) ) {
	function yuki_westa_blog_canvas_drawer_placement() {
		return 'left';
	}
}
add_filter( 'yuki_canvas_drawer_placement_default_value', 'yuki_westa_blog_canvas_drawer_placement' );

//
// Icon size
//
if ( ! function_exists( 'yuki_westa_blog_icon_size' ) ) {
	function yuki_westa_blog_icon_size() {
		return '16px';
	}
}
add_filter( 'yuki_header_el_socials_icons_size_default_value', 'yuki_westa_blog_icon_size' );
add_filter( 'yuki_header_el_search_icon_button_size_default_value', 'yuki_westa_blog_icon_size' );
add_filter( 'yuki_header_el_trigger_icon_button_size_default_value', 'yuki_westa_blog_icon_size' );
add_filter( 'yuki_header_el_theme_switch_icon_button_size_default_value', 'yuki_westa_blog_icon_size' );
add_filter( 'yuki_header_el_cart_icon_button_size_default_value', 'yuki_westa_blog_icon_size' );

//
// Header menu element
//
if ( ! function_exists( 'yuki_westa_blog_header_menu_typography' ) ) {
	function yuki_westa_blog_header_menu_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '0.8rem',
			'variant'       => '500',
			'lineHeight'    => '1',
			'textTransform' => 'capitalize',
		];
	}
}
add_filter( 'yuki_header_el_menu_2_top_level_typography_default_value', 'yuki_westa_blog_header_menu_typography' );
add_filter( 'yuki_header_el_menu_1_top_level_typography_default_value', 'yuki_westa_blog_header_menu_typography' );

if ( ! function_exists( 'yuki_westa_blog_header_menu_dropdown_typography' ) ) {
	function yuki_westa_blog_header_menu_dropdown_typography() {
		return [
			'family'     => 'inherit',
			'fontSize'   => '1rem',
			'variant'    => '500',
			'lineHeight' => '1',
		];
	}
}
add_filter( 'yuki_header_el_menu_1_dropdown_typography_default_value', 'yuki_westa_blog_header_menu_dropdown_typography' );

//
// Header socials element
//
if ( ! function_exists( 'yuki_westa_blog_socials_icons_color_type' ) ) {
	function yuki_westa_blog_socials_icons_color_type() {
		return 'custom';
	}
}
add_filter( 'yuki_header_el_socials_icons_color_type_default_value', 'yuki_westa_blog_socials_icons_color_type' );

//
// Header logo element
//

//add_filter( 'yuki_header_el_logo_enable_site_tagline_default_value', 'yuki_westa_blog_return_yes' );

if ( ! function_exists( 'yuki_westa_blog_header_el_logo_content_alignment' ) ) {
	function yuki_westa_blog_header_el_logo_content_alignment() {
		return 'center';
	}
}
add_filter( 'yuki_header_el_logo_content_alignment_default_value', 'yuki_westa_blog_header_el_logo_content_alignment' );

if ( ! function_exists( 'yuki_westa_blog_header_el_logo_position' ) ) {
	function yuki_westa_blog_header_el_logo_position() {
		return 'top';
	}
}
add_filter( 'yuki_header_el_logo_position_default_value', 'yuki_westa_blog_header_el_logo_position' );

if ( ! function_exists( 'yuki_westa_blog_header_el_logo_site_title_typography' ) ) {
	function yuki_westa_blog_header_el_logo_site_title_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '32px',
			'variant'       => '600',
			'lineHeight'    => '1.7',
			'textTransform' => 'uppercase',
		];
	}
}
add_filter( 'yuki_header_el_logo_site_title_typography_default_value', 'yuki_westa_blog_header_el_logo_site_title_typography' );

if ( ! function_exists( 'yuki_westa_blog_header_el_logo_site_tagline_typography' ) ) {
	function yuki_westa_blog_header_el_logo_site_tagline_typography() {
		return [
			'family'     => 'inherit',
			'fontSize'   => '15px',
			'variant'    => '500',
			'lineHeight' => '1.5',
		];
	}
}
add_filter( 'yuki_header_el_logo_site_tagline_typography_default_value', 'yuki_westa_blog_header_el_logo_site_tagline_typography' );

//
// Button element
//
if ( ! function_exists( 'yuki_westa_blog_header_button_label' ) ) {
	function yuki_westa_blog_header_button_label() {
		return __( 'Subscribe', 'yuki-westa-blog' );
	}
}
add_filter( 'yuki_header_el_button_1_label_default_value', 'yuki_westa_blog_header_button_label' );

if ( ! function_exists( 'yuki_westa_blog_button_radius' ) ) {
	function yuki_westa_blog_button_radius() {
		return [
			'linked' => true,
			'left'   => '999px',
			'right'  => '999px',
			'top'    => '999px',
			'bottom' => '999px',
		];
	}
}
add_filter( 'yuki_header_el_button_1_radius_default_value', 'yuki_westa_blog_button_radius' );
add_filter( 'yuki_header_el_button_2_radius_default_value', 'yuki_westa_blog_button_radius' );
add_filter( 'yuki_header_el_button_3_radius_default_value', 'yuki_westa_blog_button_radius' );
add_filter( 'yuki_header_el_button_4_radius_default_value', 'yuki_westa_blog_button_radius' );
add_filter( 'yuki_entry_read_more_radius_default_value', 'yuki_westa_blog_button_radius' );
add_filter( 'yuki_content_buttons_radius_default_value', 'yuki_westa_blog_button_radius' );
add_filter( 'yuki_related_posts_read_more_radius_default_value', 'yuki_westa_blog_button_radius' );

//
// Archive Layout
//
if ( ! function_exists( 'yuki_westa_blog_archive_layout' ) ) {
	function yuki_westa_blog_archive_layout() {
		return 'archive-grid';
	}
}
add_filter( 'yuki_archive_layout_default_value', 'yuki_westa_blog_archive_layout' );

if ( ! function_exists( 'yuki_westa_blog_archive_card_gap' ) ) {
	function yuki_westa_blog_archive_card_gap() {
		return '24px';
	}
}
add_filter( 'yuki_card_gap_default_value', 'yuki_westa_blog_archive_card_gap' );

if ( ! function_exists( 'yuki_westa_blog_archive_entry_tax_style' ) ) {
	function yuki_westa_blog_archive_entry_tax_style() {
		return 'badge';
	}
}
add_filter( 'yuki_entry_tax_style_cats_default_value', 'yuki_westa_blog_archive_entry_tax_style' );

if ( ! function_exists( 'yuki_westa_blog_archive_entry_tax_badge_bg_color' ) ) {
	function yuki_westa_blog_archive_entry_tax_badge_bg_color() {
		return [
			'initial' => 'var(--yuki-primary-color)',
			'hover'   => 'var(--yuki-primary-active)',
		];
	}
}
add_filter( 'yuki_entry_tax_badge_bg_color_cats_default_value', 'yuki_westa_blog_archive_entry_tax_badge_bg_color' );

if ( ! function_exists( 'yuki_westa_blog_archive_header_alignment' ) ) {
	function yuki_westa_blog_archive_header_alignment() {
		return 'center';
	}
}
add_filter( 'yuki_archive_header_alignment_default_value', 'yuki_westa_blog_archive_header_alignment' );

//
// Colors
//

if ( ! function_exists( 'yuki_westa_blog_default_color_scheme' ) ) {
	function yuki_westa_blog_default_color_scheme() {
		return 'dark';
	}
}
add_filter( 'yuki_default_color_scheme_default_value', 'yuki_westa_blog_default_color_scheme' );

if ( ! function_exists( 'yuki_westa_blog_light_color_scheme' ) ) {
	/**
	 * Add light theme color scheme
	 *
	 * @param $palettes
	 *
	 * @return mixed
	 */
	function yuki_westa_blog_light_color_scheme( $palettes ) {
		$palettes = array_merge( [
			[
				'yuki-light-primary-color'  => '#09b0b3',
				'yuki-light-primary-active' => '#09b0b3',
				'yuki-light-accent-color'   => '#676767',
				'yuki-light-accent-active'  => '#3a3a3a',
				'yuki-light-base-300'       => '#c3c3c3',
				'yuki-light-base-200'       => '#dddddd',
				'yuki-light-base-100'       => '#f8f9f8',
				'yuki-light-base-color'     => '#ffffff',
			],
		], $palettes );

		return $palettes;
	}
}
add_filter( 'yuki_light_color_palettes', 'yuki_westa_blog_light_color_scheme' );

if ( ! function_exists( 'yuki_westa_blog_dark_color_scheme' ) ) {
	/**
	 * Add dark theme color scheme
	 *
	 * @param $palettes
	 *
	 * @return mixed
	 */
	function yuki_westa_blog_dark_color_scheme( $palettes ) {
		$palettes = array_merge( [
			[
				'yuki-dark-primary-color'  => '#00fbff',
				'yuki-dark-primary-active' => '#00fbff',
				'yuki-dark-accent-color'   => '#ffffff',
				'yuki-dark-accent-active'  => '#ffffff',
				'yuki-dark-base-300'       => '#ffffff',
				'yuki-dark-base-200'       => '#5b5d5d',
				'yuki-dark-base-100'       => '#11151c',
				'yuki-dark-base-color'     => '#000000',
			],
		], $palettes );

		return $palettes;
	}
}
add_filter( 'yuki_dark_color_palettes', 'yuki_westa_blog_dark_color_scheme' );

//
// Preloader
//
if ( ! function_exists( 'yuki_westa_blog_preloader_colors' ) ) {
	function yuki_westa_blog_preloader_colors() {
		return [
			'background' => 'var(--yuki-base-color)',
			'accent'     => 'var(--yuki-accent-color)',
			'primary'    => 'var(--yuki-primary-color)',
		];
	}
}
add_filter( 'yuki_preloader_colors_default_value', 'yuki_westa_blog_preloader_colors' );

//
// Preloader preset
//
if ( ! function_exists( 'yuki_westa_blog_preloader_preset' ) ) {
	function yuki_westa_blog_preloader_preset() {
		return 'preset-4';
	}
}
add_filter( 'yuki_preloader_preset_default_value', 'yuki_westa_blog_preloader_preset' );

//
// Scroll to top
//

if ( ! function_exists( 'yuki_westa_blog_scroll_to_top_radius' ) ) {
	function yuki_westa_blog_scroll_to_top_radius() {
		return [
			'linked' => true,
			'left'   => '999px',
			'right'  => '999px',
			'top'    => '999px',
			'bottom' => '999px',
		];
	}
}
add_filter( 'yuki_to_top_radius_default_value', 'yuki_westa_blog_scroll_to_top_radius' );

//
// Form style
//
if ( ! function_exists( 'yuki_westa_blog_form_style' ) ) {
	function yuki_westa_blog_form_style() {
		return 'modern';
	}
}
add_filter( 'yuki_content_form_style_default_value', 'yuki_westa_blog_form_style' );

//
// Sticky header
//
add_filter( 'yuki_sticky_header_default_value', 'yuki_westa_blog_return_yes' );

if ( ! function_exists( 'yuki_westa_blog_sticky_rows' ) ) {
	function yuki_westa_blog_sticky_rows() {
		return 'bottom-row';
	}
}
add_filter( 'yuki_sticky_header_rows_default_value', 'yuki_westa_blog_sticky_rows' );
