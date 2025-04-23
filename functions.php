<?php

add_action( 'wp_enqueue_scripts', 'moiraine_child_enqueue_styles' );

/**
 * Enqueue Ollie styles.
 *
 * @return void
 */
function moiraine_child_enqueue_styles(): void {
	wp_enqueue_style( 'moiraine-child-style', get_stylesheet_uri(), array( 'moiraine' ), wp_get_theme()->get( 'Version' ) );
}

/**
 * Include block extensions if file exists
 */
$child_block_extensions = get_stylesheet_directory() . '/inc/block-extensions.php';
if ( file_exists( $child_block_extensions ) ) {
    require $child_block_extensions;
}

/**
 * Setup theme
 */
function setup() {
    // Add custom image size for index page.
    add_image_size('featured-vertical', 350, 525, true);

    // Add the size to WordPress size dropdown
    add_filter('image_size_names_choose', function($sizes) {
        return array_merge($sizes, [
            'featured-vertical' => __('Featured Vertical', 'moiraine')
        ]);
    });
}
add_action( 'after_setup_theme', 'setup' );

/**
 * Add image size to block editor
 */
function add_image_size_to_blocks() {
    add_filter('block_editor_settings_all', function($settings) {
        $settings['imageSizes'][] = [
            'slug' => 'featured-vertical',
            'name' => __('Featured Vertical', 'moiraine')
        ];
        return $settings;
    });
}
add_action('init', 'add_image_size_to_blocks');

/**
 * Enqueue custom block editor assets
 */
function thaiconomics_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'thaiconomics-custom-blocks',
        get_stylesheet_directory_uri() . '/assets/js/custom-blocks.js',
        array('wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-compose', 'wp-hooks'),
        filemtime(get_stylesheet_directory() . '/assets/js/custom-blocks.js'),
        true
    );
}
add_action('enqueue_block_editor_assets', 'thaiconomics_enqueue_block_editor_assets');