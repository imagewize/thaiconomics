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
    add_image_size('featured-landscape', 740, 500, true);
    add_image_size('featured-large', 485, 650, true);
    add_image_size('featured-vertical', 388, 525, true);
}
add_action( 'after_setup_theme', 'setup' );

/**
 * Add custom image sizes to the block editor
 * This makes our custom image sizes available in the block editor's image size dropdown
 */
function add_image_sizes_to_block_editor() {
    add_filter('block_editor_settings_all', function($settings) {
        // Define all custom sizes with their display names
        $custom_sizes = [
            'featured-landscape' => __('Featured Landscape', 'moiraine'),
            'featured-large' => __('Featured Large', 'moiraine'),
            'featured-vertical' => __('Featured Vertical', 'moiraine')
        ];
        
        // Add each custom size to the editor settings
        foreach ($custom_sizes as $slug => $name) {
            $settings['imageSizes'][] = [
                'slug' => $slug,
                'name' => $name
            ];
        }
        
        return $settings;
    });
}
add_action('init', 'add_image_sizes_to_block_editor');

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