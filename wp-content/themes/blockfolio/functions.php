<?php

// ENQUEUE STYLESHEETS
function blockfolio_styles() {

	wp_enqueue_style( 'blockfolio-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'blockfolio' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'blockfolio_styles' );


// ADD EDITOR STYLES
function blockfolio_editor_styles() {

	add_editor_style( get_theme_file_uri( '/style.css' ) );

}
add_action( 'admin_init', 'blockfolio_editor_styles' );


// REGISTER BLOCK PATTERNS
function blockfolio_block_patterns() {
	register_block_pattern_category(
    	'blockfolio-patterns',
	    array( 
	    	'label' => __( 'PATTERNS by BLOCK THEMES PRO', 'blockfolio' )
	    )
	);
}
add_action( 'init', 'blockfolio_block_patterns' );


// REGISTER BLOCK STYLES
function blockfolio_register_block_styles() {
	wp_register_style('blockfolio-block-styles', get_theme_file_uri( '/style.css' ), false);
	register_block_style(
		'core/heading',
		array(
			'name' => 'font-variation-narrow',
			'label' => __('Font Narrow', 'blockfolio')
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name' => 'font-variation-narrow',
			'label' => __('Font Narrow', 'blockfolio')
		)
	);
	register_block_style(
		'core/group',
		array(
			'name' => 'font-variation-narrow',
			'label' => __('Font Narrow', 'blockfolio')
		)
	);
	register_block_style(
		'core/navigation',
		array(
			'name' => 'font-variation-narrow',
			'label' => __('Font Narrow', 'blockfolio')
		)
	);
}
add_action( 'init', 'blockfolio_register_block_styles' );