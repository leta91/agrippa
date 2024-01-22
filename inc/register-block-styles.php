<?php
/**
 * Block styles.
 *
 * @package agrippa
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function agrippa_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'agrippa-flat-button',
			'label' => __( 'Flat button', 'agrippa' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'agrippa-list-underline',
			'label' => __( 'Underlined list items', 'agrippa' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'agrippa-box-shadow',
			'label' => __( 'Box shadow', 'agrippa' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'agrippa-box-shadow',
			'label' => __( 'Box shadow', 'agrippa' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'agrippa-box-shadow',
			'label' => __( 'Box shadow', 'agrippa' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'agrippa-plus',
			'label' => __( 'Plus & minus', 'agrippa' ),
		)
	);
}
add_action( 'init', 'agrippa_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function agrippa_unregister_block_style() {
	wp_enqueue_script(
		'agrippa-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		AGRIPPA_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'agrippa_unregister_block_style' );
