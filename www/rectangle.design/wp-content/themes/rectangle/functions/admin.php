<?php

function rectangle_admin_style() {
	wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/build/styles/admin.css?t=' . time());
}
add_action('admin_enqueue_scripts', 'rectangle_admin_style');

function rectangle_after_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_editor_style( array( 'build/styles/editor.css' ) );
}
add_action( 'after_setup_theme', 'rectangle_after_theme_setup' );

function rectangle_admin_menu() {
	remove_menu_page('edit-comments.php'); // comments
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
	remove_meta_box('commentstatusdiv','post','normal'); // Comments Status Metabox
	remove_meta_box('commentsdiv','post','normal'); // Comments Metabox
	remove_meta_box('trackbacksdiv','post','normal'); // Trackback Metabox	
}
add_action('admin_menu', 'rectangle_admin_menu');

function rectangle_remove_revisions_metabox() {
	remove_meta_box( 'revisionsdiv','post','normal' );
	remove_meta_box( 'commentsdiv','post','normal' );
	remove_meta_box( 'revisionsdiv','page','normal' );
	remove_meta_box( 'commentsdiv','page','normal' );
}

add_action('admin_menu','rectangle_remove_revisions_metabox');

function rectangle_remove_post_columns($columns) {
	unset($columns['tags'], $columns['author'], $columns['categories'], $columns['comments']);
	return $columns;
}
add_filter('manage_post_posts_columns', 'rectangle_remove_post_columns');


function rectangle_remove_global_css() {
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
add_action('init', 'rectangle_remove_global_css');

